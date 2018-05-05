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
            <h3>Register</h3>
            <h4></h4>
        </header>
        <main>
            <?php echo $this->session->userdata('register_error'); $this->session->unset_userdata('register_error'); ?>
            <?php echo $this->session->userdata('register_error_email'); $this->session->unset_userdata('register_error_email'); ?>
            <form action="<?php echo base_url('UserController/regAct'); ?>" method="POST">
                <div class="form-item box-item">
                    <input type="text" name="name" placeholder="Full name" >
                </div>
                <div class="form-item box-item">
                    <input type="email" name="email" placeholder="Email" >
                </div>
                <div class="form-item box-item">
                    <input type="password" name="password" placeholder="Password" >
                </div>


                <div class="form-item box-item">
                    <input type="text" name="phone" placeholder="Phone" >
                </div>

                <div class="form-item box-item">
                    <div class="form-item-triple">
                        <div class="radio-label">
                            <label class="label">Gender</label>
                        </div>
                        <div class="form-item">
                            <input id="Male" type="radio" name="gender" value="Male" data-once>
                            <label for="Male">Male</label>
                        </div>
                        <div class="form-item">
                            <input id="Female" type="radio" name="gender" value="Female" data-once>
                            <label for="Female">Female</label>
                        </div>
                    </div>
                </div>
               <center>
                <div class="form-item">
                    <input type="submit" class="submit" value="Register">
                </div>
               </center>
            </form>
        </main>
<footer>
            <p>Already have an account?<a href="<?php echo base_url("UserController/index") ?> ">Login</a></p>
        </footer>
        <i class="wave"></i>
    </section>
</div>

</body>
</html>


