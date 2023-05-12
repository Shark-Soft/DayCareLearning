<?php get_header(); ?>
<section class="employInfo marginContainer">
    <h2 class="employTitle"><?php the_field('employment_infoTitle'); ?></h2>
    <article class="wysiwyg__container">
        <?php the_field('employment_information_data'); ?>
        <!-- <article class="employInfo__req">
            <p class="employInfo_subTitle">Requirements:</p>
            <ul>
                <li>Decisiveness, patience, and stamina to chase after, lift, or carry children</li>
                <li>Exceptional communication, teaching, and interpersonal skills</li>
                <li>Strong understanding of stages of childhood development</li>
                <li>Attentiveness to the needs and safety of children</li>
                <li>Caring and compassionate attitude</li>
                <li>High School Diploma or equivalent</li>
                <li>A valid driver’s license</li>
                <li>Record of immunizations and ability to pass a background check</li>
                <li>Additional licenses, certifications, or training may be beneficial or required</li>
                <li>Co- director will have additional requirements</li>
            </ul>
        </article>
        <article class="employInfo__thanks">
            <p>Thank you for interest in becoming part of our family at New Generation Daycare and Learning Center LLC.</p>
            <p>To apply for current openings download and complete the application along with resume and email to: info@newgdaycare.com</p>
            <p>(In-person inquiries will not be accepted)</p>
        </article> -->
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

    <!-- <article class="ourPrograms__modal">
        <div class="modalContent">
            <div class="modalContent__close">x</div>
            <h2>Positions Available</h2>
            <p>Our Joyful Jellyfish program provides nurturing care and education to infants ages 6 weeks to 12 months.

                We strive to provide a safe, healthy, nurturing environment that will foster a solid foundation for learning and development.</p>
            <img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>" alt="Logo" />
        </div>
    </article> -->

</section>

<?php get_footer(); ?>