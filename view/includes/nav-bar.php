<?php include "top-bar.php"; ?>
    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.php">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-center">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Phones <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Phones</h5>
                                            <ul>
                                                <?php $phones = $category->getCategoriesUnder('Phone'); foreach($phones as $phone){ ?>
                                                <li><a href="category.php"><?php echo $phone['category_name']; ?></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <?php $banners = $products->getRandomProductsForNavbar('Phone'); foreach($banners as $banner){ ?>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="../index.php?action=Product details&key=<?php echo $banner['product_key']; ?>&location=detail">
                                                    <img style="height: 170px;" src="images/<?php echo $banner['product_key']; ?>" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">PCs <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>PCs</h5>
                                            <ul>
                                                <?php $PCs = $category->getCategoriesUnder('PC'); foreach($PCs as $PC){ ?>
                                                <li><a href="category.php"><?php echo $PC['category_name']; ?></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <?php $banners = $products->getRandomProductsForNavbar('PC'); foreach($banners as $banner){ ?>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="../index.php?action=Product details&key=<?php echo $banner['product_key']; ?>&location=detail">
                                                    <img style="height: 170px;" src="images/<?php echo $banner['product_key']; ?>" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="index.php">Homepage</a>
                                                </li>
                                                <li><a href="../index.php?action=Sidebar-left">Category - sidebar left</a>
                                                </li>
                                                <li><a href="../index.php?action=Sidebar-right">Category - sidebar right</a>
                                                </li>
                                                <li><a href="../index.php?action=Sidebar-full">Category - full width</a>
                                                </li>
                                                <li><a href="detail.php">Product detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="register.php">Register / login</a>
                                                </li>
                                                <li><a href="customer-orders.php">Orders history</a>
                                                </li>
                                                <li><a href="customer-order.php">Order history detail</a>
                                                </li>
                                                <li><a href="customer-wishlist.php">Wishlist</a>
                                                </li>
                                                <li><a href="customer-account.php">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="basket.php">Shopping cart</a>
                                                </li>
                                                <li><a href="checkout1.php">Checkout - step 1</a>
                                                </li>
                                                <li><a href="checkout2.php">Checkout - step 2</a>
                                                </li>
                                                <li><a href="checkout3.php">Checkout - step 3</a>
                                                </li>
                                                <li><a href="checkout4.php">Checkout - step 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Pages and blog</h5>
                                            <ul>
                                                <li><a href="blog.php">Blog listing</a>
                                                </li>
                                                <li><a href="post.php">Blog Post</a>
                                                </li>
                                                <li><a href="faq.php">FAQ</a>
                                                </li>
                                                <li><a href="text.php">Text page</a>
                                                </li>
                                                <li><a href="text-right.php">Text page - right sidebar</a>
                                                </li>
                                                <li><a href="404.php">404 page</a>
                                                </li>
                                                <li><a href="contact.php">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                                            <!--Here i used str_replace function to replace some part of the long url of the current page generated by $_SERVER['PHP_SELF']
                                                (i.e the /obaju/view/) with nothing, this has no technical backing tho but since it going to be a get request then the url 
                                                should look good on the eye. Afterwards, i replaced the .php extention with nothing as well.  -->
                    <a href="../index.php?action=Basket&prev=<?php $_url = str_replace('/The-Agora/view/', '', $_SERVER['PHP_SELF']); echo $_url = str_replace('.php', '', $_url); ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"><?php if(isset($_SESSION['count_cart'])){ if($_SESSION['count_cart'] === 0 ){ echo 'No item in cart'; }elseif($_SESSION['count_cart'] === 1){ echo '1 item in cart'; }else{ echo $_SESSION['count_cart'] . ' items in cart'; }} ?></span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

