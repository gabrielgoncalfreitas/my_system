<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'cpf',
        'rg',
        'cep',
        'address',
        'city',
        'state',
        'country',
        'titles',
        'genders',
        // 'sector',
        // 'office',
        // 'status',
        'date_of_birth',
        // 'languages',
        // 'religions',
        // 'sexual_orientations',
        'hiring_date',
        'firing_date',
    ];
}
