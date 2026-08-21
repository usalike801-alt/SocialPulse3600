<!-- FOOTER SECTION -->
    <footer class="py-20 px-6 border-t border-white/10 mt-20">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
            <!-- BRAND LOGO & DESCRIPTION -->
            <div class="text-center md:text-left max-w-xs">
                <div class="text-2xl font-[800] tracking-tighter flex items-center justify-center md:justify-start gap-2 mb-4">
                    <span class="w-8 h-8 btn-gradient rounded-lg flex items-center justify-center italic text-white text-sm">S</span>
                    <span class="text-white">SocialPulse</span><span class="text-gradient">360</span>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Premium social growth solutions for high-end agencies and enterprise businesses in the US and UK markets.
                </p>
            </div>

            <!-- QUICK LINKS -->
            <div class="flex flex-wrap justify-center gap-8 text-sm font-medium text-gray-400">
                <a href="#" class="hover:text-white transition">Telegram Support</a>
                <a href="#" class="hover:text-[#8B5CF6] transition">Privacy Policy</a>
                <a href="#" class="hover:text-[#EC4899] transition">Terms of Service</a>
            </div>

            <!-- LIVE STATUS -->
            <div class="flex items-center gap-2 bg-white/5 border border-white/10 px-4 py-2 rounded-full text-[10px] font-bold uppercase tracking-widest">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                API Server: Online
            </div>
        </div>

        <!-- COPYRIGHT -->
        <div class="mt-16 text-center text-gray-600 text-[12px]">
            &copy; <?php echo date('Y'); ?> SocialPulse360. All rights reserved. Built for elite growth.
        </div>
    </footer>

    <?php wp_footer(); ?>
    
    <!-- INITIALIZE ICONS -->
    <script>
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    </script>
</body>
</html>