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
            <div class="ourPrograms__content__item" data-des="<?php echo get_field('description'); ?>" data-color="<?php echo get_field('modal_color'); ?>" data-img="<?php echo wp_get_attachment_image_url(get_field('image'), 'full'); ?>" data-logo="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>">
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
    <article class="modalPrograms">

    </article>
    <!-- <article class="ourPrograms__modal">
        <div class="modalContent">
            <div class="modalContent__close">x</div>
            <div class="modalContent__img">
                <img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/ourPrograms/MEDUSA.png'); ?>" alt="Logo" />
            </div>
            <p>Our Joyful Jellyfish program provides nurturing care and education to infants ages 6 weeks to 12 months.

                We strive to provide a safe, healthy, nurturing environment that will foster a solid foundation for learning and development.</p>
            <a href="">info@newgdaycare.com</a>
            <img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>" alt="Logo" />
        </div>
    </article> -->
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
            <div class="policesTitleImg">
                <?php
                $image = get_field('polices_img#1');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size, "", ["class" => "policesImg"]);
                } ?>
                <h3 class="policesTitle plpTitle">
                    <?php
                    the_field('polices_title#1') ?></h3>
            </div>

            <div class="policesData">
                <div class="wysiwyg__container"><?php the_field('polices_info#1') ?></div>
            </div>
        </article>
        <article class="ourPolicies__item">
            <div class="policesTitleImg">
                <?php
                $image = get_field('polices_img#2');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size, "", ["class" => "policesImg"]);
                } ?>
                <h3 class="policesTitle plpTitle">
                    <?php
                    the_field('polices_title#2') ?></h3>
            </div>

            <div class="policesData ">

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
    </article>
    <article class="ourStaff__staff">
        <div class="ourStaff__staff__item">
            <img src="data:image/jpeg;base64,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" alt="">
            <p class="staffName">Laurent Kambub</p>
            <p class="staffRole">Teacher</p>
        </div>
        <div class="ourStaff__staff__item">
            <img src="data:image/jpeg;base64,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" alt="">
            <p class="staffName">Laurent Kambub</p>
            <p class="staffRole">Teacher</p>
        </div>
    </article>
    <article class="ourStaff__values">
        <h4 class="plpTitle"><?php the_field('title_slider') ?></h4>
        <article class="ourStaff__values__content">
            <?php
            $loop = new WP_Query(array(
                'post_type' => 'staff',
                'orderby' => 'post_id',
                'order' => 'ASC'
            ));

            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="valuesItems">
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

<div class="swiper-container">
    <h2 class="galleryTitle">Gallery</h2>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="slide-content">Contenido del slide 1</div>
        </div>
        <div class="swiper-slide">
            <div class="slide-content">Contenido del slide 2</div>
        </div>
        <div class="swiper-slide">
            <div class="slide-content">Contenido del slide 3</div>
        </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
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

<section class="socialMedia">
    <a href=""><img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/contact/PHONE.png'); ?>" alt="Phone" /></a>
    <a href=""><img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/contact/MAIL.png'); ?>" alt="Mail" /></a>
    <a href=""><img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/contact/FACEBOOK.png'); ?>" alt="facebook" /></a>
    <a href=""><img rel="preload" src="<?php echo esc_url(get_template_directory_uri() . '/images/contact/INSTAGRAM.png'); ?>" alt="Instagram" /></a>
    <a href="#top" class="goTop">up</a>
</section>

<?php get_footer(); ?>