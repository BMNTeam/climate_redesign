<!--Температура-->
<?php if( ! empty($resultDataToAnalyse)): ?>
<div class="col-md-12">
    <h2>Температура</h2>
    <table class="table table-hover table-responsive table-temperature">
        <thead>
        <tr>
            <th>Год</th>
            <th>Январь</th>
            <th>Февраль</th>
            <th>Март</th>
            <th>Апрель</th>
            <th>Май</th>
            <th>Июнь</th>
            <th>Июль</th>
            <th>Август</th>
            <th>Сентябрь</th>
            <th>Октябрь</th>
            <th>Ноябрь</th>
            <th>Декабрь</th>
            <th>Среднее</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!$isEditable): ?>
            <?php foreach ($resultDataToAnalyse as $key => $value): ?>
                <tr>

                    <td><?php echo $value['Year']; ?></td>
                    <td><?php echo $value['T1']; ?></td>
                    <td><?php echo $value['T2']; ?></td>
                    <td><?php echo $value['T3']; ?></td>
                    <td><?php echo $value['T4']; ?></td>
                    <td><?php echo $value['T5']; ?></td>
                    <td><?php echo $value['T6']; ?></td>
                    <td><?php echo $value['T7']; ?></td>
                    <td><?php echo $value['T8']; ?></td>
                    <td><?php echo $value['T9']; ?></td>
                    <td><?php echo $value['T10']; ?></td>
                    <td><?php echo $value['T11']; ?></td>
                    <td><?php echo $value['T12']; ?></td>
                    <td><?php
                        $sum = 0;
                        for($i=1; $i<=12; $i++){
                            $sum += $value['T'.$i];

                        }
                        echo round($sum/12,1);
                        ?></td>


                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <?php foreach ($resultDataToAnalyse as $key => $value): ?>
                <tr>

                    <td><?php echo $value['Year']; ?></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T1']; ?>" name="t1"</td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T2']; ?>" name="t2"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T3']; ?>" name="t3"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T4']; ?>" name="t4"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T5']; ?>" name="t5"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T6']; ?>" name="t6"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T7']; ?>" name="t7"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T8']; ?>" name="t8"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T9']; ?>" name="t9"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T10']; ?>" name="t10"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T11']; ?>" name="t11"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['T12']; ?>" name="t12">
                        <input type="hidden" name="MeteostationID" value="<?php echo $value['MeteostationID']; ?>"</td>


                </tr>
            <?php endforeach; ?>

        <?php endif; ?>
        </tbody>
    </table>
</div>


<!--Осадки-->
<div class="col-md-12">
    <h2>Осадки</h2>
    <table class="table table-hover table-responsive precipitation-table">
        <thead>
        <tr>
            <th>Год</th>
            <th>Январь</th>
            <th>Февраль</th>
            <th>Март</th>
            <th>Апрель</th>
            <th>Май</th>
            <th>Июнь</th>
            <th>Июль</th>
            <th>Август</th>
            <th>Сентябрь</th>
            <th>Октябрь</th>
            <th>Ноябрь</th>
            <th>Декабрь</th>
            <th style="white-space: pre">Сумма</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!$isEditable): ?>
            <?php foreach ($resultDataToAnalyse as $key => $value): ?>
                <tr>

                    <td><?php echo $value['Year']; ?></td>
                    <td><?php echo $value['P1']; ?></td>
                    <td><?php echo $value['P2']; ?></td>
                    <td><?php echo $value['P3']; ?></td>
                    <td><?php echo $value['P4']; ?></td>
                    <td><?php echo $value['P5']; ?></td>
                    <td><?php echo $value['P6']; ?></td>
                    <td><?php echo $value['P7']; ?></td>
                    <td><?php echo $value['P8']; ?></td>
                    <td><?php echo $value['P9']; ?></td>
                    <td><?php echo $value['P10']; ?></td>
                    <td><?php echo $value['P11']; ?></td>
                    <td><?php echo $value['P12']; ?></td>
                    <td><?php
                        $sum = 0;
                        for($i=1; $i<=12; $i++){
                            $sum += $value['P'.$i];

                        }
                        echo $sum;
                        ?></td>


                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <?php foreach ($resultDataToAnalyse as $key => $value): ?>
                <tr>

                    <td><?php echo $value['Year']; ?></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P1']; ?>" name="p1"</td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P2']; ?>" name="p2"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P3']; ?>" name="p3"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P4']; ?>" name="p4"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P5']; ?>" name="p5"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P6']; ?>" name="p6"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P7']; ?>" name="p7"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P8']; ?>" name="p8"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P9']; ?>" name="p9"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P10']; ?>" name="p10"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P11']; ?>" name="p11"></td>
                    <td><input class="input-editable" type="text" value="<?php echo $value['P12']; ?>" name="p12"></td>

                </tr>
            <?php endforeach; ?>

        <?php endif; ?>
        </tbody>
    </table>
</div>
<?php else: ?>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <h3>Год отсутствует в базе данных</h3>
            </div>
        </div>
    </div>
<?php endif; ?>

