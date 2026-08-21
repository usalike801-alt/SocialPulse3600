<?php get_header(); ?>

<!-- HERO SECTION -->
<header class="relative pt-24 pb-32 px-6 text-center overflow-hidden">
    <!-- Background Glow -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-[#8B5CF6] opacity-10 blur-[150px]"></div>
    </div>
    
    <!-- Status Badge -->
    <div class="inline-flex items-center gap-2 bg-white/5 border border-white/10 px-4 py-1.5 rounded-full text-[11px] font-bold uppercase tracking-widest text-gray-300 mb-8">
        <span class="w-2 h-2 bg-[#EC4899] rounded-full animate-ping"></span>
        Instant US & UK Delivery Active
    </div>

    <!-- Main Title -->
    <h1 class="text-5xl md:text-8xl font-[800] tracking-tight leading-[1.1] mb-8 text-white">
        Scale Your Presence <br>
        <span class="text-gradient italic">Instantly & Organically</span>
    </h1>
    
    <p class="text-gray-400 max-w-2xl mx-auto text-lg md:text-xl mb-12 leading-relaxed font-light">
        The ultimate growth infrastructure for US & UK enterprise agencies. High-retention profiles delivered within <span class="text-white font-bold">0-6 hours</span>.
    </p>

    <!-- Buttons -->
    <div class="flex flex-col md:flex-row justify-center items-center gap-5">
        <button class="btn-gradient px-10 py-5 rounded-2xl font-bold text-lg text-white w-full md:w-auto">Get Started Now</button>
        <button class="glass px-10 py-5 rounded-2xl font-bold text-lg text-white hover:bg-white/10 transition w-full md:w-auto">View Our Network</button>
    </div>
</header>

<!-- VALUE PROPS GRID -->
<section class="max-w-7xl mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-4 gap-6">
    <div class="glass p-8 rounded-3xl border border-white/5 hover:border-[#8B5CF6]/30 transition group">
        <div class="w-12 h-12 bg-[#8B5CF6]/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
            <i data-lucide="zap" class="text-[#8B5CF6]"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Instant API</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Processing starts in 0-6 hours via our proprietary elite delivery engine.</p>
    </div>

    <div class="glass p-8 rounded-3xl border border-white/5 hover:border-[#EC4899]/30 transition group">
        <div class="w-12 h-12 bg-[#EC4899]/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
            <i data-lucide="shield-check" class="text-[#EC4899]"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Safe & Secure</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Bank-grade encryption ensuring your brand's safety and algorithm compliance.</p>
    </div>

    <div class="glass p-8 rounded-3xl border border-white/5 hover:border-[#8B5CF6]/30 transition group">
        <div class="w-12 h-12 bg-[#8B5CF6]/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
            <i data-lucide="map-pin" class="text-[#8B5CF6]"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Geo-Targeted</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Authentic profiles specifically from US, UK, and European demographics.</p>
    </div>

    <div class="glass p-8 rounded-3xl border border-white/5 hover:border-[#EC4899]/30 transition group">
        <div class="w-12 h-12 bg-[#EC4899]/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
            <i data-lucide="headset" class="text-[#EC4899]"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">24/7 Priority</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Dedicated account managers for white-label agencies and enterprise clients.</p>
    </div>
</section>

<!-- INTERACTIVE SERVICE SELECTOR -->
<section class="py-24 px-6 bg-white/[0.01]">
    <div class="max-w-4xl mx-auto glass p-8 md:p-16 rounded-[40px] border border-white/10 relative">
        <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center">Customize Your <span class="text-gradient">Growth Package</span></h2>
        
        <div class="space-y-12">
            <!-- Platform Selector -->
            <div>
                <label class="block text-[10px] uppercase tracking-[0.2em] text-gray-500 mb-6 font-bold">1. Select Platform</label>
                <div class="flex flex-wrap gap-3">
                    <button class="px-8 py-3 rounded-xl border border-[#8B5CF6] bg-[#8B5CF6]/10 text-white font-bold text-sm">Instagram</button>
                    <button class="px-8 py-3 rounded-xl border border-white/10 hover:border-white/30 text-gray-400 font-bold text-sm transition">YouTube</button>
                    <button class="px-8 py-3 rounded-xl border border-white/10 hover:border-white/30 text-gray-400 font-bold text-sm transition">Twitter/X</button>
                </div>
            </div>

            <!-- Quantity Slider -->
            <div>
                <div class="flex justify-between items-center mb-6">
                    <label class="block text-[10px] uppercase tracking-[0.2em] text-gray-500 font-bold">2. Choose Quantity</label>
                    <span class="text-[#8B5CF6] font-bold" id="qty-label">50,000 Followers</span>
                </div>
                <input type="range" min="1000" max="100000" step="1000" value="50000" 
                    class="w-full h-1.5 bg-white/10 rounded-lg appearance-none cursor-pointer accent-[#8B5CF6]" id="qty-slider">
            </div>

            <!-- Pricing Footer -->
            <div class="flex flex-col md:flex-row justify-between items-center pt-10 border-t border-white/5 gap-8">
                <div>
                    <span class="text-gray-500 block text-xs uppercase tracking-widest mb-1">Estimated Investment</span>
                    <span class="text-5xl font-[900] text-white italic">$149.<small class="text-xl">99</small></span>
                </div>
                <button class="btn-gradient px-12 py-5 rounded-2xl font-[900] text-lg text-white shadow-2xl hover:scale-105 transition-transform">
                    Deploy Growth Now
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    // Simple Slider Script
    const slider = document.getElementById('qty-slider');
    const label = document.getElementById('qty-label');
    if(slider) {
        slider.addEventListener('input', (e) => {
            const val = parseInt(e.target.value).toLocaleString();
            label.textContent = val + " Followers";
        });
    }
</script>

<?php get_footer(); ?>