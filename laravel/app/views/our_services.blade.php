@extends('master')

@section('content')
<!-- layout-->
<div id="layout" class="layout-wide">

<!-- Header-->
<header class="section_title">

    <?php echo $widgets['nav']; ?>

    <!-- Info section Title-->
    <div class="container">
        <div class="row-fluid animated fadeInUp delay1">
            <div class="span5">
                <h1>Our Services</h1>
            </div>
            <div class="span7">
                <p>Pellentesque habitant morbi tristique senectus et netus et
                    malesuada fames ac.</p>
            </div>
        </div>
    </div>
    <!-- End Info section Title-->

</header>
<!-- End Header-->

<!-- crumbs-->
<div class="crumbs border_bottom">
    <div class="container">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Our Services</li>
        </ul>
    </div>
</div>
<!-- End crumbs-->

<!-- End content info -->
<section class="content_info">

<!-- Info title-->
<div class="row-fluid info_title animated fadeInUp delay2" id="our_services_container">
    <div class="vertical_line">
        <div class="circle_top"></div>
    </div>
    <div class="info_vertical">
        <h2>Our Process</h2>
        <p>“Every campaign is designed around your business needs”</p>
    </div>
    <div class="vertical_line"></div>

</div>
<!-- End Info title-->

<!-- Info resalt-->
<div class="info_resalt borders">
    <div class="container">
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

<!-- Info resalt-->
<div class="info_resalt borders">
    <div class="container" id="LeadGeneration">
        <div class="row-fluid">
            <div class="span8">
                <h2>Lead Generation</h2>

                <p class="lead">Investomedia can work alongside you to create
                    bespoke lead generation campaigns in house and out.</p>

                <p>We will meet you to discuss your actual needs, be realistic
                    about the results that can be achieved and then work with
                    you to achieve these.</p>

                <div class="row-fluid padding_top_mini"><a href="/contact_us"
                                                           class="button"><i
                            class="icon-envelope-alt"></i> We can help you with Lead Generation</a></div>
            </div>
            <!-- Image animation-->
            <div class="span4 image_resalt">
                <div class="animation">
                    <img src="img/services/3.png" alt="Image">
                </div>
            </div>
            <!-- End Image animation-->
        </div>
    </div>
</div>
<!-- End Info resalt-->

<!-- Info White-->
<div class="info_white">
    <div class="container" id="#1on1MarketingConsultancy">
        <div class="row-fluid">
            <!-- Image animation-->
            <div class="span7 image_resalt">
                <div class="animation_two">
                    <img src="img/services/2.png" alt="Image">
                </div>
            </div>
            <!-- End Image animation-->
            <div class="span5 padding_top">
                <h2>1on1 Marketing consultancy</h2>

                <p class="lead">Don’t judge a man until you've walked two moons
                    in his moccasins</p>

                <p>bring us in for a day or two a month, let us meet your sales
                    team, let’s find out what they need. Investomedia also have
                    day rates. We can come in your offices and work on your
                    marketing in house creating a monthly, quarterly or yearly
                    strategy that suits everyone especially your sales team.</p>

                <div class="row-fluid padding_top_mini"><a href="/contact_us"
                                                           class="button"><i
                            class="icon-envelope-alt"></i> Let us assist your marketing and sales team</a></div>
            </div>
        </div>
    </div>
</div>
<!-- End Info White-->

<!-- Info resalt-->
<div class="info_resalt borders">
    <div class="container" id="#ListManagement">
        <div class="row-fluid">
            <div class="span8">
                <h2>List Management</h2>

                <p class="lead">How much money have you spent on marketing? How
                    many leads have you generated in the past? How big is your
                    list? What is it worth? Short on marketing budget?</p>

                <p>If you have an answer to all of the questions above then we
                    can help you raise money for your marketing needs, get in
                    touch.</p>

                <div class="row-fluid padding_top_mini"><a href="/contact_us"
                                                           class="button"><i
                            class="icon-envelope-alt"></i> We can help your raise money for marketing</a></div>
            </div>
            <!-- Image animation-->
            <div class="span4 image_resalt">
                <div class="animation">
                    <img src="img/services/3.png" alt="Image">
                </div>
            </div>
            <!-- End Image animation-->
        </div>
    </div>
</div>
<!-- End Info resalt-->

<!-- Info White-->
<div class="info_white">
    <div class="container" id="#OurMedia">
        <div class="row-fluid">
            <!-- Image animation-->
            <div class="span7 image_resalt">
                <div class="animation_two">
                    <img src="img/services/2.png" alt="Image">
                </div>
            </div>
            <!-- End Image animation-->
            <div class="span5 padding_top">
                <h2>Our Media</h2>
                <p class="lead">(Will send bits over after for this)</p>
                <p>(Will send bits over after for this)</p>
                <div class="row-fluid padding_top_mini"><a href="/contact_us"
                                                           class="button"><i
                            class="icon-envelope-alt"></i> Want to find out more about our media</a></div>
            </div>
        </div>
    </div>
</div>
<!-- End Info White-->

<!-- Info resalt-->
<div class="info_resalt borders">
    <div class="container" id="#ProductDiscovery">
        <div class="row-fluid">
            <div class="span8">
                <h2>Product discovery</h2>

                <p class="lead">Do you have a sales floor? Are you looking for a
                    new product to sell? </p>

                <p>Please contact us if you are interested Low risk products for
                    your clients. </p>

                <div class="row-fluid padding_top_mini"><a href="/contact_us"
                                                           class="button"><i
                            class="icon-envelope-alt"></i> Let us introduce low risk products to your clients </a></div>
            </div>
            <!-- Image animation-->
            <div class="span4 image_resalt">
                <div class="animation">
                    <img src="img/services/3.png" alt="Image">
                </div>
            </div>
            <!-- End Image animation-->
        </div>
    </div>
</div>
<!-- End Info resalt-->


<!-- Info title-->
<div class="row-fluid info_title animated fadeInUp delay2">
    <div class="vertical_line">
        <div class="circle_top"></div>
    </div>
    <div class="info_vertical">
        <h2>Design Services.</h2>
        <p>Please get in touch if you need any of the following</p>
    </div>
    <div class="vertical_line"></div>

    <i class="icon-dropbox right"></i>
</div>
<!-- End Info title-->

<!-- Tables-->
<section class="info_resalt borders">
    <div class="container">
        <div class="row-fluid">

            <!-- Item table -->
            <div class="span4">
                <div class="item_table">
                    <div class="head_table">
                        <h1>Website Design</h1>
                        <span class="arrow_table"></span>
                    </div>
                    <ul>
                        <li class="color"><i class="icon-check"></i> XHTML/CSS, jQuery</li>
                        <li><i class="icon-check"></i> Corporate Websites</li>
                        <li class="color"><i class="icon-check"></i> Flash Websites</li>
                        <li><i class="icon-check"></i> Online Catalogues</li>
                        <li class="color"><i class="icon-check"></i> Website Maintenance</li>
                    </ul>
                    <a href="#" class="button">We can design your website</a>
                </div>
            </div>
            <!-- End Item table -->

            <!-- Item table -->
            <div class="span4">
                <div class="item_table">
                    <div class="head_table">
                        <span class="arrow_table"></span>
                        <h1>Web Applications</h1>
                    </div>
                    <ul>
                        <li class="color"><i class="icon-check"></i>PHP, MySQL, Ajax</li>
                        <li><i class="icon-check"></i>Custom Made CMS</li>
                        <li class="color"><i class="icon-check"></i>Ecommerce Sites</li>
                        <li><i class="icon-check"></i>Web Portals</li>
                        <li class="color"><i class="icon-check"></i>Applications</li>
                    </ul>
                    <a href="#" class="button">Let us build your web applications</a>
                </div>
            </div>
            <!-- End Item table -->

            <!-- Item table -->
            <div class="span4">
                <div class="item_table">
                    <div class="head_table">
                        <span class="arrow_table"></span>
                        <h1>Creative & Branding</h1>
                    </div>
                    <ul>
                        <li class="color"><i class="icon-check"></i>Branding / Corporate ID</li>
                        <li><i class="icon-check"></i>Brochures</li>
                        <li class="color"><i class="icon-check"></i>Logo Design</li>
                        <li><i class="icon-check"></i>Business Cards</li>
                        <li class="color"><i class="icon-check"></i>Graphic Design</li>
                    </ul>
                    <a href="#" class="button">How can we help with your creative</a>
                </div>
            </div>
            <!-- End Item table -->


        </div>
    </div>
</section>
<!-- End Tables-->

</section>
<!-- End content info-->

<?php echo $widgets['footer']; ?>

</div>
@stop