<?php
/* Template Name: FAQ Page */
get_header(); ?>

<div class="pt-32 pb-20 px-6">
    <!-- FAQ Header -->
    <div class="max-w-3xl mx-auto text-center mb-20">
        <h1 class="text-4xl md:text-6xl font-[800] mb-6">Common <span class="text-gradient">Questions</span></h1>
        <p class="text-gray-400 text-lg">Everything you need to know about our elite growth infrastructure.</p>
    </div>

    <!-- FAQ Accordion Container -->
    <div class="max-w-3xl mx-auto space-y-4">
        
        <!-- Question 1 -->
        <div class="glass rounded-2xl border border-white/5 overflow-hidden transition-all duration-300">
            <button class="faq-toggle w-full p-6 text-left flex justify-between items-center hover:bg-white/5 transition">
                <span class="font-bold text-white">How long does the delivery take?</span>
                <i data-lucide="chevron-down" class="w-5 h-5 text-[#8B5CF6] transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden p-6 pt-0 text-gray-400 text-sm leading-relaxed border-t border-white/5">
                Orders typically begin processing within <span class="text-white font-bold">0-6 hours</span>. The speed depends on the package size, ensuring an organic-looking growth pattern that satisfies platform algorithms.
            </div>
        </div>

        <!-- Question 2 -->
        <div class="glass rounded-2xl border border-white/5 overflow-hidden transition-all duration-300">
            <button class="faq-toggle w-full p-6 text-left flex justify-between items-center hover:bg-white/5 transition">
                <span class="font-bold text-white">Is it safe for my business accounts?</span>
                <i data-lucide="chevron-down" class="w-5 h-5 text-[#8B5CF6] transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden p-6 pt-0 text-gray-400 text-sm leading-relaxed border-t border-white/5">
                Absolutely. SocialPulse360 utilizes high-retention profiles and organic delivery speeds. We do not require your password, ensuring your account remains 100% secure and compliant with US/UK safety standards.
            </div>
        </div>

        <!-- Question 3 -->
        <div class="glass rounded-2xl border border-white/5 overflow-hidden transition-all duration-300">
            <button class="faq-toggle w-full p-6 text-left flex justify-between items-center hover:bg-white/5 transition">
                <span class="font-bold text-white">Do you offer geo-targeted followers?</span>
                <i data-lucide="chevron-down" class="w-5 h-5 text-[#8B5CF6] transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden p-6 pt-0 text-gray-400 text-sm leading-relaxed border-t border-white/5">
                Yes. We specialize in <span class="text-white font-bold">US and UK targeted traffic</span>. Our network allows you to boost your presence within specific demographics to increase your local brand authority.
            </div>
        </div>

        <!-- Question 4 -->
        <div class="glass rounded-2xl border border-white/5 overflow-hidden transition-all duration-300">
            <button class="faq-toggle w-full p-6 text-left flex justify-between items-center hover:bg-white/5 transition">
                <span class="font-bold text-white">What is your refill guarantee?</span>
                <i data-lucide="chevron-down" class="w-5 h-5 text-[#8B5CF6] transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden p-6 pt-0 text-gray-400 text-sm leading-relaxed border-t border-white/5">
                Most of our premium services come with a <span class="text-white font-bold">30-day free refill guarantee</span>. If you experience any drops, our automated system or support team will replenish them instantly.
            </div>
        </div>

    </div>

    <!-- Still have questions? -->
    <div class="mt-20 text-center">
        <p class="text-gray-500 mb-6 italic">Still have unanswered questions?</p>
        <a href="#" class="btn-gradient px-8 py-4 rounded-xl font-bold text-white inline-flex items-center gap-2">
            Contact Support <i data-lucide="message-circle" class="w-5 h-5"></i>
        </a>
    </div>
</div>

<!-- Interactive JS for Accordion -->
<script>
    document.querySelectorAll('.faq-toggle').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            // Toggle visibility
            content.classList.toggle('hidden');
            
            // Rotate icon
            icon.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        });
    });
</script>

<?php get_footer(); ?>