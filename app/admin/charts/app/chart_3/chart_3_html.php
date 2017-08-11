<div class="chart--wrapper" style="position: relative; font-family: Arial">
    <div id="chart_div"></div>



    <div class="all-precipitation" id="summaryPrecipitation" style="
        position: absolute;
        width: 70px;
        height: 35px;
        display: none;
        background-color: #D32F2F;
        border-radius: 10px;
        border: 2px dashed black;
        text-align: center;
        color: #fff;
    ">
        <span id="allPrecipitationNumber" style="line-height: 2.5em; ">
            1500
        </span> ℃
    </div>




    <div class="legend" id="chartLegend" style="display: none; position: absolute;">
        <h4>Используемые обозначения: </h4>

        <div class="legends--wrapper">
            <div class="legend--element" style="height: 20px; margin-bottom: 10px;; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background: linear-gradient(90deg, #36c, #f57c00);
                    border: 1px solid black;
                "></div>
                <span class="description" style="vertical-align: top;">- Гидротермический коэффициент <?php echo($first_region['region_name']); ?>, <?php echo($first_region['years']); ?></span>
            </div>



            <div class="legend--element" style="height: 20px; margin-bottom: 10px; margin-left: 15px;">
                <div class="icon" style="
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    background-color: #D32F2F;
                    border: 1px dashed black;
                "></div>
                <span class="description" style="vertical-align: top;">- Сумма активных температур <?php echo($first_region['region_name']); ?>, <?php echo($first_region['years']); ?></span>
            </div>


        </div>



    </div>


</div>