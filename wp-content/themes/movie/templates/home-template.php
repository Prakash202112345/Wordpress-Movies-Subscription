<?php

/**
 * Template Name: home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>


<!-- Slider Start -->
<section id="home" class="iq-main-slider p-0 iq-rtl-direction">
    <div id="home-slider" class="slider m-0 p-0">

        <?php
        // args
        $args = array(
            'numberposts'    => -1,
            'post_type'        => 'slider_movie',
        );
        // query
        $the_query = new WP_Query($args);

        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
            ?>


                <div class="slide slick-bg " style="background-image: url(<?php echo $image[0] ?>);">
                    <div class="container-fluid position-relative h-100">
                        <div class="slider-inner h-100">
                            <div class="row align-items-center iq-ltr-direction h-100 ">
                                <div class="col-xl-6 col-lg-12 col-md-12">
                                    <a href="javascript:void(0);">
                                        <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="streamit">
                                        </div>
                                    </a>
                                    <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft" data-delay-in="0.6"><?php echo the_title(); ?></h1>
                                    <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
                                        <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                                            <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star-half" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <span class="text-white ml-2"><?php the_field('ratng') ?> (lmdb)</span>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 mt-md-3">
                                            <span class="badge badge-secondary p-2"><?php the_field('age_restriction') ?>+</span>
                                            <span class="ml-3"><?php the_field('watching_hours') ?></span>
                                        </div>
                                        <div data-animation-in="fadeInUp" data-delay-in="1.2"><?php echo the_content() ?></div>
                                        <!-- <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                                     
                                    <span class="badge badge-secondary p-2">18+</span>
                                    <span class="ml-3">2 Seasons</span>
                                 </div> -->
                                    </div>

                                    <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                                        <div class="text-primary title starring">
                                            Starring: <span class="text-body"><?php the_field('starring') ?></span>
                                        </div>
                                        <div class="text-primary title genres">
                                            Genres:

                                            <?php
                                            $terms = get_field('genres');
                                            if ($terms) : ?>
                                                <?php foreach ($terms as $term) : ?>
                                                    <span class="text-body"> <?php echo esc_html($term->name); ?>
                                                    </span>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                        </div>
                                        <div class="text-primary title tag">
                                            Tag:
                                            <?php
                                            $terms = get_field('tags');
                                            if ($terms) : ?>
                                                <?php foreach ($terms as $term) : ?>
                                                    <span class="text-body"> <?php echo esc_html($term->name); ?>
                                                    </span>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                        <a href="<?php echo get_permalink(); ?>" class="btn btn-hover iq-button"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                        <a href="show-details.html" class="btn btn-link">More details</a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-12 col-md-12 trailor-video text-center">
                                    <a href="<?php the_field('trailer_iframe_place'); ?>" class="video-open playbtn">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                            <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                                            <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                                        </svg>
                                        <span class="w-trailor">Watch Trailer</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_query();     // Restore global post data stomped by the_post(). 
        ?>




    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
            <circle r="20" cy="22" cx="22" id="test"></circle>
        </symbol>
    </svg>
</section>
<!-- Slider End -->



<!-- MainContent -->
<div class="main-content">
    <section id="iq-favorites">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Latest Movies</h4>
                        <a class="iq-view-all" href="movie-category.html">View All</a>
                    </div>
                    <div class="favorites-contens">
                        <ul class="favorites-slider list-inline  row p-0 mb-0 iq-rtl-direction">

                            <?php
                            // args
                            $args = array(
                                'numberposts'    => -1,
                                'post_type'        => 'movies',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'movie_type', // the custom vocabulary
                                        'field'    => 'slug',                 
                                        'terms'    => array('latest-movies'),      // provide the term slugs
                                    ),
                                ),
                            );
                            // query
                            $the_query = new WP_Query($args);

                            ?>
                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post();
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                                    
                                ?>
                                    <li class="slide-item">

                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="<?php the_field('thumbanil') ?>" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6 class="iq-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title() ?></a></h6>
                                                <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                                    <div class="badge badge-secondary p-1 mr-2"><?php the_field('age_restriction') ?>+</div>
                                                    <span class="text-white"><?php the_field('watching_hours') ?></span>
                                                </div>
                                                <div class="hover-buttons">
                                                    <a href="<?php echo get_permalink(); ?>" role="button" class="btn btn-hover iq-button">
                                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                        <?php the_field('button_label') ?>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li class="share">
                                                        <span><i class="ri-share-fill"></i></span>
                                                        <div class="share-box">
                                                            <div class="d-flex align-items-center">
                                                                <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                                <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span><i class="ri-heart-fill"></i></span>
                                                        <span class="count-box">19+</span>
                                                    </li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </a>
                                    </li>

                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php wp_reset_query();     // Restore global post data stomped by the_post(). 
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="iq-upcoming-movie">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Upcoming Movies</h4>
                        <a class="iq-view-all" href="movie-category.html">View All</a>
                    </div>
                    <div class="upcoming-contens">
                        <ul class="favorites-slider list-inline row p-0 mb-0 iq-rtl-direction">
                            <?php
                            // args
                            $args = array(
                                'numberposts'    => -1,
                                'post_type'        => 'movies',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'movie_type', // the custom vocabulary
                                        'field'    => 'slug',                 
                                        'terms'    => array('upcoming-movies'),      // provide the term slugs
                                    ),
                                ),
                                
                            );
                            // query
                            $the_query = new WP_Query($args);

                            ?>
                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post();
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                                ?>
                                    <li class="slide-item">

                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="<?php the_field('thumbanil') ?>" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6 class="iq-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title() ?></a></h6>
                                                <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                                    <div class="badge badge-secondary p-1 mr-2"><?php the_field('age_restriction') ?>+</div>
                                                    <span class="text-white"><?php the_field('watching_hours') ?></span>
                                                </div>
                                                <div class="hover-buttons">
                                                    <a href="<?php echo get_permalink(); ?>" role="button" class="btn btn-hover iq-button">
                                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                        <?php the_field('button_label') ?>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li class="share">
                                                        <span><i class="ri-share-fill"></i></span>
                                                        <div class="share-box">
                                                            <div class="d-flex align-items-center">
                                                                <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                                <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                                <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span><i class="ri-heart-fill"></i></span>
                                                        <span class="count-box">19+</span>
                                                    </li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </a>
                                    </li>

                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php wp_reset_query();     // Restore global post data stomped by the_post(). 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="iq-topten">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <!-- <h4 class="main-title iq-title topten-title-sm">Top 10 in India</h4> -->
                    </div>
                    <div class="topten-contens">
                        <h4 class="main-title iq-title topten-title">Top 10 in India</h4>
                        <ul id="top-ten-slider" class="list-inline p-0 m-0  d-flex align-items-center iq-rtl-direction">
                            <li class="slick-bg">
                                <a href="movie-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/01.jpg" class="img-fluid w-100" alt="">
                                </a>
                            </li>
                            <li class="slick-bg">
                                <a href="movie-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/02.jpg" class="img-fluid w-100" alt="">
                                </a>
                            </li>
                            <li class="slick-bg">
                                <a href="movie-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/03.jpg" class="img-fluid w-100" alt="">
                                </a>
                            </li>
                            <li class="slick-bg">
                                <a href="movie-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/04.jpg" class="img-fluid w-100" alt="">
                                </a>
                            </li>
                            <li class="slick-bg">
                                <a href="movie-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/05.jpg" class="img-fluid w-100" alt="">
                                </a>
                            </li>
                            <li class="slick-bg">
                                <a href="movie-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/06.jpg" class="img-fluid w-100" alt="">
                                </a>
                            </li>
                        </ul>
                        <div class="vertical_s">
                            <ul id="top-ten-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center iq-rtl-direction">
                                <li>
                                    <div class="block-images position-relative">
                                        <a href="movie-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/01.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                        <div class="block-description">
                                            <h5>The Illusion</h5>
                                            <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                                <div class="badge badge-secondary p-1 mr-2">10+</div>
                                                <span class="text-white">3h 15m</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                                    <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block-images position-relative">
                                        <a href="movie-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/02.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                        <div class="block-description">
                                            <h5>Burning</h5>
                                            <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                                <div class="badge badge-secondary p-1 mr-2">13+</div>
                                                <span class="text-white">2h 20m</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                                    <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block-images position-relative">
                                        <a href="movie-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/03.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                        <div class="block-description">
                                            <h5>Hubby Kubby</h5>
                                            <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                                <div class="badge badge-secondary p-1 mr-2">9+</div>
                                                <span class="text-white">2h 40m</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                                    <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block-images position-relative">
                                        <a href="movie-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/04.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                        <div class="block-description">
                                            <h5>Open Dead Shot</h5>
                                            <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                                <div class="badge badge-secondary p-1 mr-2">16+</div>
                                                <span class="text-white">1h 40m</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                                    <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block-images position-relative">
                                        <a href="movie-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/05.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                        <div class="block-description">
                                            <h5> Sand Dust</h5>
                                            <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                                <div class="badge badge-secondary p-1 mr-2">15+</div>
                                                <span class="text-white">3h</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                                    <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block-images position-relative">
                                        <a href="movie-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-10/06.jpg" class="img-fluid w-100" alt="">
                                        </a>
                                        <div class="block-description">
                                            <h5>The Lost Journey</h5>
                                            <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                                <div class="badge badge-secondary p-1 mr-2">20+</div>
                                                <span class="text-white">2h 15m</span>
                                            </div>
                                            <div class="hover-buttons">
                                                <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                                    <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="iq-suggestede" class="s-margin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Suggested For You</h4>
                        <a class="iq-view-all" href="movie-category.html">View All</a>
                    </div>
                    <div class="suggestede-contens">
                        <ul class="list-inline favorites-slider row p-0 mb-0 iq-rtl-direction">
                            <li class="slide-item">

                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/suggested/01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="movie-details.html">Inside the Sea</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">11+</div>
                                            <span class="text-white">2h 30m</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="slide-item">

                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/suggested/02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="show-details.html">Jumbo Queen</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">9+</div>
                                            <span class="text-white">2 Seasons</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="slide-item">

                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/suggested/03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="movie-details.html">Unknown Land</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">17+</div>
                                            <span class="text-white">2h 30m</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="slide-item">
                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/suggested/04.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="show-details.html">Friends</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">14+</div>
                                            <span class="text-white">10 Seasons</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="slide-item">

                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/suggested/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="movie-details.html">Blood Block</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">13+</div>
                                            <span class="text-white">2h 40m</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="parallex" class="parallax-window">
        <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-center h-100 parallaxt-details">
                <div class="col-lg-4 r-mb-23">
                    <div class="text-left">
                        <a href="javascript:void(0);">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/parallax/parallax-logo.png" class="img-fluid" alt="bailey">
                        </a>
                        <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                            <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                <li><a href="javascript:void(0);" class="text-primary"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                            </ul>
                            <span class="text-white ml-3">9.2 (lmdb)</span>
                        </div>
                        <div class="movie-time d-flex align-items-center mb-3 iq-ltr-direction">
                            <div class="badge badge-secondary mr-3">13+</div>
                            <h6 class="text-white">2h 30m</h6>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        <div class="parallax-buttons">
                            <a href="movie-details.html" class="btn btn-hover">Play Now</a>
                            <a href="movie-details.html" class="btn btn-link">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="parallax-img">
                        <a href="movie-details.html">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/parallax/p1.jpg" class="img-fluid w-100" alt="bailey">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="iq-trending" class="s-margin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Trending</h4>
                    </div>
                    <div class="trending-contens">
                        <ul id="trending-slider-nav" class="list-inline p-0 mb-0 row align-items-center iq-rtl-direction">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="movie-slick position-relative">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/01.jpg" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="movie-slick position-relative">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/02.jpg" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="movie-slick position-relative">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/03.jpg" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="movie-slick position-relative">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/04.jpg" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="movie-slick position-relative">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/05.jpg" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="movie-slick position-relative">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/06.jpg" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <ul id="trending-slider" class="list-inline p-0 m-0  d-flex align-items-center iq-rtl-direction">
                            <li>
                                <div class="tranding-block position-relative" style="background-image: url(images/trending/01.jpg);">
                                    <div class="trending-custom-tab">
                                        <div class="tab-title-info position-relative iq-ltr-direction">
                                            <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center iq-ltr-direction" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="pill" href="#trending-data1" role="tab" aria-selected="true">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data2" role="tab" aria-selected="false">Episodes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data3" role="tab" aria-selected="false">Trailers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data4" role="tab" aria-selected="false">Similar Like This</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="trending-content">
                                            <div id="trending-data1" class="overlay-tab tab-pane fade active show ">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="res-logo">
                                                            <div class="channel-logo">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="streamit">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">the hero camp</h1>

                                                    <div class="d-flex align-items-center text-white text-detail">
                                                        <span class="badge badge-secondary p-3">18+</span>
                                                        <span class="ml-3">3 Seasons</span>
                                                        <span class="trending-year">2020</span>
                                                    </div>
                                                    <div class="d-flex align-items-center series mb-4">
                                                        <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/trending-label.png" class="img-fluid" alt=""></a>
                                                        <span class="text-gold ml-3">#2 in Series Today</span>
                                                    </div>
                                                    <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                    </p>
                                                    <div class="p-btns">
                                                        <div class="d-flex align-items-center p-0">
                                                            <a href="show-details.html" class="btn btn-hover mr-2" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                            <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                                List</a>
                                                        </div>
                                                    </div>
                                                    <div class="trending-list mt-4">
                                                        <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                                Moura, Boyd Holbrook, Joanna</span>
                                                        </div>
                                                        <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                                Action, Thriller, Biography</span>
                                                        </div>
                                                        <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                                Forceful</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data2" class="overlay-tab tab-pane fade ">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="show-details.html" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                    <div class="d-flex align-items-center text-white text-detail mb-4">
                                                        <span class="season_date ml-2">
                                                            2 Seasons
                                                        </span>
                                                        <span class="trending-year">Feb 2019</span>
                                                    </div>
                                                    <div class="iq-custom-select d-inline-block sea-epi">
                                                        <select name="cars" class="form-control season-select">
                                                            <option value="season1">Season 1</option>
                                                            <option value="season2">Season 2</option>
                                                            <option value="season3">Season 3</option>
                                                        </select>
                                                    </div>

                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body ">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">
                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body ">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data3" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data4" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tranding-block position-relative" style="background-image: url(images/trending/02.jpg);">
                                    <div class="trending-custom-tab">
                                        <div class="tab-title-info position-relative">
                                            <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center iq-ltr-direction" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="pill" href="#trending-data5" role="tab" aria-selected="true">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data6" role="tab" aria-selected="false">Episodes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data7" role="tab" aria-selected="false">Trailers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data8" role="tab" aria-selected="false">Similar
                                                        Like This</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="trending-content">
                                            <div id="trending-data5" class="overlay-tab tab-pane fade active show">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="res-logo">
                                                            <div class="channel-logo">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="streamit">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">The Appartment</h1>
                                                    <div class="d-flex align-items-center text-white text-detail">
                                                        <span class="badge badge-secondary p-3">15+</span>
                                                        <span class="ml-3">2 Seasons</span>
                                                        <span class="trending-year">2020</span>
                                                    </div>
                                                    <div class="d-flex align-items-center series mb-4">
                                                        <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/trending-label.png" class="img-fluid" alt=""></a>
                                                        <span class="text-gold ml-3">#2 in Series Today</span>
                                                    </div>
                                                    <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s.
                                                    </p>
                                                    <div class="p-btns">
                                                        <div class="d-flex align-items-center p-0">
                                                            <a href="show-details.html" class="btn btn-hover mr-2" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                            <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                                List</a>
                                                        </div>
                                                    </div>
                                                    <div class="trending-list mt-4">
                                                        <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                                Moura, Boyd Holbrook, Joanna</span>
                                                        </div>
                                                        <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                                Action, Thriller, Biography</span>
                                                        </div>
                                                        <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                                Forceful</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data6" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="show-details.html" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">The Appartment</h1>
                                                    <div class="d-flex align-items-center text-white text-detail mb-4">
                                                        <span class="season_date ml-2">
                                                            2 Seasons
                                                        </span>
                                                        <span class="trending-year">Feb 2019</span>
                                                    </div>

                                                    <div class="iq-custom-select d-inline-block sea-epi">
                                                        <select name="cars" class="form-control season-select">
                                                            <option value="season1">Season 1</option>
                                                            <option value="season2">Season 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data7" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">The Appartment</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data8" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">The Appartment</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tranding-block position-relative" style="background-image: url(images/trending/03.jpg);">
                                    <div class="trending-custom-tab">
                                        <div class="tab-title-info position-relative">
                                            <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center iq-ltr-direction" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="pill" href="#trending-data9" role="tab" aria-selected="true">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data10" role="tab" aria-selected="false">Episodes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data11" role="tab" aria-selected="false">Trailers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data12" role="tab" aria-selected="false">Similar
                                                        Like This</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="trending-content">
                                            <div id="trending-data9" class="overlay-tab tab-pane fade active show">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="res-logo">
                                                            <div class="channel-logo">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="streamit">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase ">the marshal king</h1>
                                                    <div class="d-flex align-items-center text-white text-detail">
                                                        <span class="badge badge-secondary p-3">11+</span>
                                                        <span class="ml-3">3 Seasons</span>
                                                        <span class="trending-year">2020</span>
                                                    </div>
                                                    <div class="d-flex align-items-center series mb-4">
                                                        <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/trending-label.png" class="img-fluid" alt=""></a>
                                                        <span class="text-gold ml-3">#11 in Series Today</span>
                                                    </div>
                                                    <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s.
                                                    </p>
                                                    <div class="p-btns">
                                                        <div class="d-flex align-items-center p-0">
                                                            <a href="show-details.html" class="btn btn-hover mr-2" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                            <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                                List</a>
                                                        </div>
                                                    </div>
                                                    <div class="trending-list mt-4">
                                                        <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                                Moura, Boyd Holbrook, Joanna</span>
                                                        </div>
                                                        <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                                Action, Thriller, Biography</span>
                                                        </div>
                                                        <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                                Forceful</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data10" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="show-details.html" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">the marshal king</h1>
                                                    <div class="d-flex align-items-center text-white text-detail mb-4">
                                                        <span class="season_date ml-2">
                                                            2 Seasons
                                                        </span>
                                                        <span class="trending-year">Feb 2019</span>
                                                    </div>

                                                    <div class="iq-custom-select d-inline-block sea-epi">
                                                        <select name="cars" class="form-control season-select">
                                                            <option value="season1">Season 1</option>
                                                            <option value="season2">Season 2</option>
                                                            <option value="season3">Season 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data11" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">the marshal king</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data12" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">the marshal king</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tranding-block position-relative" style="background-image: url(images/trending/04.jpg);">
                                    <div class="trending-custom-tab">
                                        <div class="tab-title-info position-relative">
                                            <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center iq-ltr-direction" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="pill" href="#trending-data13" role="tab" aria-selected="true">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data14" role="tab" aria-selected="false">Episodes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data15" role="tab" aria-selected="false">Trailers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data16" role="tab" aria-selected="false">Similar
                                                        Like This</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="trending-content">
                                            <div id="trending-data13" class="overlay-tab tab-pane fade active show">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="res-logo">
                                                            <div class="channel-logo">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="streamit">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase ">Dark Zone</h1>
                                                    <div class="d-flex align-items-center text-white text-detail">
                                                        <span class="badge badge-secondary p-3">17+</span>
                                                        <span class="ml-3">1 Season</span>
                                                        <span class="trending-year">2020</span>
                                                    </div>
                                                    <div class="d-flex align-items-center series mb-4">
                                                        <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/trending-label.png" class="img-fluid" alt=""></a>
                                                        <span class="text-gold ml-3">#2 in Series Today</span>
                                                    </div>
                                                    <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s.
                                                    </p>
                                                    <div class="p-btns">
                                                        <div class="d-flex align-items-center p-0">
                                                            <a href="show-details.html" class="btn btn-hover mr-2" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                            <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                                List</a>
                                                        </div>
                                                    </div>
                                                    <div class="trending-list mt-4">
                                                        <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                                Moura, Boyd Holbrook, Joanna</span>
                                                        </div>
                                                        <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                                Action, Thriller, Biography</span>
                                                        </div>
                                                        <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                                Forceful</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data14" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="show-details.html" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Dark Zone</h1>
                                                    <div class="d-flex align-items-center text-white text-detail mb-4">
                                                        <span class="season_date ml-2">
                                                            2 Seasons
                                                        </span>
                                                        <span class="trending-year">Feb 2019</span>
                                                    </div>

                                                    <div class="iq-custom-select d-inline-block sea-epi">
                                                        <select name="cars" class="form-control season-select">
                                                            <option value="season1">Season 1</option>
                                                            <option value="season2">Season 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data15" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Dark Zone</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data16" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Dark Zone</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tranding-block position-relative" style="background-image: url(images/trending/05.jpg);">
                                    <div class="trending-custom-tab">
                                        <div class="tab-title-info position-relative">
                                            <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center iq-ltr-direction
                                          role=" tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="pill" href="#trending-data17" role="tab" aria-selected="true">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data18" role="tab" aria-selected="false">Episodes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data19" role="tab" aria-selected="false">Trailers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data20" role="tab" aria-selected="false">Similar
                                                        Like This</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="trending-content">
                                            <div id="trending-data17" class="overlay-tab tab-pane fade active show">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="res-logo">
                                                            <div class="channel-logo">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="streamit">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Opposites Attract</h1>
                                                    <div class="d-flex align-items-center text-white text-detail">
                                                        <span class="badge badge-secondary p-3">7+</span>
                                                        <span class="ml-3">2 Seasons</span>
                                                        <span class="trending-year">2020</span>
                                                    </div>
                                                    <div class="d-flex align-items-center series mb-4">
                                                        <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/trending-label.png" class="img-fluid" alt=""></a>
                                                        <span class="text-gold ml-3">#2 in Series Today</span>
                                                    </div>
                                                    <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s.
                                                    </p>
                                                    <div class="p-btns">
                                                        <div class="d-flex align-items-center p-0">
                                                            <a href="show-details.html" class="btn btn-hover mr-2" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                            <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                                List</a>
                                                        </div>
                                                    </div>
                                                    <div class="trending-list mt-4">
                                                        <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                                Moura, Boyd Holbrook, Joanna</span>
                                                        </div>
                                                        <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                                Action, Thriller, Biography</span>
                                                        </div>
                                                        <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                                Forceful</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data18" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="show-details.html" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Opposites Attract</h1>
                                                    <div class="d-flex align-items-center text-white text-detail mb-4">
                                                        <span class="season_date ml-2">
                                                            2 Seasons
                                                        </span>
                                                        <span class="trending-year">Feb 2019</span>
                                                    </div>

                                                    <div class="iq-custom-select d-inline-block sea-epi">
                                                        <select name="cars" class="form-control season-select">
                                                            <option value="season1">Season 1</option>
                                                            <option value="season2">Season 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data19" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Opposites Attract</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data20" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Opposites Attract</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tranding-block position-relative" style="background-image: url(images/trending/06.jpg);">
                                    <div class="trending-custom-tab">
                                        <div class="tab-title-info position-relative">
                                            <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center iq-ltr-direction" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="pill" href="#trending-data21" role="tab" aria-selected="true">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data22" role="tab" aria-selected="false">Episodes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data23" role="tab" aria-selected="false">Trailers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#trending-data24" role="tab" aria-selected="false">Similar
                                                        Like This</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="trending-content">
                                            <div id="trending-data21" class="overlay-tab tab-pane fade active show">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="res-logo">
                                                            <div class="channel-logo">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="streamit">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Fire Storm</h1>
                                                    <div class="d-flex align-items-center text-white text-detail">
                                                        <span class="badge badge-secondary p-3">17+</span>
                                                        <span class="ml-3">2 Seasons</span>
                                                        <span class="trending-year">2020</span>
                                                    </div>
                                                    <div class="d-flex align-items-center series mb-4">
                                                        <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri() ?>/assets/images/trending/trending-label.png" class="img-fluid" alt=""></a>
                                                        <span class="text-gold ml-3">#2 in Series Today</span>
                                                    </div>
                                                    <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s.
                                                    </p>
                                                    <div class="p-btns">
                                                        <div class="d-flex align-items-center p-0">
                                                            <a href="show-details.html" class="btn btn-hover mr-2" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                            <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                                List</a>
                                                        </div>
                                                    </div>
                                                    <div class="trending-list mt-4">
                                                        <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                                Moura, Boyd Holbrook, Joanna</span>
                                                        </div>
                                                        <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                                Action, Thriller, Biography</span>
                                                        </div>
                                                        <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                                Forceful</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data22" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="show-details.html" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Fire Storm</h1>
                                                    <div class="d-flex align-items-center text-white text-detail mb-4">
                                                        <span class="season_date ml-2">
                                                            2 Seasons
                                                        </span>
                                                        <span class="trending-year">Feb 2019</span>
                                                    </div>

                                                    <div class="iq-custom-select d-inline-block sea-epi">
                                                        <select name="cars" class="form-control season-select">
                                                            <option value="season1">Season 1</option>
                                                            <option value="season2">Season 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data23" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Fire Storm</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="watch-video.html" target="_blank">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="watch-video.html" target="_blank" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="watch-video.html" target="_blank">Trailer 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="trending-data24" class="overlay-tab tab-pane fade">
                                                <div class="trending-info align-items-center w-100 animated fadeInUp iq-ltr-direction">
                                                    <a href="javascript:void(0);" tabindex="0">
                                                        <div class="channel-logo">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="c-logo" alt="stramit">
                                                        </div>
                                                    </a>
                                                    <h1 class="trending-text big-title text-uppercase">Fire Storm</h1>
                                                    <div class="episodes-contens mt-4">
                                                        <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 mb-0 iq-rtl-direction">
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/01.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 1</a>
                                                                        <span class="text-primary">2.25 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/02.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 2</a>
                                                                        <span class="text-primary">3.23 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/03.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 3</a>
                                                                        <span class="text-primary">2 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/04.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 4</a>
                                                                        <span class="text-primary">1.12 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="e-item">
                                                                <div class="block-image position-relative">
                                                                    <a href="show-details.html">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/episodes/05.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="episode-play-info">
                                                                        <div class="episode-play">
                                                                            <a href="show-details.html" tabindex="0"><i class="ri-play-fill"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="episodes-description text-body">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <a href="show-details.html">Episode 5</a>
                                                                        <span class="text-primary">2.54 m</span>
                                                                    </div>
                                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="iq-tvthrillers" class="s-margin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Recommended For You</h4>
                        <a class="iq-view-all" href="movie-category.html">View All</a>
                    </div>
                    <div class="tvthrillers-contens">
                        <ul class="favorites-slider list-inline row p-0 mb-0 iq-rtl-direction">
                            <li class="slide-item">

                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/tvthrillers/01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="show-details.html">Day of Darkness</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">15+</div>
                                            <span class="text-white">2 Seasons</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="slide-item">

                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/tvthrillers/02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="show-details.html">My True Friends</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">7+</div>
                                            <span class="text-white">2 Seasons</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="slide-item">

                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/tvthrillers/03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="show-details.html">Arrival 1999</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">11+</div>
                                            <span class="text-white">3 Seasons</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="slide-item">

                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/tvthrillers/04.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="show-details.html">Night Mare</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">18+</div>
                                            <span class="text-white">3 Seasons</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="slide-item">

                                <div class="block-images position-relative">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/tvthrillers/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="show-details.html">The Marshal King</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2 iq-ltr-direction">
                                            <div class="badge badge-secondary p-1 mr-2">17+</div>
                                            <span class="text-white">1 Season</span>
                                        </div>
                                        <div class="hover-buttons">
                                            <a href="movie-details.html" role="button" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                                Play Now</a>
                                        </div>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-share-fill"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="rtl-box">
    <button type="button" id="flip" class="btn btn-light rtl-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 20 20" fill="white">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
        </svg>
    </button>
    <div class="rtl-panel" id="panel">
        <ul class="modes">
            <li class="dir-btn" data-mode="rtl" data-active="false" data-value="ltr"><a href="#">LTR</a></li>
            <li class="dir-btn" data-mode="rtl" data-active="true" data-value="rtl"><a href="#">RTL</a></li>
        </ul>
    </div>
</div>














<?php
get_footer();
?>