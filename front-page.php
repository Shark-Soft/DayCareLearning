<?php get_header(); ?>

<section class="heroSlider">
    <img class="heroBanner" rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/heroSlider/BANNER.png'); ?>" alt="banner">
</section>

<section id="#programs" class="ourPrograms marginContainer">
    <h1 class="ourPrograms__title plpTitle">Our Programs</h1>
    <article class="ourPrograms__content">
        <?php
        $loop = new WP_Query(array(
            'post_type' => 'program',
            'orderby' => 'post_id',
            'order' => 'ASC'
        ));

        while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="ourPrograms__content__item">
                <?php
                $image = get_field('image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size, "", ["class" => "itemImg"]);
                } ?>
                <p>
                    <?php the_title() ?>
                    <br>
                    <?php the_field('range_age') ?>
                </p>
                <button type="button" class="btn ourPrograms__btn">READ MORE</button>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </article>
</section>

<div class=bg--red>
    <section id="curriculum" class="ourCurriculum">
        <h2 class="ourCurriculum__title"> <?php the_field('main_titleCu'); ?></h2>
        <div class="ourCurriculum__content__list">
            <article class="ourCurriculum__content__item">
                <?php
                $image = get_field('image_1Cu');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size, "", ["class" => "ourCurriculum__img"]);
                } ?>
                <div class="ourCurriculum__item__data">
                    <?php
                    $image = get_field('icon_1Cu');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                        echo wp_get_attachment_image($image, $size, "", ["class" => "titleIcon"]);
                    } ?>
                    <h3 class="ourCurriculum__item__title">
                        <?php the_field('title_1Cu'); ?>
                    </h3>
                    <div class="wysiwyg__container ourCurriculum__item__text">
                        <?php the_field('info_1Cu'); ?>
                    </div>
                </div>
            </article>
            <article class="ourCurriculum__content__item">
                <div class="ourCurriculum__item__data">
                    <?php
                    $image = get_field('icon_2Cu');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                        echo wp_get_attachment_image($image, $size, "", ["class" => "titleIcon"]);
                    } ?>
                    <h3 class="ourCurriculum__item__title">
                        <?php the_field('title_2Cu'); ?>
                    </h3>
                    <div class="wysiwyg__container ourCurriculum__item__text">
                        <?php the_field('info_2Cu'); ?>
                    </div>
                </div>
                <?php
                $image = get_field('image_2Cu');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size, "", ["class" => "ourCurriculum__img"]);
                } ?>
            </article>
        </div>
    </section>
</div>

<section id="ourMission" class="ourMission marginContainer">
    <article class="ourMission__content__item">
        <?php
        $image = get_field('mission_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
            echo wp_get_attachment_image($image, $size, "", ["class" => "itemImg"]);
        } ?>
        <div class="ourMission__itemData">
            <h2 class="ourMission__itemData__title plpTitle"><?php the_field('mission_title') ?></h2>
            <img class="ourMission__itemData__icon" rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/ourMission/square_yellow.png'); ?>" alt="icon">
            <div class="wysiwyg__container"><?php the_field('mission_info') ?></div>
        </div>
    </article>
</section>

<div class="bg--yellow">
    <section id="polices" class="ourPolicies marginContainer">
        <article class="ourPolicies__item">
            <?php
            $image = get_field('polices_img#1');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($image) {
                echo wp_get_attachment_image($image, $size, "", ["class" => "policesImg"]);
            } ?>
            <div class="policesData">
                <h3 class="policesTitle plpTitle">
                    <?php
                    the_field('polices_title#1') ?></h3>
                <div class="wysiwyg__container"><?php the_field('polices_info#1') ?></div>
            </div>
        </article>
        <article class="ourPolicies__item">
            <?php
            $image = get_field('polices_img#2');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($image) {
                echo wp_get_attachment_image($image, $size, "", ["class" => "policesImg"]);
            } ?>
            <div class="policesData ">
                <h3 class="policesTitle plpTitle">
                    <?php
                    the_field('polices_title#2') ?></h3>
                <div class="wysiwyg__container"><?php the_field('polices_info#2') ?></div>
            </div>
        </article>
    </section>
</div>

<section id="#staff" class="ourStaff marginContainer">
    <article class="ourStaff__intro">
        <h1 class="ourStaff__intro__title plpTitle"><?php the_field('staff_title') ?></h1>
        <div class="ourStaff__intro__info wysiwyg__container">
            <?php the_field('info_staff') ?>
        </div>
        <h4 class="plpTitle"><?php the_field('title_slider') ?></h4>
    </article>
    <article class="ourStaff__content">
        <?php
        $loop = new WP_Query(array(
            'post_type' => 'staff',
            'orderby' => 'post_id',
            'order' => 'ASC'
        ));

        while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="ourStaff__content__item">
                <?php
                $image = get_field('value_image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size, "", ["class" => ""]);
                } ?>
                <p>
                    <?php the_field('value_text') ?>
                </p>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </article>
</section>

<div class="bg--green">
    <section id="employment" class="employment marginContainer">
        <article class="employment__content">
            <?php
            $image = get_field('image__employment');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($image) {
                echo wp_get_attachment_image($image, $size, "", ["class" => "employmentImg"]);
            } ?>
            <div class="employment__itemData">
                <h2 class="employment__title plpTitle"><?php the_field('employment_title') ?></h2>
                <div class="wysiwyg__container"><?php the_field('employment_info') ?></div>
                <h5><?php the_field('employment_subT') ?></h5>
            </div>
        </article>
    </section>
</div>

<section id="nutrition" class="nutrition marginContainer">
    <article class="nutrition__content">
        <div class="nutrition__containerImg">
            <?php
            $image = get_field('Nutrition_Image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($image) {
                echo wp_get_attachment_image($image, $size, "", ["class" => "nutritionImg"]);
            } ?>
        </div>
        <div class="nutrition__itemData">
            <h2 class="nutrition__title plpTitle"><?php the_field('Nutrition_Title') ?></h2>
            <div class="wysiwyg__container">
                <?php the_field('Nutrition_Info') ?>
            </div>
        </div>
    </article>
</section>

<div class="bg--pink">
    <section id="enrollment" class="enrollment marginContainer">
        <h1 class="enrollment__title plpTitle">
            <?php the_field('title_enrollment') ?>
        </h1>
        <article class="enrollment__content">
            <div class="enrollmentItem">
                <h5><?php the_field('title_list_#1') ?></h5>
                <div class="wysiwyg__container">
                    <?php the_field('list_#1') ?>
                </div>
            </div>
            <div class="enrollmentItem">
                <h5><?php the_field('title_list_#2') ?></h5>
                <div class="wysiwyg__container">
                    <?php the_field('list_#2') ?>
                </div>
            </div>
        </article>
        <article class="enrollment__footer">
            <a href="<?php the_field('link') ?>" target="_blank">
                <h4 class="plpTitle"><?php the_field('link_text') ?></h4>
            </a>
            <div class="wysiwyg_container">
                <?php the_field('info') ?>
            </div>
        </article>
    </section>
</div>

<section id="contact" class="contact marginContainer">
    <h2 class="contact__title">Contact</h2>
    <article class="contact__content">
        <div class="contact__content__formContainer">
            <img class="formImg" rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/contact/TREN.png'); ?>" alt="">
            <form action="/my-handling-form-page" method="post">
                <ul class="inputs">
                    <li>
                        <input type="text" id="name" name="user_name" placeholder="NAME">
                    </li>
                    <li>
                        <input type="email" id="mail" name="user_mail" placeholder="E-mail">
                    </li>
                    <li>
                        <input type="phone" id="phone" name="user_phone" placeholder="PHONE">
                    </li>
                    <li>
                        <textarea id="msg" name="user_message"></textarea>
                    </li>
                </ul>
                <button class="btn">Send message</button>
            </form>
        </div>
        <div class="contact__content__mapContainer">
            <div class="contactInfo">
                <div class="contactInfo__infoCon">
                    <div class="contactInfo__infoCon__infoItem">
                        <img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/contact/PHONE.png'); ?>" alt="Phone" />
                        <p>864-233-7941</p>
                    </div>
                    <div class="contactInfo__infoCon__infoItem">
                        <img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/contact/MAIL.png'); ?>" alt="Mail" />
                        <p>info@newgdaycare.com</p>
                    </div>
                </div>
                <div class="contactInfo__socialMedia">
                    <a href="" target="__blank">
                        <img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/contact/FACEBOOK.png'); ?>" alt="">
                    </a>
                    <a href="" target="__blank">
                        <img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/contact/INSTAGRAM.png'); ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="map">mapa</div>
        </div>
    </article>
</section>

<?php get_footer(); ?>