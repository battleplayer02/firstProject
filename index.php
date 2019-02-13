<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            LOGIN PAGE
        </title>
        <?php
        include 'links.php';
        ?>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <div class="container center-div shadow">
                <div class="heading text-center text-uppercase text-white mb-5">
                    LOGIN PAGE
                </div>
                <div class="container row d-flex fllex-row justify-content-center mb-5">
                    <div class="login-page shadow p-3">
                        <form method="post" action="check.php">
                            <div class="form-group">
                                <label>Enter The Username</label>
                                <input type="text" class="form-control" name="user" autocomplete="off" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Enter The Password</label>
                                <input type="text" class="form-control" name="pass" autocomplete="off" placeholder="Password">
                            </div>
                            <input type="submit" class="btn btn-success" style="background-color: blue;border-color: blue" name="submit"> 
                            <a href="">Click here to register.</a>
                        </form>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>