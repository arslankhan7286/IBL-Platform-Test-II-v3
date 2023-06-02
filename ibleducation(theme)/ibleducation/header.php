<!doctype html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"
        href="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/favicon.png" />
    <link rel="icon" href="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/favicon.png"
        sizes="32x32" />
    <link rel="icon" href="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/favicon.png"
        sizes="192x192" />
    <title>IBL Education &#8211; AI Data-Driven Open edX Platform</title>
    <link rel='stylesheet' id='webflow-css'
        href='https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/css/webflow.css?ver=1.0.0'
        media='all' />
    <link rel='stylesheet' id='ibleducation-1-css'
        href='<?php echo get_template_directory_uri(); ?>/ibleducation.webflow.css' media='all' />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="home page-template-default page page-id-8 body no-sidebar">
    <?php wp_body_open(); ?>
    <div id="page" class="site">
    <div class="fixed">
        <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
            <div class="navigation-container w-container">
                <div class="navigation-left">
                    <a href="https://ibleducation.com" aria-current="page" class="brand current w-nav-brand w--current">
                        <img src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/logo_v2.png"
                            width="217" alt="" class="image-7">
                    </a>
                </div>
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <div class="navigation-right">
                        <div data-hover="1" data-delay="0" class="menu-drop w-dropdown">
                            <div data-w-id="9826fc05-3381-3bf4-02d2-f3dad16a92e9" class="nav-link-3 w-dropdown-toggle">
                                <div class="nav-link-3">About</div>
                            </div>
                        </div>
                        <div data-hover="1" data-delay="0" class="menu-drop w-dropdown">
                            <div data-w-id="e143ac98-fc2e-dcad-4108-f7620f6d0c8c" class="nav-link-3 w-dropdown-toggle">
                                <div class="nav-link-3">IBL Platform</div>
                            </div>
                        </div>
                        <div data-hover="1" data-delay="0" class="menu-drop w-dropdown">
                            <div data-w-id="475423eb-a74a-f77d-3043-09fd857f1a6f" class="nav-link-3 w-dropdown-toggle">
                                <div class="nav-link-3">IBL Studios</div>
                            </div>
                        </div>
                        <div data-hover="1" data-delay="0" class="menu-drop w-dropdown">
                            <div data-w-id="a0fcfe74-8a40-357f-1861-750413a5212c" class="nav-link-3 w-dropdown-toggle">
                                <div class="nav-link-3">Open edX</div>
                            </div>
                        </div>
                        <a href="https://ibleducation.com/aws" target="_blank" class="aws-img">
                            <img class="aws-logo grey-logo"
                                src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/aws-logo-c.png"
                                alt="">
                        </a>
                        <a href="https://ibleducation.com/contact-us" class="button-blue-2 register w-button">Contact
                            Us</a>
                    </div>
                </nav>
                <div data-w-id="9fce1b4f-d010-cdaf-2b31-8bdb19735b53" class="mobile_menu_btn"><img
                        src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/mob_menu.png"
                        loading="lazy" sizes="(max-width: 767px) 12.986111640930176px, 100vw"
                        srcset="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/mob_menu.png 500w, https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/mob_menu.png 512w"
                        alt="" class="open_menu">
                    <div class="dark_overlay"></div>
                </div>
                <div class="mob_menu_wr">
                    <div class="mob_header">
                        <div class="div-block-54">
                            <a data-w-id="aa0cca57-51bb-6681-c9d1-7a08f4ac8e0b" href="#"
                                class="close_mobile_menu w-inline-block"><img
                                    src="https://uploads-ssl.webflow.com/5f9968a99ac2b1a9f5952d15/5f9968a99ac2b176e8952e4d_cancel%20(1).png"
                                    loading="lazy" alt="" class="image-50"></a>
                        </div>
                    </div>
                    <div class="submenu_div">
                        <div class="foundation_submenu">
                            <div data-w-id="85cec46c-033b-8932-6db6-9ba35b59d3b4" class="mob_c_courses t">
                                <div class="mob_menu_row">
                                    <div class="m_c_fb">
                                        <div class="res_text">About</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="foundation_submenu">
                            <div data-w-id="97633de0-26d2-5eee-fc27-54cf8df2a51b" class="mob_c_courses">
                                <div class="mob_menu_row">
                                    <div class="m_c_fb">
                                        <div class="res_text">IBL Platform</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="foundation_submenu">
                            <div data-w-id="9d536b61-f952-5980-52cb-939861e2a99f" class="mob_c_courses">
                                <div class="mob_menu_row">
                                    <div class="m_c_fb">
                                        <div class="res_text">IBL Studios</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="foundation_submenu">
                            <div data-w-id="ee69ba2c-24e3-e2c4-083e-0102ef12b1cc" class="mob_c_courses">
                                <div class="mob_menu_row">
                                    <div class="m_c_fb">
                                        <div class="res_text">Open edX</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="https://ibleducation.com/aws" target="_blank" class="aws-img mobile-aws">
                            <img class="aws-logo grey-logo"
                                src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/aws-logo-c.png"
                                alt="">
                        </a>
                        <a href="https://ibleducation.com/contact-us"
                            class="button-blue-2 register contact w-button">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="top_hidden"></div> -->
    <div class="nav_hidden"></div>
    <main id="primary" class="site-main">