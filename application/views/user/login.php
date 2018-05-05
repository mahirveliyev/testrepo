<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url("public/css/loginRegister.css") ?>">
    <script src="<?php echo base_url("public/js/loginRegister.js") ?>"></script>
</head>
<body>

<div class="row">
    <section class="section">
        <header>
            <h3>Login</h3>
            <h4></h4>
        </header>
        <main>
            <?php echo $this->session->userdata('login_error_email_password'); $this->session->unset_userdata('login_error_email_password'); ?>
            <?php echo $this->session->userdata('login_error_empty'); $this->session->unset_userdata('login_error_empty'); ?>
            <?php echo $this->session->userdata('register_success'); $this->session->unset_userdata('register_success'); ?>
            <form action="<?php echo base_url('UserController/loginAct'); ?>" method="POST">
                <div class="form-item box-item">
                    <input type="text" name="email" placeholder="Email" data-required>
                </div>
                <div class="form-item box-item">
                    <input type="password" name="password" placeholder="Password" data-email data-required>
                </div>
                <center>
                    <div class="form-item">
                        <input type="submit" class="submit" id="submit" value="Login">
                    </div>
                </center>
            </form>
        </main>
<footer>

            <p>Have not you account? <a href="<?php echo base_url("UserController/register") ?> ">Register</a></p>
        </footer>
        <i class="wave"></i>
    </section>
</div>

</body>
</html>


