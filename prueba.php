<?php
/**
 * Template Name: plantillaprueba
 */
get_header();
?>

<!DOCTYPE html><!-- Handled by Exflow.site -->
<html data-wf-page="691396626dc512b94903aff0" data-wf-site="691396606dc512b94903af38" data-wf-status="1">

<head>
    <meta charset="utf-8" />
    <title>Fernando&#x27;s Top-Notch Site</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="css/fernandos-top-notch-site-c6aefe.webflow.shared.04f88e87b.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
            .className += t + "touch")
    }(window, document);
    </script>
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="images/app-icon.png" rel="apple-touch-icon" /><!-- Keep this css code to improve the font quality-->
    <style>
    * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -o-font-smoothing: antialiased;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="global-styles">
            <div class="style-overrides w-embed">
                <style>
                /* Ensure all elements inherit the color from its parent */
                a,
                .w-input,
                .w-select,
                .w-tab-link,
                .w-nav-link,
                .w-nav-brand,
                .w-dropdown-btn,
                .w-dropdown-toggle,
                .w-slider-arrow-left,
                .w-slider-arrow-right,
                .w-dropdown-link {
                    color: inherit;
                    text-decoration: inherit;
                    font-size: inherit;
                }

                /* Focus state style for keyboard navigation for the focusable elements */
                *[tabindex]:focus-visible,
                input[type="file"]:focus-visible {
                    outline: 0.125rem solid #4d65ff;
                    outline-offset: 0.125rem;
                }

                /* Get rid of top margin on first element in any rich text element */
                .w-richtext> :not(div):first-child,
                .w-richtext>div:first-child> :first-child {
                    margin-top: 0 !important;
                }

                /* Get rid of bottom margin on last element in any rich text element */
                .w-richtext>:last-child,
                .w-richtext ol li:last-child,
                .w-richtext ul li:last-child {
                    margin-bottom: 0 !important;
                }

                /* Prevent all click and hover interaction with an element */
                .pointer-events-off {
                    pointer-events: none;
                }

                /* Enables all click and hover interaction with an element */
                .pointer-events-on {
                    pointer-events: auto;
                }

                /* Create a class of .div-square which maintains a 1:1 dimension of a div */
                .div-square::after {
                    content: "";
                    display: block;
                    padding-bottom: 100%;
                }

                /* Make sure containers never lose their center alignment */
                .container-medium,
                .container-small,
                .container-large {
                    margin-right: auto !important;
                    margin-left: auto !important;
                }


                /* Apply "..." after 3 lines of text */
                .text-style-3lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                }

                /* Apply "..." after 2 lines of text */
                .text-style-2lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                }

                /* Adds inline flex display */
                .display-inlineflex {
                    display: inline-flex;
                }

                /* These classes are never overwritten */
                .hide {
                    display: none !important;
                }

                /* Remove default Webflow chevron from form select */
                select {
                    -webkit-appearance: none;
                }


                @media screen and (max-width: 991px) {

                    .hide,
                    .hide-tablet {
                        display: none !important;
                    }
                }

                @media screen and (max-width: 767px) {
                    .hide-mobile-landscape {
                        display: none !important;
                    }
                }

                @media screen and (max-width: 479px) {
                    .hide-mobile {
                        display: none !important;
                    }
                }

                .margin-0 {
                    margin: 0rem !important;
                }

                .padding-0 {
                    padding: 0rem !important;
                }

                .spacing-clean {
                    padding: 0rem !important;
                    margin: 0rem !important;
                }

                .margin-top {
                    margin-right: 0rem !important;
                    margin-bottom: 0rem !important;
                    margin-left: 0rem !important;
                }

                .padding-top {
                    padding-right: 0rem !important;
                    padding-bottom: 0rem !important;
                    padding-left: 0rem !important;
                }

                .margin-right {
                    margin-top: 0rem !important;
                    margin-bottom: 0rem !important;
                    margin-left: 0rem !important;
                }

                .padding-right {
                    padding-top: 0rem !important;
                    padding-bottom: 0rem !important;
                    padding-left: 0rem !important;
                }

                .margin-bottom {
                    margin-top: 0rem !important;
                    margin-right: 0rem !important;
                    margin-left: 0rem !important;
                }

                .padding-bottom {
                    padding-top: 0rem !important;
                    padding-right: 0rem !important;
                    padding-left: 0rem !important;
                }

                .margin-left {
                    margin-top: 0rem !important;
                    margin-right: 0rem !important;
                    margin-bottom: 0rem !important;
                }

                .padding-left {
                    padding-top: 0rem !important;
                    padding-right: 0rem !important;
                    padding-bottom: 0rem !important;
                }

                .margin-horizontal {
                    margin-top: 0rem !important;
                    margin-bottom: 0rem !important;
                }

                .padding-horizontal {
                    padding-top: 0rem !important;
                    padding-bottom: 0rem !important;
                }

                .margin-vertical {
                    margin-right: 0rem !important;
                    margin-left: 0rem !important;
                }

                .padding-vertical {
                    padding-right: 0rem !important;
                    padding-left: 0rem !important;
                }

                /* Apply "..." at 100% width */
                .truncate-width {
                    width: 100%;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }

                /* Removes native scrollbar */
                .no-scrollbar {
                    -ms-overflow-style: none;
                    overflow: -moz-scrollbars-none;
                }

                .no-scrollbar::-webkit-scrollbar {
                    display: none;
                }
                </style>
            </div>
            <div class="fonts w-embed">
                <style>
                @import url('https://fonts.googleapis.com/css?family=Roboto%20Serif:400')
                </style>
                <style>
                @import url('https://fonts.googleapis.com/css?family=Roboto:400,500')
                </style>
            </div>
            <div class="color-schemes w-embed">
                <style>
                .color-scheme-1 {}

                .color-scheme-2 {
                    --color-scheme-1--text: var(--color-scheme-2--text);
                    --color-scheme-1--background: var(--color-scheme-2--background);
                    --color-scheme-1--foreground: var(--color-scheme-2--foreground);
                    --color-scheme-1--border: var(--color-scheme-2--border);
                    --color-scheme-1--accent: var(--color-scheme-2--accent);
                }


                .color-scheme-3 {
                    --color-scheme-1--text: var(--color-scheme-3--text);
                    --color-scheme-1--background: var(--color-scheme-3--background);
                    --color-scheme-1--foreground: var(--color-scheme-3--foreground);
                    --color-scheme-1--border: var(--color-scheme-3--border);
                    --color-scheme-1--accent: var(--color-scheme-3--accent);
                }


                .color-scheme-4 {
                    --color-scheme-1--text: var(--color-scheme-4--text);
                    --color-scheme-1--background: var(--color-scheme-4--background);
                    --color-scheme-1--foreground: var(--color-scheme-4--foreground);
                    --color-scheme-1--border: var(--color-scheme-4--border);
                    --color-scheme-1--accent: var(--color-scheme-4--accent);
                }


                .color-scheme-5 {
                    --color-scheme-1--text: var(--color-scheme-5--text);
                    --color-scheme-1--background: var(--color-scheme-5--background);
                    --color-scheme-1--foreground: var(--color-scheme-5--foreground);
                    --color-scheme-1--border: var(--color-scheme-5--border);
                    --color-scheme-1--accent: var(--color-scheme-5--accent);
                }


                .color-scheme-6 {
                    --color-scheme-1--text: var(--color-scheme-6--text);
                    --color-scheme-1--background: var(--color-scheme-6--background);
                    --color-scheme-1--foreground: var(--color-scheme-6--foreground);
                    --color-scheme-1--border: var(--color-scheme-6--border);
                    --color-scheme-1--accent: var(--color-scheme-6--accent);
                }


                .color-scheme-7 {
                    --color-scheme-1--text: var(--color-scheme-7--text);
                    --color-scheme-1--background: var(--color-scheme-7--background);
                    --color-scheme-1--foreground: var(--color-scheme-7--foreground);
                    --color-scheme-1--border: var(--color-scheme-7--border);
                    --color-scheme-1--accent: var(--color-scheme-7--accent);
                }



                .w-slider-dot {
                    background-color: var(--color-scheme-1--text);
                    opacity: 0.20;
                }

                .w-slider-dot.w-active {
                    background-color: var(--color-scheme-1--text);
                    opacity: 1;
                }

                /* Override .w-slider-nav-invert styles */
                .w-slider-nav-invert .w-slider-dot {
                    background-color: var(--color-scheme-1--text) !important;
                    opacity: 0.20 !important;
                }

                .w-slider-nav-invert .w-slider-dot.w-active {
                    background-color: var(--color-scheme-1--text) !important;
                    opacity: 1 !important;
                }
                </style>
            </div>
        </div>
        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
            role="banner" class="navbar13_component delete-this-class color-scheme-6 w-nav">
            <!-- <div class="navbar-instructions-delete">
                <div class="container-small">
                    <div class="margin-bottom margin-xxsmall">
                        <div class="text-size-medium">Instructions</div>
                    </div>
                    <div class="margin-bottom margin-xxsmall">
                        <div>To make this component work follow these steps:<br /></div>
                    </div>
                    <ol role="list" class="navbar-instructions-list">
                        <li class="navbar-instructions-item">Remove the <span
                                class="rl-styleguide_label">delete-this-class</span> class from the <span
                                class="rl-styleguide_label">navbar13_component</span> div. This will change the
                            positioning of the navbar to fixed.</li>
                        <li class="navbar-instructions-item">Add the <span
                                class="rl-styleguide_label">navbar-on-page</span> class to the <span
                                class="rl-styleguide_label">page-wrapper</span> class. This will ensure that the navbar
                            is centered on the page.</li>
                        <li class="navbar-instructions-item">Add the <span
                                class="rl-styleguide_label">max-width-full</span> class to the <span
                                class="rl-styleguide_label">main-wrapper</span> class. This will ensure all sections
                            inside of the main wrapper are full-wdith.</li>
                    </ol>
                    <div class="hide">
                        <div class="navbar-on-page"></div>
                    </div>
                </div>
            </div> -->
            <div class="navbar13_container"><a href="#" class="navbar13_logo-link w-nav-brand"><img loading="lazy"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/images//logo-wide.svg" alt=""
                        class="navbar13_logo" /></a>
                <nav role="navigation" id="w-node-_3ee2e3f4-6de6-3f98-649f-170233fb81b8-33fb8190"
                    class="navbar13_menu w-nav-menu">
                    <div class="navbar13_menu-link-wrapper"><a href="#" class="navbar13_link w-nav-link">Services</a><a
                            href="#" class="navbar13_link w-nav-link">Solutions</a><a href="#"
                            class="navbar13_link w-nav-link">Integrations</a>
                        <div data-delay="200" data-hover="true" class="navbar13_menu-dropdown w-dropdown">
                            <div class="navbar13_dropdown-toggle w-dropdown-toggle">
                                <div>Resources</div>
                                <div class="dropdown-chevron w-embed"><svg width=" 100%" height=" 100%"
                                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.55806 6.29544C2.46043 6.19781 2.46043 6.03952 2.55806 5.94189L3.44195 5.058C3.53958 4.96037 3.69787 4.96037 3.7955 5.058L8.00001 9.26251L12.2045 5.058C12.3021 4.96037 12.4604 4.96037 12.5581 5.058L13.4419 5.94189C13.5396 6.03952 13.5396 6.19781 13.4419 6.29544L8.17678 11.5606C8.07915 11.6582 7.92086 11.6582 7.82323 11.5606L2.55806 6.29544Z"
                                            fill="currentColor" />
                                    </svg></div>
                            </div>
                            <nav class="navbar13_dropdown-list w-dropdown-list"><a href="#"
                                    class="navbar13_dropdown-link w-dropdown-link">Link Five</a><a href="#"
                                    class="navbar13_dropdown-link w-dropdown-link">Link Six</a><a href="#"
                                    class="navbar13_dropdown-link w-dropdown-link">Link Seven</a></nav>
                        </div>
                    </div>
                </nav>
                <div id="w-node-_3ee2e3f4-6de6-3f98-649f-170233fb81cc-33fb8190" class="navbar13_button-wrapper"><a
                        href="#" class="button is-small w-button">Get a quote</a>
                    <div class="navbar13_menu-button w-nav-button">
                        <div class="menu-icon2">
                            <div class="menu-icon2_line-top"></div>
                            <div class="menu-icon2_line-middle">
                                <div class="menu-icon1_line-middle-inner"></div>
                            </div>
                            <div class="menu-icon2_line-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="main-wrapper">
            <header class="section_header26 color-scheme-1">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="header26_component">
                                <div class="margin-bottom margin-xxlarge">
                                    <div class="text-align-center">
                                        <div class="max-width-large align-center">
                                            <div class="margin-bottom margin-small">
                                                <h1 class="heading-style-h1">The Dev Team Built for Marketing Teams</h1>
                                            </div>
                                            <p class="text-size-medium">We help marketing departments launch faster with
                                                campaign-ready websites, landing pages, and tool integrations—done
                                                right, the first time.</p>
                                            <div class="margin-top margin-medium">
                                                <div class="button-group is-center"><a href="#"
                                                        class="button w-button">Scan website</a><a href="#"
                                                        class="button is-secondary w-button">Start your project</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header26_image-wrapper"><img sizes="(max-width: 1476px) 100vw, 1476px"
                                        srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419503-p-500.png 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419503-p-800.png 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419503-p-1080.png 1080w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419503.png 1476w"
                                        alt=""
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419503.png"
                                        loading="eager" class="header26_image" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="section_logo3 color-scheme-1">
                <div class="padding-section-medium">
                    <div class="padding-global">
                        <div class="container-large">
                            <div class="margin-bottom margin-large">
                                <div class="text-align-center">
                                    <div class="max-width-large align-center">
                                        <h2 class="heading-style-h6">Used by the world&#x27;s leading companies</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="logo3_component">
                        <div class="logo3_list">
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27d4-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webflow.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27d6-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-relume.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27d8-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webflow.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27da-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-relume.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27dc-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webflow.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27de-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-relume.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27e0-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webflow.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27e2-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-relume.svg" alt=""
                                    class="logo3_logo" /></div>
                        </div>
                        <div class="logo3_list">
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27e5-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webflow.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27e7-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-relume.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27e9-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webflow.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27eb-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-relume.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27ed-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webflow.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27ef-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-relume.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27f1-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-webflow.svg" alt=""
                                    class="logo3_logo" /></div>
                            <div id="w-node-_55f3b63c-adaa-d4d7-32d7-e9975dfb27f3-5dfb27c9" class="logo3_wrapper"><img
                                    loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-relume.svg" alt=""
                                    class="logo3_logo" /></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section_cta9 text-color-white color-scheme-6">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="cta9_component">
                                <div class="cta9_content">
                                    <div class="max-width-large">
                                        <h2 class="heading-style-h3">We manage the technical aspects of your digital
                                            campaigns, allowing you to concentrate on strategy, content, and
                                            performance.</h2>
                                    </div>
                                    <div class="button-group is-right"><a href="#" class="button w-button">Start your
                                            project</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cta9_background-image-wrapper">
                    <div class="image-overlay-layer"></div><img sizes="(max-width: 2560px) 100vw, 2560px"
                        srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419538-p-500.jpeg 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419538-p-800.jpeg 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419538-p-1080.jpeg 1080w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419538-p-1600.jpeg 1600w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419538-p-2000.jpeg 2000w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419538.jpeg 2560w"
                        alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419538.jpeg"
                        loading="eager" class="cta9_background-image" />
                </div>
            </section>
            <section class="section_layout220 color-scheme-5">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="layout220_component">
                                <div class="w-layout-grid layout220_content">
                                    <div class="layout220_image-wrapper"><img sizes="(max-width: 1024px) 100vw, 1024px"
                                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419519-p-500.jpeg 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419519-p-800.jpeg 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419519.jpeg 1024w"
                                            alt=""
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419519.jpeg"
                                            loading="eager" class="layout220_image" /></div>
                                    <div id="w-node-_89d1736d-8a00-afa7-fd41-e0b9fc61294f-4903aff0"
                                        class="layout220_content-right">
                                        <div class="w-layout-grid layout220_item-list">
                                            <div class="layout220_item">
                                                <div class="margin-bottom margin-xsmall">
                                                    <div class="layout220_item-icon-wrapper"><img loading="lazy"
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon.svg"
                                                            alt="" class="icon-1x1-medium" /></div>
                                                </div>
                                                <div class="margin-bottom margin-xsmall">
                                                    <h3 class="heading-style-h5">ADA Compliance &amp; Accessibility</h3>
                                                </div>
                                                <p>Fully tested WCAG 2.2 AA compliance to expand reach and reduce legal
                                                    risk.</p>
                                            </div>
                                            <div class="layout220_item">
                                                <div class="margin-bottom margin-xsmall">
                                                    <div class="layout220_item-icon-wrapper"><img loading="lazy"
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon.svg"
                                                            alt="" class="icon-1x1-medium" /></div>
                                                </div>
                                                <div class="margin-bottom margin-xsmall">
                                                    <h3 class="heading-style-h5">SEO &amp; Speed Optimization</h3>
                                                </div>
                                                <p>Core Web Vitals, schema markup, technical SEO, and fast load times.
                                                </p>
                                            </div>
                                            <div class="layout220_item">
                                                <div class="margin-bottom margin-xsmall">
                                                    <div class="layout220_item-icon-wrapper"><img loading="lazy"
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon.svg"
                                                            alt="" class="icon-1x1-medium" /></div>
                                                </div>
                                                <div class="margin-bottom margin-xsmall">
                                                    <h3 class="heading-style-h5">Platform Integrations That Work</h3>
                                                </div>
                                                <p>Connect your stack: HubSpot, Google Analytics, Unbounce, Heap,
                                                    LaunchDarkly, Zendesk, automate tasks, and more.</p>
                                            </div>
                                            <div class="layout220_item">
                                                <div class="margin-bottom margin-xsmall">
                                                    <div class="layout220_item-icon-wrapper"><img loading="lazy"
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon.svg"
                                                            alt="" class="icon-1x1-medium" /></div>
                                                </div>
                                                <div class="margin-bottom margin-xsmall">
                                                    <h3 class="heading-style-h5">Custom Forms with PDF Output</h3>
                                                </div>
                                                <p>Streamline lead capture, contracts, or onboarding flows with clean,
                                                    professional output.</p>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-medium">
                                            <div class="button-group"><a href="#"
                                                    class="button is-secondary is-alternate w-button">Analyze</a><a
                                                    href="#" class="button is-link is-icon is-alternate w-inline-block">
                                                    <div>Details</div>
                                                    <div class="icon-embed-xxsmall w-embed"><svg width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 3L11 8L6 13" stroke="CurrentColor"
                                                                stroke-width="1.5" />
                                                        </svg></div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section_testimonial19 color-scheme-1">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="testimonial19_component">
                                <div class="margin-bottom margin-xxlarge">
                                    <div class="text-align-center">
                                        <div class="max-width-large align-center">
                                            <div class="margin-bottom margin-small">
                                                <h2 class="heading-style-h2">Client stories</h2>
                                            </div>
                                            <p class="text-size-medium">Real results from businesses we&#x27;ve
                                                transformed</p>
                                        </div>
                                    </div>
                                </div>
                                <div data-delay="4000" data-animation="slide" class="testimonial19_slider w-slider"
                                    data-autoplay="false" data-easing="ease" data-hide-arrows="false"
                                    data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3"
                                    data-duration="500" data-infinite="false">
                                    <div class="testimonial19_mask w-slider-mask">
                                        <div class="testimonial19_slide w-slide">
                                            <div class="testimonial19_card">
                                                <div class="testimonial19_content-top">
                                                    <div class="margin-bottom margin-small">
                                                        <div class="testimonial19_rating-wrapper">
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">Aviada Labs turned our sluggish
                                                        website into a high-performance machine</div>
                                                </div>
                                                <div class="margin-top margin-small">
                                                    <div class="testimonial19_client">
                                                        <div class="testimonial19_client-image-wrapper"><img
                                                                loading="lazy"
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                                alt="" class="testimonial19_customer-image" /></div>
                                                        <div class="testimonial19_client-info">
                                                            <div class="text-weight-semibold">Sarah Johnson</div>
                                                            <div>CTO, TechNova Solutions</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial19_slide w-slide">
                                            <div class="testimonial19_card">
                                                <div class="testimonial19_content-top">
                                                    <div class="margin-bottom margin-small">
                                                        <div class="testimonial19_rating-wrapper">
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">Their integration skills are unmatched
                                                        in the industry</div>
                                                </div>
                                                <div class="margin-top margin-small">
                                                    <div class="testimonial19_client">
                                                        <div class="testimonial19_client-image-wrapper"><img
                                                                loading="lazy"
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                                alt="" class="testimonial19_customer-image" /></div>
                                                        <div class="testimonial19_client-info">
                                                            <div class="text-weight-semibold">Michael Chen</div>
                                                            <div>CEO, Digital Frontier</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial19_slide w-slide">
                                            <div class="testimonial19_card">
                                                <div class="testimonial19_content-top">
                                                    <div class="margin-bottom margin-small">
                                                        <div class="testimonial19_rating-wrapper">
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">Accessibility was our challenge.
                                                        Aviada Labs solved it perfectly</div>
                                                </div>
                                                <div class="margin-top margin-small">
                                                    <div class="testimonial19_client">
                                                        <div class="testimonial19_client-image-wrapper"><img
                                                                loading="lazy"
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                                alt="" class="testimonial19_customer-image" /></div>
                                                        <div class="testimonial19_client-info">
                                                            <div class="text-weight-semibold">Elena Rodriguez</div>
                                                            <div>Head of UX, Global Innovations</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial19_slide w-slide">
                                            <div class="testimonial19_card">
                                                <div class="testimonial19_content-top">
                                                    <div class="margin-bottom margin-small">
                                                        <div class="testimonial19_rating-wrapper">
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">&quot;Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Suspendisse varius enim in eros
                                                        elementum tristique. Duis cursus, mi quis viverra ornare.&quot;
                                                    </div>
                                                </div>
                                                <div class="margin-top margin-small">
                                                    <div class="testimonial19_client">
                                                        <div class="testimonial19_client-image-wrapper"><img
                                                                loading="lazy"
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                                alt="" class="testimonial19_customer-image" /></div>
                                                        <div class="testimonial19_client-info">
                                                            <div class="text-weight-semibold">Name Surname</div>
                                                            <div>Position, Company name</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial19_slide w-slide">
                                            <div class="testimonial19_card">
                                                <div class="testimonial19_content-top">
                                                    <div class="margin-bottom margin-small">
                                                        <div class="testimonial19_rating-wrapper">
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">&quot;Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Suspendisse varius enim in eros
                                                        elementum tristique. Duis cursus, mi quis viverra ornare.&quot;
                                                    </div>
                                                </div>
                                                <div class="margin-top margin-small">
                                                    <div class="testimonial19_client">
                                                        <div class="testimonial19_client-image-wrapper"><img
                                                                loading="lazy"
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                                alt="" class="testimonial19_customer-image" /></div>
                                                        <div class="testimonial19_client-info">
                                                            <div class="text-weight-semibold">Name Surname</div>
                                                            <div>Position, Company name</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial19_slide w-slide">
                                            <div class="testimonial19_card">
                                                <div class="testimonial19_content-top">
                                                    <div class="margin-bottom margin-small">
                                                        <div class="testimonial19_rating-wrapper">
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                            <div class="testimonial19_rating-icon">
                                                                <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">&quot;Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Suspendisse varius enim in eros
                                                        elementum tristique. Duis cursus, mi quis viverra ornare.&quot;
                                                    </div>
                                                </div>
                                                <div class="margin-top margin-small">
                                                    <div class="testimonial19_client">
                                                        <div class="testimonial19_client-image-wrapper"><img
                                                                loading="lazy"
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                                alt="" class="testimonial19_customer-image" /></div>
                                                        <div class="testimonial19_client-info">
                                                            <div class="text-weight-semibold">Name Surname</div>
                                                            <div>Position, Company name</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-arrow is-centre-previous w-slider-arrow-left">
                                        <div class="slider-arrow-icon_default w-embed"><svg width="100%" height="100%"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.31066 8.75001L9.03033 14.4697L7.96967 15.5303L0.439339 8.00001L7.96967 0.469676L9.03033 1.53034L3.31066 7.25001L15.5 7.25L15.5 8.75L3.31066 8.75001Z"
                                                    fill="currentColor" />
                                            </svg></div>
                                    </div>
                                    <div class="slider-arrow is-centre-next w-slider-arrow-right">
                                        <div class="slider-arrow-icon_default w-embed"><svg width="100%" height="100%"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.6893 7.25L6.96967 1.53033L8.03033 0.469666L15.5607 8L8.03033 15.5303L6.96967 14.4697L12.6893 8.75H0.5V7.25H12.6893Z"
                                                    fill="currentColor" />
                                            </svg></div>
                                    </div>
                                    <div class="testimonial19_slide-nav w-slider-nav w-slider-nav-invert w-round"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section_portfolio13 color-scheme-3">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="portfolio13_component">
                                <div class="margin-bottom margin-xxlarge">
                                    <div class="text-align-center">
                                        <div class="max-width-large align-center">
                                            <div class="margin-bottom margin-xsmall">
                                                <div class="text-style-tagline">Portfolio</div>
                                            </div>
                                            <div class="margin-bottom margin-small">
                                                <h2 class="heading-style-h2">Our work</h2>
                                            </div>
                                            <p class="text-size-medium">Look at what we&#x27;ve accomplished for others;
                                                we can achieve the same for you.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio13_content">
                                    <div class="portfolio13_list-wrapper">
                                        <div class="w-layout-grid portfolio13_list">
                                            <div class="portfolio13_item"><a href="#"
                                                    class="portfolio13_item-link w-inline-block">
                                                    <div class="portfolio13_image-wrapper"><img
                                                            sizes="(max-width: 1024px) 100vw, 1024px"
                                                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419497-p-500.jpeg 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419497-p-800.jpeg 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419497.jpeg 1024w"
                                                            alt=""
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419497.jpeg"
                                                            loading="eager" class="portfolio13_image" /></div>
                                                    <div class="portfolio13_title-wrapper">
                                                        <div class="portfolio13_item-content-top">
                                                            <div class="margin-bottom margin-xxsmall">
                                                                <h3 class="heading-style-h5">This site was slow as hell
                                                                </h3>
                                                            </div>
                                                            <div class="text-size-regular">Even using the CMS was
                                                                crashing the site.<br />We migrated to a much leaner
                                                                system with 50% less RAM and processing power.</div>
                                                            <div class="margin-top margin-xsmall">
                                                                <div class="portfolio13_tag-list">
                                                                    <div class="tag">
                                                                        <div>Performance</div>
                                                                    </div>
                                                                    <div class="tag">
                                                                        <div>WordPress</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="margin-top margin-small">
                                                            <div class="button-group">
                                                                <div class="button is-link is-icon">
                                                                    <div>View project</div>
                                                                    <div class="icon-embed-xxsmall w-embed"><svg
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M6 3L11 8L6 13"
                                                                                stroke="CurrentColor"
                                                                                stroke-width="1.5" />
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                            <div class="portfolio13_item"><a href="#"
                                                    class="portfolio13_item-link w-inline-block">
                                                    <div class="portfolio13_image-wrapper"><img
                                                            sizes="(max-width: 1024px) 100vw, 1024px"
                                                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419492-p-500.jpeg 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419492-p-800.jpeg 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419492.jpeg 1024w"
                                                            alt=""
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419492.jpeg"
                                                            loading="eager" class="portfolio13_image" /></div>
                                                    <div class="portfolio13_title-wrapper">
                                                        <div class="portfolio13_item-content-top">
                                                            <div class="margin-bottom margin-xxsmall">
                                                                <h3 class="heading-style-h5">New Product launch: MoveMic
                                                                </h3>
                                                            </div>
                                                            <div class="text-size-regular">Fast turnaround marketing
                                                                site for an awesome new product. Tech stack: NextJS,
                                                                React</div>
                                                            <div class="margin-top margin-xsmall">
                                                                <div class="portfolio13_tag-list">
                                                                    <div class="tag">
                                                                        <div>React</div>
                                                                    </div>
                                                                    <div class="tag">
                                                                        <div>Launching</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="margin-top margin-small">
                                                            <div class="button-group">
                                                                <div class="button is-link is-icon">
                                                                    <div>View project</div>
                                                                    <div class="icon-embed-xxsmall w-embed"><svg
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M6 3L11 8L6 13"
                                                                                stroke="CurrentColor"
                                                                                stroke-width="1.5" />
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                            <div class="portfolio13_item"><a href="#"
                                                    class="portfolio13_item-link w-inline-block">
                                                    <div class="portfolio13_image-wrapper"><img
                                                            sizes="(max-width: 1522px) 100vw, 1522px"
                                                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419498-p-500.jpeg 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419498-p-800.jpeg 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419498-p-1080.jpeg 1080w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419498.jpeg 1522w"
                                                            alt=""
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419498.jpeg"
                                                            loading="eager" class="portfolio13_image" /></div>
                                                    <div class="portfolio13_title-wrapper">
                                                        <div class="portfolio13_item-content-top">
                                                            <div class="margin-bottom margin-xxsmall">
                                                                <h3 class="heading-style-h5">Casting Networks goes
                                                                    global</h3>
                                                            </div>
                                                            <div class="text-size-regular">Geolocated Content and
                                                                Hubspot Integration.<br />Stack: WordPress, ACF, PHP.
                                                            </div>
                                                            <div class="margin-top margin-xsmall">
                                                                <div class="portfolio13_tag-list">
                                                                    <div class="tag">
                                                                        <div>WordPress</div>
                                                                    </div>
                                                                    <div class="tag">
                                                                        <div>Geolocalization</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="margin-top margin-small">
                                                            <div class="button-group">
                                                                <div class="button is-link is-icon">
                                                                    <div>View project</div>
                                                                    <div class="icon-embed-xxsmall w-embed"><svg
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M6 3L11 8L6 13"
                                                                                stroke="CurrentColor"
                                                                                stroke-width="1.5" />
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-top margin-xxlarge">
                                    <div class="button-group is-center"><a href="#"
                                            class="button is-secondary w-button">View all</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section_layout536 color-scheme-5">
                <div class="w-layout-grid layout536_component">
                    <div id="w-node-_89d1736d-8a00-afa7-fd41-e0b9fc612a95-4903aff0" class="padding-section-large">
                        <div class="layout536_content">
                            <div class="margin-bottom margin-xsmall">
                                <div class="text-style-tagline">Performance</div>
                            </div>
                            <div class="margin-bottom margin-small">
                                <h2 class="heading-style-h2">Quick-Witted Companies: The Shift to Rapid Campaign
                                    Creation</h2>
                            </div>
                            <div class="margin-bottom margin-medium">
                                <p class="text-size-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra
                                    ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
                            </div>
                            <div class="layout536_logo-row"><img loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images//logo-webflow.svg" alt=""
                                    class="layout536_logo" /><img loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images//logo-relume.svg" alt=""
                                    class="layout536_logo" /><img loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images//logo-webflow.svg" alt=""
                                    class="layout536_logo" /><img loading="lazy"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images//logo-relume.svg" alt=""
                                    class="layout536_logo" /></div>
                            <div class="margin-top margin-medium">
                                <div class="button-group"><a href="#"
                                        class="button is-secondary is-alternate w-button">Analyze</a><a href="#"
                                        class="button is-link is-icon is-alternate w-inline-block">
                                        <div>Learn more</div>
                                        <div class="icon-embed-xxsmall w-embed"><svg width="16" height="16"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5" />
                                            </svg></div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="layout536_image-wrapper"><img sizes="(max-width: 2560px) 100vw, 2560px"
                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419541-p-500.jpeg 500w, 
                            <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419541-p-800.jpeg 800w, 
                            <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419541-p-1080.jpeg 1080w, 
                            <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419541-p-1600.jpeg 1600w, 
                            <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419541-p-2000.jpeg 2000w, 
                            <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419541.jpeg 2560w"
                            alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419541.jpeg"
                            loading="eager" class="layout536_image" /></div>
                </div>
            </section>



            <section class="section_layout552 color-scheme-5">
                <div class="w-layout-grid layout552_component">
                    <div id="w-node-_8ae4aa49-0450-c62d-c903-69a537c3df72-37c3df70" class="layout552_image-wrapper"><img
                            sizes="(max-width: 1024px) 100vw, 1024px"
                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419519-p-500.jpeg 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419519-p-800.jpeg 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419519.jpeg 1024w"
                            alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419519.jpeg"
                            loading="eager" class="layout552_image" /></div>
                    <div id="w-node-_8ae4aa49-0450-c62d-c903-69a537c3df74-37c3df70" class="padding-section-large">
                        <div class="layout552_content">
                            <div class="margin-bottom margin-xsmall">
                                <div class="text-style-tagline">Performance</div>
                            </div>
                            <div class="margin-bottom margin-small">
                                <h2 class="heading-style-h2">Essential Tools for Inclusive Web Design: From Fast
                                    Websites to Effective Integration</h2>
                            </div>
                            <p class="text-size-medium">From building high-speed websites to integrating the tools you
                                rely on: HubSpot, GA4, HotJar, Clarity, Unbounce and more.</p>
                            <div class="margin-top margin-medium">
                                <div class="button-group"><a href="#"
                                        class="button is-secondary is-alternate w-button">Explore</a><a href="#"
                                        class="button is-link is-icon is-alternate w-inline-block">
                                        <div>Learn more</div>
                                        <div class="icon-embed-xxsmall w-embed"><svg width="16" height="16"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5" />
                                            </svg></div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <section class="section_cta26 color-scheme-1">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="cta26_component">
                                <div class="text-align-center">
                                    <div class="max-width-large align-center">
                                        <div class="margin-bottom margin-small">
                                            <h2 class="heading-style-h2">Assess your site to see how we can enhance it.
                                            </h2>
                                        </div>
                                        <p class="text-size-medium">Ensures accessibility for all users, enhances search
                                            rankings, and supports business growth while reducing legal risks.</p>
                                        <div class="margin-top margin-medium">
                                            <div class="cta26_form-block w-form">
                                                <form id="email-form" name="email-form" data-name="Email Form"
                                                    method="get" class="cta26_form"
                                                    data-wf-page-id="691396626dc512b94903aff0"
                                                    data-wf-element-id="3527018f-6650-f6f3-e15e-7c5a58f53067">
                                                    <div class="signup-form-wrapper"><input class="form_input w-input"
                                                            maxlength="256" name="email-2" data-name="Email 2"
                                                            placeholder="Enter website URL" type="email" id="email-2"
                                                            required="" /><input type="submit"
                                                            data-wait="Please wait..." class="button w-button"
                                                            value="Analyze now" /></div>
                                                    <div class="text-size-tiny">By submitting, you agree to our
                                                        comprehensive digital assessment terms</div>
                                                </form>
                                                <div class="form_message-success-wrapper w-form-done">
                                                    <div class="form_message-success">
                                                        <div class="success-text">Analysis complete. Your insights are
                                                            ready</div>
                                                    </div>
                                                </div>
                                                <div class="form_message-error-wrapper w-form-fail">
                                                    <div class="form_message-error">
                                                        <div class="error-text">Scan failed. Please check your URL and
                                                            try again</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section_team4 color-scheme-4">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="team4_component">
                                <div class="margin-bottom margin-xxlarge">
                                    <div class="max-width-large">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="text-style-tagline">Tagline</div>
                                        </div>
                                        <div class="margin-bottom margin-small">
                                            <h2 class="heading-style-h2">Our team</h2>
                                        </div>
                                        <p class="text-size-medium">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. </p>
                                    </div>
                                </div>
                                <div class="team4_list-wrapper">
                                    <div class="w-layout-grid team4_list">
                                        <div class="team4_item">
                                            <div class="margin-bottom margin-small">
                                                <div class="team4_image-wrapper"><img loading="lazy"
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                        alt="" class="team4_image" /></div>
                                            </div>
                                            <div class="margin-bottom margin-xsmall">
                                                <div class="team4_title-wrapper">
                                                    <div class="text-size-large">Full name</div>
                                                    <div class="text-size-medium">Job title</div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                varius enim in eros elementum tristique.</p>
                                            <div class="margin-top margin-small">
                                                <div class="w-layout-grid team4_social"><a href="#"
                                                        class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M12 3C7.03145 3 3 7.03145 3 12C3 16.9686 7.03145 21 12 21C16.9588 21 21 16.9686 21 12C21 7.03145 16.9588 3 12 3ZM17.9447 7.14859C19.0184 8.45662 19.6627 10.1258 19.6822 11.9317C19.4284 11.8829 16.8904 11.3655 14.333 11.6876C14.2744 11.5607 14.2256 11.4241 14.167 11.2874C14.0108 10.9165 13.8352 10.5358 13.6594 10.1746C16.4902 9.0228 17.7787 7.36334 17.9447 7.14859ZM12 4.32755C13.9523 4.32755 15.7386 5.05966 17.0955 6.26031C16.9588 6.45553 15.7972 8.00759 13.064 9.03253C11.8048 6.71909 10.4089 4.82538 10.1942 4.53254C10.77 4.39588 11.3753 4.32755 12 4.32755ZM8.72996 5.04989C8.93494 5.32321 10.3015 7.22668 11.5803 9.49131C7.98807 10.448 4.81562 10.4284 4.47397 10.4284C4.9718 8.04664 6.58243 6.06507 8.72996 5.04989ZM4.30803 12.0098C4.30803 11.9317 4.30803 11.8536 4.30803 11.7755C4.63991 11.7852 8.36876 11.8341 12.205 10.6822C12.4295 11.1117 12.6345 11.551 12.8297 11.9902C12.7321 12.0195 12.6247 12.0488 12.5271 12.0781C8.56399 13.3568 6.45553 16.8514 6.27983 17.1442C5.05965 15.7874 4.30803 13.9816 4.30803 12.0098ZM12 19.692C10.2234 19.692 8.58352 19.0868 7.28525 18.0716C7.42191 17.7885 8.98371 14.782 13.3178 13.269C13.3373 13.2592 13.3471 13.2592 13.3666 13.2495C14.4501 16.051 14.8894 18.4034 15.0065 19.077C14.0792 19.4772 13.064 19.692 12 19.692ZM16.2852 18.3742C16.2072 17.9056 15.7972 15.6605 14.7917 12.898C17.2028 12.5173 19.3113 13.1421 19.5749 13.23C19.243 15.3677 18.013 17.2126 16.2852 18.3742Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="team4_item">
                                            <div class="margin-bottom margin-small">
                                                <div class="team4_image-wrapper"><img loading="lazy"
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                        alt="" class="team4_image" /></div>
                                            </div>
                                            <div class="margin-bottom margin-xsmall">
                                                <div class="team4_title-wrapper">
                                                    <div class="text-size-large">Full name</div>
                                                    <div class="text-size-medium">Job title</div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                varius enim in eros elementum tristique.</p>
                                            <div class="margin-top margin-small">
                                                <div class="w-layout-grid team4_social"><a href="#"
                                                        class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M12 3C7.03145 3 3 7.03145 3 12C3 16.9686 7.03145 21 12 21C16.9588 21 21 16.9686 21 12C21 7.03145 16.9588 3 12 3ZM17.9447 7.14859C19.0184 8.45662 19.6627 10.1258 19.6822 11.9317C19.4284 11.8829 16.8904 11.3655 14.333 11.6876C14.2744 11.5607 14.2256 11.4241 14.167 11.2874C14.0108 10.9165 13.8352 10.5358 13.6594 10.1746C16.4902 9.0228 17.7787 7.36334 17.9447 7.14859ZM12 4.32755C13.9523 4.32755 15.7386 5.05966 17.0955 6.26031C16.9588 6.45553 15.7972 8.00759 13.064 9.03253C11.8048 6.71909 10.4089 4.82538 10.1942 4.53254C10.77 4.39588 11.3753 4.32755 12 4.32755ZM8.72996 5.04989C8.93494 5.32321 10.3015 7.22668 11.5803 9.49131C7.98807 10.448 4.81562 10.4284 4.47397 10.4284C4.9718 8.04664 6.58243 6.06507 8.72996 5.04989ZM4.30803 12.0098C4.30803 11.9317 4.30803 11.8536 4.30803 11.7755C4.63991 11.7852 8.36876 11.8341 12.205 10.6822C12.4295 11.1117 12.6345 11.551 12.8297 11.9902C12.7321 12.0195 12.6247 12.0488 12.5271 12.0781C8.56399 13.3568 6.45553 16.8514 6.27983 17.1442C5.05965 15.7874 4.30803 13.9816 4.30803 12.0098ZM12 19.692C10.2234 19.692 8.58352 19.0868 7.28525 18.0716C7.42191 17.7885 8.98371 14.782 13.3178 13.269C13.3373 13.2592 13.3471 13.2592 13.3666 13.2495C14.4501 16.051 14.8894 18.4034 15.0065 19.077C14.0792 19.4772 13.064 19.692 12 19.692ZM16.2852 18.3742C16.2072 17.9056 15.7972 15.6605 14.7917 12.898C17.2028 12.5173 19.3113 13.1421 19.5749 13.23C19.243 15.3677 18.013 17.2126 16.2852 18.3742Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="team4_item">
                                            <div class="margin-bottom margin-small">
                                                <div class="team4_image-wrapper"><img loading="lazy"
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                        alt="" class="team4_image" /></div>
                                            </div>
                                            <div class="margin-bottom margin-xsmall">
                                                <div class="team4_title-wrapper">
                                                    <div class="text-size-large">Full name</div>
                                                    <div class="text-size-medium">Job title</div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                varius enim in eros elementum tristique.</p>
                                            <div class="margin-top margin-small">
                                                <div class="w-layout-grid team4_social"><a href="#"
                                                        class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M12 3C7.03145 3 3 7.03145 3 12C3 16.9686 7.03145 21 12 21C16.9588 21 21 16.9686 21 12C21 7.03145 16.9588 3 12 3ZM17.9447 7.14859C19.0184 8.45662 19.6627 10.1258 19.6822 11.9317C19.4284 11.8829 16.8904 11.3655 14.333 11.6876C14.2744 11.5607 14.2256 11.4241 14.167 11.2874C14.0108 10.9165 13.8352 10.5358 13.6594 10.1746C16.4902 9.0228 17.7787 7.36334 17.9447 7.14859ZM12 4.32755C13.9523 4.32755 15.7386 5.05966 17.0955 6.26031C16.9588 6.45553 15.7972 8.00759 13.064 9.03253C11.8048 6.71909 10.4089 4.82538 10.1942 4.53254C10.77 4.39588 11.3753 4.32755 12 4.32755ZM8.72996 5.04989C8.93494 5.32321 10.3015 7.22668 11.5803 9.49131C7.98807 10.448 4.81562 10.4284 4.47397 10.4284C4.9718 8.04664 6.58243 6.06507 8.72996 5.04989ZM4.30803 12.0098C4.30803 11.9317 4.30803 11.8536 4.30803 11.7755C4.63991 11.7852 8.36876 11.8341 12.205 10.6822C12.4295 11.1117 12.6345 11.551 12.8297 11.9902C12.7321 12.0195 12.6247 12.0488 12.5271 12.0781C8.56399 13.3568 6.45553 16.8514 6.27983 17.1442C5.05965 15.7874 4.30803 13.9816 4.30803 12.0098ZM12 19.692C10.2234 19.692 8.58352 19.0868 7.28525 18.0716C7.42191 17.7885 8.98371 14.782 13.3178 13.269C13.3373 13.2592 13.3471 13.2592 13.3666 13.2495C14.4501 16.051 14.8894 18.4034 15.0065 19.077C14.0792 19.4772 13.064 19.692 12 19.692ZM16.2852 18.3742C16.2072 17.9056 15.7972 15.6605 14.7917 12.898C17.2028 12.5173 19.3113 13.1421 19.5749 13.23C19.243 15.3677 18.013 17.2126 16.2852 18.3742Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="team4_item">
                                            <div class="margin-bottom margin-small">
                                                <div class="team4_image-wrapper"><img loading="lazy"
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                        alt="" class="team4_image" /></div>
                                            </div>
                                            <div class="margin-bottom margin-xsmall">
                                                <div class="team4_title-wrapper">
                                                    <div class="text-size-large">Full name</div>
                                                    <div class="text-size-medium">Job title</div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                varius enim in eros elementum tristique.</p>
                                            <div class="margin-top margin-small">
                                                <div class="w-layout-grid team4_social"><a href="#"
                                                        class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M12 3C7.03145 3 3 7.03145 3 12C3 16.9686 7.03145 21 12 21C16.9588 21 21 16.9686 21 12C21 7.03145 16.9588 3 12 3ZM17.9447 7.14859C19.0184 8.45662 19.6627 10.1258 19.6822 11.9317C19.4284 11.8829 16.8904 11.3655 14.333 11.6876C14.2744 11.5607 14.2256 11.4241 14.167 11.2874C14.0108 10.9165 13.8352 10.5358 13.6594 10.1746C16.4902 9.0228 17.7787 7.36334 17.9447 7.14859ZM12 4.32755C13.9523 4.32755 15.7386 5.05966 17.0955 6.26031C16.9588 6.45553 15.7972 8.00759 13.064 9.03253C11.8048 6.71909 10.4089 4.82538 10.1942 4.53254C10.77 4.39588 11.3753 4.32755 12 4.32755ZM8.72996 5.04989C8.93494 5.32321 10.3015 7.22668 11.5803 9.49131C7.98807 10.448 4.81562 10.4284 4.47397 10.4284C4.9718 8.04664 6.58243 6.06507 8.72996 5.04989ZM4.30803 12.0098C4.30803 11.9317 4.30803 11.8536 4.30803 11.7755C4.63991 11.7852 8.36876 11.8341 12.205 10.6822C12.4295 11.1117 12.6345 11.551 12.8297 11.9902C12.7321 12.0195 12.6247 12.0488 12.5271 12.0781C8.56399 13.3568 6.45553 16.8514 6.27983 17.1442C5.05965 15.7874 4.30803 13.9816 4.30803 12.0098ZM12 19.692C10.2234 19.692 8.58352 19.0868 7.28525 18.0716C7.42191 17.7885 8.98371 14.782 13.3178 13.269C13.3373 13.2592 13.3471 13.2592 13.3666 13.2495C14.4501 16.051 14.8894 18.4034 15.0065 19.077C14.0792 19.4772 13.064 19.692 12 19.692ZM16.2852 18.3742C16.2072 17.9056 15.7972 15.6605 14.7917 12.898C17.2028 12.5173 19.3113 13.1421 19.5749 13.23C19.243 15.3677 18.013 17.2126 16.2852 18.3742Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="team4_item">
                                            <div class="margin-bottom margin-small">
                                                <div class="team4_image-wrapper"><img loading="lazy"
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                        alt="" class="team4_image" /></div>
                                            </div>
                                            <div class="margin-bottom margin-xsmall">
                                                <div class="team4_title-wrapper">
                                                    <div class="text-size-large">Full name</div>
                                                    <div class="text-size-medium">Job title</div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                varius enim in eros elementum tristique.</p>
                                            <div class="margin-top margin-small">
                                                <div class="w-layout-grid team4_social"><a href="#"
                                                        class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M12 3C7.03145 3 3 7.03145 3 12C3 16.9686 7.03145 21 12 21C16.9588 21 21 16.9686 21 12C21 7.03145 16.9588 3 12 3ZM17.9447 7.14859C19.0184 8.45662 19.6627 10.1258 19.6822 11.9317C19.4284 11.8829 16.8904 11.3655 14.333 11.6876C14.2744 11.5607 14.2256 11.4241 14.167 11.2874C14.0108 10.9165 13.8352 10.5358 13.6594 10.1746C16.4902 9.0228 17.7787 7.36334 17.9447 7.14859ZM12 4.32755C13.9523 4.32755 15.7386 5.05966 17.0955 6.26031C16.9588 6.45553 15.7972 8.00759 13.064 9.03253C11.8048 6.71909 10.4089 4.82538 10.1942 4.53254C10.77 4.39588 11.3753 4.32755 12 4.32755ZM8.72996 5.04989C8.93494 5.32321 10.3015 7.22668 11.5803 9.49131C7.98807 10.448 4.81562 10.4284 4.47397 10.4284C4.9718 8.04664 6.58243 6.06507 8.72996 5.04989ZM4.30803 12.0098C4.30803 11.9317 4.30803 11.8536 4.30803 11.7755C4.63991 11.7852 8.36876 11.8341 12.205 10.6822C12.4295 11.1117 12.6345 11.551 12.8297 11.9902C12.7321 12.0195 12.6247 12.0488 12.5271 12.0781C8.56399 13.3568 6.45553 16.8514 6.27983 17.1442C5.05965 15.7874 4.30803 13.9816 4.30803 12.0098ZM12 19.692C10.2234 19.692 8.58352 19.0868 7.28525 18.0716C7.42191 17.7885 8.98371 14.782 13.3178 13.269C13.3373 13.2592 13.3471 13.2592 13.3666 13.2495C14.4501 16.051 14.8894 18.4034 15.0065 19.077C14.0792 19.4772 13.064 19.692 12 19.692ZM16.2852 18.3742C16.2072 17.9056 15.7972 15.6605 14.7917 12.898C17.2028 12.5173 19.3113 13.1421 19.5749 13.23C19.243 15.3677 18.013 17.2126 16.2852 18.3742Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="team4_item">
                                            <div class="margin-bottom margin-small">
                                                <div class="team4_image-wrapper"><img loading="lazy"
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                        alt="" class="team4_image" /></div>
                                            </div>
                                            <div class="margin-bottom margin-xsmall">
                                                <div class="team4_title-wrapper">
                                                    <div class="text-size-large">Full name</div>
                                                    <div class="text-size-medium">Job title</div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                varius enim in eros elementum tristique.</p>
                                            <div class="margin-top margin-small">
                                                <div class="w-layout-grid team4_social"><a href="#"
                                                        class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M12 3C7.03145 3 3 7.03145 3 12C3 16.9686 7.03145 21 12 21C16.9588 21 21 16.9686 21 12C21 7.03145 16.9588 3 12 3ZM17.9447 7.14859C19.0184 8.45662 19.6627 10.1258 19.6822 11.9317C19.4284 11.8829 16.8904 11.3655 14.333 11.6876C14.2744 11.5607 14.2256 11.4241 14.167 11.2874C14.0108 10.9165 13.8352 10.5358 13.6594 10.1746C16.4902 9.0228 17.7787 7.36334 17.9447 7.14859ZM12 4.32755C13.9523 4.32755 15.7386 5.05966 17.0955 6.26031C16.9588 6.45553 15.7972 8.00759 13.064 9.03253C11.8048 6.71909 10.4089 4.82538 10.1942 4.53254C10.77 4.39588 11.3753 4.32755 12 4.32755ZM8.72996 5.04989C8.93494 5.32321 10.3015 7.22668 11.5803 9.49131C7.98807 10.448 4.81562 10.4284 4.47397 10.4284C4.9718 8.04664 6.58243 6.06507 8.72996 5.04989ZM4.30803 12.0098C4.30803 11.9317 4.30803 11.8536 4.30803 11.7755C4.63991 11.7852 8.36876 11.8341 12.205 10.6822C12.4295 11.1117 12.6345 11.551 12.8297 11.9902C12.7321 12.0195 12.6247 12.0488 12.5271 12.0781C8.56399 13.3568 6.45553 16.8514 6.27983 17.1442C5.05965 15.7874 4.30803 13.9816 4.30803 12.0098ZM12 19.692C10.2234 19.692 8.58352 19.0868 7.28525 18.0716C7.42191 17.7885 8.98371 14.782 13.3178 13.269C13.3373 13.2592 13.3471 13.2592 13.3666 13.2495C14.4501 16.051 14.8894 18.4034 15.0065 19.077C14.0792 19.4772 13.064 19.692 12 19.692ZM16.2852 18.3742C16.2072 17.9056 15.7972 15.6605 14.7917 12.898C17.2028 12.5173 19.3113 13.1421 19.5749 13.23C19.243 15.3677 18.013 17.2126 16.2852 18.3742Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="team4_item">
                                            <div class="margin-bottom margin-small">
                                                <div class="team4_image-wrapper"><img loading="lazy"
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                        alt="" class="team4_image" /></div>
                                            </div>
                                            <div class="margin-bottom margin-xsmall">
                                                <div class="team4_title-wrapper">
                                                    <div class="text-size-large">Full name</div>
                                                    <div class="text-size-medium">Job title</div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                varius enim in eros elementum tristique.</p>
                                            <div class="margin-top margin-small">
                                                <div class="w-layout-grid team4_social"><a href="#"
                                                        class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M12 3C7.03145 3 3 7.03145 3 12C3 16.9686 7.03145 21 12 21C16.9588 21 21 16.9686 21 12C21 7.03145 16.9588 3 12 3ZM17.9447 7.14859C19.0184 8.45662 19.6627 10.1258 19.6822 11.9317C19.4284 11.8829 16.8904 11.3655 14.333 11.6876C14.2744 11.5607 14.2256 11.4241 14.167 11.2874C14.0108 10.9165 13.8352 10.5358 13.6594 10.1746C16.4902 9.0228 17.7787 7.36334 17.9447 7.14859ZM12 4.32755C13.9523 4.32755 15.7386 5.05966 17.0955 6.26031C16.9588 6.45553 15.7972 8.00759 13.064 9.03253C11.8048 6.71909 10.4089 4.82538 10.1942 4.53254C10.77 4.39588 11.3753 4.32755 12 4.32755ZM8.72996 5.04989C8.93494 5.32321 10.3015 7.22668 11.5803 9.49131C7.98807 10.448 4.81562 10.4284 4.47397 10.4284C4.9718 8.04664 6.58243 6.06507 8.72996 5.04989ZM4.30803 12.0098C4.30803 11.9317 4.30803 11.8536 4.30803 11.7755C4.63991 11.7852 8.36876 11.8341 12.205 10.6822C12.4295 11.1117 12.6345 11.551 12.8297 11.9902C12.7321 12.0195 12.6247 12.0488 12.5271 12.0781C8.56399 13.3568 6.45553 16.8514 6.27983 17.1442C5.05965 15.7874 4.30803 13.9816 4.30803 12.0098ZM12 19.692C10.2234 19.692 8.58352 19.0868 7.28525 18.0716C7.42191 17.7885 8.98371 14.782 13.3178 13.269C13.3373 13.2592 13.3471 13.2592 13.3666 13.2495C14.4501 16.051 14.8894 18.4034 15.0065 19.077C14.0792 19.4772 13.064 19.692 12 19.692ZM16.2852 18.3742C16.2072 17.9056 15.7972 15.6605 14.7917 12.898C17.2028 12.5173 19.3113 13.1421 19.5749 13.23C19.243 15.3677 18.013 17.2126 16.2852 18.3742Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="team4_item">
                                            <div class="margin-bottom margin-small">
                                                <div class="team4_image-wrapper"><img loading="lazy"
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images//placeholder-image.svg"
                                                        alt="" class="team4_image" /></div>
                                            </div>
                                            <div class="margin-bottom margin-xsmall">
                                                <div class="team4_title-wrapper">
                                                    <div class="text-size-large">Full name</div>
                                                    <div class="text-size-medium">Job title</div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                varius enim in eros elementum tristique.</p>
                                            <div class="margin-top margin-small">
                                                <div class="w-layout-grid team4_social"><a href="#"
                                                        class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3ZM8 18C8.27614 18 8.5 17.7761 8.5 17.5V10.5C8.5 10.2239 8.27614 10 8 10H6.5C6.22386 10 6 10.2239 6 10.5V17.5C6 17.7761 6.22386 18 6.5 18H8ZM7.25 9C6.42157 9 5.75 8.32843 5.75 7.5C5.75 6.67157 6.42157 6 7.25 6C8.07843 6 8.75 6.67157 8.75 7.5C8.75 8.32843 8.07843 9 7.25 9ZM17.5 18C17.7761 18 18 17.7761 18 17.5V12.9C18.0325 11.3108 16.8576 9.95452 15.28 9.76C14.177 9.65925 13.1083 10.1744 12.5 11.1V10.5C12.5 10.2239 12.2761 10 12 10H10.5C10.2239 10 10 10.2239 10 10.5V17.5C10 17.7761 10.2239 18 10.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5V13.75C12.5 12.9216 13.1716 12.25 14 12.25C14.8284 12.25 15.5 12.9216 15.5 13.75V17.5C15.5 17.7761 15.7239 18 16 18H17.5Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="100%" height="100%"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a><a href="#" class="social-link w-inline-block">
                                                        <div class="social-icon w-embed"><svg width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M12 3C7.03145 3 3 7.03145 3 12C3 16.9686 7.03145 21 12 21C16.9588 21 21 16.9686 21 12C21 7.03145 16.9588 3 12 3ZM17.9447 7.14859C19.0184 8.45662 19.6627 10.1258 19.6822 11.9317C19.4284 11.8829 16.8904 11.3655 14.333 11.6876C14.2744 11.5607 14.2256 11.4241 14.167 11.2874C14.0108 10.9165 13.8352 10.5358 13.6594 10.1746C16.4902 9.0228 17.7787 7.36334 17.9447 7.14859ZM12 4.32755C13.9523 4.32755 15.7386 5.05966 17.0955 6.26031C16.9588 6.45553 15.7972 8.00759 13.064 9.03253C11.8048 6.71909 10.4089 4.82538 10.1942 4.53254C10.77 4.39588 11.3753 4.32755 12 4.32755ZM8.72996 5.04989C8.93494 5.32321 10.3015 7.22668 11.5803 9.49131C7.98807 10.448 4.81562 10.4284 4.47397 10.4284C4.9718 8.04664 6.58243 6.06507 8.72996 5.04989ZM4.30803 12.0098C4.30803 11.9317 4.30803 11.8536 4.30803 11.7755C4.63991 11.7852 8.36876 11.8341 12.205 10.6822C12.4295 11.1117 12.6345 11.551 12.8297 11.9902C12.7321 12.0195 12.6247 12.0488 12.5271 12.0781C8.56399 13.3568 6.45553 16.8514 6.27983 17.1442C5.05965 15.7874 4.30803 13.9816 4.30803 12.0098ZM12 19.692C10.2234 19.692 8.58352 19.0868 7.28525 18.0716C7.42191 17.7885 8.98371 14.782 13.3178 13.269C13.3373 13.2592 13.3471 13.2592 13.3666 13.2495C14.4501 16.051 14.8894 18.4034 15.0065 19.077C14.0792 19.4772 13.064 19.692 12 19.692ZM16.2852 18.3742C16.2072 17.9056 15.7972 15.6605 14.7917 12.898C17.2028 12.5173 19.3113 13.1421 19.5749 13.23C19.243 15.3677 18.013 17.2126 16.2852 18.3742Z"
                                                                    fill="CurrentColor" />
                                                            </svg></div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-top margin-xxlarge">
                                    <div class="max-width-medium">
                                        <div class="margin-bottom margin-xsmall">
                                            <h3 class="heading-style-h4">We&#x27;re hiring!</h3>
                                        </div>
                                        <p class="text-size-medium">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</p>
                                        <div class="margin-top margin-medium">
                                            <div class="button-group"><a href="#"
                                                    class="button is-secondary w-button">Open positions</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section_layout180 text-color-white color-scheme-1">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="layout180_component">
                                <div class="text-align-center">
                                    <div class="max-width-large align-center">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="text-style-tagline text-color-white">Who we are</div>
                                        </div>
                                        <h2 class="heading-style-h2">We handle the technical side of your digital
                                            campaigns so you can focus on strategy, content, and performance.</h2>
                                        <div class="margin-top margin-medium">
                                            <div class="button-group is-center"><a href="#"
                                                    class="button is-secondary w-button">Learn more</a><a href="#"
                                                    class="button is-link is-icon w-inline-block">
                                                    <div>Contact us</div>
                                                    <div class="icon-embed-xxsmall w-embed"><svg width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 3L11 8L6 13" stroke="CurrentColor"
                                                                stroke-width="1.5" />
                                                        </svg></div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layout180_background-image-wrapper">
                    <div class="image-overlay-layer"></div><img sizes="(max-width: 2560px) 100vw, 2560px"
                        srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419525-p-500.jpeg 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419525-p-800.jpeg 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419525-p-1080.jpeg 1080w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419525-p-1600.jpeg 1600w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419525-p-2000.jpeg 2000w, <?php echo get_stylesheet_directory_uri(); ?>/images/relume-419525.jpeg 2560w"
                        alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/relume-419525.jpeg"
                        loading="eager" class="layout180_background-image" />
                </div>
            </section>


            <section class="section_faq13 color-scheme-5">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-large">
                            <div class="faq13_component">
                                <div class="margin-bottom margin-xxlarge">
                                    <div class="max-width-large">
                                        <div class="margin-bottom margin-small">
                                            <h2 class="heading-style-h2">FAQs</h2>
                                        </div>
                                        <p class="text-size-medium">Answers to common questions about our digital
                                            development services</p>
                                    </div>
                                </div>
                                <div class="w-layout-grid faq13_grid-list">
                                    <div class="faq13_item">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="text-size-medium">How long does a project take?</div>
                                        </div>
                                        <p>Project timelines vary based on complexity. Typically, we complete most web
                                            development projects within 4-6 weeks. We provide a detailed timeline during
                                            our initial consultation</p>
                                    </div>
                                    <div class="faq13_item">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="text-size-medium">What services do you offer?</div>
                                        </div>
                                        <p>We specialize in web development, performance optimization, accessibility
                                            improvements, SEO, and third-party integrations</p>
                                    </div>
                                    <div class="faq13_item">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="text-size-medium">Do you work with small businesses?</div>
                                        </div>
                                        <p>Absolutely. We tailor our services to businesses of all sizes, from startups
                                            to enterprise-level organizations</p>
                                    </div>
                                    <div class="faq13_item">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="text-size-medium">What is your pricing model?</div>
                                        </div>
                                        <p>We offer flexible pricing based on project scope. We provide transparent
                                            quotes after understanding your specific requirements</p>
                                    </div>
                                    <div class="faq13_item">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="text-size-medium">How do you ensure website security?</div>
                                        </div>
                                        <p>We implement industry-standard security protocols and conduct thorough
                                            testing to protect your digital assets</p>
                                    </div>
                                    <div class="faq13_item">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="text-size-medium">Can you help with existing websites?</div>
                                        </div>
                                        <p>Yes, we offer comprehensive audits and optimization services for existing
                                            websites</p>
                                    </div>
                                </div>
                                <div class="margin-top margin-xxlarge">
                                    <div class="max-width-medium">
                                        <div class="margin-bottom margin-xsmall">
                                            <h3 class="heading-style-h4">Need more information?</h3>
                                        </div>
                                        <p class="text-size-medium">Our team is ready to answer your specific questions
                                        </p>
                                        <div class="margin-top margin-medium">
                                            <div class="button-group"><a href="#"
                                                    class="button is-secondary is-alternate w-button">Contact</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>
        
        <footer class="footer12_component color-scheme-7">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-vertical padding-xxlarge">
                        <div class="padding-bottom padding-xxlarge">
                            <div class="w-layout-grid footer12_top-wrapper">
                                <div class="max-width-medium">
                                    <div class="margin-bottom margin-small">
                                        <h2 class="heading-style-h1">Digital transformation starts here</h2>
                                    </div>
                                    <div>Empowering businesses with cutting-edge web solutions and strategic digital
                                        innovations</div>
                                    <div class="margin-top margin-medium">
                                        <div class="button-group"><a href="#" class="button w-button">Connect</a><a
                                                href="#" class="button is-secondary is-alternate w-button">Explore</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-layout-grid footer12_menu-wrapper">
                                    <div class="footer12_link-list"><a href="#" class="footer12_link">Services</a><a
                                            href="#" class="footer12_link">Insights</a><a href="#"
                                            class="footer12_link">Case studies</a><a href="#"
                                            class="footer12_link">Team</a><a href="#" class="footer12_link">Careers</a>
                                    </div>
                                    <div class="footer12_link-list"><a href="#" class="footer12_link">Contact</a><a
                                            href="#" class="footer12_link">Privacy</a><a href="#"
                                            class="footer12_link">Terms</a><a href="#" class="footer12_link">Blog</a><a
                                            href="#" class="footer12_link">Resources</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="padding-bottom padding-medium">
                            <div class="footer12_middle-wrapper"><a href="#" class="footer12_logo-link w-nav-brand"><img
                                        loading="lazy"
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-wide.svg" alt=""
                                        class="footer12_logo" /></a>
                                <div class="footer12_image-list">
                                    <div class="footer12_image-item"><img loading="lazy"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-20small-20image.svg"
                                            alt="" class="footer12_image" /></div>
                                    <div class="footer12_image-item"><img loading="lazy"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-20small-20image.svg"
                                            alt="" class="footer12_image" /></div>
                                    <div class="footer12_image-item"><img loading="lazy"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-20small-20image.svg"
                                            alt="" class="footer12_image" /></div>
                                    <div class="footer12_image-item"><img loading="lazy"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-20small-20image.svg"
                                            alt="" class="footer12_image" /></div>
                                    <div class="footer12_image-item"><img loading="lazy"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-20small-20image.svg"
                                            alt="" class="footer12_image" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="divider-horizontal"></div>
                        <div class="padding-top padding-medium">
                            <div class="footer12_bottom-wrapper">
                                <div class="footer12_credit-text">© 2024 Aviada Labs. All rights reserved.</div>
                                <div class="w-layout-grid footer12_social-list"><a href="#"
                                        class="footer12_social-link w-inline-block">
                                        <div class="icon-embed-xsmall w-embed"><svg width="100%" height="100%"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 12.0611C22 6.50451 17.5229 2 12 2C6.47715 2 2 6.50451 2 12.0611C2 17.0828 5.65684 21.2452 10.4375 22V14.9694H7.89844V12.0611H10.4375V9.84452C10.4375 7.32296 11.9305 5.93012 14.2146 5.93012C15.3088 5.93012 16.4531 6.12663 16.4531 6.12663V8.60261H15.1922C13.95 8.60261 13.5625 9.37822 13.5625 10.1739V12.0611H16.3359L15.8926 14.9694H13.5625V22C18.3432 21.2452 22 17.083 22 12.0611Z"
                                                    fill="CurrentColor" />
                                            </svg></div>
                                    </a><a href="#" class="footer12_social-link w-inline-block">
                                        <div class="icon-embed-xsmall w-embed"><svg width="100%" height="100%"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16 3H8C5.23858 3 3 5.23858 3 8V16C3 18.7614 5.23858 21 8 21H16C18.7614 21 21 18.7614 21 16V8C21 5.23858 18.7614 3 16 3ZM19.25 16C19.2445 17.7926 17.7926 19.2445 16 19.25H8C6.20735 19.2445 4.75549 17.7926 4.75 16V8C4.75549 6.20735 6.20735 4.75549 8 4.75H16C17.7926 4.75549 19.2445 6.20735 19.25 8V16ZM16.75 8.25C17.3023 8.25 17.75 7.80228 17.75 7.25C17.75 6.69772 17.3023 6.25 16.75 6.25C16.1977 6.25 15.75 6.69772 15.75 7.25C15.75 7.80228 16.1977 8.25 16.75 8.25ZM12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5027 10.8057 16.0294 9.65957 15.1849 8.81508C14.3404 7.97059 13.1943 7.49734 12 7.5ZM9.25 12C9.25 13.5188 10.4812 14.75 12 14.75C13.5188 14.75 14.75 13.5188 14.75 12C14.75 10.4812 13.5188 9.25 12 9.25C10.4812 9.25 9.25 10.4812 9.25 12Z"
                                                    fill="CurrentColor" />
                                            </svg></div>
                                    </a><a href="#" class="footer12_social-link w-inline-block">
                                        <div class="icon-embed-xsmall w-embed"><svg width="100%" height="100%"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z"
                                                    fill="CurrentColor" />
                                            </svg></div>
                                    </a><a href="#" class="footer12_social-link w-inline-block">
                                        <div class="icon-embed-xsmall w-embed"><svg width="100%" height="100%"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.5 3C3.67157 3 3 3.67157 3 4.5V19.5C3 20.3284 3.67157 21 4.5 21H19.5C20.3284 21 21 20.3284 21 19.5V4.5C21 3.67157 20.3284 3 19.5 3H4.5ZM8.52076 7.00272C8.52639 7.95897 7.81061 8.54819 6.96123 8.54397C6.16107 8.53975 5.46357 7.90272 5.46779 7.00413C5.47201 6.15897 6.13998 5.47975 7.00764 5.49944C7.88795 5.51913 8.52639 6.1646 8.52076 7.00272ZM12.2797 9.76176H9.75971H9.7583V18.3216H12.4217V18.1219C12.4217 17.742 12.4214 17.362 12.4211 16.9819V16.9818V16.9816V16.9815V16.9812C12.4203 15.9674 12.4194 14.9532 12.4246 13.9397C12.426 13.6936 12.4372 13.4377 12.5005 13.2028C12.7381 12.3253 13.5271 11.7586 14.4074 11.8979C14.9727 11.9864 15.3467 12.3141 15.5042 12.8471C15.6013 13.1803 15.6449 13.5389 15.6491 13.8863C15.6605 14.9339 15.6589 15.9815 15.6573 17.0292V17.0294C15.6567 17.3992 15.6561 17.769 15.6561 18.1388V18.3202H18.328V18.1149C18.328 17.6629 18.3278 17.211 18.3275 16.7591V16.759V16.7588C18.327 15.6293 18.3264 14.5001 18.3294 13.3702C18.3308 12.8597 18.276 12.3563 18.1508 11.8627C17.9638 11.1286 17.5771 10.5211 16.9485 10.0824C16.5027 9.77019 16.0133 9.5691 15.4663 9.5466C15.404 9.54401 15.3412 9.54062 15.2781 9.53721L15.2781 9.53721L15.2781 9.53721C14.9984 9.52209 14.7141 9.50673 14.4467 9.56066C13.6817 9.71394 13.0096 10.0641 12.5019 10.6814C12.4429 10.7522 12.3852 10.8241 12.2991 10.9314L12.2991 10.9315L12.2797 10.9557V9.76176ZM5.68164 18.3244H8.33242V9.76733H5.68164V18.3244Z"
                                                    fill="CurrentColor" />
                                            </svg></div>
                                    </a><a href="#" class="footer12_social-link w-inline-block">
                                        <div class="icon-embed-xsmall w-embed"><svg width="100%" height="100%"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M20.5686 4.77345C21.5163 5.02692 22.2555 5.76903 22.5118 6.71673C23.1821 9.42042 23.1385 14.5321 22.5259 17.278C22.2724 18.2257 21.5303 18.965 20.5826 19.2213C17.9071 19.8831 5.92356 19.8015 3.40294 19.2213C2.45524 18.9678 1.71595 18.2257 1.45966 17.278C0.827391 14.7011 0.871044 9.25144 1.44558 6.73081C1.69905 5.78311 2.44116 5.04382 3.38886 4.78753C6.96561 4.0412 19.2956 4.282 20.5686 4.77345ZM9.86682 8.70227L15.6122 11.9974L9.86682 15.2925V8.70227Z"
                                                    fill="CurrentColor" />
                                            </svg></div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery.js?site=691396606dc512b94903af38" type="text/javascript"></script>
    <script src="js/webflow.schunk.36b8fb49256177c8.js" type="text/javascript"></script>
    <script src="js/webflow.schunk.af7b1f697c954370.js" type="text/javascript"></script>
    <script src="js/webflow-script.js" type="text/javascript"></script>
</body>

</html>

<?php

get_footer();

?>