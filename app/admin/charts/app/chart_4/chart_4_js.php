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
                'Предидущий',
                {'type': 'string', 'role': 'tooltip', 'p': {'html': true}},
                {role: 'style'}],
            <?php

            $precipitation = array(
                'base_year' => 0,
                'current_year' => 0
            );

            $sum_temperature = array (
                'more_than_base_year' => 0,
                'less_than_base_year' => 0

            );

            //For each element in array create row in the GoogleChart
            for( $i = 0; $i < $number_of_months; $i++){ ?>

            <?php
            // Set separator for arrays in JS if last element do not type
            // comma
            ($i ==$number_of_months-1)?$separator=' ':$separator=",";


            //Count all precipitations
            $precipitation['base_year']     = $arr1[$i];
            $precipitation['current_year']  = $arr2[$i];

            $sum_temperature_base_year += $arr1[$i];

            // Line colors
            $first_line_color  = '#36c';
            $second_line_color = '#f57c00';

            ?>
            ['<?php echo( $months[$i] );                        // Print month name
                ?>',<? echo( $precipitation['base_year'] )      // Print first array elements
                ?>, <?php                                       // Print tooltip for first year
                    $precipitations_differences = $precipitation['base_year']-$precipitation['current_year'];
                    $precipitation_base = $precipitation['base_year'];
                    $area  = $first_region['region_name'];
                    $years = $first_region['years'];
                    $period_name = 'отчетного';
                    $currentMonth=$months[$i];
                    echo("createCustomTooltip('$area', '$years', $precipitation_base, $precipitations_differences, '$currentMonth', '$period_name')");
                ?>, <?php                                       // First line color
                    echo( "'$first_line_color'" );
                ?>, <?  echo( $precipitation['current_year'] ) //Print second array elements
                ?>, <?php // Print tooltip for second year
                    $precipitations_differences = $precipitation['current_year']-$precipitation['base_year'];
	                $precipitation_current = $precipitation['current_year'];

                    // Count sum in temperature array if value in current year more or less then in base
                    if ( $precipitations_differences >= 0) {
	                    $sum_temperature['more_than_base_year'] += $precipitation_current;
                    } else {
                        $sum_temperature['less_than_base_year'] += $precipitation_current;
                    }


                    $area  = $second_region['region_name'];
                    $years = $second_region['years'];
	                $period_name = 'базисного';
                    $currentMonth=$months[$i];
                    echo("createCustomTooltip('$area', '$years',$precipitation_current, $precipitations_differences, '$currentMonth','$period_name')");
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
            baseYearPrecipitation: <?php    echo($sum_temperature_base_year/$number_of_months) ?>,
            currentYearPrecipitation: <?php echo($sum_temperature['more_than_base_year']/$number_of_months)             ?>
        };

        // Set chart options
        var options = {
            'title': "Температура: <?php echo( $first_region[ 'region_name' ])?> <?php echo( $first_region[ 'years' ])?> в сравнении с <?php echo( $second_region[ 'region_name' ])?> <?php echo( $second_region[ 'years' ])?>",
            'width': 1500,
            'height': 600,
            legend: 'none',
            vAxis: {
                title: '°C'
            },
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
            var baseYearPrecipitation       = document.getElementById('allPrecipitationNumber');
            var currentYearPrecipitation    = document.getElementById('allPrecipitationCurrentPeriodNumber');
            var legendElement               = document.getElementById('chartLegend');

            console.dir(chartArea);

            // Set summary positions
            var summaryPrecipitation                = document.getElementById('summaryPrecipitation');
            var summaryPrecipitationCurrentPeriod   = document.getElementById('summaryPrecipitationCurrentPeriod');

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
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        google.visualization.events.addListener(chart, 'ready',
            placeSummaryOverlay.bind(chart, data));

        chart.draw(data, options);
    }
</script>