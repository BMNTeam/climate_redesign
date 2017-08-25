<div class="chart--wrapper" style="position: relative;">
    <div id="chart_div"></div>

    <div class="all-precipitation" id="summaryPrecipitation" style="
        position: absolute;
        width: 70px;
        height: 35px;
        display: none;
        background-color: #36c;
        border-radius: 10px;
        border: 1px solid black;
        text-align: center;
        vertical-align:  middle;
        font-weight: bold;
        color: #000;
    ">
        <span id="allPrecipitationNumber" style="line-height: 2.5em; ">
            123
        </span> мм.
    </div>

    <div class="all-precipitation" id="summaryPrecipitationCurrentPeriod" style="
        position: absolute;
        width: 70px;
        height: 35px;
        display: none;
        background-color: #f57c00;
        border-radius: 10px;
        border: 1px solid black;
        vertical-align:  middle;
        font-weight: bold;
        text-align: center;
        color: #000;
    ">
        <span id="allPrecipitationCurrentPeriodNumber" style="line-height: 2.5em; ">
            123
        </span> мм.
    </div>

    <div class="legend" id="chartLegend" style="display: none; position: absolute;">
        <h4>Используемые обозначения: </h4>

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
                    border: 1px solid black;
                "></div>
                <span class="description" style="vertical-align: top;">- Cуммарное количество <?php echo($first_region['region_name']); ?>, <?php echo($first_region['years']); ?></span>
            </div>

            <div class="legend--element" style="height: 20px; margin-bottom: 10px; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #f57c00;
                    border: 1px solid black;
                "></div>
                <span class="description" style="vertical-align: top;">- суммарное количество осадков <?php echo($second_region['region_name']); ?>, <?php echo($second_region['years']); ?></span>
            </div>
        </div>
    </div>
</div>