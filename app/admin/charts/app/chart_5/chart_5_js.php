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
            $precipitation['original']  = ($arr2[$i] >= 80) ? $arr2[$i]=80 : $arr2[$i] = $arr2[$i];
            $precipitation['divided_by_2']  = $arr2[$i];
            ( empty($arr2[$i]) ) ? $precipitation['divided_by_3'] = '': $precipitation['divided_by_3']  = $arr2[$i]/1.5;


            // Line colors
            $first_line_color  = '#fd0b09';
            $second_line_color = '#005fed';
            $third_line_color  = '#bceefb';

            ?>
            ['<?php echo( $months[$i] );                        // Print month name
                ?>',<? echo( $temperature )      // Print first array elements
                ?>, <?php                                       // First line color
                    echo( "'$first_line_color'" );
	            ?>, <?  echo( $precipitation['divided_by_2'] ) //Print second array elements
	            ?>, <?php // Second line color
	                echo( "'$second_line_color'" );
	            ?>, <?  echo( $precipitation['divided_by_3'] ) //Print second array elements
	            ?>, <?php // Second line color
	            echo ( "'$third_line_color'" );
	            ?>
            ]<?echo($separator)                           //If it's the last element then don't add comma after
            ?>
            <?php
            }
            ?>
        ]);


        // Set chart options
        var options = {
            'title': "Климадиаграмма: <?php echo( $first_region[ 'region_name' ])?> период <?php echo( $first_region[ 'years' ])?>",
            'width': 1100,
            'height': 600,
            legend: 'none',
            vAxes: {
              // Adds titles to each axis.
              0: {title: 'Температура воздуха, °C', viewWindow: {min: -15, max: 40}},
              1: {title: 'Количество осадков, мм.', viewWindow: {min: -30, max: 80}}
            },
            fontName: 'roboto-light', // Font family
            tooltip: {trigger: 'none'},
            series: {
                0: {
                    targetAxisIndex: 0,
                    lineWidth: 3,
                    pointSize: 5,
                    visibleInLegend: false
                },
                1: {
                    // set the options on the second series
                    targetAxisIndex: 1,
                    lineWidth: 3,
                    pointSize: 5,
                    visibleInLegend: false
                },
                2: {
                  // set the options on the second series
                  targetAxisIndex: 1,
                  lineWidth: 3,
                  pointSize: 0,
                  lineDashStyle: [4, 1],
                  visibleInLegend: false
                }
            }

        };



        // Overlay function, work when Chart is ready
        function placeSummaryOverlay ( dataTable ) {
            var cli                         = this.getChartLayoutInterface();
            var chartArea                   = cli.getChartAreaBoundingBox();
            var legendElement               = document.getElementById('chartLegend');
            var fullChart                   = document.querySelector('.chart--wrapper');

            // Set legend position
            legendElement.style.left    = chartArea.left + 'px';
            legendElement.style.top     = chartArea.top + chartArea.height + 50 + 'px';
            legendElement.style.display = 'block';

          fixChartSize(legendElement, fullChart);

        }

        function fixChartSize( legendElement, fullChart ) {
          fullChart.style.minHeight = fullChart.clientHeight + legendElement.clientHeight + 'px';
        }


        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        google.visualization.events.addListener(chart, 'ready',
            placeSummaryOverlay.bind(chart, data));

        chart.draw(data, options);
    }
</script>