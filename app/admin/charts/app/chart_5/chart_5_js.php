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
            ['Месяц',
                'Температура',
                {role: 'style'},
                'Осадки',
                {role: 'style'},
                'Осадки2',
                {role: 'style'},
                'Осадки3',
                {role: 'style'}
                ],
            <?php

            //For each element in array create row in the GoogleChart
            for( $i = 0; $i < $number_of_months; $i++){ ?>

            <?php
            // Set separator for arrays in JS if last element do not type
            // comma
            ($i ==$number_of_months-1)?$separator=' ':$separator=",";


            //Count all precipitations
            $temperature    = $arr1[$i];
            $precipitation['original']  = ($arr2[$i] >= 120)?$arr2[$i]=120 : $arr2[$i] = $arr2[$i];
            $precipitation['divided_by_2']  = $arr2[$i]/2;
            $precipitation['divided_by_3']  = $arr2[$i]/3;

            $sum_temperature_base_year += $arr1[$i];

            // Line colors
            $first_line_color  = '#398339';
            $second_line_color = '#da1416';

            ?>
            ['<?php echo( $months[$i] );                        // Print month name
                ?>',<? echo( $temperature )      // Print first array elements
                ?>, <?php                                       // First line color
                    echo( "'$first_line_color'" );
                ?>, <?  echo( $precipitation['original'] ) //Print second array elements
                ?>, <?php // Second line color
                    echo ( "'$second_line_color'" );
	            ?>, <?  echo( $precipitation['divided_by_2'] ) //Print second array elements
	            ?>, <?php // Second line color
	            ?>, <?  echo( $precipitation['divided_by_3'] ) //Print second array elements
	            ?>, <?php // Second line color
	            echo ( "'$second_line_color'" );
	            ?>
            ]<?echo($separator)                           //If it's the last element then don't add comma after
            ?>
            <?php
            }
            ?>
        ]);
        // Set variables section
        var precipitations = {
            baseYearPrecipitation: <?php    echo($sum_temperature_base_year/$number_of_months) ?>,
            currentYearPrecipitation: <?php echo($sum_temperature['more_than_base_year']/$number_of_months)             ?>
        };

        // Set chart options
        var options = {
            'title': "Температура: <?php echo( $first_region[ 'region_name' ])?> <?php echo( $first_region[ 'years' ])?> в сравнении с <?php echo( $second_region[ 'region_name' ])?> <?php echo( $second_region[ 'years' ])?>",
            'width': 1500,
            'height': 600,
            legend: 'none',
            vAxes: {
              // Adds titles to each axis.
              0: {title: 'Температура (Celsius)', viewWindow: {min: -15, max: 60}},
              1: {title: 'Осадки', viewWindow: {min: -30, max: 120}}
            },
            fontName: 'roboto-light', // Font family
            tooltip: {trigger: 'none'},
            series: {
                0: {
                    targetAxisIndex: 0,
                    lineWidth: 3,
                    pointSize: 12,
                    visibleInLegend: false
                },
                1: {
                    // set the options on the second series
                    targetAxisIndex: 1,
                    lineWidth: 3,
                    pointSize: 12,
                    visibleInLegend: false
                },
                2: {
                  // set the options on the second series
                  targetAxisIndex: 1,
                  lineWidth: 3,
                  pointSize: 12,
                  visibleInLegend: false
                },
                3: {
                    // set the options on the second series
                  targetAxisIndex: 1,
                  lineWidth: 3,
                  pointSize: 12,
                  visibleInLegend: false
                }
            }

        };

        //Create view of the hovered element
        function createCustomTooltip (area, years, precipitation, differences, month, period){
            var yearSeparator = '';
            (month == '') ? yearSeparator='' : yearSeparator=' - ';
            return  '<div style="padding:10px;">'+
                '<h2>'+ area + ': ' + '<span>'+years+'</span></h2>'+
                '<p style="font-size: 1.05rem;"> Температура'+yearSeparator+month+': <b>'+precipitation+'°С.</b> </p>'+
                '<p style="font-size: 1.05rem; margin-top: -15px;"> Отклонения от '+period+' периода: <b>'+differences+'°С.</b> </p>'+
                '</div>'
        }

        // Overlay function, work when Chart is ready
        function placeSummaryOverlay ( dataTable ) {
            var cli                         = this.getChartLayoutInterface();
            var chartArea                   = cli.getChartAreaBoundingBox();
            var legendElement               = document.getElementById('chartLegend');

            // Set legend position
            legendElement.style.left    = chartArea.left;
            legendElement.style.top     = chartArea.top + chartArea.height + 50;
            legendElement.style.display = 'block';

        }


        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        google.visualization.events.addListener(chart, 'ready',
            placeSummaryOverlay.bind(chart, data));

        chart.draw(data, options);
    }
</script>