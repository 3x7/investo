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
                <div class="row-fluid">
                    <div class="span12">
			<p>Investomedia Ltd is an approachable and professional marketing consultancy based in London. We are unique in that we not only offer advice on how to get the best from your marketing activity, but we can also deliver the initiatives that this advice identifies.</p> 
		    </div>
		</div>
                <div class="row-fluid">
                    <div class="span12">
			<p>We have one key objective - to work with organisations that don’t have a full internal marketing function, but really need help or advice with how their business, their brand, their products and/or their services are marketed. </p>
		     </div>
		</div>
                <div class="row-fluid">
                    <div class="span12">
			<p>Investomedia Ltd is not incentivised to push a particular marketing initiative. We are about working with our clients either helping them to become better at the areas of marketing that they may not be able to do themselves or taking the whole marketing process off their desks onto ours and then planning and delivering what is needed efficiently, effectively and at the best costs.</p> 
		    </div>
		</div>
                <div class="row-fluid">
                    <div class="span12">
			<p>We have no intention of becoming a traditional marketing “agency” with swanky offices and lots of employees meaning we have high overheads to cover through excessive hourly rates. No thanks; been there and done that. What Investomedia Ltd has is an experienced Marketing and Business development manager who specialises in identifying and delivering your marketing and sales requirements. We also have a team of external associates; specialists in their chosen field, who we call upon as and when they are needed.</p> 
		    </div>
		</div>
                <div class="row-fluid">
                    <div class="span12">
			<p>This is why Investomedia Ltd is a different marketing organisation. We actually add value to the marketing processes of our clients rather than simply doing as we are asked. We know that organisations want professional help and advice with their marketing where someone experienced and consistent invests time in their business and they in return can operate a knowing that they have access to the best team to deliver their marketing.</p>
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
