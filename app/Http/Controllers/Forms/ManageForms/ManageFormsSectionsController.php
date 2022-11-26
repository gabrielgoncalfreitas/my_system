<?php

namespace App\Http\Controllers\Forms\ManageForms;

use App\Http\Controllers\Controller;
use App\Models\Genders;
use Illuminate\Http\Request;

class ManageFormsSectionsController extends Controller
{
    public function field(Request $request)
    {
        $field_id_on_section = "field-id-on-section-$request->section_fields_amount";

        $view = view("manage-forms.components.fields." . $request->type_of_field, [
            'field_id_on_section' => $field_id_on_section
        ])->render();

        return response()->json($view, 200);
    }
}
