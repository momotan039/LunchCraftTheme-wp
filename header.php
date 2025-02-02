<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Lunch Craft - Bootstrap 4 Template</title>
    <!--====== Favicon Icon ======-->
    <?php wp_head(); ?>
  </head>
  
  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="<?php echo get_home_url()?>" class="navbar-brand"><h1>Lunch Craft</h1></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">About</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Services</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#showcase">Showcase</a>
              </li>       
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Pricing</a>
              </li>     
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Team</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Blog</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li> 
            </ul>
          </div>
        </div>
      </nav> 
     <?php if(is_home()):get_template_part('parts/hero');endif;?>
    </header>
    <!-- Header Section End --> 