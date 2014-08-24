<?php

class SearchController extends BaseController {

	public function index()
	{
		// Get latitude/longitude for a given zipcode
		$zipCode = Input::get('zip');
		$zipURL = 'http://ziplocate.us/api/v1/'.$zipCode;
		$latLongRaw = @file_get_contents($zipURL);
		if ($latLongRaw === false) {
			return Redirect::back()->with('error_message', 'A town with that zip code couldn\'t be found.');
		}
		$latLong = get_object_vars(json_decode($latLongRaw));

		$yakRaw = @file_get_contents("https://yikyakapp.com/api/getMessages?userID=83A44BFA-3612-49A6-9F2A-2579DF651918&lat=".$latLong['lat']."&long=".$latLong['lng']."&salt=1408824890&hash=zx69ssqOtLaqpZ%2B3ARWZoyxATh0%3D");
		if ($yakRaw === false) {
			return Redirect::back()->with('error_message', 'We couldn\'t find any Yaks in that town. Sorry :(');
		}
		$yak = get_object_vars(json_decode($yakRaw));

		if ($yak && sizeof($yak["messages"]) > 0) {
			return View::make('search.index')->with('zipCode', $zipCode)->withYaks($yak);
		} else {
			return Redirect::back()->with('error_message', 'We couldn\'t find any Yaks in that town. Sorry :(');
		}

	}

}