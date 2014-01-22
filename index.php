<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Начало</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/custom.css">
        <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    </head>
    <body>
    	<?php include("includes/menu.php"); ?>
        		 <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
							<h2>A bene placito.</h2>
							<blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
							<h2>Regula aurea.</h2>
							<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
							<h2>Dum spiro, spero.</h2>
							<blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-4"></div>
							<h2>Donna nobis pacem.</h2>
							<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-5"></div>
							<h2>Acta Non Verba.</h2>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
			<div class="onepcssgrid-1200 special clearfix">
					<div class="onerow">
				<article class="col12"><h3>Новини</h3></article>
					</div>
					</div>	
			<section id="news">
				<div class="onepcssgrid-1200 inner clearfix">
					<div class="onerow">
				<article class="col3">
				<header>Кукери 2014!</header>				
				<p>First we collect your old tea baggage, in a very responsible and environmentally friendly manner.</p>	
			</article>	
			
			<article class="col2">
				<header>Няма &amp; Кинти</header>
				<p>Cleaning is paramount, so at this point we'll take your bags and rinse the heck out of them.</p>
			</article>	
			
			<article class="col4">
				<header>Аз съм велик</header>
				<p>Having washed the old nonsense out, we'll be needing some new foliage. More leaves please.</p>
			</article>	
			
			<article class="col3 last">
				<header>5 факти за</header>
				<p>The most important part of any tea lover's process; the brewage. Get it in a pot, with hot water.</p>
			</article>	
		</div><!-- end of row -->
				</div>

			</section>
        <?php include("includes/footer.php"); ?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script src="js/main.js"></script>
		<script type="text/javascript">	
			$(function() {
            
                var Page = (function() {

                    var $nav = $( '#nav-dots > span' ),
                        slitslider = $( '#slider' ).slitslider( {
                            onBeforeChange : function( slide, pos ) {

                                $nav.removeClass( 'nav-dot-current' );
                                $nav.eq( pos ).addClass( 'nav-dot-current' );

                            }
                        } ),

                        init = function() {

                            initEvents();
                            
                        },
                        initEvents = function() {

                            $nav.each( function( i ) {
                            
                                $( this ).on( 'click', function( event ) {
                                    
                                    var $dot = $( this );
                                    
                                    if( !slitslider.isActive() ) {

                                        $nav.removeClass( 'nav-dot-current' );
                                        $dot.addClass( 'nav-dot-current' );
                                    
                                    }
                                    
                                    slitslider.jump( i + 1 );
                                    return false;
                                
                                } );
                                
                            } );

                        };

                        return { init : init };

                })();
                Page.init();
            });
$.Slitslider.defaults   = {
    // transitions speed
    speed : 800,
    // if true the item's slices will also animate the opacity value
    optOpacity : false,
    // amount (%) to translate both slices - adjust as necessary
    translateFactor : 230,
    // maximum possible angle
    maxAngle : 25,
    // maximum possible scale
    maxScale : 2,
    // slideshow on / off
    autoplay : true,
    // keyboard navigation
    keyboard : true,
    // time between transitions
    interval : 5000,
    // callbacks
    onBeforeChange : function( slide, idx ) { return false; },
    onAfterChange : function( slide, idx ) { return false; }
};
		</script>
    </body>
</html>