<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function study_materials()
    {
    	return Material::get(); 	
    }
}

