<?php

class ProjectController extends BaseController
{

function project($type,$short_name){
	
$item = DB::table('portfolio_items')->where('short_name',$short_name)->first();
$passCheck = false;
		if(($item->active == '0' && Auth::check() == true) || $item->active == '1'){
			$passCheck = true;
		}else if($item == null || $item->active == '0'){
			$passCheck = false;
		}
		if($passCheck){
			$title = DB::table('section_titles')->where('reference_name', $item->type)->orderBy('id', 'desc')->first();
			return View::make('project.project')->with('item', $item)->with('title', $title);
		}else{
			App::abort(404, 'Project not found.');
		}
	}
}