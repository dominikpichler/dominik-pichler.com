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
                <svg id="logo" width="595" height="92" viewBox="0 0 595 92" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path d="M31.144 91.896C25.256 91.896 19.9654 90.872 15.272 88.824C10.664 86.6907 7.03735 83.7893 4.39202 80.12C1.74669 76.3653 0.381354 72.056 0.296021 67.192H12.712C13.1387 71.3733 14.8454 74.9147 17.832 77.816C20.904 80.632 25.3414 82.04 31.144 82.04C36.6907 82.04 41.0427 80.6747 44.2 77.944C47.4427 75.128 49.064 71.544 49.064 67.192C49.064 63.7787 48.1254 61.0053 46.248 58.872C44.3707 56.7387 42.024 55.1173 39.208 54.008C36.392 52.8987 32.5947 51.704 27.816 50.424C21.928 48.888 17.192 47.352 13.608 45.816C10.1094 44.28 7.08002 41.8907 4.52002 38.648C2.04535 35.32 0.808021 30.8827 0.808021 25.336C0.808021 20.472 2.04535 16.1627 4.52002 12.408C6.99469 8.65332 10.4507 5.75199 14.888 3.70399C19.4107 1.65599 24.5734 0.631989 30.376 0.631989C38.7387 0.631989 45.5654 2.72266 50.856 6.90399C56.232 11.0853 59.2614 16.632 59.944 23.544H47.144C46.7174 20.1307 44.9254 17.144 41.768 14.584C38.6107 11.9387 34.4294 10.616 29.224 10.616C24.36 10.616 20.392 11.896 17.32 14.456C14.248 16.9307 12.712 20.4293 12.712 24.952C12.712 28.1947 13.608 30.84 15.4 32.888C17.2774 34.936 19.5387 36.5147 22.184 37.624C24.9147 38.648 28.712 39.8427 33.576 41.208C39.464 42.8293 44.2 44.4507 47.784 46.072C51.368 47.608 54.44 50.04 57 53.368C59.56 56.6107 60.84 61.048 60.84 66.68C60.84 71.032 59.688 75.128 57.384 78.968C55.08 82.808 51.6667 85.9227 47.144 88.312C42.6214 90.7013 37.288 91.896 31.144 91.896Z" stroke="#85FF9F" stroke-width="2" mask="url(#path-1-inside-1_2_2)"/>
                    <path d="M73.629 46.328C73.629 37.624 75.5917 29.816 79.517 22.904C83.4424 15.9067 88.7757 10.4453 95.517 6.51999C102.344 2.59466 109.896 0.631989 118.173 0.631989C127.901 0.631989 136.392 2.97866 143.645 7.67199C150.898 12.3653 156.189 19.0213 159.517 27.64H145.565C143.09 22.264 139.506 18.1253 134.813 15.224C130.205 12.3227 124.658 10.872 118.173 10.872C111.944 10.872 106.354 12.3227 101.405 15.224C96.4557 18.1253 92.573 22.264 89.757 27.64C86.941 32.9307 85.533 39.16 85.533 46.328C85.533 53.4107 86.941 59.64 89.757 65.016C92.573 70.3067 96.4557 74.4027 101.405 77.304C106.354 80.2053 111.944 81.656 118.173 81.656C124.658 81.656 130.205 80.248 134.813 77.432C139.506 74.5307 143.09 70.392 145.565 65.016H159.517C156.189 73.5493 150.898 80.1627 143.645 84.856C136.392 89.464 127.901 91.768 118.173 91.768C109.896 91.768 102.344 89.848 95.517 86.008C88.7757 82.0827 83.4424 76.664 79.517 69.752C75.5917 62.84 73.629 55.032 73.629 46.328Z" stroke="#85FF9F" stroke-width="2" mask="url(#path-1-inside-1_2_2)"/>
                    <path d="M188.504 1.78399V91H176.856V1.78399H188.504Z" stroke="#85FF9F" stroke-width="2" mask="url(#path-1-inside-1_2_2)"/>
                    <path d="M220.004 11.256V41.08H252.516V50.68H220.004V81.4H256.356V91H208.356V1.65599H256.356V11.256H220.004Z" stroke="#85FF9F" stroke-width="2" mask="url(#path-1-inside-1_2_2)"/>
                    <path d="M344.125 91H332.477L285.629 19.96V91H273.981V1.65599H285.629L332.477 72.568V1.65599H344.125V91Z" stroke="#85FF9F" stroke-width="2" mask="url(#path-1-inside-1_2_2)"/>
                    <path d="M418.893 1.78399V11.256H394.573V91H382.925V11.256H358.477V1.78399H418.893Z" stroke="#85FF9F" stroke-width="2" mask="url(#path-1-inside-1_2_2)"/>
                    <path d="M444.879 1.78399V91H433.231V1.78399H444.879Z" stroke="#85FF9F" stroke-width="2" mask="url(#path-1-inside-1_2_2)"/>
                    <path d="M493.019 91.896C487.131 91.896 481.84 90.872 477.147 88.824C472.539 86.6907 468.912 83.7893 466.267 80.12C463.622 76.3653 462.256 72.056 462.171 67.192H474.587C475.014 71.3733 476.72 74.9147 479.707 77.816C482.779 80.632 487.216 82.04 493.019 82.04C498.566 82.04 502.918 80.6747 506.075 77.944C509.318 75.128 510.939 71.544 510.939 67.192C510.939 63.7787 510 61.0053 508.123 58.872C506.246 56.7387 503.899 55.1173 501.083 54.008C498.267 52.8987 494.47 51.704 489.691 50.424C483.803 48.888 479.067 47.352 475.483 45.816C471.984 44.28 468.955 41.8907 466.395 38.648C463.92 35.32 462.683 30.8827 462.683 25.336C462.683 20.472 463.92 16.1627 466.395 12.408C468.87 8.65332 472.326 5.75199 476.763 3.70399C481.286 1.65599 486.448 0.631989 492.251 0.631989C500.614 0.631989 507.44 2.72266 512.731 6.90399C518.107 11.0853 521.136 16.632 521.819 23.544H509.019C508.592 20.1307 506.8 17.144 503.643 14.584C500.486 11.9387 496.304 10.616 491.099 10.616C486.235 10.616 482.267 11.896 479.195 14.456C476.123 16.9307 474.587 20.4293 474.587 24.952C474.587 28.1947 475.483 30.84 477.275 32.888C479.152 34.936 481.414 36.5147 484.059 37.624C486.79 38.648 490.587 39.8427 495.451 41.208C501.339 42.8293 506.075 44.4507 509.659 46.072C513.243 47.608 516.315 50.04 518.875 53.368C521.435 56.6107 522.715 61.048 522.715 66.68C522.715 71.032 521.563 75.128 519.259 78.968C516.955 82.808 513.542 85.9227 509.019 88.312C504.496 90.7013 499.163 91.896 493.019 91.896Z" stroke="#85FF9F" stroke-width="2" mask="url(#path-1-inside-1_2_2)"/>
                    <path d="M594.768 1.78399V11.256H570.448V91H558.8V11.256H534.352V1.78399H594.768Z" stroke="#85FF9F" stroke-width="2" mask="url(#path-1-inside-1_2_2)"/>
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
