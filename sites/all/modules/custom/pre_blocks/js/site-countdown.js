(function ($) {
  Drupal.pre_blocks = Drupal.pre_blocks || {};
  Drupal.pre_blocks.site_countdown = {};
  Drupal.pre_blocks.site_countdown.setTimerObject = function(secs) {
    var time_left = secs;
    original_time =  time_left;
    days = Math.floor(time_left / 86400);
    if (days > 0) {
      time_left -= (days * 86400);
    }
    hours = Math.floor(time_left / 3600);
    if (hours > 0) {
      time_left -= (hours * 3600);
    }
    minutes = Math.floor(time_left / 60);
    if (minutes > 0) {
      time_left -= (minutes * 60);
    }
    seconds = time_left;
    Drupal.pre_blocks.site_countdown.timerObject = {
      "days": days,
      "hours" : hours,
      "minutes" : minutes,
      "seconds" : seconds
    };
  };
  Drupal.pre_blocks.site_countdown.drawTimer = function() {
    var current_seconds = Drupal.pre_blocks.site_countdown.timerObject.seconds;
    var current_minutes = Drupal.pre_blocks.site_countdown.timerObject.minutes;
    var current_hours = Drupal.pre_blocks.site_countdown.timerObject.hours;
    var current_days = Drupal.formatPlural(Drupal.pre_blocks.site_countdown.timerObject.days, Drupal.t('1'), Drupal.t('@count'));
    $(".tfpc-days").html(current_days);
    $(".tfpc-hours").html(((current_hours < 10) ? "0" + current_hours : current_hours));
    $(".tfpc-minutes").html(((current_minutes < 10) ? "0" + current_minutes : current_minutes));
    $(".tfpc-seconds").html(((current_seconds < 10) ? "0" + current_seconds : current_seconds));
  };
  Drupal.pre_blocks.site_countdown.countdown = function() {
    var current_seconds = Drupal.pre_blocks.site_countdown.timerObject.seconds;
    var current_minutes = Drupal.pre_blocks.site_countdown.timerObject.minutes;
    var current_hours = Drupal.pre_blocks.site_countdown.timerObject.hours;
    var current_days = Drupal.pre_blocks.site_countdown.timerObject.days;
    if ((current_seconds == 0) && (current_minutes == 0) && (current_hours == 0) && (current_days == 0)) {
      window.document.location.reload(true);
    }
    else {
      var new_seconds = 0;
      var new_minutes = 0;
      var new_hours = 0;
      var new_days = 0;
      if (current_seconds > 0) {
        new_seconds = current_seconds - 1;
        new_minutes = current_minutes;
        new_hours = current_hours;
        new_days = current_days;
      }
      else {
        new_seconds = 59;
        if(current_minutes > 0) {
          new_minutes = current_minutes - 1;
          new_hours = current_hours;
          new_days = current_days;
        }
        else {
          new_minutes = 59;
          if(current_hours > 0) {
            new_hours = current_hours - 1;
            new_days = current_days;
          }
          else {
            new_hours = 23;
            if(current_days > 0) {
              new_days = current_days - 1;
            }
            else {
              new_days = current_days;
            }
          }
        }
      }
      Drupal.pre_blocks.site_countdown.timerObject.days = new_days;
      Drupal.pre_blocks.site_countdown.timerObject.hours = new_hours;
      Drupal.pre_blocks.site_countdown.timerObject.minutes = new_minutes;
      Drupal.pre_blocks.site_countdown.timerObject.seconds = new_seconds;
      Drupal.pre_blocks.site_countdown.drawTimer();
      setTimeout(function() {
        Drupal.pre_blocks.site_countdown.countdown();
      }, 1000);
    }
  };
  Drupal.pre_blocks.site_countdown.kickstartTimer = function(timeInfo, context) {
    var date_time = timeInfo.datetime;
    var event_time = Drupal.settings.pre_blocks.configuration.event_time;
    var calc_time = event_time - date_time;
    if (calc_time) {
      if($.browser.msie && $.browser.version == 8.0) {
        $('#countdown-container', context).append('<div class="tfpc-days"></div><div class="tfpc-hours"></div><div class="tfpc-minutes"></div><div class="tfpc-seconds"></div>');
        Drupal.pre_blocks.site_countdown.setTimerObject(calc_time);
        Drupal.pre_blocks.site_countdown.countdown();
      }
      else {
        // numdays = Math.floor(calc_time / 86400);
        // if(numdays > 31){
        //   range = 'month';
        //   countdownWidth = 450;
        // }else{
        //   range = 'day';
        //   countdownWidth = 358;
        // }
        var countdown = new Countdown({time:calc_time, ampm:"am",target:"countdown-container", height:60, rangeHi:'day', style:"flip"});
      }
    }
  };
  Drupal.behaviors.site_countdown = {
    attach : function(context, settings) {
      $('body', context).once('site_countdown', function() {
        var num_ie = Math.round(Math.random()*10000);
        CountdownImageFolder = Drupal.settings.basePath + Drupal.settings.pre_blocks.configuration.module_path + '/';
        $.ajax({
          url : Drupal.settings.pre_blocks.configuration.site_path + 'time-update.php?q='+ num_ie + '',
          dataType : 'json',
          type : 'GET',
          async : false,
          success : function(returnObject) {
            // var date_time = timeInfo.datetime;
            // var event_time = Drupal.settings.pre_blocks.configuration.event_time;
            // var calc_time = event_time - date_time;
            // numdays = Math.floor(calc_time / 86400);
            // if(numdays > 31){
            //   $('.meses').addClass('hidden');
            //   $('#block-pre-blocks-pre-countdown-text-block').addClass('month');
            // }

            Drupal.pre_blocks.site_countdown.kickstartTimer(returnObject, context);
          }
        });
      });
    }
  };
})(jQuery);