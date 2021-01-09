<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseAnalysis;

class CaseAnalysisController extends Controller
{
	public function Case_Analysis()
	{
		return CaseAnalysis::get();
	}
}
