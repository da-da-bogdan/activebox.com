<?php
    require "includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title><?php echo $config['title']; ?></title>
        <link href="https://fonts.googleapis.com/css?family=Cardo:400i|Open+Sans:400,700|Raleway:300,400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="animate.css">




        <title>ActiveBox</title>
</head>
<body>

<!-- Sprite -->
<svg style="display: none;">

    <symbol id="facebook"  viewBox="0 0 512 512">
        <g>
        <path d="M288,176v-64c0-17.664,14.336-32,32-32h32V0h-64c-53.024,0-96,42.976-96,96v80h-64v80h64v256h96V256h64l32-80H288z"/>
        </g>
    </symbol>

    <symbol id="twitter" viewBox="-21 -81 681.33464 681">
        <g>
            <path d="m200.964844 515.292969c241.050781 0 372.871094-199.703125 372.871094-372.871094 0-5.671875-.117188-11.320313-.371094-16.9375 25.585937-18.5 47.824218-41.585937 65.371094-67.863281-23.480469 10.441406-48.753907 17.460937-75.257813 20.636718 27.054687-16.230468 47.828125-41.894531 57.625-72.488281-25.320313 15.011719-53.363281 25.917969-83.214844 31.808594-23.914062-25.472656-57.964843-41.402344-95.664062-41.402344-72.367188 0-131.058594 58.6875-131.058594 131.03125 0 10.289063 1.152344 20.289063 3.398437 29.882813-108.917968-5.480469-205.503906-57.625-270.132812-136.921875-11.25 19.363281-17.742188 41.863281-17.742188 65.871093 0 45.460938 23.136719 85.605469 58.316407 109.082032-21.5-.660156-41.695313-6.5625-59.351563-16.386719-.019531.550781-.019531 1.085937-.019531 1.671875 0 63.46875 45.171875 116.460938 105.144531 128.46875-11.015625 2.996094-22.605468 4.609375-34.558594 4.609375-8.429687 0-16.648437-.828125-24.632812-2.363281 16.683594 52.070312 65.066406 89.960937 122.425781 91.023437-44.855469 35.15625-101.359375 56.097657-162.769531 56.097657-10.5625 0-21.003906-.605469-31.2617188-1.816407 57.9999998 37.175781 126.8710938 58.871094 200.8867188 58.871094"/>
        </g>
    </symbol>

    <symbol id="linkedin" viewBox="0 0 512 512">
        <g>
            <path d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-293.464844 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0"/>
        </g>
    </symbol>
</svg>

<!-- Header -->
<?php include "includes/header.php" ?>
<!-- Intro -->
<div class="intro">
    <div class="container">
        <div class="intro_inner">
        <h1 class="intro_title wow fadeInLeft">Your Favorite One Page
                Multi Purpose Template</h1>
        <h2 class="intro_subtitle wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur       adipiscing elit. Praesent commodo cursus magna
                vel scelerisque nisl consectetur et.</h2>
        <a class="btn btn-red wow fadeInLeft" href="#">Find Out More</a>
        </div>
    </div>
</div>

<!-- Features -->

<div id="features" class="container">
    <div class="features wow zoomIn">
        <div class="features_item">
            <img class="features_icon" src="css/images/features/img1.png" alt="">
            <h4 class="features_title">Easily Customised</h4>
            <div class="features_text"><p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</p></div>
        </div>

        <div class="features_item">
            <img class="features_icon" src="css/images/features/img2.png" alt="">
            <h4 class="features_title">Responsive REady</h4>
            <div class="features_text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features_item">
            <img class="features_icon" src="css/images/features/img3.png" alt="">
            <h4 class="features_title">Modern Design</h4>
            <div class="features_text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features_item">
            <img class="features_icon" src="css/images/features/img4.png" alt="">
            <h4 class="features_title">Clean Code</h4>
            <div class="features_text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features_item">
            <img class="features_icon" src="css/images/features/img5.png" alt="">
            <h4 class="features_title">Ready to Ship</h4>
            <div class="features_text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>

        <div class="features_item">
            <img class="features_icon" src="css/images/features/img6.png" alt="">
            <h4 class="features_title">Download for Free</h4>
            <div class="features_text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
        </div>
    </div><!-- /.features -->
</div><!-- /.container -->

<!-- Works -->
<div id="works" class="works wow zoomIn">
    <div class="works_item">
        <img class="works_photo" src="css/images/works/Layer%2035.png" alt="">
        <div class="works_content">
            <div class="works_title">Project Name</div>
            <div class="works_text">User Interface Design</div>
        </div>
    </div>
    <div class="works_item">
        <img class="works_photo" src="css/images/works/Layer%2036.png" alt="">
        <div class="works_content">
            <div class="works_title">Project Name</div>
            <div class="works_text">User Interface Design</div>
        </div>
    </div>
    <div class="works_item">
        <img class="works_photo" src="css/images/works/Layer%2037.png" alt="">
        <div class="works_content">
            <div class="works_title">Project Name</div>
            <div class="works_text">User Interface Design</div>
        </div>
    </div>
    <div class="works_item">
        <img class="works_photo" src="css/images/works/Layer%2038.png" alt="">
        <div class="works_content">
            <div class="works_title">Project Name</div>
            <div class="works_text">User Interface Design</div>
        </div>
    </div>
    <div class="works_item">
        <img class="works_photo" src="css/images/works/Layer%2039.png" alt="">
        <div class="works_content">
            <div class="works_title">Project Name</div>
            <div class="works_text">User Interface Design</div>
        </div>
    </div>
    <div class="works_item">
        <img class="works_photo" src="css/images/works/Layer%2040.png" alt="">
        <div class="works_content">
            <div class="works_title">Project Name</div>
            <div class="works_text">User Interface Design</div>
        </div>
    </div>
    <div class="works_item">
        <img class="works_photo" src="css/images/works/Layer%2041.png" alt="">
        <div class="works_content">
            <div class="works_title">Project Name</div>
            <div class="works_text">User Interface Design</div>
        </div>
    </div>
    <div class="works_item">
        <img class="works_photo" src="css/images/works/Layer%2042.png" alt="">
        <div class="works_content">
            <div class="works_title">Project Name</div>
            <div class="works_text">User Interface Design</div>
        </div>
    </div>
</div><!-- works -->

<!-- Team -->

<div id="team" class="team wow bounceInLeft">
    <div class="container">
        <div class="team_inner">

            <div class="team_item">
                <img class="team_photo" src="css/images/team/1.png">
                <div class="team_name">Ruth Woods</div>
                <div class="team_prof">Founder, CEO</div>
                <div class="team_text">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                <div class="social">
                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#linkedin"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="team_item">
                <img class="team_photo" src="css/images/team/2.png">
                <div class="team_name">Timothy Reed</div>
                <div class="team_prof">Co-Founder, Developer</div>
                <div class="team_text">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                <div class="social">
                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#linkedin"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="team_item">
                <img class="team_photo" src="css/images/team/3.png">
                <div class="team_name">Victoria Valdez</div>
                <div class="team_prof">UI Designer</div>
                <div class="team_text">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                <div class="social">
                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#linkedin"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="team_item">
                <img class="team_photo" src="css/images/team/4.png">
                <div class="team_name">Beverly Little</div>
                <div class="team_prof">Data Scientist</div>
                <div class="team_text">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                </div>
                <div class="social">
                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#linkedin"></use>
                        </svg>
                    </a>
                </div>
            </div>

        </div><!-- team_inner -->
    </div><!-- container -->
</div><!-- team -->

<!-- Testimonials -->

<div id="monials" class="reviews">
    <div class="container">

        <div class="reviews_item">
            <div class="reviews_photo">
                <img class="reviews_img" src="css/images/clients/Layer1.jpg" alt="">
            </div>
            <div class="reviews_content">
                <div class="reviews_text">“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam...”</div>
                <div class="reviews_author">Susan Sims, Interaction Designer at XYZ</div>
            </div>
        </div>

    </div><!-- container -->
</div><!-- reviews -->

<!-- Download -->

<div id="download" class="download wow shake">
    <div class="container">
        <h3 class="download_title">Are You Ready to Start? Download Now For Free!</h3>
        <div class="download_text">
            <p>Fusce dapibus, tellus ac cursus commodo</p>
        </div>
        <a class="btn btn-red btn-long" href="#">Download Here</a>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer_inner">
            <div class="footer_block">
                <h4 class="footer_title">Location</h4>
                <div class="footer_text">
                    <address class="footer_address">
                        <div>3481 Melrose Place</div>
                        <div>Beverly Hills, CA 90210</div>
                    </address>
                </div>
            </div>

            <div class="footer_block">
                <h4 class="footer_title">Share with Love</h4>
                <div class="footer_text">
                    <div class="social social-footer">
                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>

                    <a class="social_item" href="#" target="_blank">
                        <svg class="social_icon">
                            <use xlink:href="#linkedin"></use>
                        </svg>
                    </a>
                </div>
                </div>
            </div>

            <div class="footer_block">
                <h4 class="footer_title">About ActiveBox</h4>
                <div class="footer_text">
                    <div class="footer_text">
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
            </div>
        </div><!-- footer_inner -->
    </div><!-- container -->

    <div class="copyright">
         <div class="copyright_text">
             <div>Copyright © 2015 ActiveBox. All Rights Reserved</div>
             <div>Made <span>by Kamal Chaneman</span></div>
         </div>
    </div>
</footer>







</body>
</html>
