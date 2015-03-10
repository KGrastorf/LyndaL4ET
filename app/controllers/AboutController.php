<?php

class AboutController extends BaseController {

	public function showAbout()
	{
		return 'ABOUT content';
	}

	public function showSubject($theSubject)
	{
		return $theSubject . ' content';
	}

	public function showDirections()
	{
		$theURL = URL::route('directions');
		return "DIRECTONS go to this URL: $theURL";
	}
}