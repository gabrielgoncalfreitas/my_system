<?php

namespace App\Http\Controllers\Forms\ManageForms;

use App\Http\Controllers\Controller;
use App\Models\Genders;
use Illuminate\Http\Request;

class ManageFormsSectionsController extends Controller
{
    public function field(Request $request)
    {
        $id      = $request->section_fields_next_id;
        $form_id = $request->form_id;
        $type    = $request->type_of_field;

        $view = view("manage-forms.components.new-field", compact([
            'id', 'form_id', 'type'
        ]))->render();

        return response()->json($view, 200);
    }
}
