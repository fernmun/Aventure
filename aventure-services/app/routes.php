<?php

Route::group(array('prefix' => 'api/v1/{language}'), function()
{
    Route::get('packages', 'NodeController@allNodes');
    Route::get('hotels', 'NodeController@allHotels');
    Route::get('places', 'TaxonomiaController@places');
    Route::get('travel_type', 'TaxonomiaController@travelType');
    Route::get('partners', 'TaxonomiaController@partners');
    Route::get('activities', 'TaxonomiaController@activities');
    Route::get('hotel_type', 'TaxonomiaController@hotelType');
});

Route::get('hola', function(){
  return hola;
});
