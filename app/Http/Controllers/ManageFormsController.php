<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use OCILob;

class ManageFormsController extends Controller
{
    private function rules()
    {
        return [
            'details.title'       => 'required|max:255',
            'details.instruction' => 'required|max:64000',
            'details.footer'      => 'required|max:64000',
        ];
    }

    private function messages()
    {
        return [
            'details.title.required'       => 'Title is required!',
            'details.title.max'            => 'Title maximum characters is 255!',
            'details.instruction.required' => 'Instruction is required!',
            'details.instruction.max'      => 'Instruction maximum characters is 64000!',
            'details.footer.required'      => 'Footer is required!',
            'details.footer.max'           => 'Footer maximum characters is 64000!',
        ];
    }

    public function index()
    {
        return view('manage-forms.index', [
            'forms' => Forms::all()->sortBy('id')
        ]);
    }

    public function create()
    {
        return view('manage-forms.create');
    }

    public function store(Request $request, Forms $forms)
    {
        $rules     = $this->rules();
        $messages  = $this->messages();
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return view('manage-forms.create', [
                'errors'          => $validator->errors()->all(),
                'old_title'       => $request->title       ?? '',
                'old_instruction' => $request->instruction ?? '',
                'old_footer'      => $request->footer      ?? '',
            ]);
        }

        $forms->details = json_encode($request->details);
        $forms->save();

        return redirect(route('manage-forms.edit', [
            Forms::all()->sortByDesc('id')->first()->id, 1
        ]));
    }

    public function update($id, Request $request, Forms $forms)
    {
        $rules     = $this->rules();
        $messages  = $this->messages();
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return view('manage-forms.edit', [
                'errors'          => $validator->errors()->all(),
                'old_title'       => $request->title        ?? '',
                'old_instruction' => $request->instruction  ?? '',
                'old_footer'      => $request->footer       ?? '',
            ]);
        }

        $forms->where('id', $id)->update(['details' => json_encode($request->details)]);

        return redirect(route('manage-forms.edit', [
            $id, 2
        ]));
    }

    public function edit($id, $code_message = null)
    {
        if (!empty(Forms::find($id))) {
            return view('manage-forms.edit', [
                'id'           => $id,
                'forms'        => Forms::where('id', $id)->get()->first(),
                'code_message' => $code_message,
            ]);
        } else {
            return redirect(route('manage-forms.index'));
        }
    }
}
