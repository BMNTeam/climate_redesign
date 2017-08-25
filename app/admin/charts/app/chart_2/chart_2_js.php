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
                'Текущий год',
                {'type': 'string', 'role': 'tooltip', 'p': {'html': true}},
                {role: 'style'},
                'Предыдущий',
                {'type': 'string', 'role': 'tooltip', 'p': {'html': true}},
                {role: 'style'}],
            <?php

            $precipitation = array(
                'base_year' => 0,
                'current_year' => 0
            );

            //For each element in array create row in the GoogleChart
            for( $i = 0; $i < $number_of_months; $i++){ ?>

            <?php
            // Set separator for arrays in JS if last element do not type
            // comma
            ($i ==$number_of_months-1)?$separator=' ':$separator=",";


            //Count all precipitations
            $precipitation['base_year']     += $arr1[$i];
            $precipitation['current_year']  += $arr2[$i];

            //If no values send then don't
	        ($i >= count($arr1)) ? $precipitation['base_year']      = 'null' : '';
	        ($i >= count($arr2)) ? $precipitation['current_year']   = 'null' : '';

            // Line colors
            $first_line_color  = '#36c';
            $second_line_color = '#f57c00';

            ?>
            ['<?php echo( $months[$i] );                        // Print month name
                ?>',<? echo( $precipitation['base_year'] )      // Print first array elements
                ?>, <?php                                       // Print tooltip for first year
                    $precipitations_summary = $precipitation['base_year'];
                    $area  = $first_region['region_name'];
                    $years = $first_region['years'];
                    ( $months[$i] == "Январь" ) ? $currentMonth="" : $currentMonth=$months[$i];
                    echo("createCustomTooltip('$area', '$years', $precipitations_summary, '$currentMonth')");
                ?>, <?php                                       // First line color
                    echo( "'$first_line_color'" );
                ?>, <?  echo( $precipitation['current_year'] ) //Print second array elements
                ?>, <?php // Print tooltip for second year
                    $precipitations_summary = $precipitation['current_year'];
                    $area  = $second_region['region_name'];
                    $years = $second_region['years'];
                    $currentMonth = '';
                    ($months[$i] == "Январь")?$currentMonth="":$currentMonth=$months[$i];
                    echo("createCustomTooltip('$area', '$years', $precipitations_summary, '$currentMonth')");
                ?>, <?php // Second line color
                    echo ( "'$second_line_color'" );
                ?>]<?echo($separator)                           //If it's the last element then don't add comma after
            ?>
            <?php
            }
            ?>
        ]);
        // Set variables section
        var precipitations = {
            baseYearPrecipitation: <?php    echo($precipitation[ 'base_year' ]) ?>,
            currentYearPrecipitation: <?php echo($precipitation[ 'current_year' ]) ?>
        };

        // Set chart options
        var options = {
            'title': "Осадки: <?php echo( $first_region[ 'region_name' ])?> <?php echo( $first_region[ 'years' ])?> в сравнении с <?php echo( $second_region[ 'region_name' ])?> <?php echo( $second_region[ 'years' ])?>",
            'width': 1100,
            'height': 600,
            legend: 'none',
            focusTarget: 'datum',
            annotations: {
                highContrast: true,
                textStyle: {
                    bold: true
                }
            },
            vAxis: {
                title: 'Количество осадков, мм.'
            },
            interpolateNulls: true,
            tooltip: {isHtml: true},
            series: {
                0: {
                    lineWidth: 3,
                    pointSize: 12,
                    visibleInLegend: false
                },
                1: {
                    // set the options on the second series
                    lineWidth: 3,
                    pointSize: 12,
                    visibleInLegend: false
                }
            },
            fontName: 'roboto-light', // Font family
            tooltip: {isHtml: true}

        };

        //Create view of the hovered element
        function createCustomTooltip (area, years, differents, month){
            var yearSeparator = '';
            (month == '') ? yearSeparator='' : yearSeparator=' - ';
            return  '<div style="padding:10px; width:300px;">'+
                '<p style="font-size: 1.6rem;"><b>'+ area + ': ' +years+'</b></p>'+
                '<p style="font-size: 1.6rem;"><i>Сумма осадков Январь'+yearSeparator+month+': '+differents+'мм.</i> </p>'+
                '</div>'
        }

        // Overlay function, work when Chart is ready
        function placeSummaryOverlay ( dataTable ) {
            var cli                         = this.getChartLayoutInterface();
            var chartArea                   = cli.getChartAreaBoundingBox();
            var baseYearPrecipitation       = document.getElementById('allPrecipitationNumber2');
            var currentYearPrecipitation    = document.getElementById('allPrecipitationCurrentPeriodNumber2');
            var legendElement               = document.getElementById('chartLegend2');

            console.dir(chartArea);

            // Set summary positions
            var summaryPrecipitation                = document.getElementById('summaryPrecipitation2');
            var summaryPrecipitationCurrentPeriod   = document.getElementById('summaryPrecipitationCurrentPeriod2');

            // Position current Year summary elements
            summaryPrecipitationCurrentPeriod.style.left    = chartArea.left + chartArea.width - 100;
            summaryPrecipitationCurrentPeriod.style.top     = chartArea.top;
            summaryPrecipitationCurrentPeriod.style.display = 'block';

            // Position base Year summary elements
            summaryPrecipitation.style.left     = chartArea.left + 20;
            summaryPrecipitation.style.top      = chartArea.top   ;
            summaryPrecipitation.style.display  = 'block';

            // Set overlay
            baseYearPrecipitation.innerText     = precipitations.baseYearPrecipitation;
            currentYearPrecipitation.innerText  = precipitations.currentYearPrecipitation;

            // Set legend position
            legendElement.style.left    = chartArea.left;
            legendElement.style.top     = chartArea.top + chartArea.height + 50;
            legendElement.style.display = 'block';

        }


        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('special_div'));
        google.visualization.events.addListener(chart, 'ready',
            placeSummaryOverlay.bind(chart, data));

        chart.draw(data, options);
    }
</script>