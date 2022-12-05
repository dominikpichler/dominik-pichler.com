<?php

if (isset($_POST['submit'])) {
    $to = "info@dominik-pichler.com"; // this is your Email address
    $from = $_POST['Dominik Pichler Web']; // this is the sender's Email address

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "info@domminik-pichler.com";
    $message = "Name: " . $name . "\n\n" . "E-Mail: " . $email . "\n\n" . "Message:" . "\n\n" . $message;

    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Dominik Pichler</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="css/styles-reduced.min.css" rel="stylesheet"/>
    <link href="css/dp.css" rel="stylesheet"/>
    <link href="css/animations.css" rel="stylesheet"/>


</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">

            <svg width="100" viewBox="0 0 168 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.048 56.416C0.682667 59.1893 0 62.4107 0 66.08C0 67.4458 0.0945791 68.7525 0.283737 70H11.7822C11.3514 68.8534 11.136 67.5467 11.136 66.08C11.136 63.3493 11.8827 61.216 13.376 59.68C14.912 58.1013 16.768 57.312 18.944 57.312C21.12 57.312 22.9547 58.1013 24.448 59.68C25.984 61.2587 26.752 63.4133 26.752 66.144C26.752 67.5911 26.5363 68.8764 26.1049 70H37.696V36.64H26.752V53.216C25.6427 51.552 24.1067 50.2293 22.144 49.248C20.224 48.2667 18.0907 47.776 15.744 47.776C12.8 47.776 10.1333 48.5227 7.744 50.016C5.35467 51.5093 3.456 53.6427 2.048 56.416ZM80.2234 70C80.4461 68.7718 80.5575 67.4865 80.5575 66.144C80.5575 62.4747 79.7468 59.2533 78.1255 56.48C76.5042 53.664 74.2855 51.5093 71.4695 50.016C68.6535 48.5227 65.4962 47.776 61.9975 47.776C58.4988 47.776 55.3415 48.5227 52.5255 50.016C49.7095 51.5093 47.4908 53.664 45.8695 56.48C44.2482 59.2533 43.4375 62.4747 43.4375 66.144C43.4375 67.4912 43.5415 68.7765 43.7494 70H55.1056C54.7509 68.8865 54.5735 67.6012 54.5735 66.144C54.5735 63.2427 55.2775 61.0453 56.6855 59.552C58.0935 58.016 59.8642 57.248 61.9975 57.248C64.0882 57.248 65.8375 58.016 67.2455 59.552C68.6962 61.088 69.4215 63.2853 69.4215 66.144C69.4215 67.6012 69.2275 68.8865 68.8395 70H80.2234ZM97.3075 70H86.3635V48.288H97.3075V52.768C98.4168 51.2747 99.8675 50.1013 101.66 49.248C103.451 48.352 105.478 47.904 107.74 47.904C110.428 47.904 112.817 48.48 114.908 49.632C117.041 50.784 118.705 52.4267 119.9 54.56C121.137 52.5973 122.822 50.9973 124.956 49.76C127.089 48.5227 129.414 47.904 131.932 47.904C136.369 47.904 139.889 49.248 142.492 51.936C145.137 54.624 146.46 58.3573 146.46 63.136V70H135.579V64.608C135.579 62.304 134.961 60.5333 133.724 59.296C132.529 58.016 130.865 57.376 128.732 57.376C126.598 57.376 124.913 58.016 123.676 59.296C122.481 60.5333 121.883 62.304 121.883 64.608V70H111.004V64.608C111.004 62.304 110.385 60.5333 109.147 59.296C107.953 58.016 106.289 57.376 104.156 57.376C102.022 57.376 100.337 58.016 99.0995 59.296C97.9048 60.5333 97.3075 62.304 97.3075 64.608V70Z"
                      fill="#85FF9F"/>
                <path d="M157.296 70.512C155.376 70.512 153.797 69.9573 152.56 68.848C151.365 67.696 150.768 66.288 150.768 64.624C150.768 62.9173 151.365 61.488 152.56 60.336C153.797 59.184 155.376 58.608 157.296 58.608C159.173 58.608 160.709 59.184 161.904 60.336C163.141 61.488 163.76 62.9173 163.76 64.624C163.76 66.288 163.141 67.696 161.904 68.848C160.709 69.9573 159.173 70.512 157.296 70.512Z"
                      fill="#85FF9F"/>
            </svg>

        </a>


        <div>


        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">


                <!--  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li> -->
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Work</a></li>

                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100 masthead_content">
        <div class="heading-section">
            <h1 class="heading_home">Hi, I'm Dominik.<br>I'm a Data</h1>

            <div>
                <svg id="logo" width="599" height="96" viewBox="0 0 599 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33.144 93.896C27.256 93.896 21.9654 92.872 17.272 90.824C12.664 88.6907 9.03735 85.7893 6.39202 82.12C3.74669 78.3653 2.38135 74.056 2.29602 69.192H14.712C15.1387 73.3733 16.8454 76.9147 19.832 79.816C22.904 82.632 27.3414 84.04 33.144 84.04C38.6907 84.04 43.0427 82.6747 46.2 79.944C49.4427 77.128 51.064 73.544 51.064 69.192C51.064 65.7787 50.1254 63.0053 48.248 60.872C46.3707 58.7387 44.024 57.1173 41.208 56.008C38.392 54.8987 34.5947 53.704 29.816 52.424C23.928 50.888 19.192 49.352 15.608 47.816C12.1094 46.28 9.08002 43.8907 6.52002 40.648C4.04535 37.32 2.80802 32.8827 2.80802 27.336C2.80802 22.472 4.04535 18.1627 6.52002 14.408C8.99469 10.6533 12.4507 7.75199 16.888 5.70399C21.4107 3.65599 26.5734 2.63199 32.376 2.63199C40.7387 2.63199 47.5654 4.72266 52.856 8.90399C58.232 13.0853 61.2614 18.632 61.944 25.544H49.144C48.7174 22.1307 46.9254 19.144 43.768 16.584C40.6107 13.9387 36.4294 12.616 31.224 12.616C26.36 12.616 22.392 13.896 19.32 16.456C16.248 18.9307 14.712 22.4293 14.712 26.952C14.712 30.1947 15.608 32.84 17.4 34.888C19.2774 36.936 21.5387 38.5147 24.184 39.624C26.9147 40.648 30.712 41.8427 35.576 43.208C41.464 44.8293 46.2 46.4507 49.784 48.072C53.368 49.608 56.44 52.04 59 55.368C61.56 58.6107 62.84 63.048 62.84 68.68C62.84 73.032 61.688 77.128 59.384 80.968C57.08 84.808 53.6667 87.9227 49.144 90.312C44.6214 92.7013 39.288 93.896 33.144 93.896Z" stroke="#85FF9F" stroke-width="4" mask="url(#path-1-outside-1_2_2)"/>
                    <path d="M75.629 48.328C75.629 39.624 77.5917 31.816 81.517 24.904C85.4424 17.9067 90.7757 12.4453 97.517 8.51999C104.344 4.59466 111.896 2.63199 120.173 2.63199C129.901 2.63199 138.392 4.97866 145.645 9.67199C152.898 14.3653 158.189 21.0213 161.517 29.64H147.565C145.09 24.264 141.506 20.1253 136.813 17.224C132.205 14.3227 126.658 12.872 120.173 12.872C113.944 12.872 108.354 14.3227 103.405 17.224C98.4557 20.1253 94.573 24.264 91.757 29.64C88.941 34.9307 87.533 41.16 87.533 48.328C87.533 55.4107 88.941 61.64 91.757 67.016C94.573 72.3067 98.4557 76.4027 103.405 79.304C108.354 82.2053 113.944 83.656 120.173 83.656C126.658 83.656 132.205 82.248 136.813 79.432C141.506 76.5307 145.09 72.392 147.565 67.016H161.517C158.189 75.5493 152.898 82.1627 145.645 86.856C138.392 91.464 129.901 93.768 120.173 93.768C111.896 93.768 104.344 91.848 97.517 88.008C90.7757 84.0827 85.4424 78.664 81.517 71.752C77.5917 64.84 75.629 57.032 75.629 48.328Z" stroke="#85FF9F" stroke-width="4" mask="url(#path-1-outside-1_2_2)"/>
                    <path d="M190.504 3.78399V93H178.856V3.78399H190.504Z" stroke="#85FF9F" stroke-width="4" mask="url(#path-1-outside-1_2_2)"/>
                    <path d="M222.004 13.256V43.08H254.516V52.68H222.004V83.4H258.356V93H210.356V3.65599H258.356V13.256H222.004Z" stroke="#85FF9F" stroke-width="4" mask="url(#path-1-outside-1_2_2)"/>
                    <path d="M346.125 93H334.477L287.629 21.96V93H275.981V3.65599H287.629L334.477 74.568V3.65599H346.125V93Z" stroke="#85FF9F" stroke-width="4" mask="url(#path-1-outside-1_2_2)"/>
                    <path d="M420.893 3.78399V13.256H396.573V93H384.925V13.256H360.477V3.78399H420.893Z" stroke="#85FF9F" stroke-width="4" mask="url(#path-1-outside-1_2_2)"/>
                    <path d="M446.879 3.78399V93H435.231V3.78399H446.879Z" stroke="#85FF9F" stroke-width="4" mask="url(#path-1-outside-1_2_2)"/>
                    <path d="M495.019 93.896C489.131 93.896 483.84 92.872 479.147 90.824C474.539 88.6907 470.912 85.7893 468.267 82.12C465.622 78.3653 464.256 74.056 464.171 69.192H476.587C477.014 73.3733 478.72 76.9147 481.707 79.816C484.779 82.632 489.216 84.04 495.019 84.04C500.566 84.04 504.918 82.6747 508.075 79.944C511.318 77.128 512.939 73.544 512.939 69.192C512.939 65.7787 512 63.0053 510.123 60.872C508.246 58.7387 505.899 57.1173 503.083 56.008C500.267 54.8987 496.47 53.704 491.691 52.424C485.803 50.888 481.067 49.352 477.483 47.816C473.984 46.28 470.955 43.8907 468.395 40.648C465.92 37.32 464.683 32.8827 464.683 27.336C464.683 22.472 465.92 18.1627 468.395 14.408C470.87 10.6533 474.326 7.75199 478.763 5.70399C483.286 3.65599 488.448 2.63199 494.251 2.63199C502.614 2.63199 509.44 4.72266 514.731 8.90399C520.107 13.0853 523.136 18.632 523.819 25.544H511.019C510.592 22.1307 508.8 19.144 505.643 16.584C502.486 13.9387 498.304 12.616 493.099 12.616C488.235 12.616 484.267 13.896 481.195 16.456C478.123 18.9307 476.587 22.4293 476.587 26.952C476.587 30.1947 477.483 32.84 479.275 34.888C481.152 36.936 483.414 38.5147 486.059 39.624C488.79 40.648 492.587 41.8427 497.451 43.208C503.339 44.8293 508.075 46.4507 511.659 48.072C515.243 49.608 518.315 52.04 520.875 55.368C523.435 58.6107 524.715 63.048 524.715 68.68C524.715 73.032 523.563 77.128 521.259 80.968C518.955 84.808 515.542 87.9227 511.019 90.312C506.496 92.7013 501.163 93.896 495.019 93.896Z" stroke="#85FF9F" stroke-width="4" mask="url(#path-1-outside-1_2_2)"/>
                    <path d="M596.768 3.78399V13.256H572.448V93H560.8V13.256H536.352V3.78399H596.768Z" stroke="#85FF9F" stroke-width="4" mask="url(#path-1-outside-1_2_2)"/>
                </svg>


            </div>

        </div>
        <div class="text-home">

            <div class="textbox-home">
                <p class="basic-text">
                    Design and Technology have always been my passions and as a web developer and designer, I get to
                    combine the best of both worlds everyday.
                    Over the years, this allowed me to work with many different clients across multiple industries,
                    ranging from crash-test companies to international supplement brands.
                </p>
            </div>

            <div class="textbox-home">
                <p class="basic-text">

                    I love to design and code beautifully simple things and I'm always looking for new Challenges.
                    <br><br>
                    Whenever I’m not working on projects, you can find me outdoors, climbing mountains and chasing
                    sunsets.
                </p>
            </div>
        </div>


    </div>


</header>

<!-- Projects-->
<section class="projects-section bg-main project-heading" id="projects">
    <div class="container box_underline">
        <h2 class="heading_work">WHAT I DO</h2>
    </div>
</section>
<section class="projects-section bg-main">
    <div class="">
        <!-- Featured Project Row-->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5 work-box animation-box">

            <div class="col-xl-6 col-lg-6">
                <div class="featured-text  text-lg-left work_text-box ">
                    <h3>SET IMPULES THAT MATTER</h3>
                    <p class=" mb-0"><span class="company-name">Boutique Christa</span> is a high fashion boutique for
                        woman's clothing, located in Linz, Austria.
                        <br><br>I was responsible for the <span class="work-keyword">Content-Production</span> and the
                        Management of their <span class="work-keyword">Digital Apperance</span>, including their <span
                                class="work-keyword">Website, Social Media Marketing, SEO/SEA </span> and <span
                                class="work-keyword">Email-/Newsletter Marketing </span>.
                    </p>

                </div>
            </div>

            <div class="col-xl-6 col-lg-6" , id="grid_frame">
                <div class="animation-wrapper">
                    <div class="stagger-visualizer">
                        <div class="dots-wrapper"></div>
                        <div class="cursor color-red"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row align-items-center no-gutters mb-4 mb-lg-5   work-box animation-box">
            <div class="col-xl-6 col-lg-6">
                <div class="stagger2-visualizer"></div>
            </div>


            <div class="col-xl-6 col-lg-6">
                <div class="featured-text  text-lg-left work_text-box">
                    <h3>FIND PATTERNS IN CHAOS</h3>
                    <p class=" mb-0"><span class="company-name">Vegan Power</span> is one of the leading (vegan)
                        supplement brands in Austria.
                        <br><br>I was fortunate to help them developing their new <span
                                class="work-keyword">Onlineshop </span>which eventually increased sales while
                        drastically reducing the maintaince costs.
                        <br>Furthermore, I helped them with their <span
                                class="work-keyword">Online Marketing Campaigns </span> (Social Media & E-Mail) and
                        assisted as an technical <span class="work-keyword">SEO/SEA Consultant</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row align-items-center no-gutters mb-4 mb-lg-5 work-box">
            <div class="col-xl-6 col-lg-6">
                <div class="featured-text  text-lg-left work_text-box">
                    <h3>CONNECT THE DOTS</h3>
                    <p class=" mb-0"><span class="company-name">SELLNER School + Office</span> is a international
                        manufacturer for all kinds of pens, belonging the european market leaders in this sector.
                        <br><br> I got the chance to desgin and develop their entire new <span class="work-keyword">Website</span>.
                        In Addtion, I also took care of the <span class="work-keyword"> Technial SEO</span> parts as
                        well as some <span class="work-keyword">Content-Creation</span> .
                    </p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <!-- particles.js container -->
                <div class="particle-network-animation"></div>



            </div>

        </div>


    </div>
</section>


<!-- Contact--->

<section id="contact">
    <div class="flexbox-contact container">
        <div class="col-lg-6 col-md-12 col-sm-12 contact-container">
            <div class="contact-text">
                <h2> Get in touch</h2>
                <p>
                    Feel free to send me a message anytime.<br>
                    I'd love to talk about you and your projects
                </p>
            </div>
            <div class="contact-details">

                <ul class="contact-list">
                    <i class=""></i>
                    <li><i class="fab fa-github favicon_contact"></i><a target="_blank" style="color: white"
                                                                        href="https://github.com/dominikpichler">@dominikpichler</a>
                    </li>
                    <li><i class="fab fa-linkedin-in favicon_contact"></i><a target="_blank" style="color: white"
                                                                             href="https://linkedin.com/in/dominik-pichler-811827135/">Dominik
                            Pichler</a></li>
                    <li><i class="fas fa-envelope favicon_contact"></i>info[at]dominik-pichler[dot]com</li>
                    <li><i class="fas fa-map-marker-alt favicon_contact"></i>80337 Munich - Germany</li>


                </ul>

            </div>


        </div>

        <div class="col-md-6 col-sm-12">
            <div class="contact-form">
                <form action="" class="contact-form-inner" method="post">
                    <div class="contact-form-personal">
                        <input class="input-name" type="text" id="name" name="name" autocomplete="off" required><br>
                        <label class="label_name" for="name">
                            <span class="content-name">Your Name</span>
                        </label>
                    </div>

                    <div class="contact-form-personal">
                        <input class="input-name" type="email" id="email" name="email" autocomplete="off" required><br>
                        <label class="label_name" for="email">
                            <span class="content-name">Your E-Mail</span>
                        </label>
                    </div>

                    <div class="contact-form-personal">
                        <input class="input-name" type="message" id="message" name="message" autocomplete="off"
                               required><br>

                        <!-- <input class="input-name" type="text" id="message" name="message" autocomplete="off" required><br> -->
                        <label class="label_name" for="message">
                            <span class="content-name">Your Message</span>
                        </label>
                    </div>

                    <div class="btn-container">
                        <input class="btn btn-contact" id="submit" name="submit" type="submit" value="Send Message">
                    </div>

                </form>

            </div>

        </div>


    </div>
</section>


<!-- Footer-->
<footer class="footer small text-center text-white-50">
    <div class="container">Copyright © Dominik Pichler <?php echo date("Y"); ?>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
<script src="js/animations.js">
</script>

</body>
</html>
