<?php
/* Template Name: Thank You Page */
get_header(); ?>

<div class="pt-32 pb-20 px-6 min-h-[80vh] flex items-center">
    <div class="max-w-4xl mx-auto text-center">
        
        <!-- Success Animation Icon -->
        <div class="mb-12 relative inline-block">
            <div class="absolute inset-0 bg-green-500 opacity-20 blur-2xl animate-pulse"></div>
            <div class="w-24 h-24 bg-green-500/20 border border-green-500/50 rounded-full flex items-center justify-center relative z-10 mx-auto">
                <i data-lucide="check-circle" class="w-12 h-12 text-green-500"></i>
            </div>
        </div>

        <!-- Success Message -->
        <h1 class="text-4xl md:text-7xl font-[800] mb-6 tracking-tight">Order <span class="text-gradient">Confirmed!</span></h1>
        <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-12 leading-relaxed">
            Your growth deployment has been initiated. Our elite network is now processing your request. 
            Estimated start time: <span class="text-white font-bold underline">0 to 6 hours max</span>.
        </p>

        <!-- Order Details Card -->
        <div class="glass p-8 rounded-[40px] border border-white/10 mb-16 relative overflow-hidden">
             <div class="flex flex-col md:flex-row justify-around items-center gap-8">
                <div class="text-center">
                    <span class="text-[10px] uppercase tracking-widest text-gray-500 block mb-2">Order Status</span>
                    <span class="px-4 py-1 bg-blue-500/10 text-blue-400 border border-blue-500/30 rounded-full text-xs font-bold uppercase">Processing</span>
                </div>
                <div class="hidden md:block w-px h-12 bg-white/10"></div>
                <div class="text-center">
                    <span class="text-[10px] uppercase tracking-widest text-gray-500 block mb-2">Delivery Method</span>
                    <span class="text-white font-bold">Organic Drip-Feed</span>
                </div>
                <div class="hidden md:block w-px h-12 bg-white/10"></div>
                <div class="text-center">
                    <span class="text-[10px] uppercase tracking-widest text-gray-500 block mb-2">Support ID</span>
                    <span class="text-white font-bold italic">#SP360-<?php echo rand(1000, 9999); ?></span>
                </div>
             </div>
        </div>

        <!-- Exclusive Offer Banner (The Upsell) -->
        <div class="relative p-1 bg-gradient-to-r from-[#8B5CF6] to-[#EC4899] rounded-[32px] transform hover:scale-[1.02] transition-transform duration-500">
            <div class="bg-[#0B0F17] rounded-[30px] p-8 md:p-12">
                <h3 class="text-2xl font-bold mb-4 italic">Exclusive Loyalty Offer!</h3>
                <p class="text-gray-400 mb-8">Get <span class="text-white font-[900] text-2xl">20% OFF</span> your next order right now. Use this limited-time coupon at checkout:</p>
                
                <div class="inline-flex items-center gap-4 bg-white/5 border border-dashed border-white/30 px-8 py-4 rounded-2xl mb-8">
                    <span class="text-2xl font-mono font-[900] tracking-widest text-gradient" id="couponCode">PULSE20</span>
                    <button onclick="copyCoupon()" class="hover:text-white transition text-gray-500"><i data-lucide="copy" class="w-5 h-5"></i></button>
                </div>

                <div class="flex justify-center">
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="text-sm font-bold text-white border-b border-[#8B5CF6] pb-1 hover:text-[#8B5CF6] transition">Browse more services</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function copyCoupon() {
        const code = document.getElementById('couponCode').innerText;
        navigator.clipboard.writeText(code);
        alert('Coupon code copied to clipboard!');
    }
</script>

<?php get_footer(); ?>