<div class="header-hotels-wrapper  row">
<div class="row header-portadilla">
    <h1> <?php print t('Hotels in Colombia'); ?> </h1>
    <h2>
      <?php print t('We have the lowest price ¡Guaranteed!'); ?>
    </h2>
</div>

<div class="row">
  <div class="paragraph-hotels eigth columns">
    <?php print t('Enjoy our selection of the best hotels for all the destinations we offer in Colombia. These places range from typical and authentic accommodation to the finest luxury hotels. Find your future host to make your trip an amazing experience in Colombia.  Fancy a swimming pool, a coffee hacienda, a colonial hotel… Select a hotel and see photos, a short description, its location and the different services you will be offered.'); ?>
  </div>

  <div class="four columns">
    <div class="row">
      <?php
        $block = module_invoke('easy_social', 'block_view', 'easy_social_block_1');
        print render($block['content']);
      ?>
    </div>
    <div class="statistics-wrapper row">
      <?php
        $hotel_statistics =
          module_invoke('aventure_portadillas', 'block_view', 'hotel_statistics');
        print render($hotel_statistics['content']);
      ?>
    </div>
  </div>
</div>

<div ng-app="hotelApp">
  <div ng-controller="mainHotelController" class="controlles_hotels">
    <div class="content_select row">
    <div class="twelve columns">
    <div> <?php print t('Filter for') . ':' ?> </div>
      <select ng-model="placeModel" name="placeField">
        <option value=""> <?php print t('Destiny'); ?> </option>
        <option ng-repeat="obj in places" value="{{obj.tid}}">
          {{obj.name}}
        </option>
      </select>
      <select ng-model="activityModel">
        <option value=""> <?php print t('Type of accommodation'); ?> </option>
        <option ng-repeat="obj in activities" value="{{obj.tid}}">
          {{obj.name}}
        </option>
      </select>
      <div class="votes_portadilla">
      <slider floor="1" ceiling="10" step="1" ng-model-low="votoInicial" ng-model-high="votoFinal"></slider>
      <div id="vote-range-selector"> <?php print t('Votes'); ?> </div>
    </div>
    <div class="price_portadilla">
      <slider floor="0" ceiling="500" step="50" ng-model-low="precioInicial" ng-model-high="precioFinal"></slider>
      <div id="range-selector"> <?php print t('Price'); ?> </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="twelve columns">
    <ul class="list_hotels_portadilla">
      <li ng-repeat="hotel in
        hotels|filter:greatThanNum|filter:lessThanNum|filter:filterPlace|filter:filterActivity|filter:filterVoteLessThan|filter:filterVoteMoreThan"
        class="each-hotel-result">
        <img src="{{ hotel.field_path_image_cache_271x182_value }}">
        <div class="name_pack">
          <div class="title"> {{ hotel.title }} </div>
          <div class="place"> {{ hotel.name }}, Colombia </div>
        </div>
        <div class="up-effect-hotel">
          <div class="stars-by-hotel">
            <ul class="calificacion">
              <li ng-repeat="stars in starsByHotel[hotel.nid]">
                <span class="stars-active"> </span>
              </li>
            </ul>
          </div>
          <span class="hotel-link-wrapper">
            <a href="node/{{ hotel.nid }}"> Hotel </a>
         </span>
       </div>
        <div class="text_itro"> <p>
          {{ hotel.field_paq_texto_introductorio_value }} </p>
        </div>
      </li>
    </ul>
    </div>
    </div>
  </div>
</div>

<div class="row"><div class="twelve columnns">
  <?php
    $suscription_form = module_invoke('aventure_mail_suscription',
      'block_view', 'suscription_form');
    print render($suscription_form['content']);
  ?>
</div></div>
</div>
