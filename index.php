<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="tis-620">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมผู้ถือหุ้น</title>
    <!-- Bootstrap core CSS -->
    
    <?php include_once('import_css.php'); ?>

    <style>
    body {
        background: url("img/bg.jpg") no-repeat center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
    }

    .modal-dialog-full-width {
        width: 100% !important;
        height: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        max-width: none !important;

    }

    .modal-content-full-width {
        height: auto !important;
        min-height: 100% !important;
        border-radius: 0 !important;
        background-color: #ececec !important
    }

    .modal-header-full-width {
        border-bottom: 1px solid #9ea2a2 !important;
    }

    .modal-footer-full-width {
        border-top: 1px solid #9ea2a2 !important;
    }

    a.w3-left {
        font-size: 17px;
        border: 1px solid #cccccc;
        background-color: #4CAF50;
        color: #ffffff;
        padding: 5px;
        margin: 25px 50px 0px 25px;
        border-color: #4CAF50;
        width: 100px;
        height: 40px;
    }
    </style>


</head>

<?php
date_default_timezone_set('Asia/Bangkok');
$allpage = 12;
$votepage = 10;
?>

<body>

    <div name="page_main" id="page_main" class="row justify-content-md-center" style="margin-top:120px;">

        <div class="col-xs-8 col-lg-4 ">
            <div id="demo" class="carousel slide" style="text-align:center;">


                <div class="card">
                    <div class="card-body">
                        <?php 
                        // include_once('conn.php')
                        ?>
                        <h3 style="margin-bottom:5px;">เมนูระบบ </h3>
                        <br>
                        <!-- <button id="modalActivate" data-toggle="modal" data-target="#exampleModalPreview" type="button"
                            style="margin-bottom:10px;" class="btn btn-primary btn-lg btn-block"
                            onclick="openFullscreen();">Production</button>
                        <br> -->
                        <button type="button" style="margin-bottom:10px;"
                            class="btn btn-primary btn-lg btn-block" onclick="location.replace('FG');">Production</button>
                        <br>
                        <button type="button" style="margin-bottom:10px;"
                            class="btn btn-primary btn-lg btn-block" onclick="location.replace('QC', '_blank');">QC</button>
                        <br>                        

                        <button type="button" style="margin-bottom:10px;"
                            class="btn btn-primary btn-lg btn-block" onclick="location.replace('Logictic', '_blank');">Logistic</button>
                        <br>

                        <button type="button" style="margin-bottom:10px;"
                            class="btn btn-primary btn-lg btn-block" onclick="location.replace('wirerod', '_blank');">Wirerod</button>
                        <br>                        
                        
                        <button id="btnSetting" type="button" style="margin-bottom:10px;"
                            class="btn btn-secondary btn-lg btn-block">ตั้งค่าค่าตั้งต้น</button>
                        <br>
                        <!-- <button type="button" style="margin-bottom:10px;" class="btn btn-primary btn-lg btn-block">��Ѻ����§ҹ</button> -->


                    </div>
                </div>


            </div>

            <br>
        </div>

    </div>

    <div name="page_setting" id="page_setting" class="row justify-content-md-center"
        style="display:none;margin-top:120px;">

        <div class="col-xs-12 col-lg-10 ">
            <div id="demo" class="carousel slide" style="text-align:center;">


                <div class="card">
                    <a id="btnBackMain" class="w3-left w3-btn" href="#">❮ ย้อนกลับ</a>

                    <div class="card-body">
                        <?php include_once('conn.php')?>
                        <h1 class="card-title" style="margin-bottom:10px;">การตั้งค่า </h1>
                        <br>
                        <button data-toggle="modal" data-target="#exampleModalPreview" type="button"
                            style="margin-bottom:10px;" class="btn btn-primary btn-lg btn-block"
                            onclick="openFullscreen();">กดดูรายงาน</button>
                        <br>
                        <button type="button" style="margin-bottom:10px;"
                            class="btn btn-primary btn-lg btn-block">ปริ้นรายงาน</button>
                        <br>
                        <button type="button" style="margin-bottom:10px;"
                            class="btn btn-primary btn-lg btn-block">ตั้งค่าค่าตั้งต้น</button>
                        <br>
                        <!-- <button type="button" style="margin-bottom:10px;" class="btn btn-primary btn-lg btn-block">��Ѻ����§ҹ</button> -->


                    </div>
                </div>


            </div>

            <br>
        </div>

    </div>

    <!-- Modal -->
    <div  class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
        <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
            <div class="modal-content-full-width modal-content ">
                
                <div class="modal-body" style="background-color: #FFF;" >
                    <!-- <h1 class="section-heading text-center wow fadeIn my-5 pt-3"> Not for money, but
                        for humanity</h1> -->
                    <?php
                    for($i=1;$i<=$allpage;$i++)
                    {
                        include_once('page/page'.$i.'.php');
                    } 
                    ?>
                    
                </div>
                <div class="modal-footer-full-width  modal-footer">
                    
                    <button id="btnFixTime" type="button" style="display:none;"  class="btn btn-secondary mr-auto">ดู ตามเวลาที่กำหนดไว้</button>

                    <button id="btnRealTime" type="button" style="display:none;" class="btn btn-secondary mr-auto">ดู Real time</button>

                    <?php
                    for($i=1;$i<=$votepage;$i++)
                    {
                        echo '<button id="btnSaveTime'.$i.'" type="button" style="display:none;" OnClick="loadDoc('.$i.',3);" class="btn btn-secondary mr-auto">Save this time</button>';
                    }
                    ?>
                    
                    

                    <button id="btnClose" type="button" class="btn btn-danger btn-md btn-rounded" data-dismiss="modal"
                        onclick="closeFullscreen();">Close</button>
                    <button id="btnPrevious" type="button" style="display:none;"
                        class="btn btn-primary btn-md btn-rounded">Previous</button>
                    <button id="btnNext" type="button" class="btn btn-primary btn-md btn-rounded">Next</button>
                    <!-- <button type="button" class="btn btn-primary btn-md btn-rounded">Save
                        changes</button> -->
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>

<?php include_once('import_js.php')?>

<script>
var elem = document.documentElement;

function openFullscreen() {
    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) {
        /* Firefox */
        elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
        /* Chrome, Safari & Opera */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) {
        /* IE/Edge */
        elem.msRequestFullscreen();
    }
}

function closeFullscreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
    }
}
</script>