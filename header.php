<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <?php wp_head(); ?>
    <style>
        .text-gradient { background: linear-gradient(90deg, #8B5CF6, #EC4899); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .glass-card { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.08); }
        @media (max-width: 768px) {
            .mobile-scroll { display: flex; overflow-x: auto; white-space: nowrap; gap: 1.5rem; padding-bottom: 5px; }
            .mobile-scroll::-webkit-scrollbar { display: none; }
        }
    </style>
</head>
<body <?php body_class(); ?> class="bg-[#0B0F17] text-white">

    <nav class="fixed top-0 left-0 right-0 z-[10000] border-b border-white/5 bg-[#0B0F17]/90 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-2 shrink-0">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 no-underline">
                    <div class="w-9 h-9 bg-gradient-to-tr from-[#8B5CF6] to-[#EC4899] rounded-xl flex items-center justify-center font-black italic text-white shadow-lg">S</div>
                    <span class="text-white font-black text-xl tracking-tighter">SocialPulse<span class="text-gradient">360</span></span>
                </a>
            </div>
            
            <!-- Horizontal Menu -->
            <div class="mobile-scroll flex items-center gap-6 md:gap-10 ml-6">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-[12px] md:text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">Home</a>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="text-[12px] md:text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">Services</a>
                <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="text-[12px] md:text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">About us</a>
                <a href="<?php echo esc_url(home_url('/faq')); ?>" class="text-[12px] md:text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">FAQ</a>
                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="text-[12px] md:text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">Contact us</a>
            </div>
        </div>
    </nav>