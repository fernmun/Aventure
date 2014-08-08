<?php

class TaxonomiaController extends BaseController {
  public function places()
  {
    $vid = 2;
    $places = Taxonomia::where('vid', '=', $vid)
    ->get(array('tid', 'name'));
    return $places;
  }

  public function activities($language)
  {
    $vid = 4;
    $travels = Taxonomia::where('vid', '=', $vid)
      ->where('language', $language)
      ->get(array('tid', 'name'));
    return $travels;
  }

  public function travelType($language)
  {
    $vid = 7;
    $travels = Taxonomia::where('vid', '=', $vid)
      ->where('language', $language)
      ->get(array('tid', 'name'));
    return $travels;
  }

  public function partners($language)
  {
    $vid = 8;
    $partners = Taxonomia::where('vid', '=', $vid)
    ->where('language', $language)
    ->get(array('tid', 'name'));
    return $partners;
  }

  public function hotelType($language)
  {
    $vid = 10;
    $hotelTypes = Taxonomia::where('vid', '=', $vid)
    ->where('language', $language)
    ->get(array('tid', 'name'));
    return $hotelTypes;
  }

  public function placesMultiple() {
      $vid = 2;
      $places = Taxonomia::where('vid', '=', $vid)
          //->where('language', $language)
          ->get(array('tid', 'name'));
      return $places;
  }
}
