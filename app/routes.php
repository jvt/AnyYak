<?php

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::post('search', ['uses' => 'SearchController@index', 'as' => 'search.index']);

Route::get('temp', function() {
	return json_encode('{"messages":[{"deliveryID":500, "messageID":11927682, "message":"Why is school 10 months and summer two? Who calculated that :(", "latitude":40.64, "longitude":-73.68, "time":"2014-08-22 10:21:36", "numberOfLikes":"2", "type":"0", "comments":"0", "posterID":"00000000-0000-0000-0000-000000000000", "handle":null, "hidePin":"1", "liked":"0", "reyaked":"1"}, {"deliveryID":499, "messageID":11928089, "message":"When yik yak can\'t retrieve your yak<<<<<<<<", "latitude":40.67, "longitude":-73.63, "time":"2014-08-22 10:18:12", "numberOfLikes":"2", "type":"0", "comments":"0", "posterID":"00000000-0000-0000-0000-000000000000", "handle":null, "hidePin":"1", "liked":"0", "reyaked":"1"} ] }');
});