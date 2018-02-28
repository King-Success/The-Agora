<?php include "includes/nav-bar.php"; ?>
    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.php">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <form action="../index.php" method="post">
                        <input type="hidden" name="action" value="Register">
                            <div class="form-group">
                                                                  <!--This code displays the error for inappropriate or empty name if the session with name 'reg_err' and element with name 'name' exist  -->
                                <label for="name">Name</label><br><?php if(isset($_SESSION['reg_err']['name'])){echo '<span style="color:#4fbfa8;">' . $_SESSION['reg_err']['name'] . '</span><br>'; } ?>
                                                                  <?php if(isset($_SESSION['reg_err']['email exist'])){echo '<span style="color:#4fbfa8;">' . $_SESSION['reg_err']['email exist'] . '</span><br>'; } ?>

                                                                                                      <!--This code repopulates the email field with previously entered value that are without fault incase the form data contains some errors  -->
                                <input type="text" name="name" class="form-control" id="name" value="<?php if(isset($_SESSION['reg_err']['cor_name'])){echo $_SESSION['reg_err']['cor_name'];} if(isset($_SESSION['reg_err']['cor_name_4_email_problem'])){echo $_SESSION['reg_err']['cor_name_4_email_problem'];}?>">
                            </div>
                            <div class="form-group">   
                                                                    <!--This code displays the error for inappropriate or empty email if the session with name 'reg_err' and element with name 'email' exist  -->
                                <label for="email">Email</label><br><?php if(isset($_SESSION['reg_err']['email'])){echo '<span style="color:#4fbfa8;">' . $_SESSION['reg_err']['email'] . '</span><br>'; } ?>
                                                                                                       <!--This code repopulates the email field with previously entered value that are without fault incase the form data contains some errors  -->
                                <input type="text" name="email" class="form-control" id="email" value="<?php if(isset($_SESSION['reg_err']['cor_email'])){echo $_SESSION['reg_err']['cor_email'];}?>">
                            </div>
                            <div class="form-group">
                                                                          <!--This code displays the error for inappropriate or empty password if the session with name 'reg_err' and element with name 'password' exist  -->
                                <label for="password">Password</label><br><?php if(isset($_SESSION['reg_err']['password'])){echo '<span style="color:#4fbfa8;">' . $_SESSION['reg_err']['password'] . '</span><br>'; } ?>
                                                                                                                 <!--This code repopulates the email field with previously entered value that are without fault incase the form data contains some errors  -->
                                <input type="password" name="password" class="form-control" id="password" value="<?php if(isset($_SESSION['reg_err']['cor_password'])){echo $_SESSION['reg_err']['cor_password'];} if(isset($_SESSION['reg_err']['cor_password_4_email_problem'])){echo $_SESSION['reg_err']['cor_password_4_email_problem'];} unset($_SESSION['reg_err']);?>">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>
                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>

                        <hr>

                        <form action="../index.php" method="post">
                        <input type="hidden" name="action" value="Login">
                            <div class="form-group">
                                <label for="email">Email</label><br><?php if(isset($_SESSION['log_err']['email'])){echo '<span style="color:#4fbfa8;">' . $_SESSION['log_err']['email'] . '</span><br>'; } ?>
                                                                    <?php if(isset($_SESSION['log_err']['Not registerd'])){echo '<span style="color:#4fbfa8;">' . $_SESSION['log_err']['Not registerd'] . '</span><br>'; } ?>
                                <input type="text" name="email" class="form-control" id="email" value="<?php if(isset($_SESSION['log_err']['cor_email'])){echo $_SESSION['log_err']['cor_email'];}?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label><br><?php if(isset($_SESSION['log_err']['password'])){echo '<span style="color:#4fbfa8;">' . $_SESSION['log_err']['password'] . '</span><br>'; } ?>
                                <input type="password" name="password" class="form-control" id="password" value="<?php if(isset($_SESSION['log_err']['cor_password'])){echo $_SESSION['log_err']['cor_password'];} unset($_SESSION['log_err']);?>">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="text.php">About us</a>
                            </li>
                            <li><a href="text.php">Terms and conditions</a>
                            </li>
                            <li><a href="faq.php">FAQ</a>
                            </li>
                            <li><a href="contact.php">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.php">Regiter</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>Men</h5>

                        <ul>
                            <li><a href="category.php">T-shirts</a>
                            </li>
                            <li><a href="category.php">Shirts</a>
                            </li>
                            <li><a href="category.php">Accessories</a>
                            </li>
                        </ul>

                        <h5>Ladies</h5>
                        <ul>
                            <li><a href="category.php">T-shirts</a>
                            </li>
                            <li><a href="category.php">Skirts</a>
                            </li>
                            <li><a href="category.php">Pants</a>
                            </li>
                            <li><a href="category.php">Accessories</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Obaju Ltd.</strong>
                            <br>13/25 New Avenue
                            <br>New Heaven
                            <br>45Y 73J
                            <br>England
                            <br>
                            <strong>Great Britain</strong>
                        </p>

                        <a href="contact.php">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Subscribe!</button>

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Your name goes here.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>
