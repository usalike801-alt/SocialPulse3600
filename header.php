<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
    <style>
        body { background-color: #0B0F17; color: white; margin: 0; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .text-gradient { background: linear-gradient(90deg, #8B5CF6, #EC4899); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .btn-gradient { background: linear-gradient(90deg, #8B5CF6, #EC4899); transition: all 0.3s ease; }
        .btn-gradient:hover { opacity: 0.9; transform: translateY(-2px); box-shadow: 0 10px 20px -10px #8B5CF6; }
        
        /* تنسيق روابط المنيو لتبدو احترافية */
        .flex.gap-8.items-center { list-style: none; padding: 0; margin: 0; }
        .flex.gap-8.items-center li a { color: #D1D5DB; transition: all 0.3s ease; text-decoration: none; font-size: 14px; font-weight: 500; }
        .flex.gap-8.items-center li a:hover { color: white; }
        .current-menu-item a { color: white !important; font-weight: 700 !important; }
    </style>
</head>
<body <?php body_class(); ?>>

    <!-- STICKY NAVIGATION -->
    <nav class="sticky top-0 z-50 glass border-b border-white/10 py-4 px-6 md:px-12 flex justify-between items-center">
        <!-- LOGO -->
        <div class="text-2xl font-[800] tracking-tighter flex items-center gap-2">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2" style="text-decoration: none;">
                <span class="w-8 h-8 btn-gradient rounded-lg flex items-center justify-center italic t