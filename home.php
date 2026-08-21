<?php get_header(); ?>

<div class="pt-32 pb-20 px-6">
    <!-- Blog Header -->
    <div class="max-w-7xl mx-auto text-center mb-20">
        <span class="text-[#8B5CF6] font-bold uppercase tracking-[0.3em] text-[10px]">Knowledge Base</span>
        <h1 class="text-4xl md:text-6xl font-[800] mt-4 mb-6">Growth <span class="text-gradient italic">Insights</span></h1>
        <p class="text-gray-400 max-w-xl mx-auto italic">Master the algorithms with our latest social media marketing strategies.</p>
    </div>

    <!-- Blog Posts Grid -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Dynamic Post Card -->
            <article class="glass rounded-[32px] overflow-hidden border border-white/5 hover:border-[#8B5CF6]/30 transition-all duration-500 group">
                <!-- Post Thumbnail -->
                <div class="aspect-video bg-white/5 overflow-hidden relative">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-700']); ?>
                    <?php else : ?>
                        <div class="w-full h-full flex items-center justify-center text-gray-700 italic">No Image</div>
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B0F17] to-transparent opacity-60"></div>
                </div>

                <!-- Post Content -->
                <div class="p-8">
                    <div class="flex items-center gap-4 mb-4 text-[10px] font-bold uppercase tracking-widest text-gray-500">
                        <span class="text-[#EC4899]"><?php echo get_the_date(); ?></span>
                        <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                        <span><?php the_category(', '); ?></span>
                    </div>
                    
                    <h2 class="text-xl font-bold mb-4 group-hover:text-[#8B5CF6] transition-colors leading-tight">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3">
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </p>

                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-sm font-bold text-white group-hover:gap-4 transition-all">
                        Read Analysis <i data-lucide="arrow-right" class="w-4 h-4 text-[#8B5CF6]"></i>
                    </a>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p class="text-center text-gray-500 col-span-full">Stay tuned! Our experts are crafting new growth strategies.</p>
        <?php endif; ?>

    </div>

    <!-- Pagination -->
    <div class="max-w-7xl mx-auto mt-20 flex justify-center">
        <div class="flex gap-2">
            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '<i data-lucide="chevron-left" class="w-4 h-4"></i>',
                'next_text' => '<i data-lucide="chevron-right" class="w-4 h-4"></i>',
            )); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>