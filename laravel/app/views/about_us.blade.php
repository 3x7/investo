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
                    <h1>About Us</h1>
                </div>
                <div class="span7">
                    <p>Pellentesque habitant morbi tristique senectus et netus
                        et
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
                <li>About Us</li>
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
            <div class="info_vertical">
                <h2>Let me <span>grow</span> your business</h2>

                <p>“We bring a personal and effective approach to every project
                    we work on, which is why our clients love us and why they
                    keep coming back.”</p>
            </div>
            <div class="vertical_line"></div>
            <i class="icon-coffee left"></i>
        </div>
        <!-- End Info title-->

        <!-- Info -->
        <section class="padding">
            <div class="container">
                <p>Investomedia Ltd is new and refreshing media company looking
                    focusing primarily on Investment and trading. We have been
                    working in this sector over the past 10 years with the last
                    4 years’ experience working in a direct response media
                    agency. </p>

                <div class="row-fluid">
                    <div class="span8">
                        <p>So who is heading this all up?</p>
                        <p>Yep me Karen Castaneda</p>
                        <p>I will take this time to apologise for those million
                            and one phone calls I make to you on a daily basis,
                            any of those I have offended. Before you ask, no I
                            am not related to Carlos Castaneda the famous
                            writer, I do wish I was and Uncle Carlos if I am
                            please do leave my name in your will. Also although
                            I have a very English cockney accent I am Colombian
                            and speak Spanish with a very decent Latina
                            accent. </p>
                        <p>We have worked with all different types of companies
                            and budgets and are completely flexible on how we
                            work with you. Why are we refreshing? Because we
                            know what we are talking about! We won’t waste your
                            time, we won’t over promise and we will deliver. Our
                            relationships are built on solid foundations and our
                            work ethic is second to none. </p>
                    </div>
                    <div class="span4">
                        <img class="img-responsive img-polaroid" src="img/me.jpg" alt="Karen Castaneda">
                    </div>
                </div>

                <div class="row-fluid">

                    <div class="span12">
                        <p>Now the serious bit, why I am I doing this? Firstly for my
                            family especially my daughter Isabella, she needs me and I
                            need her. Secondly because business is in my blood, so is
                            making money and building relationships. My parents taught
                            me what hard work is all about they have owned several
                            businesses and made them successful so I dedicate this to
                            them, my heroes, and my role models.</p>
                        <p>Now you know a bit about me, give me a call and let
                            me know about you, your needs and how I can help
                            you.</p>
                    </div>
                </div>

            </div>
            <!-- End Container-->
        </section>


    </section>
    <!-- End content info-->

    <?php echo $widgets['footer']; ?>

</div>
@stop