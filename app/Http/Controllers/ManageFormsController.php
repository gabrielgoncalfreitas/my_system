<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManageFormsController extends Controller
{
    public function index()
    {
        return view('manage-forms.index');
    }

    public function create()
    {
        return view('manage-forms.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title'       => 'required|max:2',
            'instruction' => 'required|max:2',
            'footer'      => 'required|max:2',
        ];

        $messages = [
            'title.required'       => 'Title is required!',
            'title.max'            => 'Title maximum characters is 255!',
            'instruction.required' => 'Instruction is required!',
            'instruction.max'      => 'Instruction maximum characters is 64000!',
            'footer.required'      => 'Footer is required!',
            'footer.max'           => 'Footer maximum characters is 64000!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return view('manage-forms.create', [
                'errors'          => $validator->errors()->all(),
                'old_title'       => $request->title ?? '',
                'old_instruction' => $request->instruction ?? '',
                'old_footer'      => $request->footer ?? '',
            ]);
        }
    }
}
