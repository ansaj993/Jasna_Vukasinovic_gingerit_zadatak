<?php get_header();?>

<main>
   <article>
        <?php the_content();?>
   </article>

   <aside>
        <?php dynamic_sidebar('main-sidebar');?>
   </aside>
</main>

<?php get_footer();?>