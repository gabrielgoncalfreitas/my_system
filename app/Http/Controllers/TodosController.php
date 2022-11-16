<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index', ['todos' => Todo::all()->sortBy('completed')]);
    }

    public function view($id)
    {
        return view('todos.view', ['todos' => Todo::find($id)]);
    }

    public function complete($id, $returnToView = false)
    {
        Todo::find($id)->update(['completed' => true]);

        if ($returnToView) {
            return redirect(route('todos.view', $id));
        } else {
            return redirect(route('todos.index'));
        }
    }

    public function incomplete($id, $returnToView = false)
    {
        Todo::find($id)->update(['completed' => false]);

        if ($returnToView) {
            return redirect(route('todos.view', $id));
        } else {
            return redirect(route('todos.index'));
        }
    }

    public function delete($id)
    {
        Todo::find($id)->delete();

        return redirect(route('todos.index'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name'        => 'required|max:255',
            'description' => 'required'
        ];

        $messages = [
            'name.required'        => 'Name field is required!',
            'name.max'             => 'Name field max characters is 255',
            'description.required' => 'Description field is required!'
        ];

        $validate = Validator::make($request->all(), $rules, $messages);

        $errors = $validate->errors()->all();

        $oldName        = $request->name;
        $oldDescription = $request->description;

        if ($validate->fails()) {
            return view('todos.create')->with([
                'errors' => $errors,
                'oldName' => $oldName,
                'oldDescription' => $oldDescription
            ]);
        }

        $todo = new Todo();

        $todo->name        = $request->name;
        $todo->description = $request->description;

        $todo->save();

        $todos = Todo::all()->sortByDesc('id')->first();
        $id = $todos->id;

        return redirect(route('todos.index'));
    }

    public function edit($id)
    {
        return view('todos.edit', ['todos' => Todo::where('id', $id)->get()]);
    }

    public function update($id, Request $request)
    {
        $rules = [
            'name'        => 'required|max:255',
            'description' => 'required'
        ];

        $messages = [
            'name.required'        => 'Name field is required!',
            'name.max'             => 'Name field max characters is 255',
            'description.required' => 'Description field is required!'
        ];

        $validate = Validator::make($request->all(), $rules, $messages);

        $errors = $validate->errors()->all();

        $oldName        = $request->name;
        $oldDescription = $request->description;

        if ($validate->fails()) {
            return view('todos.edit')->with([
                'errors' => $errors,
                'oldName' => $oldName,
                'oldDescription' => $oldDescription
            ]);
        }

        Todo::where('id', $id)->update([
            'name'        => $request->name,
            'description' => $request->description
        ]);

        $todos = Todo::all()->sortByDesc('id')->first();
        $id = $todos->id;

        return redirect(route('todos.view', $id));
    }
}
