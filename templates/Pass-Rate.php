<?php
    include '../home/index.php';
    include '../home/scripts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/assets/icons/house-door-fill.svg" type="image/svg+xml">
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Pass_Rate_css $Table_css $Bootstrap_4_6_0_css $jQuery_js $ClockPicker_js $ClockPicker_css";?>
    <title>Dashboard</title>
</head>
<body>

    <div class="main-container">
        <?php //?Contenedor Principal?>

        <?php //TODO: HEADER?>
        <?php echo "$header";?>
        <?php //TODO: SIDEBAR?>
        <?php echo "$sidebar";?>

        <div class="content-container">
            <div class="title-container">
                <h1>Pass Rate ITC</h1>
            </div>
            <div class="pass-rate-container">
                <?php //?Options ?>
            
            <div class="menu-pass-rate"><?php//?Menú para ver o modificar inventario ?>
                <div class="menu-options">
                <button class="activate" id="btn-pass-rate-today" onclick="">
                    Pass Rate Today
                </button>
                <button class="desactivate" id="btn-top-5-fails" onclick="">
                    Top 5 Fails [All Current Models]
                </button>
                <button class="desactivate" id="btn-pass-rate-by-specific-date" onclick="">
                    Pass Rate by Specific Date
                </button>
                <button class="desactivate" id="btn-top-5-fails-by-specific-date" onclick="">
                    Top 5 Fails by Specific Date
                </button>
                </div>
            </div>

            <?php //?Pass Rate Today ?>
            <h3>Pass Rate Today</h3>
                <table class="table table-secondary table-hover">
                    <thead>
                        <tr>
                            <td>Model</td>
                            <td>Total Production</td>
                            <td>F.R</td>
                            <td>Ok</td>
                            <td>%Ng</td>
                            <td>%Ok</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php//!Aqui va el cuerpo de la tabla?>
                        <tr>
                            <td>E3-10119E30052</td>
                            <td>2964</td>
                            <td>161</td>
                            <td>2803</td>
                            <td>5.43%</td>
                            <td>97.57%</td>
                        </tr>
                        <tr>
                            <td>E3-10129P17D21</td>
                            <td>1988</td>
                            <td>0</td>
                            <td>1988</td>
                            <td>0%</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>E3-23406AAJX</td>
                            <td>1213</td>
                            <td>4</td>
                            <td>1209</td>
                            <td>0.33%</td>
                            <td>99.67%</td>
                        </tr>
                        <tr>
                            <td>E3-441-09-DB3B</td>
                            <td>2596</td>
                            <td>44</td>
                            <td>2552</td>
                            <td>1.69%</td>
                            <td>98.31%</td>
                        </tr>
                    </tbody>
                </table>

            <?php //?TOP 5 COMPONENT FAIL ?>
            <h3>Top 5 Component Fail E3-10119E30052</h3>
                <table class="table table-secondary table-hover">
                    <thead>
                        <tr>
                            <td>Total</td>
                            <td>Part</td>
                            <td>Tester ID</td>
                            <td>Refer Value</td>
                            <td>Tester Value</td>
                            <td>HPin</td>
                            <td>Lpin</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php//!Aqui va el cuerpo de la tabla?>
                        <tr>
                            <td>11</td>
                            <td>D7</td>
                            <td>ICT19</td>
                            <td>2.60V</td>
                            <td>3.51V</td>
                            <td>53</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>R2</td>
                            <td>ICT19</td>
                            <td>10.00Ko</td>
                            <td>6.05Ko</td>
                            <td>64</td>
                            <td>63</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>D6</td>
                            <td>ICT19</td>
                            <td>2.60V</td>
                            <td>3.51V</td>
                            <td>47</td>
                            <td>53</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>D4</td>
                            <td>ICT19</td>
                            <td>2.60V</td>
                            <td>3.51V</td>
                            <td>35</td>
                            <td>31</td>
                        </tr>
                    </tbody>
                </table>
            <h3>Top 5 Component Fail E3-10129P17D21</h3>
                <table class="table table-secondary table-hover">
                    <thead>
                        <tr>
                            <td>Total</td>
                            <td>Part</td>
                            <td>Tester ID</td>
                            <td>Refer Value</td>
                            <td>Tester Value</td>
                            <td>HPin</td>
                            <td>Lpin</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php//!Aqui va el cuerpo de la tabla?>
                        <tr>
                            <td>1</td>
                            <td>D5</td>
                            <td>ICT23</td>
                            <td>3.00V</td>
                            <td>3.51V</td>
                            <td>241</td>
                            <td>254</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>U1-7</td>
                            <td>ICT23</td>
                            <td>0.81V</td>
                            <td>6.05Ko</td>
                            <td>161</td>
                            <td>186</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>R10</td>
                            <td>ICT23</td>
                            <td>37.70Ko</td>
                            <td>3.51V</td>
                            <td>201</td>
                            <td>228</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>C10</td>
                            <td>ICT23</td>
                            <td>0.21nF</td>
                            <td>3.51V</td>
                            <td>201</td>
                            <td>215</td>
                        </tr>
                    </tbody>
                </table>
        
            <?php //?Pass Rate by Specific Date ?>
            <h3>Pass Rate By Specific Date</h3>
            <form action="" class="form-date-hour-form">
                <div class="form-group mb-3 form-date-hour">
                    <p class="p-date-hour">Date & Hour Start: </p>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="" class="form-control" value="">
                    </div>
                    <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="End-time" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group mb-3 form-date-hour">
                    <p class="p-date-hour">Date & Hour End: </p>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="" class="form-control" value="dd/mm/yyyy">
                    </div>
                    <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="End-time" class="form-control" value="">
                    </div>
                </div>
                <input type="submit" class="generate-report-pass-rate" value="Generate Report">
            </form>

            <?php //?Top 5 fails by Specific Date ?>
            <h3>Top 5 Component By Specific Date</h3>
            <form action="" class="form-date-hour-form">
                <div class="input-group mb-3 specific-model">
                    <input type="text" class="form-control mb-3" placeholder="Specific Model">
                </div>
                <div class="form-group mb-3 form-date-hour">
                    <p class="p-date-hour">Date & Hour Start: </p>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="" class="form-control" value="">
                    </div>
                    <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="End-time" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group mb-3 form-date-hour">
                    <p class="p-date-hour">Date & Hour End: </p>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="" class="form-control" value="">
                    </div>
                    <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="End-time" class="form-control" value="">
                    </div>
                </div>
                <input type="submit" class="generate-report-pass-rate" value="Generate Report">
            </form>
            </div>
        </div>

        <?php //TODO: FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <script>
          $('.clockpicker').clockpicker({
            placement: 'top',
            align: 'left',
            donetext: 'Done'
        });
    </script>
    <?php echo "$SubMenu_js $Bootstrap_js  $Popper_js $DataTables_js $Moment_js";?>
</body>
</html>