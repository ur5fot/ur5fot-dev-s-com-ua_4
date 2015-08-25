<?php

// Отключаем админ панель для всех
if (!current_user_can('administrator')):
  show_admin_bar(false);
endif;

remove_action(  'wp_head', 'rss_link');  
remove_action(  'wp_head', 'wp_generator');  

function true_remove_default_widget() {
    unregister_widget('WP_Widget_Archives'); // Архивы
    unregister_widget('WP_Widget_Calendar'); // Календарь
    unregister_widget('WP_Widget_Categories'); // Рубрики
    unregister_widget('WP_Widget_Meta'); // Мета
    unregister_widget('WP_Widget_Pages'); // Страницы
    unregister_widget('WP_Widget_Recent_Comments'); // Свежие комментарии
    unregister_widget('WP_Widget_Recent_Posts'); // Свежие записи
    unregister_widget('WP_Widget_RSS'); // RSS
    unregister_widget('WP_Widget_Search'); // Поиск
    unregister_widget('WP_Widget_Tag_Cloud'); // Облако меток
    unregister_widget('WP_Widget_Text'); // Текст
    unregister_widget('WP_Nav_Menu_Widget'); // Произвольное меню
}
 
add_action( 'widgets_init', 'true_remove_default_widget', 20 );





add_theme_support( 'post-thumbnails' ); 

?>