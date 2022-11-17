<?php

namespace App\Http\Controllers\Forms\ManageForms;

use App\Http\Controllers\Controller;
use App\Models\Genders;
use Illuminate\Http\Request;

class ManageFormsSectionsController extends Controller
{
    public function field($type_of_field)
    {
        $view = view("manage-forms.components.offcanvas.fields.$type_of_field")->render();
        
        return response()->json($view, 200);
    }
}
