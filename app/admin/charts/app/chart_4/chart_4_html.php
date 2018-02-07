<div class="chart--wrapper" style="position: relative;">
    <div id="chart_div"></div>



    <div class="all-precipitation" id="summaryPrecipitation4" style="
        position: absolute;
        width: 70px;
        height: 35px;
        display: none;
        background-color: #06af2a;
        border-radius: 10px;
        border: 2px dashed black;
        text-align: center;
        color: #fff;
    ">
        <span id="allPrecipitationNumber4" style="line-height: 2.5em; ">
            123
        </span> °C.
    </div>

    <div class="all-precipitation" id="summaryPrecipitationCurrentPeriod4" style="
        position: absolute;
        width: 70px;
        height: 35px;
        display: none;
        background-color: #d60000;
        border-radius: 10px;
        border: 2px dashed black;
        text-align: center;
        color: #fff;
    ">
        <span id="allPrecipitationCurrentPeriodNumber4" style="line-height: 2.5em; ">
            123
        </span> °C
    </div>




    <div class="legend" id="chartLegend4" style="display: none; position: absolute;">
        <h3>Используемые обозначения: </h3>

        <div class="legends--wrapper">
            <div class="legend--element" style="height: 20px; margin-bottom: 10px;; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #06af2a;
                    border: 1px solid black;
                "></div>
                <span class="description" style="vertical-align: top;">- Температура базового периода: <?php echo($first_region['region_name']); ?>, <?php echo($first_region['years']); ?></span>
            </div>



            <div class="legend--element" style="height: 20px; margin-bottom: 10px; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #d60000;
                    border: 1px solid black;
                "></div>
                <span class="description" style="vertical-align: top;">- Температура анализируемого периода: <?php echo($second_region['region_name']); ?>, <?php echo($second_region['years']); ?></span>
            </div>


            <div class="legend--element" style="height: 20px; margin-bottom: 10px; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #06af2a;
                    border: 2px dashed black;
                "></div>
                <span class="description" style="vertical-align: top;">- Средняя температура базового периода: <?php echo($first_region['region_name']); ?>, <?php echo($first_region['years']); ?></span>
            </div>

            <div class="legend--element" style="height: 20px; margin-bottom: 10px; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #d60000;
                    border: 2px dashed black;
                "></div>
                <span class="description" style="vertical-align: top;">- Средняя температура анализируемого периода: <?php echo($second_region['region_name']); ?>, <?php echo($second_region['years']); ?></span>
            </div>
        </div>


</div>