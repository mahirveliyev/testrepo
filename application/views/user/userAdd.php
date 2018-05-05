<?php
if(isset($_SESSION['user_login']) == FALSE){
    redirect(base_url('UserController'));
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Device</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css') ?> ">
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <div class="logo">
        User Admin
    </div>
</div>
<div class="sidebar">
    <ul>
        <li><a href="<?php echo base_url("UserController/admin") ?>"><i class="fa fa-desktop"></i><span>Desktop</span></a></li>
        <li><a href="<?php echo base_url("UserController/insert") ?>"><i class="fa fa-server"></i><span>Add</span></a></li>
        <li><a href="#"><i class="fa fa-calendar"></i><span>Calendar</span></a></li>
        <li><a href="#"><i class="fa fa-envelope-o"></i><span>Messages</span></a></li>
        <li><a href="#"><i class="fa fa-table"></i><span>Data Table</span></a></li>
        <li><a href="<?php echo base_url('UserController/logOut'); ?>"><i class="fa fa-sign-out"></i><span>Log out</span></a></li>
    </ul>
</div>

<!-- Content -->
<div class="main">
    <br><br>
    <div class="hipsum">
        <div class="jumbotron">
            <h1 id="hello,-world!">Add new device for repair<a class="anchorjs-link" href="#hello,-world!"><span class="anchorjs-icon"></span></a></h1>
            <br>


            <form action="<?php echo base_url("UserController/insertAct") ?>" method="post" >

                <span>Device Name</span><br><br>
                <input type="text" name="devices_name" placeholder="Device name" class="form-control"><br><br>

                <span>Device Description</span>
                <br><br>
                <textarea class="form-control" name="devices_desc" id="" cols="30" rows="10" placeholder="Device Description"></textarea><br>
                <button type="submit" name="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>






</div>
</body>



</html>
<script src="<?php echo base_url("public/js/main.js") ?>"></script>

