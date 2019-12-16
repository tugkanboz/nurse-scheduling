<!doctype html>
<html lang="en" dir="ltr">
<head>
    <style type="text/css">
        .tg th {border: 1px solid rgba(0, 40, 100, 0.12)!important}
        .tg td {border: 1px solid rgba(0, 40, 100, 0.12)!important}
        .tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
        .tg td{font-family:Arial, sans-serif;font-size:12px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:8px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-baqh{text-align:center;vertical-align:top}
        .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
        .disabledbutton {pointer-events: none;opacity: 0.4;}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Make Schedule Page - Nurse Scheduling System</title>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="../assets/js/require.min.js"></script>
    <!-- Dashboard Core -->
    <link href="../assets/css/dashboard.css" rel="stylesheet" />
    <script src="../assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="../assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="../assets/plugins/charts-c3/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="../assets/plugins/input-mask/plugin.js"></script>
    <script src="../assets/js/make-schedule.js"></script>
</head>
<body class="">
<div class="page">
    <div class="page-main">
        <!--header-->
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="./headnurse-index.html">
                        <img src="../images/logo.jpeg" class="header-brand-img" alt="tabler logo">
                    </a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown d-none d-md-flex">


                        </div>
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">

                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jessica Whitecloud</span>
                      <small class="text-muted d-block mt-1">Head Nurse</small>
                    </span>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="headnurse-index.html" class="nav-link "><i class="fe fe-home"></i> Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="headnurse-make-schedule.html" class="nav-link active"><i class="fe fe-calendar"></i> Make Schedule</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="headnurse-show-schedule.html" class="nav-link"><i class="fe fe-calendar"></i> Show Schedule</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- body-->
        <!-- burda kan gövdeyi goturecek dikkat Emir :D-->
        <div class="my-3 my-md-5">
            <!--  inside body  -->
            <div class="container">
                <div class="row row-cards row-deck">
                    <!-- Left side  -->
                    <div class="col-lg-6" id="disableLeft">
                        <div class="card card-aside">
                            <div class="card-body d-flex flex-column">
                                <!-- Period  -->
                            <div class="form-group">
                                <div class="form-label">Select Period(day)</div>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="example-inline-radios" value="option1" checked="">
                                        <span class="custom-control-label">7</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="example-inline-radios" value="option2">
                                        <span class="custom-control-label">14</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="example-inline-radios" value="option3">
                                        <span class="custom-control-label">21</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="example-inline-radios" value="option3">
                                        <span class="custom-control-label">28</span>
                                    </label>
                                </div>
                            </div>
                                <!-- Nurse info  -->
                                <div class="card">

                                    <div class="card-body">
                                        <div class="form-label">Hemşire cart curt</div>
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                <tr>
                                                    <th class="pl-0">Nurses</th>
                                                    <th>Min saat</th>
                                                    <th>Max saat</th>
                                                </tr>
                                                </thead>
                                                <tbody><tr>
                                                    <td class="pl-0">
                                                        </select><input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled.." value="Tuğkan" disabled="">

                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="number" min="0"></td>

                                                    <td class="pr-0">
                                                        <input class="form-control" type="number" min="0"></td>                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">
                                                        <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled.." value="nurse 2" disabled="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="number" min="0"></td>                                                    </td>
                                                    </td>

                                                    <td class="pr-0">
                                                        <input class="form-control" type="number" min="0"></td>                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">
                                                        <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled.." value="nurse 3" disabled="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="number" min="0"></td>                                                    </td>

                                                    <td class="pr-0">
                                                        <input class="form-control" type="number" min="0"></td>                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">
                                                        <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled.." value="nurse 4" disabled="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="number" min="0"></td>                                                    </td>
                                                    </td>

                                                    <td class="pr-0">
                                                        <input class="form-control" type="number" min="0"></td>                                                    </td>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-primary" id="saveLeft" onclick="disbtnLeft();">Save</button>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Right side  -->
                    <div class="col-lg-6" id="disableRight">
                        <div class="card card-aside">
                            <div class="card-body d-flex flex-column">
                                <!-- Period  -->

                                <div class="card container">
                                    <div class="form-group">
                                        <div class="form-label">Enter value</div>

                                        <div class="col-sm-4 col-md-12">
                                        <p class="">Boş geçilebilecek gün sayısı</p><input type="number" min="0" class="form-control col-6" placeholder="Value">
                                        </div>

                                        <div class="col-sm-4 col-md-12" style="margin-bottom:10px; margin-top:10px;">
                                            <p>Hemşireye atanabilecek gece vardiyası sayısı</p>
                                            <p>Min day</p>
                                            <div class="col-3"><input type="number" min="0"  class="form-control" placeholder="Value"></div>
                                            <p  style="margin-top:10px;">Max day</p>
                                            <div class="col-3"><input type="number" min="0"  class="form-control" placeholder="Value"></div>
                                        </div>

                                        <div class="col-sm-4 col-md-12">
                                            <p>Ardışık çalışılabilecek maksimum gün sayısı</p>
                                            <input type="number" min="0"  class="form-control col-6" placeholder="Value">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="form-label">Koşulları seç</div>
                                        <div class="custom-controls-stacked">
                                            <div class="col-sm-4 col-md-12">

                                            <label class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Hemşire aynı gün en fazla 1 vardiya da çalışabilir</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                <span class="custom-control-label">Her gün her vardiyada en az bir kıdemli hemşire olmalı</span>
                                            </label>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                    <span class="custom-control-label">Gece vardiyasında çalışan hemşire ertesi gün gündüz vardiyasında çalışamaz</span>
                                                </label>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                    <span class="custom-control-label">Ardışık olarak gece vardiyasında çalışılamaz</span>
                                                </label>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card container">
                                    <div class="form-group">
                                        <div class="form-label">Seçtiğin koşulları önceliğe göre sırala (sürükle bırak)</div>
                                        <p>seçmediysen bırak dağınık kalsın</p>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-controls-stacked">
                                            <div class="col-sm-4 col-md-12">

                                                <div id="sortable">
                                                    <li class="ui-state-default" id="order1">Ardışık çalışılabilecek maksimum gün sayısı</li>
                                                    <li class="ui-state-default" id="order2">Hemşireye atanabilecek gece vardiyası sayısı</li>
                                                    <li class="ui-state-default" id="order3">Boş geçilebilecek gün sayısı</li>
                                                    <li class="ui-state-default" id="order4">Hemşire aynı gün en fazla 1 vardiya da çalışabilir</li>
                                                    <li class="ui-state-default" id="order5">Her gün her vardiyada en az bir kıdemli hemşire olmalı</li>
                                                    <li class="ui-state-default" id="order6">Gece vardiyasında çalışan hemşire ertesi gün gündüz vardiyasında çalışamaz</li>
                                                    <li class="ui-state-default" id="order7">Ardışık olarak gece vardiyasında çalışılamaz</li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-primary" id="saveRight" onclick="disbtnRight();">Save</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Mid side (Table) min. hours  -->
                    <div class="col-lg-12" id="disableMinHours">
                        <div class="card card-aside">
                            <div class="card-body d-flex flex-column">

                                <p>Minimum kaç hemşire olacak her saatte
                                    <!-- Table of min. hours  -->
                                <table class="tg">
                                <tr> <th class="tg-c3ow">Days/Hours</th>
                                <?php
                                $i1 = 0;
                                while($i1<24)
                                        {  
                                            $i2 = $i1+1;
                                            echo '<th class="tg-baqh">'.sprintf("%002d",$i1).' -  ';if($i2!=24) echo sprintf("%002d",$i2); else {echo '00';}  '</th>';
                                            $i1++;
                                        }
                                        $i1=0;
                                echo '</tr>';

                                $i1 = 0; $day = 1; $deger = 0;
                                while($day<8){
                                    echo '<tr> <td class="tg-baqh"> ' .$day. ' </td>';
                                        while($i1<24)
                                        {  
                                            $i2 = $i1+1;
                                            $deger = 'Day=' . $day . '|' . 'Shift=' . sprintf("%002d",$i1) . '-' . sprintf("%002d",$i2);
                                            echo '<td class="tg-baqh">  <select name="minNurse">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select> </td>';
                                            $i1++;
                                        }
                                        $i1=0;
                                        $day++;
                                    } 
                                ?>
                            </table>
                                <div class="text-right">
                                    <button type="button" class="btn btn-primary" id="saveMinHours" onclick="disbtnMinHours();">Save</button>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Mid side (Table) shift  -->
                    <div class="col-lg-12" id="disableShiftTable">
                        <div class="card card-aside">
                            <div class="card-body d-flex flex-column">

                                <p>Gün ve vardiyaya atanacak hemşireler</p>
                                    <!-- Table of min. hours  -->
                                <table class="tg">
                                    <tr>
                                        <th class="tg-c3ow">Days/Shift</th>
                                        <th class="tg-baqh">Shift 1</th>
                                        <th class="tg-baqh">Shift 2</th>
                                        <th class="tg-baqh">Shift 3</th>
                                        <th class="tg-baqh">Shift 4</th>
                                        <th class="tg-baqh">Shift 5</th>
                                    </tr>
                                    <?php
                                $i1 = 0; $day = 1; $deger = 0;
                                while($day<8){
                                    echo '<tr> <td class="tg-baqh"> ' .$day. ' </td>';
                                        while($i1<5)
                                        {  
                                            $i2 = $i1+1;
                                            echo '<td class="tg-baqh">  <select name="minNurse">
                                            <option value="0">Nurse name 1</option>
                                            <option value="0">Nurse name 2</option>
                                            <option value="0">Nurse name 3</option>
                                            <option value="0">Nurse name 4</option>
                                            <option value="0">Nurse name 5</option>
                                        </select> </td>';
                                            $i1++;
                                        }
                                        $i1=0;
                                        $day++;
                                    } 
                                ?>
                                </table>
                                <div class="text-right">
                                    <button type="button" class="btn btn-primary" id="disbtnShiftTable" onclick="disbtnShiftTable();">Save Shift</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mid side (Table) non-shift  -->
                    <div class="col-lg-12" id="disableNonShiftTable">
                        <div class="card card-aside">
                            <div class="card-body d-flex flex-column">

                                <p>Gün ve vardiyaya atanmayacak hemşireler</p>
                                <!-- Table of min. hours  -->
                                <table class="tg">
                                <?php
                                $i1 = 0; $day = 1; $deger = 0;
                                while($day<8){
                                    echo '<tr> <td class="tg-baqh"> ' .$day. ' </td>';
                                        while($i1<5)
                                        {  
                                            $i2 = $i1+1;
                                            echo '<td class="tg-baqh">  <select name="minNurse">
                                            <option value="0">Nurse name 1</option>
                                            <option value="0">Nurse name 2</option>
                                            <option value="0">Nurse name 3</option>
                                            <option value="0">Nurse name 4</option>
                                            <option value="0">Nurse name 5</option>
                                        </select> </td>';
                                            $i1++;
                                        }
                                        $i1=0;
                                        $day++;
                                    } 
                                ?>
                                </table>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary" id="saveNonShift" onclick="disbtnNonShiftTable();">Save non-Shift</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mid side (Table) annual permit  -->
                    <div class="col-lg-12" id="disableAnnualPermit">
                        <div class="card card-aside">
                            <div class="card-body d-flex flex-column">

                                <p>Annual Permit Settings 0 or 1</p>
                                <!-- Table of min. hours  -->
                                <table class="tg">
                                    <tr>
                                        <th class="tg-c3ow">Days/Nurse Name</th>
                                        <th class="tg-baqh">Nurse name 1</th>
                                        <th class="tg-baqh">Nurse name 2</th>
                                        <th class="tg-baqh">Nurse name 3</th>
                                        <th class="tg-baqh">Nurse name 4</th>
                                        <th class="tg-baqh">Nurse name 5</th>
                                    </tr>
                                    <?php
                                $i1 = 0; $day = 1; $deger = 0;
                                while($day<8){
                                    echo '<tr> <td class="tg-baqh"> ' .$day. ' </td>';
                                        while($i1<5)
                                        {  
                                            $i2 = $i1+1;
                                            echo '<td class="tg-baqh"><select name="AnnualPermit">
                                                <option value="0" selected="">No</option>
                                                <option value="0">Yes</option>
                                            </select></td>';
                                            $i1++;
                                        }
                                        $i1=0;
                                        $day++;
                                    } 
                                ?>
                                </table>
                                <div class="text-right">
                                    <button type="button" class="btn btn-primary" id="disbtnAnnualPermit" onclick="disbtnAnnualPermit()">Save Annual Permit</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                <!-- when all buttons are clicked, go to the show schedule page -->
                <div class="col-12 text-right">
                    <p>Click the button if you are sure that you have completed all forms correctly.</p>
                    <a href="headnurse-show-schedule.html" style="color:white; text-decoration: none" ><button type="button" class="btn btn-primary" id="optimizeButton" onclick=" ">Make Schedule</button></a>
                </div>
            <!-- end of the inside body-->
            </div>
    </div>
        <!-- footer-->
    <footer class="footer">
        <div class="container">

            <div class="row align-items-center flex-row-reverse">
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="./documentation.html" target="_blank">Documentation</a></li>
                                <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2019 <a href="https://capstone.eng.bau.edu.tr/db-active-4999.php?showDepartment=any&showCode=333" target="_blank">Capstone BAU</a>. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</div>
</div>

</body>
</html>