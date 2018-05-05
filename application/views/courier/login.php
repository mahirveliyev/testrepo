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
            <h4>E-poçt və şifrəni daxil edin.</h4>
        </header>
        <main>
            <form>
                <div class="form-item box-item">
                    <input type="text" name="name" placeholder="E-poct" data-required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                </div>
                <div class="form-item box-item">
                    <input type="email" name="email" placeholder="Şifrə" data-email data-required>
                    <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
                    <small class="errorEmail"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
                </div>




<center>
                <div class="form-item">
                    <span id="submit" class="submit">Daxil ol</span>
                </div>
</center>
            </form>
        </main>
        <footer>
            <p>Hesabınız yoxdur? <a href="#">Qeydiyyatdan keç</a></p>
        </footer>
        <i class="wave"></i>
    </section>
</div>

</body>
</html>


