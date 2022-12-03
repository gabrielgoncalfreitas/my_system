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
        $field    = $request->field_data;

        $view = view("manage-forms.components.new-field", compact([
            'id', 'form_id', 'field'
        ]))->render();

        return response()->json($view, 200);
        return response()->json([''], 200);
    }
}
