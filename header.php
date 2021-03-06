<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">       
        <?php wp_head();?>
        <script type="text/javascript">
           jQuery(document).ready(function($) {
                $('#parallax-section-2').addClass('parallax-banner-2');
                $('.parallax-banner-2').css("background-position","0px 0px");
                $('.parallax-banner-2').height('538');
                $(window).resize(function() {
                    
                    var windowHeight = $(window).height();
                    $('.hero').height( windowHeight );
                    $('.parallax-banner-2').height('538')
                });
            });
        </script>
    </head>
    <body id="mainsite">
        <a id="top"></a>
        <header id="header-section" class="ha-header ha-header-hide">
            <div class="grid-container">
                <div class="ha-header-perspective">
                    <div class="ha-header-front">
                        <div class="grid-20 tablet-grid-20 hide-on-mobile grid-parent">
                            <h1 class="logo"><a href="#top"><img src="<?php echo IMAGES?>/smalllogo.png" alt="logo" height="55" width="44"></a></h1>
                        </div>
                        <nav id="ut-navigation" class="grid-80 tablet-grid-80 hide-on-mobile">
                            <a id="sev-nav1" href="#service">Services</a>
                            <a href="<?php echo site_url('/lab/')?>">LAB</a>
                            <a href="<?php echo site_url('/blog/')?>">Blog</a>
                            <a id="hire1" href="#address-section">Hire Us</a>
                            <a href="#" class="icon"></a>
                        </nav>
                    </div>
                </div>
            </div> 
        </header>
		<header id="header-section1" class="ha-header transparent">
			<div class="grid-container">
                <div class="ha-header-perspective">
                    <div class="ha-header-front">
                        <nav id="ut-navigation" class="grid-100 tablet-grid-100 hide-on-mobile">
                            <a href="#" class="icon1"></a>
                        </nav>
                    </div>
                </div>
            </div>
		</header>
        <div class="clear"></div>
        <section class="hero  parallax-section parallax-background" > 
            <a id="bgndVideo" class="player" data-property="{videoURL:'http://youtu.be/wWmMnc7HPJ0',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}"></a>
            <div class="parallax-overlay parallax-overlay-1"></div>
            <div class="grid-container">  
                <div class="hero-holder home grid-100 tablet-grid-100 mobile-grid-100" >
                    <div class="hero-inner" >
                        <div class="small-head small-header-small small-header-show">
                            <div class="main-logo" ><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo IMAGES?>/biglogo.png" alt="logo" height="133" width="105"></a></div>
                            <div class="nav">
                                <a id="sev-nav2" href="#service">Services</a>
                                <a href="<?php echo site_url('/lab/')?>">LAB</a>
                                <a href="<?php echo site_url('/blog/')?>">Blog</a>
                                <a id="hire2" href="#address-section">Hire Us</a>
                            </div>
                        </div>
                        <div class="hero-title-holder hero-animate-show" ><h1 class="hero-title">Every Brand Has a Story<br/>Let Us Tell You Ours</h1></div>
                        <span class="btn-holder hero-animate-show"><a id="to-about-section" class="hero-btn"></a></span>
                    </div>
                </div>                                                  
            </div>
        </section>
        <div class="clear"></div>
        <div id="main-content" class="wrap">
