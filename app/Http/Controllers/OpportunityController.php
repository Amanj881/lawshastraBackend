<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opportunity;

class OpportunityController extends Controller
{
   	public function Opportunities()
   	{
   		return Opportunity::orderBy('id','ASC')->get();
   	}
}
