$(function() {


    updateWeather('stavropol');

    function updateWeather( city ) {
        if(localStorage.getItem('weatherInfo') === null ) {
            getWeather(city);
            return;
        }

        var weatherInfo =  JSON.parse( localStorage.getItem('weatherInfo') );
        var currentTime = Date.now();
        var storedTime = weatherInfo.createdTime;
        var differenceInMinuter = (currentTime - storedTime)/1000/60;
        var temperature = weatherInfo.temperature;

        if( differenceInMinuter >= 10) {
            getWeather( city )
        } else {
            setWetherToUi( temperature )
        }
    }

    function getWeather(city) {

        const apiUrl = 'http://api.openweathermap.org/data/2.5/weather?q=' + city;
        $.ajax({
            method: "GET",
            url: apiUrl,
            data: {
                APPID: '7324eaad1a529491591f30002974503a',
                units: 'metric'
            }

        })
            .done(function (response) {
                var temperature = response.main.temp;
                var weatherInfo = {};

                weatherInfo.createdTime = Date.now();
                weatherInfo.temperature = temperature;

                console.dir(response);
                localStorage.setItem('weatherInfo', JSON.stringify(weatherInfo));

                setWetherToUi(temperature);
            })
            .fail(function (error) {
                console.dir(error);
            })
    }



    function setWetherToUi ( weather ) {
        var $loadingAnimation = $('#loadingAnimation'),
            $hiddenContent = $('.hidden-content'),
            $temperature = $('#temperatureValue'),
            $city = $('#current-temperature--city');

        $temperature.text( weather);

        $loadingAnimation.hide();
        $hiddenContent.removeClass('hidden');
    }

    /*END WEATHER PART*/

  $('.select-al-month--button').click(function () {
    var self = $(this);
    if (self.hasClass('checked')) {
      self.removeClass('checked');
      self.attr('value', 'выделить все')
      $('input[type=checkbox]').prop('checked', false);
    } else {
      self.addClass('checked');
      self.attr('value', 'снять выделение');
      $('input[type=checkbox]').prop('checked', true);
    }

  })


  //AJAX request to change visibility state
  var formVisibleServices = document.querySelector('#saveServicesVisibility');
  if(formVisibleServices !== undefined && formVisibleServices !== null ) {
    formVisibleServices.addEventListener('submit', function (e) {
      e.preventDefault();

      // set form variables
      var url = formVisibleServices.action;
      var xhr = new XMLHttpRequest();
      var formData = new FormData(formVisibleServices);

      // Action will be done after successful submit message
      function reqListener() {
        var notificationElement = document.getElementById('notificationMessage');
        notificationElement.className += ' active';
        setTimeout(function () {
          notificationElement.className = notificationElement.className.replace('active', '')
        }, 2000)
      }

      // If everything ok then do this function
      xhr.addEventListener('load', reqListener);
      xhr.open("POST", url);
      xhr.send(formData);
    });
  }
  // END AJAX request to change visibility state



  //Registration form login as manager or administrator link
  $('#additionalAccessButton').click(function () {
    $(this).remove();
    $('#additionalAccessLinks').removeClass('hidden');

  });

  //END Registration form















  //Administration section
  $('.input-editable').keyup(function (e) {
    var self = $(this);
    var typedText = self.val();
    var lastSymbol = typedText.slice(typedText.length - 1, typedText.length);

    var patt = new RegExp(",");
    var word = new RegExp(/\D/);

    if (patt.test(typedText)) {
      self.val(typedText.replace(',', '.'));
    } else if (word.test(lastSymbol) && lastSymbol != '-' && lastSymbol != '.') {
      self.val(typedText.slice(0, typedText.length - 1))
    }


  });

  $('#edit_checkbox').click(function () {

    $('#year_to_edit').toggleClass('hidden');


    if ($('.year-input').attr('disabled')) {
      $('.year-input').removeAttr('disabled');
    }
    else {
      $('.year-input').attr('disabled', 'disabled');
    }
  });

  var checkbox = document.getElementById('edit_checkbox');
  if (checkbox !== undefined && checkbox !== null){
    if (document.getElementById('edit_checkbox').checked == true) {
      $('#year_to_edit').removeClass('hidden');
      $('.year-input').attr('disabled', 'disabled');
    }
  }



  $('#saveResults').click(function (event) {
    var hasError = false;

    $('.input-editable').each(function (index) {
      if ($(this).val() == '') {
        $(this).val('NULL');
      }
    })

    if (hasError) {
      alert("Поля не должны быть пустыми");
      event.preventDefault();
    }
  });
  // END Administration section














  jQuery('img.svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function (data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');

      // Add replaced image's ID to the new SVG
      if (typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      // Add replaced image's classes to the new SVG
      if (typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass + ' replaced-svg');
      }

      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');

      // Replace image with new SVG
      $img.replaceWith($svg);

    }, 'xml');

  });

});


















