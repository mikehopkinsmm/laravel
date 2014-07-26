<?php
class ArchiveController extends BaseController {
	function archive(){
		if(Auth::check() || Auth::viaRemember()){
			$rs = DB::table('portfolio_items')->where('active','0')->orderBy('id', 'desc')->get();
			return View::make('project.archive')->with('rs', $rs);			
		}else{
			App::abort(404, 'Project type not found.');
		}
	}
}