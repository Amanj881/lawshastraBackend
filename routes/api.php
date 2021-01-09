<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\CaseAnalysisController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clear',function(){
	$run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        return 'FINISHED'; 
})
Route::get('/blogs',[BlogController::class,'blogs'])->name('blogs');
Route::get('/opportunities',[OpportunityController::class,'Opportunities'])->name('opportunities');
Route::get('/notes',[MaterialController::class,'study_materials'])->name('notes');
Route::get('/case_analysis',[CaseAnalysisController::class,'Case_Analysis'])->name('case_analysis');
