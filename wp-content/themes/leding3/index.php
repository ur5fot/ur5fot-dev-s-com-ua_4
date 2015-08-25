<!DOCTYPE HTML>
<html lang="ru">

<head>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- <title>Печи для пицы</title> -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- авто префикс к css3 -->
    <script src="<?php bloginfo('template_directory'); ?>/js/prefixfree.min.js"></script>
    <!-- Important Owl stylesheet -->
    <!--  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/owl.carousel.css">
  
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/owl.theme.css"> -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/owl.carousel2/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/collagePlus/css/transitions.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <!--скрипт для старых браузеров IE-->
    <!--[if lt IE 9]>
     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="topLine">
            <div class="container">
                <ul class="menu_main">
                    <li class="user">
                        <?php echo get_post_meta('37', "name", true); ?>
                    </li>
                    <li class="userTelEmail"><i class="tel"></i>
                        <a href="tel:<?php echo get_post_meta('37', " tel ", true); ?>">
                            <?php echo get_post_meta('37', "tel", true); ?>
                        </a>
                    </li class="userTelEmail">
                    <li><i class="email"></i>
                        <a href="mailto:<?php bloginfo('admin_email'); ?>">
                            <?php bloginfo('admin_email'); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </header>
    <main>
        <div class="name">
            <div class="container">
                <!-- <figure>Логотип</figure> -->
                <div class="nameTitle">
                    <h1>
            <?php echo get_post_meta('191', "nameTitle1", true); ?><br>
            <span><?php echo get_post_meta('191', "nameTitle2", true); ?></span>
          </h1>
                </div>
                <div class="nameDescription">
                    <?php echo get_post_meta('191', "nameDescription1", true); ?>
                        <p>
                            <?php echo get_post_meta('191', "nameDescription2", true); ?>
                        </p>
                </div>
                <!--  <div class="nameContact">
          <ul>
            <h2>
                    <?php 
                        $post = get_post( $post_37 = 37); // Записываем все данные записи 1 в объект $post
                        echo  $title = $post->post_title;  // Выводим заголовок записи;
                    ?>
                    
                </h2>
            <p>
              <?php 
                        $post = get_post($post_37 = 37); // Записываем все данные записи 1 в объект $post
                        echo $title = $post->post_content; // Выводим  запись;
                    ?>
            </p>
            <li><i class="tel"></i>
              <a href="tel:<?php echo get_post_meta('37', " tel ", true); ?>">
                <?php echo get_post_meta('37', "tel", true); ?>
              </a>
            </li>
            <li><i class="email"></i>
              <a href="mailto:<?php bloginfo('admin_email'); ?>">
                <?php bloginfo('admin_email'); ?>
              </a>
            </li>
            <li>
              <?php echo get_post_meta('37', "name", true); ?>
            </li>
          </ul>
        </div> -->
            </div>
        </div>
        <!-- <nav>
        <div class="container">
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">О Нас</a></li>
                <li><a href="#">Контакты</a></li>
           </ul>
        </div>
    </nav> -->
        <article class="benefit">
            <div class="container">
                <h2> <?php echo get_cat_name(3);?></h2>
                <?php echo category_description(3);?>
                    <!--   <div id="owl-demo">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php if ( in_category('3') ) { ?>
                <section>
                  <div class="item">
                    <?php the_post_thumbnail(medium); ?>
                      <h3><?php the_title(); ?></h3> 
                      <?php the_content(); ?>
                  </div>
                </section>
                <?php } ?>
                  <?php endwhile; else: ?>
                    <?php endif; ?>
          </div> -->
                    <div>
                        <div class="owl-carousel">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <?php if ( in_category('3') ) { ?>
                                    <div>
                                        <?php the_post_thumbnail(medium); ?>
                                            <!--  <h3><?php the_title(); ?></h3> -->
                                            <!-- <?php the_content(); ?> -->
                                    </div>
                                    <?php } ?>
                                        <?php endwhile; else: ?>
                                            <?php endif; ?>
                        </div>
                        <p class="benefitDescription">
                            <?php 
                        $post = get_post($post_201 = 201); // Записываем все данные записи 1 в объект $post
                        echo $title = $post->post_content; // Выводим  запись;
                      ?>
                        </p>
                    </div>
            </div>
        </article>
        <article class="foto">
            <div class="container">
                <h2> <?php echo get_cat_name(4);?></h2>
                <?php echo category_description(4);?>
                    <div class="Collage">
                        <img  src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/galliri1.png" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/galliri1.png" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/galliri1.png" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/galliri1.png" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/galliri1.png" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt=""><img  src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt="">
                        </div>
                        <!-- <div class="mosaicflowMain "> -->
                        <!-- <div class="clearfix mosaicflow ">
              <div class="mosaicflow__item">
                <img width="480" height="362" src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="480" height="362" src="<?php bloginfo('template_directory'); ?>/img/foto/galliri1.png" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="480" height="362" src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="480" height="362" src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="480" height="362" src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/foto/galliri1.png" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="480" height="362" src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="480" height="362" src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/foto/galliri1.png" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="480" height="362" src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="480" height="362" src="<?php bloginfo('template_directory'); ?>/img/foto/31736756-001.jpg" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/foto/galliri1.png" alt="">
              </div>
              <div class="mosaicflow__item">
                <img width="604" height="403" src="<?php bloginfo('template_directory'); ?>/img/UKRt3jS_R0I-olivia.jpg" alt="">
              </div>
            </div>
          </div> -->
                        <!--  <ul class="gamma-gallery">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( in_category('4') ) { ?>
                  <li>
                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
                    <div data-alt="<?php the_content(); ?>" data-description="<h3><?php the_title(); ?></h3>" data-max-width="1200" data-max-height="1350">
                      <div data-src="<?php echo $image_url[0]; ?>"></div>
                      <noscript>
                        <img src="<?php echo $image_url[0]; ?>" alt="<?php the_content(); ?>" />
                      </noscript>
                    </div>
                  </li>
                  <?php } ?>
                    <?php endwhile; else: ?>
                      <?php endif; ?>
          <ul> -->
                    <!-- </div> -->
        </article>
        <article class="clients">
            <div class="container">
                <h2> <?php echo get_cat_name(2);?></h2>
                <?php echo category_description(2);?>
                    <div class="clearfix">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php if ( in_category('2') ) { ?>
                                <section>
                                    <div class="item">
                                        <?php the_post_thumbnail(medium); ?>
                                            <h3><?php the_title(); ?></h3>
                                            <?php the_content(); ?>
                                                <a href="<?php echo get_post_meta($post->ID, 'clients_url', true); ?>" target="_blank">
                                                    <?php echo get_post_meta($post->ID, 'clients_url_name', true); ?>
                                                </a>
                                    </div>
                                </section>
                                <?php } ?>
                                    <?php endwhile; else: ?>
                                        <?php endif; ?>
                    </div>
                    <a class="clientsUp" href="#">Наверх&gt;</a>
                    <div class="footer">
                        Odessa 2015
                    </div>
            </div>
        </article>
        <!-- <div class="name-end">
      <div class="container">
        <div class="nameTitle">
          <h1><?php bloginfo('name'); ?></h1>
          <p>
            <?php bloginfo('description'); ?>
          </p>
        </div>
        <div class="nameContact">
          <ul>
            <h2>
                    <?php 
                        $post = get_post( $post_37 = 37); // Записываем все данные записи 1 в объект $post
                        echo  $title = $post->post_title;  // Выводим заголовок записи;
                    ?>
                </h2>
            <p>
              <?php 
                        $post = get_post($post_37 = 37); // Записываем все данные записи 1 в объект $post
                        echo $title = $post->post_content; // Выводим  запись;
                    ?>
            </p>
            <li><i class="tel"></i>
              <a href="tel:<?php echo get_post_meta('37', " tel ", true); ?>">
                <?php echo get_post_meta('37', "tel", true); ?>
              </a>
            </li>
            <li><i class="email"></i>
              <a href="mailto:<?php bloginfo('admin_email'); ?>">
                <?php bloginfo('admin_email'); ?>
              </a>
            </li>
            <li>
              <?php echo get_post_meta('37', "name", true); ?>
            </li>
          </ul>
        </div>
      </div>
    </div> -->
        <!-- <article>
    <div class="container">
        <h2>Наши клиенты</h2>    
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
 
        <section>
           <p>здесь могут быть похожие записи, слайдер, баннеры, миниатюры и т.д...</p>
        </section>
    </div>
</article> -->
    </main>
    <!--  jQuery 1.7+  
   <script src="js/jquery-1.9.1.min.js"></script>-->
    <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- Include js plugin
  <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script> -->
    <script>
    // $(document).ready(function() {

    //   $("#owl-demo").owlCarousel({

    //     autoPlay: false, //Set AutoPlay to 3 seconds

    //     items: 3,
    //     itemsDesktop: [1199, 3],
    //     autoHeight:  false,
    //     margin:9,
    //     pagination : false,
    //     lazyLoad:  true ,
    //     addClassActive : true ,
    //     itemsDesktopSmall: [979, 3]

    //   });
    // });
    </script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/owl.carousel2/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 9,
            nav: false,
            stagePadding: 100,
            // startPosition: 100,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    stagePadding: 33
                },
                600: {
                    items: 2
                },
                700: {
                    items: 3
                }
            }
        })
    });
    </script>
    <!-- галирея временно удалить  -->
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/mosaicflow/jquery.mosaicflow.min.js"></script>
    <script type="text/javascript">
    // $('#mycontainer').mosaicflow({
    //   itemSelector: '.item',
    //   minItemWidth: 300



    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
    </script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/collagePlus/jquery.collagePlus.min.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
       $('.Collage').collagePlus(
        {
            /*
             * The ideal height you want your row to be. It won't set it exactly to this as
             * plugin adjusts the row height to get the correct width
             */
            // 'targetHeight'    : 400,

            /*
             * how quickly you want images to fade in once ready can be in ms, "slow" or "fast"
             * This is only used in the default fade in effect. Timing of the other effects is
             * controlled in CSS
             */
            'fadeSpeed'       : "slow",

            /*
             * which effect you want to use for revealing the images (note CSS3 browsers only),
             * Options are effect-1 to effect-6 but you can also code your own
             * Default is the safest option for supporting older browsers
             */
            // 'effect'          : 'effect-1',

            /*
             * vertical: effects applied per row to give the impression of descending appearance
             * horizontal: effects applied in order of appearance in the row to give a horizontal appearance
             */
            // 'direction'       : 'horizontal',

            /*
            * Sometimes there is just one image on the last row and it gets blown up to a huge size to fit the
            * parent div width. To stop this behaviour, set this to true
            */
            'allowPartialLastRow'       : false
        }
    );
    });
    </script>
    <!-- menu -->
    <?php wp_footer(); ?>
</body>

</html>
