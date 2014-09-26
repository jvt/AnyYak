<?php

class SearchController extends BaseController {

	public function index()
	{
		/**
		 * Retrieve the lat/long for a given zip code
		 */

		$zipURL = 'http://ziplocate.us/api/v1/'.$_GET['zip'];
		$latLongRaw = @file_get_contents($zipURL);
		if ($latLongRaw === false) {
			return Redirect::back()->with('error_message', 'A town with that zip code couldn\'t be found.');
		}
		$latLong = get_object_vars(json_decode($latLongRaw));

		$baseURL = "https://yikyakapp.com";

		/**
		 * Format for the UserID
		 * All 0's will be replaced by a random character in the array below it
		 */
		$userIDFormat = "00000000-0000-0000-0000-000000000000";
		$characters = [ "A", "B", "C", "D", "E", "F", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9" ];

		/**
		 * Generate a fake UserID for each request
		 */
		for ($i = 0; $i < strlen($userIDFormat); $i++) {

			if ($userIDFormat[$i] === "0") {
				$randomIndex = rand(0, sizeof($characters)-1);
				$userIDFormat[$i] = $characters[$randomIndex];
			}
		}

		/**
		 * Generate the string for the request w/o hash
		 */
		$message = $baseURL."/api/getMessages?userID=".$userIDFormat."&lat=".$latLong['lat']."&long=".$latLong['lng']."&salt=".time();
		
		/**
		 * Key being used to generate hashes
		 */
		$key = "6D500434-A9BD-46BD-9A0E-10D183570ACB";
		$hash = base64_encode(hash_hmac("sha1", $message, $key, true));

		/**
		 * Append hash to the URL request
		 */
		$final = $message."&hash=".$hash;

		/**
		 * Make request
		 */
		$yakRaw = @file_get_contents($final);
		if ($yakRaw === false) {
			return Redirect::back()->with('error_message', 'We couldn\'t find any Yaks in that town. Sorry :(');
		}
		$yak = get_object_vars(json_decode($yakRaw));

		if ($yak && sizeof($yak["messages"]) > 0) {
			return View::make('search.index')->with('zipCode', $_GET['zip'])->withYaks($yak);
		} else {
			return Redirect::back()->with('error_message', 'We couldn\'t find any Yaks in that town. Sorry :(');
		}

	}

}