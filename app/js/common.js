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
























    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });

});


