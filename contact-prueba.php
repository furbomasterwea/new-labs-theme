<?php
/**
 * Template Name: contacto prueba
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



        <link rel="preload" as="image" href="https://d22po4pjz3o32e.cloudfront.net/logo-image.svg" />
        <section
            class="relative z-[999] mx-auto mt-5 flex w-full items-start justify-center px-[5%] md:mt-6 lg:mx-[5%] lg:w-auto lg:px-0">
            <div data-slot="card"
                class="rounded-card border border-scheme-border bg-scheme-foreground text-scheme-text flex min-h-16 w-full items-center justify-between gap-4 overflow-visible px-5 md:min-h-18 md:px-8 lg:w-auto">
                <a href="#"><img src="https://d22po4pjz3o32e.cloudfront.net/logo-image.svg"
                        alt="Relume placeholder logo" /></a>
                <div class="absolute top-full right-0 left-0 w-full overflow-hidden lg:static lg:top-auto lg:right-auto lg:left-auto lg:w-auto lg:overflow-visible lg:[--height:auto]"
                    style="height:auto">
                    <div class="absolute top-0 right-0 left-0 mx-auto min-w-[200px] justify-self-center bg-scheme-background px-[5%] text-center lg:static lg:inset-auto lg:mx-0 lg:px-0 lg:text-left lg:[--translate-y:0%]"
                        style="transform:translateY(var(--translate-y, -100%))">
                        <div
                            class="flex w-full flex-col border border-t-0 border-scheme-border bg-scheme-background p-5 md:p-8 lg:w-auto lg:flex-row lg:border-none lg:bg-none lg:p-0">
                            <a href="#"
                                class="text-regular relative block py-3 text-center lg:px-4 lg:py-2 lg:text-left">Services</a><a
                                href="#"
                                class="text-regular relative block py-3 text-center lg:px-4 lg:py-2 lg:text-left">Solutions</a><a
                                href="#"
                                class="text-regular relative block py-3 text-center lg:px-4 lg:py-2 lg:text-left">Integrations</a>
                            <div class="relative">
                                <button
                                    class="text-regular relative flex w-full items-center justify-center gap-4 py-3 text-center whitespace-nowrap lg:gap-2 lg:px-4 lg:py-2 lg:text-left">
                                    <span>Resources</span><span><svg stroke="currentColor" fill="none" stroke-width="0"
                                            viewBox="0 0 15 15" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.13523 6.15803C3.3241 5.95657 3.64052 5.94637 3.84197 6.13523L7.5 9.56464L11.158 6.13523C11.3595 5.94637 11.6759 5.95657 11.8648 6.15803C12.0536 6.35949 12.0434 6.67591 11.842 6.86477L7.84197 10.6148C7.64964 10.7951 7.35036 10.7951 7.15803 10.6148L3.15803 6.86477C2.95657 6.67591 2.94637 6.35949 3.13523 6.15803Z"
                                                fill="currentColor"></path>
                                        </svg></span>
                                </button>
                                <nav class="static flex w-full min-w-full flex-col overflow-hidden border-0 border-scheme-border bg-scheme-background p-0 whitespace-nowrap lg:absolute lg:overflow-visible lg:border lg:p-2 lg:[--height:auto] lg:[--opacity-close:0%] lg:[--opacity-open:100%] lg:[--translate-y-close:25%] lg:[--translate-y-open:0%]"
                                    style="opacity:var(--opacity-close, 100%);visibility:hidden;height:var(--height, 0);transform:translateY(var(--translate-y-close, 0%))">
                                    <a href="#" class="px-0 py-3 text-center lg:px-4 lg:py-2 lg:text-left">Link
                                        Five</a><a href="#"
                                        class="px-0 py-3 text-center lg:px-4 lg:py-2 lg:text-left">Link Six</a><a
                                        href="#" class="px-0 py-3 text-center lg:px-4 lg:py-2 lg:text-left">Link
                                        Seven</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4">
                    <button data-slot="button"
                        class="inline-flex items-center justify-center gap-3 rounded-button whitespace-nowrap transition-all duration-200 ease-in-out focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 border border-scheme-border bg-neutral-darkest text-white px-5 py-2"
                        title="Get a quote">
                        Get a quote</button><button
                        class="-mr-2 flex size-12 flex-col items-center justify-center justify-self-end lg:hidden">
                        <span class="my-[3px] h-0.5 w-6 bg-neutral-darkest"></span><span
                            class="my-[3px] h-0.5 w-6 bg-neutral-darkest"></span><span
                            class="my-[3px] h-0.5 w-6 bg-neutral-darkest"></span>
                    </button>
                </div>
            </div>
        </section>

        <link rel="preload" as="image" href="https://d22po4pjz3o32e.cloudfront.net/logo-image.svg" />
        <link rel="preload" as="image" href="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-small.svg" />
        <footer class="px-[5%] py-12 md:py-18 lg:py-20">
            <div class="container">
                <div class="border-b border-scheme-border">
                    <div
                        class="mb-12 grid grid-cols-1 gap-x-[8vw] gap-y-12 md:mb-18 md:gap-y-16 lg:mb-20 lg:grid-cols-[1fr_0.5fr] lg:gap-y-20">
                        <div class="max-w-md">
                            <h1 class="heading-h1 mb-5 font-bold md:mb-6">
                                Digital transformation starts here
                            </h1>
                            <p>
                                Empowering businesses with cutting-edge web solutions and strategic
                                digital innovations
                            </p>
                            <div class="mt-6 flex flex-wrap gap-4 md:mt-8">
                                <button data-slot="button"
                                    class="inline-flex items-center justify-center gap-3 rounded-button whitespace-nowrap transition-all duration-200 ease-in-out focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 border border-scheme-border bg-neutral-darkest text-white px-6 py-3"
                                    title="Connect">
                                    Connect</button><button data-slot="button"
                                    class="inline-flex items-center justify-center gap-3 rounded-button whitespace-nowrap transition-all duration-200 ease-in-out focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50 border border-scheme-border bg-scheme-background text-scheme-text px-6 py-3"
                                    title="Explore">
                                    Explore
                                </button>
                            </div>
                        </div>
                        <div
                            class="grid grid-cols-1 items-start gap-x-6 gap-y-5 sm:grid-cols-2 sm:gap-x-6 md:gap-x-8 md:gap-y-4">
                            <ul>
                                <li class="text-small py-2 font-semibold">
                                    <a href="#">Services</a>
                                </li>
                                <li class="text-small py-2 font-semibold">
                                    <a href="#">Insights</a>
                                </li>
                                <li class="text-small py-2 font-semibold">
                                    <a href="#">Case studies</a>
                                </li>
                                <li class="text-small py-2 font-semibold"><a href="#">Team</a></li>
                                <li class="text-small py-2 font-semibold">
                                    <a href="#">Careers</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="text-small py-2 font-semibold">
                                    <a href="#">Contact</a>
                                </li>
                                <li class="text-small py-2 font-semibold">
                                    <a href="#">Privacy</a>
                                </li>
                                <li class="text-small py-2 font-semibold"><a href="#">Terms</a></li>
                                <li class="text-small py-2 font-semibold"><a href="#">Blog</a></li>
                                <li class="text-small py-2 font-semibold">
                                    <a href="#">Resources</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-span-1 flex flex-col items-start justify-between pb-6 sm:flex-row sm:items-center md:pb-8 lg:col-span-2">
                        <a href="#"><img src="https://d22po4pjz3o32e.cloudfront.net/logo-image.svg" alt="Logo image"
                                class="mb-6 inline-block sm:mb-0" /></a>
                        <div class="ml-3 flex">
                            <img src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-small.svg"
                                alt="Relume placeholder image"
                                class="relative -ml-3 size-12 min-h-12 min-w-12 rounded-full border-2 border-white object-cover" /><img
                                src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-small.svg"
                                alt="Relume placeholder image"
                                class="relative -ml-3 size-12 min-h-12 min-w-12 rounded-full border-2 border-white object-cover" /><img
                                src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-small.svg"
                                alt="Relume placeholder image"
                                class="relative -ml-3 size-12 min-h-12 min-w-12 rounded-full border-2 border-white object-cover" /><img
                                src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-small.svg"
                                alt="Relume placeholder image"
                                class="relative -ml-3 size-12 min-h-12 min-w-12 rounded-full border-2 border-white object-cover" /><img
                                src="https://d22po4pjz3o32e.cloudfront.net/placeholder-image-small.svg"
                                alt="Relume placeholder image"
                                class="relative -ml-3 size-12 min-h-12 min-w-12 rounded-full border-2 border-white object-cover" />
                        </div>
                    </div>
                </div>
                <div
                    class="text-small flex flex-col-reverse items-start justify-between pt-6 pb-4 md:flex-row md:items-center md:pt-8 md:pb-0">
                    <p>© 2024 Relume. All rights reserved.</p>
                    <div class="grid grid-flow-col grid-cols-[max-content] items-start justify-start gap-x-3">
                        <a href="#"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="size-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z">
                                </path>
                            </svg></a><a href="#"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 24 24" class="size-6" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                </path>
                                <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                <path
                                    d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                </path>
                            </svg></a><a href="#"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 512 512" class="size-6 p-0.5" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                                </path>
                            </svg></a><a href="#"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 24 24" class="size-6" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z">
                                </path>
                            </svg></a><a href="#"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 24 24" class="size-6" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z">
                                </path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </footer>



    </div>
</body>

</html>

<?php

get_footer();

?>