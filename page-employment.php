<?php get_header(); ?>
<section class="employInfo marginContainer">
    <h2 class="employTitle"><?php the_field('employment_infoTitle'); ?></h2>
    <article class="wysiwyg__container">
        <?php the_field('employment_information_data'); ?>
    </article>
    <article class="employInfo__btns">
        <a href="<?php echo the_field('employment_application'); ?>" target="_blank" class="employInfoBtn">Download</a>
        <a href="<?php echo the_field('employment_forms'); ?>" target="_blank" class="employInfoBtn">Load forms</a>
    </article>
</section>
<section class="employPositions marginContainer">
    <h2 class="employPositions__title employTitle"><?php the_field('employment_positionsTitle'); ?></h2>
    <div class="employPositions__Container">

        <?php
        $loop = new WP_Query(array(
            'post_type' => 'positions',
            'orderby' => 'post_id',
            'order' => 'ASC'
        ));
        while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="employPositions__Content">
                <h4><?php the_field('position_name') ?></h4>
                <p><?php the_field('position_info') ?></p>
                <button class="btnPosition" data-position_name="<?php echo get_field('position_name'); ?>" data-modal_responsabilities="<?php echo get_field('modal_responsabilities'); ?>" data-logo="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>">Responsabilities</button>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
    <div class="modalPositionsCon">
    </div>

</section>

<?php get_footer(); ?>