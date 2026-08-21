<?php
/* Template Name: About Us */
get_header(); ?>

<div class="pt-32 pb-20 px-6">
    <!-- Hero Section: Brand Narrative -->
    <div class="max-w-4xl mx-auto text-center mb-24">
        <h1 class="text-4xl md:text-6xl font-[800] mb-8">Pioneering the Future of <span class="text-gradient italic">Social Authority</span></h1>
        <p class="text-gray-400 text-lg leading-relaxed font-light">
            SocialPulse360 was founded with one mission: to provide enterprise-grade social growth infrastructure for US & UK agencies that refuse to compromise on quality. We don't just deliver numbers; we deliver credibility.
        </p>
    </div>

    <!-- Core Pillars / Why Us -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mb-32">
        <div class="glass p-10 rounded-[40px] border border-white/5 relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-[#8B5CF6]/10 blur-3xl group-hover:bg-[#8B5CF6]/20 transition"></div>
            <h3 class="text-2xl font-bold mb-4 text-white">99.9% Uptime</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Our proprietary API infrastructure ensures that your orders are processed instantly, 24 hours a day, without delays.</p>
        </div>

        <div class="glass p-10 rounded-[40px] border border-white/5 relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-[#EC4899]/10 blur-3xl group-hover:bg-[#EC4899]/20 transition"></div>
            <h3 class="text-2xl font-bold mb-4 text-white">Algorithm Safe</h3>
            <p class="text-gray-500 text-sm leading-relaxed">We use organic delivery patterns and high-retention profiles that mimic real human behavior to keep your accounts safe.</p>
        </div>

        <div class="glass p-10 rounded-[40px] border border-white/5 relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-white/5 blur-3xl group-hover:bg-white/10 transition"></div>
            <h3 class="text-2xl font-bold mb-4 text-white">Elite Support</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Dedicated account managers based in the US and UK to assist enterprise-level clients with complex scaling needs.</p>
        </div>
    </div>

    <!-- The Quality Difference -->
    <div class="max-w-7xl mx-auto glass p-8 md:p-16 rounded-[50px] border border-white/10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl md:text-5xl font-bold mb-8 leading-tight">Beyond Simple <br> <span class="text-gradient">Social Signals</span></h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center shrink-0">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
                        </div>
                        <p class="text-gray-300"><span class="font-bold text-white">High Retention:</span> Profiles that stay and interact with your brand long-term.</p>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center shrink-0">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
                        </div>
                        <p class="text-gray-300"><span class="font-bold text-white">Geo-Targeting:</span> Specifically selected demographics for local market dominance.</p>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center shrink-0">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
                        </div>
                        <p class="text-gray-300"><span class="font-bold text-white">White Label Ready:</span> Infrastructure built for agencies to resell under their own brand.</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square btn-gradient rounded-full opacity-10 absolute blur-3xl"></div>
                <div class="relative glass p-8 rounded-3xl border border-white/20 rotate-3 hover:rotate-0 transition-transform duration-500">
                    <div class="flex items-center gap-4 mb-6 italic text-sm text-gray-400">
                        <i data-lucide="award" class="text-[#8B5CF6]"></i> Established in 2018
                    </div>
                    <blockquote class="text-xl font-medium leading-relaxed italic text-white">
                        "SocialPulse360 isn't just a provider; they are the backbone of our digital marketing agency's social proof strategy."
                    </blockquote>
                    <div class="mt-8 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/10"></div>
                        <div>
                            <p class="font-bold text-sm">Marcus Reed</p>
                            <p class="text-xs text-gray-500 uppercase tracking-tighter">Director at London Growth Lab</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>