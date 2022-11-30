<?php

namespace App\Http\Controllers\Forms\ManageForms;

use App\Http\Controllers\Controller;
use App\Models\Forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function index(Request $request)
    {
        $forms = Forms::all()->sortBy('id');
        $alert = $request->session()->pull('manage-forms.alert');

        return view('manage-forms.index', compact([
            'forms', 'alert'
        ]));
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

        $request->session()->put('manage-forms.alert', 'created');

        return redirect(route('manage-forms.edit', Forms::all()->sortByDesc('id')->first()->id));
    }

    public function update($id, Request $request, Forms $forms)
    {
        // \Log::info($request->json);
        // return redirect(route('manage-forms.edit', $id));
        // $rules     = $this->rules();
        // $messages  = $this->messages();
        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {
        //     return view('manage-forms.edit', [
        //         'errors'          => $validator->errors()->all(),
        //         'old_title'       => $request->title        ?? '',
        //         'old_instruction' => $request->instruction  ?? '',
        //         'old_footer'      => $request->footer       ?? '',
        //     ]);
        // }

        $forms->where('id', $id)->update([
            'details' => $request->json['details'] ?? '[""]',
            'fields' => $request->json['fields'] ?? '[""]'
        ]);

        $request->session()->put('manage-forms.alert', 'edited');

        return redirect(route('manage-forms.edit', $id));
    }

    public function edit($id, Request $request)
    {
        $forms = Forms::where('id', $id)->get()->first();
        $alert = $request->session()->pull('manage-forms.alert');

        if (!empty(Forms::find($id))) {
            return view('manage-forms.edit', compact([
                'id', 'forms', 'alert'
            ]));
        } else {
            return redirect(route('manage-forms.index'));
        }
    }

    public function delete($id, Request $request)
    {
        if (!empty(Forms::find($id))) Forms::where('id', $id)->delete();

        $request->session()->put('manage-forms.alert', 'deleted');

        return redirect(route('manage-forms.index'));
    }
}
