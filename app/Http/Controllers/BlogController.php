<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function blogs()
    {
    	return Blog::orderBy('id','ASC')->get();
    }

}
