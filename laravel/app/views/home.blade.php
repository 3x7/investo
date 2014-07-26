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
                            <h1 class="animated transparent"><a href="/our_services#LeadGeneration"><span>Lead</span> Generation.</a></h1>
                            <h1 class="animated transparent"><a href="/our_services#1on1MarketingConsultancy"><span>1on1</span>Marketing consultancy.</a></h1>
                            <h1 class="animated transparent"><a href="/our_services#ListManagement"><span>List </span>Management.</a></h1>
                            <h1 class="animated transparent"><a href="/our_services#ProductDiscovery">Product <span>discovery</span>.</a></h1>
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
            <h1 style="font-style: italic;"><span>Bespoke</span> one on one marketing
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
    <div class="row-fluid info_title">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical">
            <h2>Our Services</h2>
            <p>Lead Generation</p>
            <p>1on1 Marketing consultancy</p>
            <p>List Management</p>
            <p>Media buying and planning</p>
            <p>Media Sales</p>
            <p>Design services</p>
            <p>Product discovery</p>
        </div>
        <div class="vertical_line"></div>

        <i class="icon-briefcase left"></i>
    </div>
    <!-- End Info title-->

    <!-- Info resalt-->
    <div class="info_resalt borders">
        <div class="container">
            <div class="info_vertical animated">
                <h2>Facts</h2>
                <h2><span>25</span> - Number of countries we can target worldwide</h2>
                <h2><span>4,000</span> - Average volume of quality Investor leads generated per month</h2>
                <h2><span>£30</span> - Your average spend per quality lead </h2>
                <h2><span>110%</span> - The effort we will put into each and every one of your marketing campaigns</h2>
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
            <h2>Sectors</h2>

            <div class="table-responsive">
                <table class="table table-condensed">

                    <tbody>
                        <tr>
                            <td><i class="icon-ok"></i> Stockbroking</td>
                            <td><i class="icon-ok"></i> Trading</td>
                        </tr>
                        <tr>
                            <td><i class="icon-ok"></i> Seminars</td>
                            <td><i class="icon-ok"></i> EIS</td>
                        </tr>
                        <tr>
                            <td><i class="icon-ok"></i> Alternative Investments</td>
                            <td><i class="icon-ok"></i> Tip Sheets</td>
                        </tr>
                        <tr>
                            <td><i class="icon-ok"></i> Funds</td>
                            <td><i class="icon-ok"></i> Property Investment</td>
                        </tr>
                        <tr>
                            <td><i class="icon-ok"></i> Luxury Travel</td>
                            <td><i class="icon-ok"></i> Signal Software</td>
                        </tr>
                        <tr>
                            <td><i class="icon-ok"></i> Execution only platforms</td>
                            <td><i class="icon-ok"></i> Crowdfunding</td>
                        </tr>
                        <tr>
                            <td><i class="icon-ok"></i> Foreign Exchange</td>
                            <td><i class="icon-ok"></i> New Media</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="vertical_line"></div>

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
