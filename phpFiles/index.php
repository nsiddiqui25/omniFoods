<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="OmniFood is a premium food delivery service with the mission to bring affordable and healthy meals to as many people as possible.">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        
        <title>OmniFood</title>
        
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/logo-white.png" alt="OmniFood logo" class="logoWhite">
                    <img src="resources/img/logo.png" alt="OmniFood logo" class="logoBlack">
                    <ul class="mainNav jsMainNav">
                        <li><a href="#features">Food Delivery</a></li>
                        <li><a href="#works">How It Works</a></li>
                        <li><a href="#cities">Our Cities</a></li>
                        <li><a href="#plans">Sign Up</a></li>
                    </ul>
                    <a class="mobileNavIcon jsNavIcon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="heroTextBox">
                <h1>Goodbye peasant food. <br>Hello super fancy meals.</h1>
                <a class="btn btnFull jsScrollToPlans" href="#">I'm Hungry</a>
                <a class="btn btnGhost jsScrollToStart" href="#">Show me more</a>
            </div>
        </header>
        
        <section class="sectionFeatures jsSectionFeatures" id="features">
            <div class="row">
                <h2>Get food fast &mdash; not fast food</h2>
                <p class="longCopy">Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!</p>
            </div>
            <div class="row jsWaypoint1">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-infinite-outline iconBig"></i>
                    <h3>Up to 365 days/year</h3>
                    <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.</p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-stopwatch-outline iconBig"></i>
                    <h3>Ready in 20 minutes</h3>
                    <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-nutrition-outline iconBig"></i>
                    <h3>100% organic</h3>
                    <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-cart-outline iconBig"></i>
                    <h3>Order anything</h3>
                    <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>
                </div>
            </div>
        </section>
        
        <section class="sectionMeals">
            <ul class="mealsShowcase clearfix">
                <li>
                    <figure class="mealPhoto">
                        <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="mealPhoto">
                        <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                    </figure>
                </li>                
                <li>
                    <figure class="mealPhoto">
                        <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
                    </figure>
                </li>                
                <li>
                    <figure class="mealPhoto">
                        <img src="resources/img/4.jpg" alt="Autumn pumpkin soup">
                    </figure>
                </li>
            </ul>
            <ul class="mealsShowcase clearfix">
                <li>
                    <figure class="mealPhoto">
                        <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="mealPhoto">
                        <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                    </figure>
                </li>                
                <li>
                    <figure class="mealPhoto">
                        <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon">
                    </figure>
                </li>                
                <li>
                    <figure class="mealPhoto">
                        <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="sectionSteps" id="works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 stepsBox">
                    <img src="resources/img/app-iPhone.png" alt="OmniFood app on iPhone" class="appScreen jsWaypoint2">
                </div>
                <div class="col span-1-of-2 stepsBox">
                    <div class="worksStep">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="worksStep">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="worksStep">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>
                    <a href="#" class="btnApp"><img src="resources/img/download-app.svg" alt="App Store button"></a>
                    <a href="#" class="btnApp"><img src="resources/img/download-app-android.png" alt="Play Store button"></a>
                </div>
            </div>
        </section>
        
        <section class="sectionCities" id="cities">
            <div class="row">
                <h2>We're currently in these cities</h2>
            </div>
            <div class="row jsWaypoint3">
                <div class="col span-1-of-4 box">
                    <img src="resources/img/lisbon-3.jpg" alt="Lisbon">
                    <h3>Lisbon</h3>
                    <div class="cityFeature">
                        <i class="ion-person iconSmall"></i>
                        1600+ happy eaters
                    </div>
                    <div class="cityFeature">
                        <i class="ion-ios-star iconSmall"></i>
                        60+ top chefs
                    </div>
                    <div class="cityFeature">
                        <i class="ion-social-twitter iconSmall"></i>
                        <a href="#">@omnifood_lx</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/san-francisco.jpg" alt="Lisbon">
                    <h3>San Francisco</h3>
                    <div class="cityFeature">
                        <i class="ion-person iconSmall"></i>
                        3700+ happy eaters
                    </div>
                    <div class="cityFeature">
                        <i class="ion-ios-star iconSmall"></i>
                        160+ top chefs
                    </div>
                    <div class="cityFeature">
                        <i class="ion-social-twitter iconSmall"></i>
                        <a href="#">@omnifood_sf</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/berlin.jpg" alt="Lisbon">
                    <h3>Berlin</h3>
                    <div class="cityFeature">
                        <i class="ion-person iconSmall"></i>
                        2300+ happy eaters
                    </div>
                    <div class="cityFeature">
                        <i class="ion-ios-star iconSmall"></i>
                        110+ top chefs
                    </div>
                    <div class="cityFeature">
                        <i class="ion-social-twitter iconSmall"></i>
                        <a href="#">@omnifood_berlin</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/london.jpg" alt="Lisbon">
                    <h3>London</h3>
                    <div class="cityFeature">
                        <i class="ion-person iconSmall"></i>
                        1200+ happy eaters
                    </div>
                    <div class="cityFeature">
                        <i class="ion-ios-star iconSmall"></i>
                        50+ top chefs
                    </div>
                    <div class="cityFeature">
                        <i class="ion-social-twitter iconSmall"></i>
                        <a href="#">@omnifood_london</a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="sectionTestimonials">
            <div class="row">
                <h2>Our customers can't live without us</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!</blockquote>
                    <cite><img src="resources/img/customer-1.jpg" alt="Customer 1 photo">Alberto Duncan</cite>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!</blockquote>
                    <cite><img src="resources/img/customer-2.jpg" alt="Customer 2 photo">Joana Silva</cite>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!</blockquote>
                    <cite><img src="resources/img/customer-3.jpg" alt="Customer 3 photo">Milton Chapman</cite>
                </div>
            </div>
        </section>
        
        <section class="sectionPlans jsSectionPlans" id="plans">
            <div class="row">
                <h2>Sign up and pricing plans</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="planBox jsWaypoint4">
                        <div>
                            <h3>Premium</h3>
                            <p class="planPrice">$399 <span>/ month</span></p>
                            <p class="planPriceMeal">That's only $13.30 per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>1 meal every day</li>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>Order 24/7</li>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>Access to newest creations</li>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btnFull">Sign Up Now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="planBox">
                        <div>
                            <h3>Pro</h3>
                            <p class="planPrice">$149 <span>/ month</span></p>
                            <p class="planPriceMeal">That's only $14.90 per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>1 meal 10 days/month</li>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>Order 24/7</li>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>Access to newest creations</li>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btnGhost">Sign Up Now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="planBox">
                        <div>
                            <h3>Starter</h3>
                            <p class="planPrice">$19 <span>/ meal</span></p>
                            <p class="planPriceMeal">&nbsp;</p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>1 meal</li>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>Order from 8 am to 12 pm</li>
                                <li><i class="ion-ios-close-empty iconSmall"></i></li>
                                <li><i class="ion-ios-checkmark-empty iconSmall"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btnGhost">Sign Up Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<!--        <section class="sectionForm">-->
        <div class="mapBox">
            
            <div class="map" id="form"></div>
            <div class="formBox">
                <div class="row">
                    <h2>We're happy to hear from you</h2>
                </div>
                <div class="row">
                    <form method="post" action="mailer.php" class="contactForm">
                        <div class="row">
                            <?php
                                if($_GET['success'] == 1) {
                                    echo"<div class=\"formMessages success\">Thank you! Your message has been sent.</div>";
                                } 
                                if($_GET['success'] == -1) {
                                    echo"<div class=\"formMessages error\">Oops ! Your message was not sent. Please try again.</div>";
                                }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="name">Name</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text" name="name" id="name" placeholder="Your name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="email">Email</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="email" name="email" id="email" placeholder="Your e-mail" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="findUs">How did you find us?</label>
                            </div>
                            <div class="col span-2-of-3">
                                <select name="findUs" id="findUs">
                                    <option value="search" selected>Search engine</option>
                                    <option value="friends">Friends</option>
                                    <option value="ad">Advertisement</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Newsletter?</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="checkbox" name="news" id="news" checked> Yes, please.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Drop us a line</label>
                            </div>
                            <div class="col span-2-of-3">
                                <textarea name="message" placeholder="Your message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="Send it!">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!--        </section>-->
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footerNav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="socialLinks">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>Copyright &copy; 2018 - Created by: Nabeel Siddiqui.  All rights reserved.</p>
            </div>
        </footer>
        
    </body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="vendors/js/gmaps.js"></script>
    
</html>