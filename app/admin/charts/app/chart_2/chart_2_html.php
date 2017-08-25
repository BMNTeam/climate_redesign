<div class="chart--wrapper" style="position: relative;">
    <div id="special_div"></div>



    <div class="all-precipitation" id="summaryPrecipitation2" style="
        position: absolute;
        width: 70px;
        height: 35px;
        display: none;
        background-color: #36c;
        border-radius: 10px;
        border: 2px dashed black;
        text-align: center;
        color: #fff;
    ">
        <span id="allPrecipitationNumber2" style="line-height: 2.5em; ">
            123
        </span> мм.
    </div>

    <div class="all-precipitation" id="summaryPrecipitationCurrentPeriod2" style="
        position: absolute;
        width: 70px;
        height: 35px;
        display: none;
        background-color: #f57c00;
        border-radius: 10px;
        border: 2px dashed black;
        text-align: center;
        color: #fff;
    ">
        <span id="allPrecipitationCurrentPeriodNumber2" style="line-height: 2.5em; ">
            123
        </span> мм.
    </div>

    <div class="legend" id="chartLegend2" style="display: none; position: absolute;">
        <h3>Используемые обозначения: </h3>

        <div class="legends--wrapper">
            <div class="legend--element" style="height: 20px; margin-bottom: 10px;; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #36c;
                    border: 1px solid black;
                "></div>
                <span class="description" style="vertical-align: top;">- Осадки метеостанция <?php echo($first_region['region_name']); ?>, <?php echo($first_region['years']); ?></span>
            </div>



            <div class="legend--element" style="height: 20px; margin-bottom: 10px; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #f57c00;
                    border: 1px solid black;
                "></div>
                <span class="description" style="vertical-align: top;">- Осадки метеостанция <?php echo($second_region['region_name']); ?>, <?php echo($second_region['years']); ?></span>
            </div>


            <div class="legend--element" style="height: 20px; margin-bottom: 10px; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #36c;
                    border: 2px dashed black;
                "></div>
                <span class="description" style="vertical-align: top;">- Cуммарное количество <?php echo($first_region['region_name']); ?>, <?php echo($first_region['years']); ?></span>
            </div>

            <div class="legend--element" style="height: 20px; margin-bottom: 10px; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #f57c00;
                    border: 2px dashed black;
                "></div>
                <span class="description" style="vertical-align: top;">- суммарное количество осадков <?php echo($second_region['region_name']); ?>, <?php echo($second_region['years']); ?></span>
            </div>
        </div>


</div>