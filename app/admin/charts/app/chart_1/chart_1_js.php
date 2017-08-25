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
            }, 'Предыдущий', {role: 'annotation'}, {
                'type': 'string',
                'role': 'tooltip',
                'p': {'html': true}
            }, {role: 'style'}],
            <?php

            $precipitation = array(
                'base_year' => 0,
                'current_year' => 0,
                'sum_base_year' => 0,
                'sum_current_year' => 0
            );

            //For each element in array create row in the GoogleChart
            for( $i = 0; $i < $number_of_months; $i++){ ?>

            <?php
            // Set separator for arrays in JS if last element do not type
            // comma
            ($i ==$number_of_months-1)?$separator=' ':$separator=",";

            // Set percent increasing with previous year
            $percent = ( $arr2[$i] / $arr1[$i]-1 )*100;
	        $percent = round( $percent, 0 )."%";
	        // If don't have data then don't show percents
	        ($percent == -100)? $percent= '': $percent;

            // Check does current value more then in previous Year
            // and set colors variables
            $second_bar_color = '#f57c00';

            //Count all precipitations
            $precipitation['base_year']         =  $arr1[$i];
            $precipitation['current_year']      =  $arr2[$i];
            $precipitation['sum_base_year']     += $arr1[$i];
            $precipitation['sum_current_year']  += $arr2[$i];

	        require(__DIR__ .'/../fix_empty_values.php');

            ?>
            ['<?php echo( $months[$i] ); // Print month name
                ?>',<? echo( $arr1[$i] ) // Print first array elements
                ?>,<?php                 // Print tooltip for first month
                $precipitations = $precipitation['base_year'];
                $area  = $first_region['region_name'];
                $years = $first_region['years'];
                $current_month = $months[$i];
                echo("createCustomTooltip('$area', '$years', $precipitations, '$current_month')");
                ?>,<?  echo( $arr2[$i] ) // Print second array elements
                ?>,<?php                 // If it's the second array then show percentage increasing
                if( $i%2 || $i%3 || $i%4 || $i==0){
                    echo( "'" . $percent . "'");
                } else {
                    echo("123");
                };
                ?>, <?php
                // Get amount of differences in residues between years
                $residues_different = $precipitation['current_year'];
                $area  = $second_region['region_name'];
                $years = $second_region['years'];
	            $current_month = $months[$i];
                echo("createCustomTooltip('$area', '$years', $residues_different, '$current_month')");
                ?>, <?php
                    echo("'$second_bar_color'");
                ?>]<?echo($separator) // If it's the last element then don't add comma after
            ?>
            <?php
            }
            ?>
        ]);
        // Set variables section
        var precipitations = {
            baseYearPrecipitation:    <?php echo($precipitation['sum_base_year']) ?>,
            currentYearPrecipitation: <?php echo($precipitation['sum_current_year']) ?>
        };

        // Set chart options
        var options = {
            'title': "Осадки: <?php echo($first_region['region_name'])?> <?php echo($first_region['years'])?> в сравнении с <?php echo($second_region['region_name'])?> <?php echo($second_region['years'])?>",
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
            interpolateNulls: true,
            vAxis: {
                title: 'Количество осадков, мм.'
            },

            fontName: 'roboto-light', // Font family
            tooltip: {isHtml: true}

        };

        //Create view of the hovered element
        function createCustomTooltip (area, years, differents, month) {

            return  '<div style="padding:10px; width:250px;">'+
                '<p style="font-size: 1.6rem;"><b>'+ area + ': '+years+'</b></p>'+
            '<p style="font-size: 1.6rem;"> <i>Осадки - ' +month+ ': '+differents+'мм.</i> </p>'+
            '</div>'
        }

        // Overlay function, work when Chart is ready
        function placeSummaryOverlay ( dataTable ) {
            var cli                         = this.getChartLayoutInterface();
            var chartArea                   = cli.getChartAreaBoundingBox();
            var baseYearPrecipitation       = document.getElementById('allPrecipitationNumber');
            var currentYearPrecipitation    = document.getElementById('allPrecipitationCurrentPeriodNumber');
            var legendElement               = document.getElementById('chartLegend');
            var fullChart                   = document.querySelector('.chart--wrapper');

            console.dir(chartArea);

            // Set summary positions
            var summaryPrecipitation                = document.getElementById('summaryPrecipitation');
            var summaryPrecipitationCurrentPeriod   = document.getElementById('summaryPrecipitationCurrentPeriod');

            // Position current Year summary elements
            summaryPrecipitationCurrentPeriod.style.left    = chartArea.left + chartArea.width - 100 + 'px';
            summaryPrecipitationCurrentPeriod.style.top     = chartArea.top + 'px';
            summaryPrecipitationCurrentPeriod.style.display = 'block';

            // Position base Year summary elements
            summaryPrecipitation.style.left     = chartArea.left + 20 + 'px';
            summaryPrecipitation.style.top      = chartArea.top +'px'   ;
            summaryPrecipitation.style.display  = 'block';
            console.dir(precipitations);
            // Set overlay
            baseYearPrecipitation.innerText     = precipitations.baseYearPrecipitation;
            currentYearPrecipitation.innerText  = precipitations.currentYearPrecipitation;

            // Set legend position
            legendElement.style.left    = chartArea.left +'px';
            legendElement.style.top     = chartArea.top + chartArea.height + 50 +'px';
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
            //fixChartSize.bind(chart, data);

        chart.draw(data, options);
    }
</script>