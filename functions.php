<?php
/**
 * SocialPulse360 functions and definitions
 */

function socialpulse360_setup() {
    // إضافة دعم للعنوان التلقائي (SEO)
    add_theme_support('title-tag');
    
    // إضافة دعم للصور البارزة
    add_theme_support('post-thumbnails');

    // تسجيل القائمة الرئيسية للموقع لتتحكم بها من لوحة تحكم ووردبريس
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'socialpulse360'),
    ));
}
add_action('after_setup_theme', 'socialpulse360_setup');

function socialpulse360_scripts() {
    // ربط خط Inter من جوجل
    wp_enqueue_style('socialpulse360-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap', array(), null);
    
    // ربط مكتبة الأيقونات Lucide
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);
    
    // ربط ملف التنسيق الأساسي (style.css) الذي أنشأناه في الخطوة الأولى
    wp_enqueue_style('socialpulse360-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'socialpulse360_scripts');