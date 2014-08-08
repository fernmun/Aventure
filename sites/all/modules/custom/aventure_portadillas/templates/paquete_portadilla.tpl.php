<div class="row">
  <div class="titles header-portadilla">
    <h1> <?php print t('Travel to Colombia. Packages since 45 €'); ?> </h1>
    <h2> <?php print t('Find inspiration for your next travel to Colombia'); ?> </h2>
  </div>
</div>

<div class="middle-content-packages row">
  <div class="text-intro-testimonies">
      <?php
        print t('Colombia offers wonderful scenery for all tastes. Adventure in the Amazon, relaxing on the Caribbean coast, typical in the coffee region, cultural with the pre-Columbian statues in the south, unique on the river of five colors, animal with whales in the Pacific and many other sensations. You only have to choose from the endless variety of local color. The warmth and joie de vivre of the Colombian people await you. Discover our routes and begin an unforgettable journey.');
      ?>
  </div>
  <div class="six columns">
  <div class="row">
  <div class="six columns">
    <div class="social-block">
      <?php
        $block = module_invoke('easy_social', 'block_view', 'easy_social_block_1');
        print render($block['content']);
      ?>
    </div>
    </div>
  </div>
  <div class="row">
  <div class="six columns">
  <div class="packages_icon_navi">
    <div class="list-view"> <div class="str-title"> list </div>  <span class="fondo"> </span> </div>
    <div class="mini-view"> <div class="str-title"> Mini </div>  <span class="fondo"> </span> </div>
  </div>
  </div>
  </div>
  </div>
</div>

<div ng-app="packageApp">
  <div ng-controller="mainController">
  <div class="row">
   <div class="content_select twelve columns">
    <div class="price_portadilla">
      <slider floor="10" ceiling="1000" step="50" ng-model-low="precioInicial" ng-model-high="precioFinal"></slider>
      <div id="range-selector"> <?php print t('Price'); ?> </div>
    </div>
    <div class="filters-options">
      <select ng-model="placeModel" name="placeField">
        <option value=""> <?php print t('Destiny'); ?> </option>
        <option ng-repeat="obj in places" value="{{obj.tid}}">{{obj.name}}</option>
      </select>
      <select ng-model="travelTypeModel">
        <option value=""> <?php print t('Interests'); ?> </option>
        <option ng-repeat="obj in travelTypes" value="{{obj.tid}}">{{obj.name}}</option>
      </select>
      <select ng-model="partnerModel">
        <option value=""> <?php print t('Who you travel with?'); ?></option>
        <option ng-repeat="obj in partners" value="{{obj.tid}}">{{obj.name}}</option>
      </select>
      <select ng-model="activityModel">
        <option value=""> <?php print t('Activities'); ?> </option>
        <option ng-repeat="obj in activities" value="{{obj.tid}}">{{obj.name}}</option>
      </select>
    </div>
   </div>
   </div>
   <div class="row">
   <div class="twelve columns">
    <ul class="list_portadilla">
      <li ng-repeat="package in
        packages|filter:greatThanNum|filter:lessThanNum|filter:filterPlace|filter:filterTravelType|filter:filterPartner|filter:filterActivity">
        <img src="{{ package.field_path_image_cache_271x182_value }}">
        <div class="title"> {{ package.title }} </div>
        <div class="text_itro">
          <div class="description-intro">
            {{ package.field_paq_texto_introductorio_value }}
          </div>
          <div class="sub-text-intro">
            <ul>
            <li>
              <?php print t('Ideal for:'); ?>
                <span ng-repeat="td in package.field_con_quien_se_puede_viajar_tid">
                  {{associativePartners[td]}}
                </span>
            </li>
            <li>
              <?php print t('who enjoy activities such as:'); ?>
                <span ng-repeat="td in package.field_actividades_tid">
                  {{associativeActivities[td]}}
                </span>
            </li>
            </ul>
          </div>
        </div>
        <div class="price-wrapper">
          <span class="price-subtitle"> <?php print t('From'); ?> ... </span>
          <div class="preci"> {{ package.field_paquete_precio_value }} USD</div>
          <div class="see-node"> <a href="node/{{package.nid}}"> <?php print t('SEE DETAILS'); ?> </a> </div>
        </div>
        <div class="duracion"> {{ package.field_paquete_duracion_value }} </div>
      </li>
    </ul>
    </div>
    </div>


    <div class="row">
   <div class="twelve columns">
    <ul class="mini_portadilla_package">
      <li ng-repeat="package in
        packages|filter:greatThanNum|filter:lessThanNum|filter:filterPlace|filter:filterTravelType|filter:filterPartner|filter:filterActivity">
        <img src="{{ package.field_path_image_cache_271x182_value }}">

        <div class="mini_portadilla_titles_wrapper">
        <div class="title_mini_stay_wrapper">
          <div class="title"> {{ package.title }} </div>
          <div class="mini_stay_wrapper">
          <div class="price-wrapper">
            <span class="price-subtitle"> <?php print t('From'); ?></span>
            <div class="preci"> {{ package.field_paquete_precio_value }} USD</div>
            <span class="price-duratino-separator"> / </span>
          </div>
          <div class="duracion"> {{ package.field_paquete_duracion_value }} </div>
          </div>
                </div>
  <div class="text_itro">
          <div class="description-intro">
            {{ package.field_paq_texto_introductorio_value | limitTo:110 }}
          </div>
        </div>

        </div>

        <div class="see-node"> <a href="node/{{package.nid}}"> <?php print t('SEE DETAILS'); ?> </a> </div>
      </li>
    </ul>
    </div>
    </div>



  </div>
</div>

<div class="row">
<div class="twelve columns">
<?php
  $suscription_form =
    module_invoke('aventure_mail_suscription', 'block_view', 'suscription_form');
  print render($suscription_form['content']);
?>
</div>
</div>

<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('.mini-view').click(function(){
      jQuery('.mini_portadilla_package').show();
      jQuery('.list_portadilla').hide();
    });

    jQuery('.list-view').click(function(){
      jQuery('.list_portadilla').show();
      jQuery('.mini_portadilla_package').hide();
    });

  });
</script>
