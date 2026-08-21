<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
    <style>
        body { background-color: #0B0F17; color: white; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .text-gradient { background: linear-gradient(90deg, #8B5CF6, #EC4899); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .btn-gradient { background: linear-gradient(90deg, #8B5CF6, #EC4899); transition: all 0.3s ease; }
        .btn-gradient:hover { opacity: 0.9; transform: translateY(-2px); box-shadow: 0 10px 20px -10px #8B5CF6; }
        .mega-menu { display: none; }
        .group:hover .mega-menu { display: block; }
    </style>
</head>
<body <?php body_class(); ?>>

    <!-- STICKY NAVIGATION -->
    <nav class="sticky top-0 z-50 glass border-b border-white/10 py-4 px-6 md:px-12 flex justify-between items-center">
        <!-- LOGO -->
        <div class="text-2xl font-[800] tracking-tighter flex items-center gap-2">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
                <span class="w-8 h-8 btn-gradient rounded-lg flex items-center justify-center italic text-white text-sm">S</span>
                <span class="text-white">SocialPulse</span><span class="text-gradient">360</span>
            </a>
        </div>
        
        <!-- NAV LINKS (DESKTOP) -->
        <div class="hidden lg:flex gap-8 items-center text-sm font-medium text-gray-300">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition">Home</a>
            <a href="#" class="hover:text-white transition">About Us</a>
            
            <!-- SERVICES WITH MEGA MENU HOVER -->
            <div class="relative group">
                <button class="hover:text-white flex items-center gap-1">Services <i data-lucide="chevron-down" class="w-4 h-4"></i></button>
                <div class="mega-menu absolute top-full left-[-200px] w-[600px] mt-4 p-6 glass rounded-2xl grid grid-cols-2 gap-6 shadow-2xl border border-white/10">
                    <div>
                        <h4 class="text-[#8B5CF6] font-bold mb-3 flex items-center gap-2 italic">Popular Platforms</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li class="hover:text-white cursor-pointer transition">Instagram Growth</li>
                            <li class="hover:text-white cursor-pointer transition">Facebook Presence</li>
                            <li class="hover:text-white cursor-pointer transition">YouTube Authority</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-[#EC4899] font-bold mb-3 flex items-center gap-2 italic">Enterprise Services</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li class="hover:text-white cursor-pointer transition">Verification Badge</li>
                            <li class="hover:text-white cursor-pointer transition">Auto-Engagement</li>
                        </ul>
                    </div>
                </div>
            </div>

            <a href="#" class="hover:text-white transition">Blog</a>
            <a href="#" class="hover:text-white transition">FAQ</a>
            <a href="#" class="hover:text-white transition">Contact Us</a>
        </div>

        <!-- CTA BUTTON -->
        <button class="btn-gradient px-6 py-2.5 rounded-full text-sm font-bold text-white shadow-lg">Get Started</button>
    </nav>