<script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart'], 'language': 'ru'});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it
    function drawChart() {
        // Create the data table.
        var data = google.visualization.arrayToDataTable([
            ['Месяц', 'Текущий год', {
                'type': 'string',
                'role': 'tooltip',
                'p': {'html': true}
            }, {role: 'style'}],
            <?php

            //For each element in array create row in the GoogleChart
            for( $i = 0; $i < $number_of_months; $i++){ ?>

            <?php
            // Set separator for arrays in JS if last element do not type
            // comma
            ($i ==$number_of_months-1) ? $separator=' ' : $separator=",";

            // Check if coefficient less then some value then use one color
            // Otherwise another
            if ($arr1[$i] <= 0.6) {

                $second_bar_color = '#d87a1a';
            } else {
                $second_bar_color = '#0c108c';
            }

            // GTK coefficient estimates part
            $gtk_wet_conditions = '';

            if (($arr1[$i] >= 0.5 && $arr1[$i] <= 0.7) || ($arr1[$i] < 0.5 && $arr1[$i] > 0.0)) {
                $gtk_wet_conditions = 'Очень засушливые';
            } elseif ($arr1[$i] >= 0.7 && $arr1[$i] <= 0.9) {
                $gtk_wet_conditions = 'Засушливые';
            } elseif ($arr1[$i] >= 0.9 && $arr1[$i] <= 1.1) {
                $gtk_wet_conditions = 'Устойчиво влажные';
            } elseif ($arr1[$i] >= 1.1 && $arr1[$i] <= 1.3) {
                $gtk_wet_conditions = 'Умеренно влажные';
            } elseif ($arr1[$i] > 1.3) {
                $gtk_wet_conditions = 'Избыточно влажные';
            } elseif ($arr1[$i] == 0.0) {
                $gtk_wet_conditions = 'Невозможно оценить';
            }
            // END Gtk coefficient part


            //Count all precipitations
            $precipitation['base_year']     += $arr1[$i];
            ?>
            ['<?php echo( $additional_months_array[$i] ); // Print month name
                ?>',<? echo( $arr1[$i] ) // Print first array elements
                ?>,<?php                 // Print tooltip for first month
                $precipitations = $arr1[$i];

                echo("createCustomTooltip($precipitations, '$gtk_wet_conditions')");
                ?>, <?php
                    echo("'$second_bar_color'");
                ?>]<?echo($separator)   // If it's the last element then don't add comma after
            ?>
            <?php
            }
            ?>
        ]);
        // Set variables section
        var precipitations = {
            baseYearPrecipitation:    <?php echo($temperature_sum)    ?>,
        };

        // Set chart options
        var options = {
            'title': "Гидротермический коэффициент '<?php echo($first_region['region_name'])?> <?php echo($first_region['years'])?>'",
            'width': 1100,
            'height': 600,
            legend: 'none',
            focusTarget: 'datum',
            fontName: 'roboto-light',
            vAxis: {
                title: 'Гидротермический коэффициент'
            },
            tooltip: {isHtml: true}

        };

        //Create view of the hovered element
        function createCustomTooltip (differents, gtk_wet_conditions){

            return  '<div style="padding:10px; ">'+
                        '<p style="font-size: 1.6rem; text-align: center;"><b> ГТК: '+differents+'</b> </p>'+
                        '<p style="font-size: 1.6rem; text-align: center;"><i>Условия: '+ gtk_wet_conditions + '</i></p>'+
                    '</div>';
        }

        // Overlay function, work when Chart is ready
        function placeSummaryOverlay ( dataTable ) {
            var cli                         = this.getChartLayoutInterface();
            var chartArea                   = cli.getChartAreaBoundingBox();
            var baseYearPrecipitation       = document.getElementById('allPrecipitationNumber');
            var legendElement               = document.getElementById('chartLegend');
            var fullChart                   = document.querySelector('.chart--wrapper');

            console.dir(chartArea);

            // Set summary positions
            var summaryPrecipitation            = document.getElementById('summaryPrecipitation');

            // Position base Year summary elements
            summaryPrecipitation.style.left     = chartArea.left + chartArea.width - 100 + 'px';
            summaryPrecipitation.style.top      = chartArea.top + 'px';
            summaryPrecipitation.style.display  = 'block';

            // Set overlay
            baseYearPrecipitation.innerText     = precipitations.baseYearPrecipitation;

            // Set legend position
            legendElement.style.left    = chartArea.left + 'px';
            legendElement.style.top     = chartArea.top + chartArea.height + 50 + 'px';
            legendElement.style.display = 'block';

            fixChartSize(legendElement, fullChart)

        }

          function fixChartSize( legendElement, fullChart ) {
            fullChart.style.minHeight = fullChart.clientHeight + legendElement.clientHeight + 'px';
          }

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        google.visualization.events.addListener(chart, 'ready',
            placeSummaryOverlay.bind(chart, data));
        chart.draw(data, options);
    }
</script>