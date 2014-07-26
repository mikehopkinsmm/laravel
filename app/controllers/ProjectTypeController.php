<?php
class ProjectTypeController extends BaseController {
	function parseProject($type = 'all'){
		$title = DB::table('section_titles')->where('reference_name', $type)->orderBy('id', 'desc')->first();
		if($title == null){
			App::abort(404, 'Project type not found.');
		}else{
			$heading = $title->display_name;
			if($type == "all"){
				$rs = DB::table('portfolio_items')->where('active','1')->orderBy('id', 'desc')->get();
			}else{
				$rs = DB::table('portfolio_items')->where('active','1')->where('type', $type)->orderBy('id', 'desc')->get();
			}
			return View::make('project.projectType')->with('heading', $heading)->with('rs', $rs);
		}
	}
}