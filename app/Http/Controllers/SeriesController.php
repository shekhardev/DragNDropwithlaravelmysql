<?php

namespace App\Http\Controllers;

use App\Series;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateSeriesFormRequest;

class SeriesController extends Controller
{
    public function edit(Series $series){
    	// authorize
    	$series->load('parts');
    	return view('series.edit',compact('series'));
    }
    public function update(UpdateSeriesFormRequest $request, Series $series){
    	// override the data
    	$series->title = $request->title;
    	$series->save();

    	
    	$series->parts->each(function($part,$index) use ($request){
    		// to disable updated at time stamp
    		//$part->timestamp = false;
    		$part->update(array_only($request->parts[$index],['title','sort_order']));
    	});
    }
}
