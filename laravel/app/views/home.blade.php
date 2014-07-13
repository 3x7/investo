@extends('master')

@section('content')

<!-- layout-->
<div id="layout" class="layout-wide">

<!-- Header-->
<header class="slide" id="home">

    <?php echo $widgets['nav']; ?>

    <!-- Slide -->
    <div class="camera_wrap" id="slide">

        <!-- Item Slide -->
        <div data-src="img/slide/slides/1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                            <h1 class="animated fadeInDown transparent"><span>Lead</span>
                                Generation.</h1>

                            <p class="animated fadeInUp transparent">We work with you to create lead generation campaigns</p>
                            <a href="/contact_us"
                               class="button animated fadeInUp"><span><i
                                        class="icon-envelope-alt"></i></span>Generate more sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Item Slide -->

        <!-- Item Slide -->
        <div data-src="img/slide/slides/2.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                            <h1 class="animated fadeInDown transparent"><span>1on1</span>Marketing
                                consultancy.</h1>

                            <p class="animated fadeInUp transparent">We can work on your marketing in house</p>
                            <a href="/contact_us"
                               class="button animated fadeInUp"><span><i
                                        class="icon-envelope-alt"></i></span>Expert marketing strategy</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Item Slide -->

        <!-- Item Slide -->
        <div data-src="img/slide/slides/3.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                            <h1 class="animated fadeInDown transparent"><span>List </span>Management.
                            </h1>

                            <p class="animated fadeInUp transparent">We can help you raise
                                money for your marketing needs</p>
                            <a href="/contact_us"
                               class="button animated fadeInUp"><span><i
                                        class="icon-envelope-alt"></i></span> Managed marketing lists</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Item Slide -->

        <!-- Item Slide -->
        <div data-src="img/slide/slides/4.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                            <h1 class="animated fadeInDown transparent"><span>Creative </span> and <span>Technical</span>.</h1>

                            <p class="animated fadeInUp transparent">Design, Development, creative and branding services</p>
                            <a href="/contact_us"
                               class="button animated fadeInUp"><span><i
                                        class="icon-envelope-alt"></i></span> Develop your online presence</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Item Slide -->

        <!-- Item Slide -->
        <div data-src="img/slide/slides/5.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                            <h1 class="animated fadeInDown transparent">Product <span>discovery</span>.
                            </h1>

                            <p class="animated fadeInUp transparent">Introduce Low risk
                                products for your clients.</p>
                            <a href="/contact_us"
                               class="button animated fadeInUp"><span><i
                                        class="icon-envelope-alt"></i></span>We
                                can assist with Product Discovery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Item Slide -->
    </div>
</header>
<!-- End Header-->

<!-- content info -->
<section class="content_info">

    <!-- Info title-->
    <div class="row-fluid info_title animated fadeInUp delay2">
        <div class="vertical_line">
            <div class="circle_top"></div>
        </div>
        <div class="info_vertical animated">
            <h1><span>Bespoke</span> one on one marketing
                <span>management</span> of <span>your product</span> to ensure
                every penny you <span>spend</span> is the best penny you have
                spent.</h1>
        </div>
        <div class="vertical_line"></div>
        <i class="icon-cogs right"></i>
    </div>
    <!-- End Info title-->

    <!-- Info resalt-->
    <div class="info_resalt borders">
        <div class="container">
            <h2>Our Process</h2>

            <p>“Every campaign is designed around your business needs”</p>

            <div class="row text-center service-process">
                <!-- Step 1 -->
                <div class="span3">
                    <div class="thumbnail">
                        <div class="caption-head">
                            <em class="caption-icon icon-lightbulb icon-big"></em>

                            <h2 class="caption-title">Imagine</h2>
                        </div>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="span3">
                    <div class="thumbnail">
                        <div class="caption-head">
                            <em class="caption-icon icon-edit icon-big"></em>

                            <h2 class="caption-title">Create</h2>
                        </div>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="span3">
                    <div class="thumbnail">
                        <div class="caption-head">
                            <em class="caption-icon icon-plane icon-big"></em>

                            <h2 class="caption-title">Launch</h2>
                        </div>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="span3">
                    <div class="thumbnail">
                        <div class="caption-head">
                            <em class="caption-icon icon-thumbs-up icon-big"></em>

                            <h2 class="caption-title">Profit</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Info resalt-->


    <!-- Info title-->
    <div class="row-fluid info_title top_animationd" id="contact">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical animated">
            <h2>Contact Us</h2>

            <p>Give me a call and let me know about you, your needs and how I
                can help you.</p>
        </div>
        <div class="vertical_line"></div>

        <i class="icon-thumbs-up left animated delay1"></i>
    </div>
    <!-- End Info title-->

    <!-- End content info -->
    <section class="">
        <div class="row-fluid">
            <div class="span12">
                <!-- Map area-->
                <section class="map_area">
                    <iframe
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAzezCGXa6tk7tB3zJnLVn4nch9l5loswE&q=28+Leman+Street,London&maptype=roadmap">
                    </iframe>
                </section>
                <!-- End Map area-->
            </div>
        </div>

        <!-- Info resalt-->
        <div class="info_resalt">
            <div class="container">
                <div class="row-fluid">
                    <div class="span6">
                        <h3>Contact Form</h3>

                        <form id="form" action="php/send_mail.php">
                            <input type="text" placeholder="Name" name="Name"
                                   required>
                            <input type="email" placeholder="Email" name="Email"
                                   required>
                            <input type="text" placeholder="Phone" name="Phone"
                                   required>
                            <textarea placeholder="Your Message" name="message"
                                      required></textarea>
                            <input type="submit" name="Submit"
                                   value="Send Message"
                                   class="button">
                        </form>
                        <div id="result"></div>
                    </div>
                    <div class="span6">
                        <h4>Investomedia Limited</h4>

                        <p>28 Leman Street</p>

                        <p>London</p>

                        <p>E1 8EW</p>

                        <p>Company Registration: 08849124</p>

                        <p><a href="mailto:karen@investomedia.co.uk"><i
                                    class="icon-envelope-alt"></i>
                                karen@investomedia.co.uk</a></p>

                        <p><i class="icon-phone"></i> 07800 904011</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Info resalt-->

    </section>
    <!-- End content info-->

</section>
<!-- End content info-->

<?php echo $widgets['footer']; ?>

</div>

@stop
