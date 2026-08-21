<?php
/* Template Name: Contact Us */
get_header(); ?>

<div class="pt-32 pb-20 px-6">
    <!-- Contact Header -->
    <div class="max-w-3xl mx-auto text-center mb-20">
        <h1 class="text-4xl md:text-6xl font-[800] mb-6 italic">Get in <span class="text-gradient">Touch</span></h1>
        <p class="text-gray-400 text-lg leading-relaxed">Our enterprise support team is available 24/7 to assist with your scaling needs across US and UK markets.</p>
    </div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
        
        <!-- Left Side: Contact Methods -->
        <div class="space-y-8">
            <div class="glass p-8 rounded-3xl border border-white/5 flex items-center gap-6 group hover:border-[#8B5CF6]/30 transition">
                <div class="w-14 h-14 bg-[#8B5CF6]/10 rounded-2xl flex items-center justify-center shrink-0">
                    <i data-lucide="mail" class="text-[#8B5CF6]"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg italic">Direct Email</h4>
                    <p class="text-gray-500 text-sm">support@socialpulse360.com</p>
                </div>
            </div>

            <div class="glass p-8 rounded-3xl border border-white/5 flex items-center gap-6 group hover:border-[#229ED9]/30 transition">
                <div class="w-14 h-14 bg-[#229ED9]/10 rounded-2xl flex items-center justify-center shrink-0">
                    <i data-lucide="send" class="text-[#229ED9]"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg italic">Live Telegram</h4>
                    <p class="text-gray-500 text-sm">@SocialPulse360_Support</p>
                </div>
            </div>

            <div class="glass p-8 rounded-3xl border border-white/5 flex items-center gap-6 group hover:border-[#EC4899]/30 transition">
                <div class="w-14 h-14 bg-[#EC4899]/10 rounded-2xl flex items-center justify-center shrink-0">
                    <i data-lucide="map-pin" class="text-[#EC4899]"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg italic">HQ Presence</h4>
                    <p class="text-gray-500 text-sm">London, UK & New York, USA</p>
                </div>
            </div>
        </div>

        <!-- Right Side: Contact Form -->
        <div class="glass p-8 md:p-12 rounded-[40px] border border-white/10 relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-64 h-64 bg-[#8B5CF6]/10 blur-[100px] -z-10"></div>
            
            <form action="#" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-gray-500 mb-3 font-bold">Full Name</label>
                        <input type="text" placeholder="John Doe" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-4 text-white focus:outline-none focus:border-[#8B5CF6] transition">
                    </div>
                    <div>
                        <label class="block text-[10px] uppercase tracking-widest text-gray-500 mb-3 font-bold">Work Email</label>
                        <input type="email" placeholder="john@agency.com" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-4 text-white focus:outline-none focus:border-[#8B5CF6] transition">
                    </div>
                </div>
                
                <div>
                    <label class="block text-[10px] uppercase tracking-widest text-gray-500 mb-3 font-bold">Subject</label>
                    <select class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-4 text-gray-400 focus:outline-none focus:border-[#8B5CF6] transition">
                        <option>General Inquiry</option>
                        <option>Enterprise Packages</option>
                        <option>API Integration</option>
                        <option>Support Request</option>
                    </select>
                </div>

                <div>
                    <label class="block text-[10px] uppercase tracking-widest text-gray-500 mb-3 font-bold">Message</label>
                    <textarea rows="5" placeholder="How can we help your brand grow?" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-4 text-white focus:outline-none focus:border-[#8B5CF6] transition"></textarea>
                </div>

                <button class="btn-gradient w-full py-5 rounded-2xl font-[900] text-lg text-white shadow-2xl">
                    Send Deployment Brief
                </button>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>