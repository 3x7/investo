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
                <h1>Testimonials</h1>
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
            <li><a href="/">Home</a></li>
            <li>/</li>
            <li>Testimonials</li>
        </ul>
    </div>
</div>
<!-- End crumbs-->

<!-- End content info -->
<section class="content_info">

<!-- Info title-->
<div class="row-fluid info_title">
    <div class="vertical_line">
        <div class="circle_bottom"></div>
    </div>
    <div class="info_vertical animated">
        <h2>What my clients say</h2>
        <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            <small>Cras ornare sollicitudin. <cite title="Cras ornare sollicitudin.">Cras ornare sollicitudin.</cite></small>
        </blockquote>
        <blockquote>
            Nullam ultricies dignissim orci nec consequat. Vestibulum quis vestibulum purus.
            <small>Suspendisse at dui felis. <cite title="Suspendisse at dui felis.">Suspendisse at dui felis.</cite></small>
        </blockquote>
        <blockquote>
            Vivamus iaculis facilisis arcu, quis pharetra sapien euismod sit amet.
            <small>Magna ut elementum. <cite title="Magna ut elementum.">Magna ut elementum.</cite></small>
        </blockquote>

    </div>

    <div class="vertical_line"></div>
    <i class="icon-comment left"></i>
</div>
<!-- End Info title-->


<!-- testimonials-->
<section class="info_resalt border_top">
    <div class="comments_carousel" id="comments_carousel">
        <ul class="slides">
            <li>
                <div class="image">
                    <img src="img/commnets/1.jpg" alt="Image">
                </div>
                <div class="arrow_coment"></div>
                <div class="name">
                    <h3>Jeny Martinez</h3>
                </div>
                <div class="job">
                    <h3>Social Media</h3>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et
                    malesuada fames ac turpis egestas. Vestibulum tortor quam,
                    feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
            </li>
            <li>
                <div class="image">
                    <img src="img/commnets/2.jpg" alt="Image">
                </div>
                <div class="arrow_coment"></div>
                <div class="name">
                    <h3>Mager retry</h3>
                </div>
                <div class="job">
                    <h3>Development</h3>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et
                    malesuada fames ac turpis egestas. Vestibulum tortor quam,
                    feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
            </li>
            <li>
                <div class="image">
                    <img src="img/commnets/3.jpg" alt="Image">
                </div>
                <div class="arrow_coment"></div>
                <div class="name">
                    <h3>Jertye Falcao</h3>
                </div>
                <div class="job">
                    <h3>Web designer</h3>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et
                    malesuada fames ac turpis egestas. Vestibulum tortor quam,
                    feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
            </li>
        </ul>
    </div>
</section>
<!-- End testimonials-->

</section>
<!-- End content info-->

<?php echo $widgets['footer']; ?>

</div>
<!-- End layout-->
@stop