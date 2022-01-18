    <header id="masthead" class="header ttm-header-style-01">
        <div id="site-header-menu" class="site-header-menu ttm-bgcolor-darkgrey">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row align-items-center">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="index.php" title="wedco" rel="home">
                                    <img id="logo-img" class="img-center standardlogo" src="images/logo-img.png" alt="logo-img">
                                    <img id="logo-dark" class="img-center stickylogo" src="images/logo-img.png" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile ml-auto" id="menu">
                                <ul class="menu">
                                    <li class="<?php if($page=='home'){echo 'mega-menu-item active';}?>">
                                        <a href="index.php" class="mega-menu-link">Home</a>
                                    </li>
                                    <li class="<?php if($page=='about'){echo 'active';}?>"><a href="about-us.php">About Us</a></li>
                                      <li class="mega-menu-item">
                                        <a href="#" class="<?php if($page=='services'){echo 'mega-menu-link active';}?>">Services</a>
                                        <ul class="mega-submenu">
                                            <li><a href="wedding_organizing.php">Wedding organizing</a></li>
                                            <li><a href="birthday-party.php">Birthday Party organizing </a></li>
                                            <li><a href="corporate-events.php">Corporate/ Business event organizing</a></li>
                                            <li><a href="baby-shower-event.php">Baby shower & Naming ceremony organizing</a></li>
                                            <li><a href="other-party.php">Other Parties organizing</a></li>
                                        </ul>
                                    </li>
                                   <!--  <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Pages</a>
                                        <ul class="mega-submenu">
                                            <li><a href="about-us.html">About Us 1</a></li>
                                            <li><a href="about-us-2.html">About Us 2</a></li>
                                            <li><a href="services-1.html">Services 1</a></li>
                                            <li><a href="services-2.html">Services 2</a></li>
                                            <li><a href="our-events.html">Our Events</a></li>
                                            <li><a href="our-story.html">Our Story</a></li>
                                            <li><a href="our-team.html">Our Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="error.html">404 Page</a></li>
                                            <li class="mega-menu-item">
                                                <a href="#" class="mega-menu-link">Shop</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="shop.html">Default Shop</a></li>
                                                    <li><a href="product-details.html">Single Product Details</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>                                            
                                        </ul>
                                    </li> -->
                               

            
                                    <li class="<?php if($page=='gallery'){echo 'active';}?>"><a href="gallery.php">Gallery</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li class="<?php if($page=='contact'){echo 'active';}?>"><a href="contact-us.php">Contact Us</a></li>
                                </ul>
                            </nav>
                        <!--     <div class="header_extra d-flex flex-row align-items-center justify-content-end ">
                                <div class="header_search">
                                    <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                    <div class="header_search_content">
                                        <form id="searchbox" method="get" action="#">
                                            <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                            <button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header_cart">
                                    <a href="#" class="button-cart">
                                        <div class="cart_icon"><i class="fa fa-shopping-cart"></i></div>
                                        <div class="cart_count">0</div>
                                    </a>
                                </div>
                            </div> -->
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </header>
        <!--header end