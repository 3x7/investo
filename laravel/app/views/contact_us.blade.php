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
                <h1>Contact Us</h1>
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
            <li>Contact Us</li>
        </ul>
    </div>
</div>
<!-- End crumbs-->

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
                        <input type="submit" name="Submit" value="Send Message"
                               class="button">
                    </form>
                    <div id="result"></div>
                </div>
                <div class="span6">
                    <p><a href="mailto:enquiry@investomedia.co.uk"><i class="icon-envelope-alt"></i>&nbsp;enquiry@investomedia.co.uk</a></p>
                    <p><i class="icon-phone"></i>07803283515</p>
                    <p>28 Leman Street, London, E1 8EW</p>
                    <p>Company Registration: 08849124</p>
                </div>
            </div>

        </div>
    </div>
    <!-- End Info resalt-->

</section>
<!-- End content info-->

<?php echo $widgets['footer']; ?>

</div>

@stop
