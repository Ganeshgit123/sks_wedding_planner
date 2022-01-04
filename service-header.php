<aside class="widget widget-nav-menu">
    <ul class="widget-menu">
        <li class="<?php if($service_page=='wedding_location'){echo 'active';}?>"><a href="services.php"> Wedding Location</a></li>
        <li class="<?php if($service_page=='invitation'){echo 'active';}?>"><a href="invitaion-service.php">Invitations To Wedding</a></li>
        <li class="<?php if($service_page=='catering'){echo 'active';}?>"><a href="catering-service.php"> Catering </a></li>
        <li class="<?php if($service_page=='decoration'){echo 'active';}?>"><a href="decoration-service.php"> Decoration </a></li>
        <li class="<?php if($service_page=='honeymoon_package'){echo 'active';}?>"><a href="honeymoon-package.php">Honeymoon Packages</a></li>
        <li class="<?php if($service_page=='photography'){echo 'active';}?>"><a href="photography.php">Photography</a></li>
        <li class="<?php if($service_page=='entertainment'){echo 'active';}?>"><a href="entertainment.php">Entertainment</a></li>
        <li class="<?php if($service_page=='event_junction'){echo 'active';}?>"><a href="event-junction.php">Event Junction Birthdays</a></li>
        <li class="<?php if($service_page=='bridal_beautician'){echo 'active';}?>"><a href="bridal-beautician-service.php">Bridal Beautician Service</a></li>
    </ul>
</aside>
                            <aside class="widget tagcloud-widget with-title">
                                <h3 class="widget-title">Free Consult</h3>
                                <form id="contactform" class="contactform wrap-form clearfix" method="post" action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input">
                                                   <input name="name" type="text" value="" placeholder="Name" required="required">
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input">
                                                   <span class="orderby">
                                                       <select name="orderby" class="select2-hidden-accessible">
                                                            <option value="menu_order" selected="selected">Visit Venue</option>
                                                            <option value="popularity">Newyork</option>
                                                            <option value="rating">California</option>
                                                            <option value="date">France</option>
                                                        </select>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><textarea name="message" rows="4" placeholder="Messages" required="required"></textarea></span>
                                            </label>
                                        </div>
                                    </div>
                                    <button class="submit ttm-btn ttm-btn-size-lg ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Send A Request</button>
                                </form>
                            </aside>