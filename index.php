<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
?>



<html lang="en">

    
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Counter</title>
</head>

<body>

    <header class="header">

        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-12 col-lg-6 mx-auto p-0">

                    <div class="content-box">

                        <h1 class="main-heading">Counter</h1>

                        <p>Learning to code counter application using JavaScript</p>

                        <div class="counter" id="countdown">
                           
                           <!--need to cut the code from here-->
                            <div class="counter-box">

                                <span class="counter-number">20</span>

                                <span class="counter-text">Days</span>

                            </div>

                            <div class="counter-box">

                                <span class="counter-number">14</span>

                                <span class="counter-text">Hours</span>

                            </div>
                            <div class="counter-box">

                                <span class="counter-number">35</span>

                                <span class="counter-text">Mins</span>

                            </div>

                            <div class="counter-box">

                                <span class="counter-number">42</span>

                                <span class="counter-text">Seconds</span>

                            </div>
                          <!--need to cut the code till here-->
                           
                           
                            <div class="clearfix"></div>

                        </div>
                        
                        <p class="para">
                            <?php
                            
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                            
                            ?>
                            
                            
                        </p>

                        <div class="form-box">
                            <form  action="process.php" class="form" method="POST">
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="email" name="email" class="form-control" placeholder="Notify by Email" required>
                                    <div class="input-group-prepend">
                                        <button class="input-group-text" id="subscribe-btn" type="submit" name="subs">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /col-md-6 -->

                <div class="col-lg-6 hide-img p-0">

                    <div class="landing-img"></div>

                </div>
                <!-- /col-md-6 -->

            </div>
            <!-- /row -->

        </div>

    </header>

    <script src="js/temp.js"></script>

</body>

</html>



