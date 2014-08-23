<?php

class SearchController extends BaseController {

	public function index()
	{
		$zipCode = Input::only('zip');

		// $latLong = json_decode(file_get_contents('http://ziplocate.us/api/v1/'.$zipCode));

		// Offline testing only, NOT FOR PRODUCTION
		$latLong = array('lat' => 40.6637728307175, 'long' => -73.6379879280965, 'zip' => '11570');

		

	}

}