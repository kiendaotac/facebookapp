<!DOCTYPE html>
<html lang="en-US" class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Login</title>
    <script src="{{ asset('vendor/js/webfont.js') }}" type="text/javascript"></script>
    <script>
        if (typeof WebFontConfig === "undefined") {
            WebFontConfig = new Object();
        }
        WebFontConfig['google'] = {families: ['Muli:400,600,700,800', 'Nunito:900,200,300,400,600,700,800,900,200italic,300italic,400italic,600italic,700italic,800italic,900italic']};
        (function () {
            let wf   = document.createElement('script');
            wf.src   = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
            wf.type  = 'text/javascript';
            wf.async = 'true';
            let s    = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <meta name="robots" content="noindex,follow">
    <link rel="dns-prefetch" href="http://s.w.org/">
    <link rel="stylesheet" href="{{ asset('vendor/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/woocommerce-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/woocommerce-smallscreen.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/woocommerce.css') }}">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('vendor/css/style(1).css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/main.css') }}">
    <style id="littledino-main-inline-css" type="text/css">
        body {
            font-family: Muli;
            font-size: 16px;
            line-height: 1.875;
            font-weight: 400;
            color: #70747f;
        }

        body input:not([type='checkbox']):not([type='submit']), select, textarea, blockquote cite, main ul.wgl-pagination li, #comments .commentlist .comment_info .meta-wrapper *, .author-info_name, .meta-wrapper, .blog-post_info-wrap > .meta-wrapper *, .littledino_module_time_line_vertical .time_line-title, .isotope-filter a .number_filter, .littledino-post-navigation .meta-wrapper span, .author-widget_text, .wgl-portfolio-item-info_desc span, .blog-post.format-quote .blog-post_quote-author, .wgl_module_team .team-department, body .comment-form-cookies-consent > label, .wgl-accordion .wgl-accordion_panel .wgl-accordion_content, .wgl-testimonials .testimonials__name, .single_team_page .team-info_wrapper .team-info_item, .wgl-timeline-vertical .time_line-content .time_line-text, .wgl-portfolio-single_wrapper .wgl-portfolio-item_cats, body .widget .textwidget, body .widget_rss ul li .rssSummary {
            font-family: Muli;
        }

        .wgl-tabs .wgl-tabs_content-wrap .wgl-tabs_content {
            font-family: Muli;
            font-weight: 400;
        }

        select, blockquote cite, body .footer .select__field:before, body input:not([type='checkbox']):not([type='submit'])::placeholder, ul.wgl-pagination li span, select::placeholder, textarea::placeholder, body .widget_rss ul li .rssSummary, .search-no-results .page_404_wrapper .search-form .search-field::placeholder, .search-no-results .page_404_wrapper .search-form .search-field, .blog-post_meta-categories span, .blog-post_meta-categories span:after, .vc_wp_custommenu .menu .menu-item.current-menu-item > a, .blog-post.format-quote .blog-post_quote-author-pos, .recent-posts-widget .meta-wrapper a:hover, .vc_row .vc_toggle .vc_toggle_icon, .isotope-filter a, .blog-style-hero .blog-post.format-standard .meta-wrapper, .blog-style-hero .blog-post.format-link .meta-wrapper, .blog-style-hero .blog-post.format-audio .meta-wrapper, .blog-style-hero .blog-post.format-quote .meta-wrapper, .blog-style-hero .blog-post.format-standard .meta-wrapper a, .blog-style-hero .blog-post.format-link .meta-wrapper a, .blog-style-hero .blog-post.format-audio .meta-wrapper a, .blog-style-hero .blog-post.format-quote .meta-wrapper a, .blog-style-hero .blog-post.format-standard .blog-post_text, .blog-style-hero .blog-post.format-link .blog-post_text, .blog-style-hero .blog-post.format-audio .blog-post_text, .blog-style-hero .blog-post.format-quote .blog-post_text, .wgl-pricing_plan .pricing_price_wrap .pricing_desc {
            color: #70747f;
        }

        .tagcloud a, #comments .commentlist, #comments ul.children, .single_meta .single_info-share_social-wpapper > span.share_title, .single_info-share_social-wpapper > span {
            font-family: Muli;
            color: #70747f;
        }

        .littledino_module_title .external_link .button-read-more {
            line-height: 1.875;
        }

        h1, h2, h3, h4, h5, h6, h1 span, h2 span, h3 span, h4 span, h5 span, h6 span, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .dropcap, .elementor-drop-cap, .blog-post_cats, .blog-posts .blog-post_title, .column1 .item_title a, .littledino_twitter .twitt_title, .tagcloud-wrapper .title_tags, .strip_template .strip-item a span, .single_team_page .team-single_speaches-info .speech-info_desc span, .shortcode_tab_item_title, .index_number, .primary-nav.footer-menu .menu-item a {
            font-family: Nunito;
            font-weight: 900;
        }

        .theme-header-font, .banner_404, #comments .comment-reply-link, .load_more_wrapper .load_more_item, input[type="submit"], button, label, legend, .page_404_wrapper .littledino_404_button.wgl_button .wgl_button_link, .wgl-social-share_pages.hovered_style .share_social-title, .blog-post_text-bg, .author-info_content .author-info_name, .button-read-more, .blog-post .blog-post_meta-categories a, .blog-post_meta-date .date_post span, .blog-post_meta-date .date_post, .countdown-section .countdown-amount, .comments-title .number-comments, .wgl-button, .elementor-button, .wgl-counter .counter__value-wrap, .wgl-pricing_plan .price_currency, .wgl-pricing_plan .pricing_price .price_decimal, .wgl-pricing_plan .pricing_plan_wrap .pricing_price_wrap, .wgl-testimonials .testimonials__quote:after, .wgl-testimonials .testimonials__name, .wgl-service-satellite .sat-service__satellite, .wgl-working-hours .wh__hours, .mashsb-count .counts, .mashsb-box .mashsb-buttons a .text, .prev-link, .next-link, .info_prev-link_wrapper a, .info_next-link_wrapper a, .vc_row .vc_tta.vc_general.vc_tta-style-accordion_bordered .vc_tta-panel-title > a span, .heading_subtitle, .single_team_page .team-single_speaches-info .speech-info_day, .single_team_page .team-info_wrapper .team-info_item h5, .wgl-portfolio-item-info_desc h5, .wgl-portfolio-item_meta .post_cats, .wgl-portfolio-item_meta .post_cats, .wgl-portfolio-item_cats, .wgl-double_heading, .wpb-js-composer .wgl-container .vc_row .vc_general.vc_tta.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab > a, .wpb-js-composer .wgl-container .vc_chart.vc_round-chart[data-vc-legend="1"] .vc_chart-legend li, .isotope-filter a, .page-header_title, .dropcap, .dropcap-bg, .wgl-countdown .countdown-section .countdown-period, body .comment-respond .comment-reply-title, ul.wp-block-archives.wp-block-archives-list li a, ul.wp-block-categories.wp-block-categories-list li a, ul.wp-block-categories.wp-block-categories-list li .post_count, ul.wp-block-latest-posts li a, .elementor-counter, body .widget, body .widget .widget-title, body .widget_rss ul li .rss-date, body .widget_categories a, body .widget_product_categories a, body .widget_meta a, body .widget_archive a, body .widget_categories .post_count, body .widget_product_categories .post_count, body .widget_meta .post_count, body .widget_archive .post_count, body .widget .textwidget .wp-caption, .widget.widget_wgl_posts .recent-posts-widget li > .recent-posts-content .post_title, #comments .commentlist .comment_author_says {
            font-family: Nunito;
            font-weight: 900;
        }

        .wgl-infobox_bg_title, .wgl-background-text, .elementor-section.wgl-add-background-text:before {
            font-family: Nunito;
            font-weight: 900;
        }

        blockquote, input[type="submit"], main ul[class^="wgl-"], main ol[class^="wgl-"], .banner_404, .author-info_public, .wgl-portfolio-item_annotation_social .single_info-share_social-wpapper > span, .wgl-portfolio-single_item .tagcloud .tagcloud_desc, .wgl_timetabs .timetabs_data .timetabs_item .item_time, .wgl_timetabs .timetabs_data .timetabs_item .content-wrapper .item_title, .wpb-js-composer .wgl-container .vc_row .vc_pie_chart .vc_pie_chart_value, .wgl_timetabs .timetabs_headings .wgl_tab, .wgl-pricing_plan .pricing_content, .wgl-portfolio-single_item .single_info-share_social-wpapper .share_title {
            font-family: Nunito;
            font-weight: 900;
            color: #12265a;
        }

        body .footer select option, button, h1, h2, h3, h4, h5, h6, h1 span, h2 span, h3 span, h4 span, h5 span, h6 span, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, h3#reply-title a, .calendar_wrap tbody, .comment_author_says, .comment_author_says a, .share_post-container .share_post, .tagcloud-wrapper .title_tags, .theme-header-color, .wgl-pricing_plan .pricing_plan_wrap .pricing_content > ul > li > b, .wgl-pricing_plan .pricing_plan_wrap .pricing_price_wrap, .prev-link-info_wrapper, .next-link-info_wrapper, .item_title a, .wgl_module_title.item_title .carousel_arrows a span:after, .wgl_module_team.info_under_image .team-department, .wgl-portfolio-item_wrapper .portfolio_link, .widget_product_search .woocommerce-product-search:after, .wpb-js-composer .wgl-container .vc_row .vc_general.vc_tta.vc_tta-tabs .vc_tta-panels-container .vc_tta-panels .vc_tta-panel:not(.vc_active) .vc_tta-panel-heading .vc_tta-panel-title, .wpb-js-composer .wgl-container .vc_row .vc_general.vc_tta.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab:not(.vc_active) > a, .wpb-js-composer .wgl-container .vc_row .vc_toggle.vc_toggle_color_check.vc_toggle_active .vc_toggle_title .vc_toggle_icon, .under_image .wgl-portfolio-item_title .title a, .wpb-js-composer .wgl-container .vc_row .vc_toggle .vc_toggle_title, .button-read-more:hover, .blog-post_views-wrap .wgl-views:before, .wgl-pagination .page-numbers, .page-link .post-page-numbers, body .widget_wgl_posts .recent-posts-widget .post_title a, body .widget .widget-title .rsswidget, body .widget_categories ul li a, body .widget_product_categories ul li a, body .widget_meta ul li a, body .widget_archive ul li a, body .widget_comments > ul > li:before, body .widget_meta > ul > li:before, body .widget_archive > ul > li:before, body .widget_recent_comments > ul > li:before, body .widget_recent_entries > ul > li:before, body .widget .widget-title .widget-title_wrapper, body .widget ul li, .widget.widget_recent_comments ul li a, ul.wp-block-archives.wp-block-archives-list li:before, ul.wp-block-latest-posts li:before, ul.wp-block-archives.wp-block-archives-list li a, ul.wp-block-categories.wp-block-categories-list li a, ul.wp-block-latest-posts li a, .single-team .single_team_page .team-info_icons .team-icon, .blog-style-hero .blog-post.format-standard .blog-post_title a, .blog-style-hero .blog-post.format-link .blog-post_title a, .blog-style-hero .blog-post.format-audio .blog-post_title a, .blog-style-hero .blog-post.format-quote .blog-post_title a {
            color: #12265a;
        }

        .littledino_module_title .carousel_arrows a span {
            background: #12265a;
        }

        .wgl-pagination .page-numbers.next:hover, .wgl-pagination .page-numbers.prev:hover, .blog-style-hero .blog-post_bg_media:after, .slick-dots li button, .wgl-carousel.pagination_line .slick-dots li button:before, .wgl-carousel.pagination_square .slick-dots li, .wgl-carousel.pagination_circle_border .slick-dots li button:before {
            background-color: #12265a;
        }

        .load_more_wrapper .load_more_item, .littledino_module_title .carousel_arrows a span:before, .wgl-pricing_plan .pricing_highlighter, .wgl-carousel.pagination_circle_border .slick-dots li.slick-active button {
            border-color: #12265a;
        }

        .wgl-theme-header .wgl-sticky-header .header_search {
            height: 100px !important;
        }

        #scroll_up {
            background-color: #ffc85b;
            color: #ffffff;
        }

        #scroll_up:before {
            border-color: #ffc85b;
        }

        .primary-nav > div > ul, .primary-nav > ul, .sitepress_container > .wpml-ls li, .primary-nav ul li.mega-menu-links > ul > li {
            font-family: Nunito;
            font-weight: 900;
            line-height: 30px;
            font-size: 18px;
        }

        .primary-nav ul li ul, .wpml-ls, .sitepress_container > .wpml-ls ul ul li, .primary-nav ul li div.mega-menu-container {
            font-family: Nunito;
            font-weight: 900;
            line-height: 30px;
            font-size: 14px;
        }

        .wgl-theme-header .header_search-field, .primary-nav ul li ul, .primary-nav ul li div.mega-menu-container, .wgl-theme-header .woo_mini_cart, .wpml-ls-legacy-dropdown .wpml-ls-current-language .wpml-ls-sub-menu {
            background-color: rgba(255, 255, 255, 1);
            color: #12265a;
        }

        .mobile_nav_wrapper, .wgl-menu_outer, .wgl-menu_outer .mobile-hamburger-close, .mobile_nav_wrapper .primary-nav ul li ul.sub-menu, .mobile_nav_wrapper .primary-nav ul li.mega-menu-links > ul.mega-menu > li > ul > li ul, .mobile_nav_wrapper .primary-nav ul li.mega-menu-links > ul.mega-menu > li > ul {
            background-color: rgba(45, 45, 45, 1);
            color: #ffffff;
        }

        .mobile_nav_wrapper .wgl-menu_overlay {
            background-color: rgba(49, 49, 49, 0.8);
        }

        #side-panel .side-panel_sidebar .widget .widget-title .widget-title_wrapper {
            color: rgba(255, 255, 255, 1);
        }

        a:hover .wgl-icon, a.wgl-icon:hover, body ol > li:before, ul li:before, button, button:focus, button:active, h3#reply-title a:hover, body .comment-respond .comment-form a:hover, #comments .comment-reply-link, .author-info_social-wrapper, .blog-post_link:before, .wgl-likes .sl-icon, .blog-post_quote-text:before, .blog-post_link:before, .blog-post_link a:before, .blog-post_title i, .blog-post_link > .link_post:hover, .blog-post.format-standard.link .blog-post_title:before, .blog-post_title a:hover, .blog-posts .blog-post_title > a:hover, .button-read-more, .calendar_wrap thead, .copyright a:hover, .comment_author_says a:hover, .littledino_submit_wrapper:hover > i, .littledino_custom_button i, .littledino_custom_text a, .littledino_module_demo_item .di_button a:hover, .littledino_module_demo_item .di_title_wrap a:hover .di_title, .littledino_module_demo_item .di_title-wrap .di_subtitle, .littledino_twitter a, .load_more_works:hover, .header_search .header_search-button > i:hover, .header_search-field .search-form:after, .mc_form_inside #mc_signup_submit:hover, .share_post-container .share_social-wpapper ul li .share_post span.fa:hover, .share_link span.fa:hover, .share_post span.fa:hover, .share_post-container, .single_team_page .team-single_speaches-info .speech-info_desc span, .single_team_page .team-info_wrapper .team-info_item a:hover, .single-member-page .member-icon:hover, .single-member-page .team-link:hover, .single_team_page .team-single_speaches-info .speech-info_day, .single_team_page .team-info_icons a:hover, .team-icons .member-icon:hover, .vc_wp_custommenu .menu .menu-item.current-menu-item > a, .vc_wp_custommenu .menu .menu-item.current-menu-ancestor > a, .wpml-ls a:hover, .wpml-ls-legacy-dropdown .wpml-ls-current-language:hover > a, .wpml-ls-legacy-dropdown .wpml-ls-current-language a:hover, .wgl_timetabs .timetabs_headings .wgl_tab.active .tab_subtitle, .wgl_timetabs .timetabs_headings .wgl_tab:hover .tab_subtitle, .wgl_portfolio_category-wrapper a:hover, .single.related_posts .blog-post_title a:hover, .wgl_module_team .team-since, .wgl_module_team .team-item_info .team-item_titles .team-title:hover, .wgl-icon:hover, .wgl-theme-color, .wgl-portfolio-item_wrapper .portfolio_link-icon:hover, .wgl-portfolio-item_corners, .wgl-portfolio-item_cats, .wpb-js-composer .vc_row .vc_tta.vc_general .vc_active .vc_tta-panel-title > a:before, .wgl-social-share_pages.hovered_style ul li a:hover, .isotope-filter a:after, .wgl-slash li:before, .single_type-1 .single_meta .author_post a:hover, .single_type-2 .single_meta .author_post a:hover, .info_prev-link_wrapper > a, .info_next-link_wrapper > a, #comments .commentlist .comment_info .meta-wrapper .comment-edit-link, .blog-style-standard .blog-post_meta-categories span + span:before, .meta-wrapper a:hover, .single-team .single_team_page .team-info_icons .team-icon:hover, .wgl-portfolio_container .wgl-carousel.arrows_center_mode .slick-prev:hover:after, .wgl-portfolio_container .wgl-carousel.arrows_center_mode .slick-next:hover:after, .wgl_timetabs .timetabs_headings .wgl_tab .services_icon, ul.wgl-products li, .woocommerce .products ul.wgl-products li {
            color: #fa9db7;
        }

        header .header-link:hover, .hover_links a:hover {
            color: #fa9db7 !important;
        }

        .recent-posts-widget .meta-wrapper a, .isotope-filter a .number_filter {
            color: #fa9db7;
        }

        .author-widget_wrapper svg {
            fill: #fa9db7;
        }

        .preloader-container .cssload-loader, .header_search-button-wrapper, .elementor-drop-cap, .single_team_page .team-title:before, .blog-style-hero .btn-read-more .blog-post-read-more, .wpml-ls-legacy-dropdown .wpml-ls-sub-menu .wpml-ls-item a span:before, .wgl-plus li:after, .wgl-plus li:before, .wgl-dash li:before, #multiscroll-nav span, #multiscroll-nav li .active span {
            background: #fa9db7;
        }

        ::selection, #comments > h3:after, button:hover, blockquote:before, mark, span.highlighter, ul li:before, .vc_wp_custommenu .menu .menu-item a:before, .primary-nav ul li.mega-menu.mega-cat div.mega-menu-container ul.mega-menu.cats-horizontal > li.is-active > a, .primary-nav ul li ul li > a > span:before, .primary-nav > ul > li > a:after, .sitepress_container > .wpml-ls ul ul li a:hover, .blog-post_cats span a, .button__wrapper:hover:after, .calendar_wrap caption, .comment-reply-title:after, .page_404_wrapper .littledino_404_button.wgl_button .wgl_button_link:hover, .littledino_divider .littledino_divider_line .littledino_divider_custom .divider_line, .littledino_module_cats .cats_item-count, .littledino_module_title:after, .littledino_module_title .carousel_arrows a:hover span, .load_more_works, .mc_form_inside #mc_signup_submit, .wgl-social-share_pages.hovered_style .share_social-icon-plus, .wgl-ellipsis span, .wgl-theme-header .woo_mini_cart .woocommerce-mini-cart__buttons a.checkout:hover, .wgl-theme-header .woo_mini_cart .woocommerce-mini-cart__buttons a:not(.checkout), .inside_image .wgl-portfolio-item_divider div, .wgl_module_title.item_title .carousel_arrows a:hover, .wgl_timetabs .timetabs_headings .wgl_tab.active:after, .wgl-social-share_pages.standard_style a:before, .blog-style-hero .blog-post-hero_wrapper .divider_post_info, .wgl-portfolio-single_wrapper .wgl-portfolio-item_meta > span:after, .wgl-pricing_plan .pricing_header:after, .wgl-portfolio-single_wrapper .wgl-portfolio-item_cats a:before {
            background-color: #fa9db7;
        }

        aside > .widget + .widget:before, body .widget .widget-title .widget-title_inner:after, body .widget_meta ul li a:hover:after, body .widget_archive ul li a:hover:after, body .widget_product_categories ul li a:hover:after, .widget .calendar_wrap table td#today:before, .widget .calendar_wrap tbody td > a:before, .widget .counter_posts, .widget.widget_pages ul li a:before, .widget.widget_nav_menu ul li a:before, .widget.widget_categories ul li a:hover:before, .widget_nav_menu .menu .menu-item:before, .widget_postshero .recent-posts-widget .post_cat a, .widget_meta ul li > a:before, .widget.littledino_widget.littledino_banner-widget .banner-widget_button:hover, .widget_archive ul li > a:before {
            background-color: #fa9db7;
        }

        .blog-post_meta-date, .blog-post_cats span, .wgl-carousel.navigation_offset_element .slick-prev:hover, .wgl-carousel.navigation_offset_element .slick-next:hover, .littledino_module_demo_item .di_button a, .next-link:hover, .prev-link:hover, .wpcf7 .call_to_action_1 .wgl_col-2 .wpcf7-submit:hover, .button-alt-2 .wpcf7 .wpcf7-submit:hover {
            border-color: #fa9db7;
            background: #fa9db7;
        }

        .blog-posts-list.blog-posts .blog-post.sticky-post .blog-post_wrapper, .header_search-button-wrapper:before, .header_search.search_standard .header_search-field .search-field, .header_search.search_alt .header_search-field .search-field, .single-team .single_team_page .team-single_wrapper, .post_featured_bg .content-container_wrapper:after, .author-widget_img-wrapper:after, .blog-style-standard .format-no_featured .blog-post_wrapper, .blog-style-standard .format-quote .blog-post_wrapper, .blog-style-standard .format-audio .blog-post_wrapper, .blog-style-standard .format-link .blog-post_wrapper, .littledino_module_title .carousel_arrows a:hover span:before, .load_more_works, .author-info_social-link:after, .author-widget_social a span, .single_info-share_social-wpapper .share_link .share-icon_animation, .single-team .single_team_page .team-image, .wgl_module_team .team-image, .inside_image.offset_animation:before, .littledino_module_videobox .videobox_link, .wpcf7 .call_to_action_1 .wgl_col-2 .wpcf7-submit {
            border-color: #fa9db7;
        }

        .wgl-portfolio-item_wrapper .overlay {
            background-color: rgba(250, 157, 183, 0.8);
        }

        .primary-nav ul li ul:after, .primary-nav ul li div.mega-menu-container:after {
            border-color: rgba(250, 157, 183, 0.5);
        }

        .wgl-theme-header .header_search .header_search-field:after {
            border-bottom-color: rgba(250, 157, 183, 0.9);
        }

        .theme_color_shadow {
            box-shadow: 0px 9px 30px 0px rgba(250, 157, 183, 0.4);
        }

        .inside_image .overlay:before, .inside_image.always_info_animation:hover .overlay:before {
            box-shadow: inset 0px 0px 0px 0px rgba(250, 157, 183, 1);
        }

        .inside_image:hover .overlay:before, .inside_image.always_info_animation .overlay:before {
            box-shadow: inset 0px 0px 0px 10px rgba(250, 157, 183, 1);
        }

        .widget .widget-title .widget-title_wrapper .widget-title_inner {
            background-image: linear-gradient(to top, rgba(250, 157, 183, 0.5), rgba(250, 157, 183, 0.5));
        }

        .primary-nav ul li ul li.current-menu-ancestor.current-menu-parent > a > span, .primary-nav ul li ul li.current-menu-item > a > span, .primary-nav ul li ul li.current_page_item > a > span, .primary-nav ul li ul li:hover > a > span, .mobile_nav_wrapper .primary-nav ul li ul .menu-item.current-menu-item > a, .mobile_nav_wrapper .primary-nav ul ul li.menu-item.current-menu-ancestor > a, blockquote cite a, .wgl-secondary-color, .blog-post_meta-categories span, .post_featured_bg .meta-wrapper .comments_post a:hover, .post_featured_bg .meta-wrapper a:hover, .single_post_info .share_post-list-container .share_social-wpapper ul li span.fa:hover, .page-header_breadcrumbs .divider:not(:last-child):before, .inside_image .wgl-portfolio-item_title .title a:hover, .wgl-video-popup .videobox_link, .wgl-portfolio-item_meta a:hover, .wgl-portfolio-single_item .portfolio-category:hover, .wgl-portfolio-single_wrapper .wgl-portfolio-item_cats a:hover {
            color: #ffc85b;
        }

        .preloader-container .cssload-loader:before, .primary-nav .lavalamp-object, .mobile_nav_wrapper .primary-nav > ul > li > a > span:after, body .widget_search .search-form:after, body .widget_search .woocommerce-product-search:after, body .widget_product_search .search-form:after, body .widget_product_search .woocommerce-product-search:after, body .widget_categories ul li a:hover:after, .wgl-check.secondary-color li:before, .share_post-container > a, .isotope-filter a.active:after, .wgl_module_team .team-info_icons:hover .team-info_icons-plus, .next-link_wrapper .image_next:before, .prev-link_wrapper .image_prev:before, .prev-link_wrapper .image_prev .no_image_post, .next-link_wrapper .image_next .no_image_post, .wgl_module_title.item_title .carousel_arrows span[class*="slick_arrow"], .wgl-carousel .slick-arrow, .wgl_module_team .team-info_icons-plus:before, .wgl_module_team .team-info_icons-plus:after, .wgl_module_team .team-icon a, .single-team .single_team_page .team-info_icons .team-icon:hover, .page_404_wrapper .search-form:after, .wpcf7 .wpcf7-submit:hover, .wgl-pagination .page .current:after, .page-link .post-page-numbers.current:after, .page-link .post-page-numbers:hover:after, .wgl-pagination .page-numbers:hover:after, .wgl-pagination .page-numbers.prev, .wgl-pagination .page-numbers.next, .wgl-video-popup .videobox_link, .single-team .single_team_page .team-info_icons .team-icon a, .tagcloud a:hover, .widget.littledino_widget.littledino_banner-widget .banner-widget_button:hover, .dropcap-bg, form.post-password-form input[type='submit'], .primary-nav > ul > li > a > span:after {
            background: #ffc85b;
        }

        .post_featured_bg .meta-wrapper .blog-post_meta-categories a, .load_more_wrapper .load_more_item, #comments .form-submit input[type="submit"], .wpcf7 .wpcf7-submit, .button-alt .wpcf7 .wpcf7-submit:hover, .button-alt-2 .wpcf7 .wpcf7-submit, .blog-post_meta-categories a {
            background: #ffc85b;
            border-color: #ffc85b;
        }

        .wgl_module_title.item_title .carousel_arrows span[class*="slick_arrow"]:before, .wgl_module_team .team-icon a:after, .next-link_wrapper .image_next:after, .prev-link_wrapper .image_prev:after, .wgl-carousel .slick-arrow:before {
            border-color: #ffc85b;
        }

        .prev-link_wrapper .image_prev svg.outter-dashes, .next-link_wrapper .image_next svg.outter-dashes {
            stroke: #ffc85b;
        }

        a, .wgl-third-color, #comments .comment-reply-link:hover, ul.wp-block-archives.wp-block-archives-list li a:hover, ul.wp-block-categories.wp-block-categories-list li a:hover, ul.wp-block-categories.wp-block-categories-list li a:hover + .post_count, ul.wp-block-latest-posts li a:hover, body .widget_categories ul li .post_count, body .widget_categories ul li .count, body .widget_product_categories ul li .post_count, body .widget_product_categories ul li .count, body .widget_meta ul li .post_count, body .widget_meta ul li .count, body .widget_archive ul li .post_count, body .widget_archive ul li .count, body .widget_rss ul li .rsswidget:hover, body .widget_recent_entriesul li .post-date, body .widget_meta ul li .post_count, body .widget_archive ul li > a:before, body .widget_product_categories ul li a:hover + .post_count, body .widget_archive ul li a:hover + .post_count, body .widget_product_categories ul li a:hover, body .widget_nav_menu .current-menu-ancestor > a, body .widget_nav_menu .current-menu-item > a, ul.wp-block-categories.wp-block-categories-list li .post_count, .widget.widget_archive ul li a:hover, .widget.widget_archive ul li a:hover + span + span, .widget.widget_categories ul li a:hover, .widget.widget_categories ul li a:hover + span + span, .widget.widget_pages ul li a:hover, .widget.widget_meta ul li a:hover, .widget.littledino_widget.littledino_banner-widget .banner-widget_button, .widget.widget_wgl_posts .recent-posts-widget li > .recent-posts-content .post_title a:hover, .widget.widget_recent_comments ul li a:hover, .widget.widget_recent_entries ul li a:hover, .widget.widget_nav_menu ul li a:hover, .recent-posts-widget .meta-wrapper a, .widget.littledino_widget.littledino_banner-widget .banner-widget_text .tags_title:after, .widget.widget_recent_comments ul li span.comment-author-link a:hover, .meta-wrapper, .meta-wrapper a, body .comment-respond .comment-form a, .wgl_module_team .team-department, .wgl-portfolio-single_wrapper .wgl-portfolio-item_cats a, .wgl-portfolio-single_wrapper .wgl-portfolio-item_meta, .single-team .single_team_page .team-info_item.team-department span, .wgl_module_team .team-department {
            color: #45b3df;
        }

        form.post-password-form input[type='submit']:hover, .preloader-container .cssload-loader:after, .page_404_wrapper .littledino_404_button.wgl_button .wgl_button_link, .page-header_breadcrumbs .divider:before, .wgl-check.tertiary-color li:before, .load_more_wrapper .load_more_item:hover, .post_featured_bg .meta-wrapper span:before, .wgl-portfolio-single_wrapper .wgl-portfolio-item_cats a:before, .single_post_info .share_post-list-container .share_social-wpapper, .meta-wrapper span + span:before, ul.wp-block-categories.wp-block-categories-list li a:hover:after {
            background: #45b3df;
        }

        .single_post_info .share_post-list-container .share_social-wpapper:after {
            border-color: #45b3df transparent transparent transparent;
        }

        .wgl-theme-header .wgl-button.elementor-button, #comments .form-submit input[type="submit"]:hover, .wpcf7 .wpcf7-submit:hover, .button-alt .wpcf7 .wpcf7-submit {
            background: #45b3df;
            border-color: #45b3df;
        }

        .button__wrapper .banner-widget_button + svg {
            stroke: #45b3df;
        }

        .footer .mc4wp-form-fields input[type="submit"]:hover, .footer .mc4wp-form-fields input[type="submit"]:focus, .footer .mc4wp-form-fields input[type="submit"]:active, .footer_top-area .widget.widget_archive ul li > a:hover, .footer_top-area .widget.widget_archive ul li > a:hover, .footer_top-area .widget.widget_categories ul li > a:hover, .footer_top-area .widget.widget_categories ul li > a:hover, .footer_top-area .widget.widget_categories ul li > a:hover + .post_count, .footer_top-area .widget.widget_pages ul li > a:hover, .footer_top-area .widget.widget_pages ul li > a:hover, .footer_top-area .widget.widget_meta ul li > a:hover, .footer_top-area .widget.widget_meta ul li > a:hover, .footer_top-area .widget.widget_recent_comments ul li > a:hover, .footer_top-area .widget.widget_recent_comments ul li > a:hover, .footer_top-area .widget.widget_recent_entries ul li > a:hover, .footer_top-area .widget.widget_recent_entries ul li > a:hover, .footer_top-area .widget.widget_nav_menu ul li > a:hover, .footer_top-area .widget.widget_nav_menu ul li > a:hover, .footer_top-area .widget.widget_wgl_posts .recent-posts-widget li > .recent-posts-content .post_title a:hover, .footer_top-area .widget.widget_wgl_posts .recent-posts-widget li > .recent-posts-content .post_title a:hover {
            color: #fa9db7;
        }

        .footer ul li:before, .footer ul li:before, .footer_top-area a:hover, .footer_top-area a:hover {
            color: #fa9db7;
        }

        .footer_top-area .widget-title, .footer_top-area .widget_rss ul li .rsswidget, .footer_top-area .widget.widget_pages ul li a, .footer_top-area .widget.widget_nav_menu ul li a, .footer_top-area .widget.widget_wgl_posts .recent-posts-widget li > .recent-posts-content .post_title a, .footer_top-area .widget.widget_archive ul li > a, .footer_top-area .widget.widget_categories ul li > a, .footer_top-area .widget.widget_pages ul li > a, .footer_top-area .widget.widget_meta ul li > a, .footer_top-area .widget.widget_recent_comments ul li > a, .footer_top-area .widget.widget_recent_entries ul li > a, .footer_top-area .widget.widget_archive ul li:before, .footer_top-area .widget.widget_meta ul li:before, .footer_top-area .widget.widget_categories ul li:before, .footer_top-area strong, .footer_top-area h1, .footer_top-area h2, .footer_top-area h3, .footer_top-area h4, .footer_top-area h5, .footer_top-area h6 {
            color: #0a3380;
        }

        .footer_top-area {
            color: #3b4964;
        }

        .footer_top-area .widget.widget_archive ul li:after, .footer_top-area .widget.widget_pages ul li:after, .footer_top-area .widget.widget_meta ul li:after, .footer_top-area .widget.widget_recent_comments ul li:after, .footer_top-area .widget.widget_recent_entries ul li:after, .footer_top-area .widget.widget_nav_menu ul li:after, .footer_top-area .widget.widget_categories ul li:after {
            background-color: #3b4964;
        }

        .footer .copyright {
            color: #cccccc;
        }

        .footer .mc4wp-form-fields input[type="submit"] {
            background-color: #fa9db7;
            border-color: #fa9db7;
        }

        .woocommerce table.cart td.actions .coupon .input-text, .woocommerce .product_meta > span *, .woocommerce div.product form.cart div.quantity label.label-qty, .woocommerce .summary .product_meta > span span, .woocommerce div.product .woocommerce-tabs .panel table.shop_attributes th, .woocommerce .widget_price_filter .price_slider_amount .price_label, .woocommerce .widget_price_filter .price_slider_amount .price_label span {
            font-family: Muli;
        }

        .woocommerce-review-link, .woocommerce form .form-row .select2-container--default .select2-selection--single, .woocommerce form .form-row .select2-container--default .select2-selection--single .select2-selection__rendered, .woocommerce .summary .product_meta > span span, .woocommerce table.shop_table td.product-name .product-quantity, .woocommerce .summary .product_meta > span a, .woocommerce-error, .woocommerce-info, .woocommerce-message {
            color: #70747f;
        }

        .woocommerce .button, ul.wgl-products .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce .products ul.wgl-products .price, .woocommerce span.onsale, .woocommerce table.shop_table th, .woocommerce table.shop_table td, .product_list_widget .woocommerce-Price-amount, .woocommerce div.product .woocommerce-tabs ul.tabs li a, .woocommerce .cart-collaterals .cart_totals table th, .woocommerce nav.woocommerce-pagination ul li, .woocommerce #review_form #respond input#submit, ul.wgl-products .products-post_wrapper a.button, ul.wgl-products .products-post_wrapper a.add_to_cart_button, ul.wgl-products .products-post_wrapper .added_to_cart.wc-forward, .woocommerce .products ul.wgl-products .products-post_wrapper a.button, .woocommerce .products ul.wgl-products .products-post_wrapper a.add_to_cart_button, .woocommerce .products ul.wgl-products .products-post_wrapper .added_to_cart.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, ul.wgl-products li .products-post_wrapper .added_to_cart.wc-forward, .woocommerce .widget_shopping_cart .total .woocommerce-Price-amount, .woocommerce.widget_shopping_cart .total .woocommerce-Price-amount, .wgl-theme-header .woo_mini_cart .woocommerce-mini-cart__total .woocommerce-Price-amount, .woocommerce .products ul.wgl-products li .products-post_wrapper a.add_to_cart_button, .woocommerce .products ul.wgl-products li .products-post_wrapper a.button, .woocommerce .products ul.wgl-products li .products-post_wrapper .added_to_cart.wc-forward, .woocommerce table.shop_table .woocommerce-Price-amount.amount {
            font-family: Nunito;
            font-weight: 900;
        }

        .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:not(.prev):not(.next):hover, #add_payment_method .cart-collaterals .cart_totals .woocommerce-shipping-destination, .woocommerce-cart .cart-collaterals .cart_totals .woocommerce-shipping-destination, .woocommerce-checkout .cart-collaterals .cart_totals .woocommerce-shipping-destination, .woocommerce label, .woocommerce strong, .woocommerce .widget_shopping_cart .total strong, .woocommerce.widget_shopping_cart .total strong, .woocommerce div.product .woocommerce-tabs .panel #respond #commentform label, .woocommerce div.product .woocommerce-tabs .panel table.shop_attributes th, .woocommerce .cart-collaterals .cart_totals table th, .woocommerce-page .cart-collaterals .cart_totals table th, .woocommerce div.product form.cart div.quantity .quantity-wrapper .qty::placeholder, .woocommerce .summary .product_meta > span, .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce ul.cart_list li a, .woocommerce table.shop_table td.product-name, .woocommerce ul.product_list_widget li a, .woocommerce-tabs .comment-reply-title, .woocommerce form .form-row label, .woocommerce table.shop_table tfoot tr th, .woocommerce ul#shipping_method li label, #add_payment_method .wc-proceed-to-checkout .button__wrapper .checkout-button {
            color: #12265a;
        }

        .woocommerce-checkout .wc-proceed-to-checkout .button__wrapper .checkout-button, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, .group_table .woocommerce-grouped-product-list-item__price, .product_list_widget .woocommerce-Price-amount, .woocommerce table.shop_table div.quantity .qty, .woocommerce table.shop_table div.quantity .qty::placeholder, .woocommerce div.product form.cart div.quantity .qty, .woocommerce div.product form.cart div.quantity .qty::placeholder, ul.wgl-products li .added_to_cart.wc-forward, .woocommerce div.product form.cart .reset_variations:before, .woocommerce table.shop_table_responsive tr td:before, .woocommerce-page table.shop_table_responsive tr td:before, .woocommerce form .form-row .required, .woocommerce table.shop_table td.product-name a:hover, .woocommerce-review-link:hover, .product_meta > span a:hover {
            color: #12265a;
        }

        .woocommerce div.product form.cart .reset_variations:before, .woocommerce form .form-row .required, .woocommerce table.shop_table td.product-name a:hover, .woocommerce p.stars a, .woocommerce .summary .product_meta > span a:hover, .woocommerce .widget_shopping_cart .total, .woocommerce.widget_shopping_cart .total, .woocommerce-review-link:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce table.shop_table tfoot tr.order-total td .woocommerce-Price-amount.amount {
            color: #12265a;
        }

        .woocommerce #respond input#submit.disabled, .woocommerce #respond input#submit:disabled, .woocommerce #respond input#submit:disabled[disabled], .woocommerce a.button.disabled, .woocommerce a.button:disabled, .woocommerce a.button:disabled[disabled], .woocommerce button.button.disabled, .woocommerce input.button.disabled, .woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled] {
            color: #12265a;
        }

        .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content, ul.wgl-products.hover-animation-style_center:not(.list-toggle) li .products-post_wrapper .group_button-woo, .woocommerce .products ul.wgl-products.hover-animation-style_center:not(.list-toggle) li .products-post_wrapper .group_button-woo, .woocommerce nav.woocommerce-pagination ul li .prev:hover, .woocommerce nav.woocommerce-pagination ul li .next:hover {
            background: #12265a;
        }

        #add_payment_method .wc-proceed-to-checkout a.checkout-button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt:hover, .woocommerce input.button.alt, .woocommerce.widget_shopping_cart .buttons a, .widget_shopping_cart .buttons a:not(.checkout) {
            border-color: #12265a;
            background: #12265a;
        }

        .woocommerce div.product form.cart .button, .woocommerce #respond input#submit:disabled, .woocommerce #respond input#submit:disabled[disabled], .woocommerce #respond input#submit.disabled, .woocommerce a.button:disabled, .woocommerce a.button:disabled[disabled], .woocommerce a.button.disabled, .woocommerce button.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce button.button.disabled, .woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .woocommerce input.button.disabled {
            border-color: #12265a;
        }

        .woocommerce form .form-row .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #12265a transparent transparent transparent;
        }

        #add_payment_method table.cart td.actions .coupon .input-text, .wgl-theme-header .woocommerce-mini-cart span.quantity, .woocommerce .widget_shopping_cart .total strong, .woocommerce.widget_shopping_cart .total strong, .woocommerce .cart-collaterals .cart_totals table tbody tr td, .woocommerce .woocommerce-cart-form table.shop_table td, .woocommerce .quantity-wrapper input[type="number"], .woocommerce-page .cart-collaterals .cart_totals table tbody tr td, .product_list_widget .product-title, .wgl-theme-header .woo_mini_cart .woocommerce-mini-cart__total, .wgl-theme-header .woo_mini_cart .woocommerce-mini-cart__buttons a, .wgl-theme-header .mini-cart .woocommerce-mini-cart.cart_list.product_list_widget li a, .woocommerce ul.cart_list li a, .woocommerce ul.product_list_widget li a, .woocommerce-page .cart-collaterals .cart_totals table th, ul.wgl-products .woocommerce-loop-product__title, .woocommerce .product_meta > span, .woocommerce div.product form.cart .group_table tr td label, .woocommerce table.shop_table.cart .button, .woocommerce div.product span.price, .woocommerce button.button, .woocommerce a.button, .woocommerce table.shop_table thead th, .checkout.woocommerce-checkout #ship-to-different-address, .checkout.woocommerce-checkout #ship-to-different-address span, .woocommerce .products ul.wgl-products .woocommerce-loop-product__title {
            font-family: Nunito;
            font-weight: 900;
        }

        .woocommerce p.stars a, .woocommerce .woocommerce-cart-form__cart-item .product-thumbnail img, .woocommerce div.product .woocommerce-product-gallery .flex-viewport, .woocommerce div.product .woocommerce-product-gallery .woocommerce-product-gallery__wrapper, .woocommerce.single div.product .woocommerce-tabs ul.tabs li:hover:not(.active) a, .woocommerce .quantity-wrapper span:hover:before, .woocommerce .quantity-wrapper span:hover:after, .woocommerce .summary .product_meta > span a:hover {
            color: #fa9db7;
        }

        .wgl-theme-header .woo_mini_cart .woocommerce-mini-cart__buttons a.checkout:hover, .woocommerce .widget_shopping_cart .buttons a.checkout:hover, .woocommerce.widget_shopping_cart .buttons a.checkout:hover, .woocommerce table.shop_table.cart input.button:hover, .woocommerce button.button[name="update_cart"]:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce input.button:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce table.shop_table thead th, .woocommerce .woocommerce-checkout-review-order table.shop_table thead th, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce.single .woocommerce-product-gallery a.woocommerce-product-gallery__trigger:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, ul.wgl-products li .add_to_cart-btn .add_to_cart_button, .woocommerce div.product form.cart .button:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li a:after, ul.wgl-products li button.button.loading:before, ul.wgl-products li input.button.loading {
            background-color: #fa9db7;
        }

        .woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li img, .wgl-theme-header .mini-cart .woocommerce-mini-cart.cart_list.product_list_widget li img, .woocommerce.single div.product .woocommerce-product-gallery .flex-control-thumbs img.flex-active, .woocommerce.single div.product .woocommerce-product-gallery .flex-control-thumbs img:hover {
            border-color: #fa9db7;
        }

        .woocommerce #payment #place_order, .woocommerce a.button, .woocommerce button.button, .woocommerce .widget_shopping_cart .buttons a {
            background-color: #fa9db7;
            border-color: #fa9db7;
        }

        ul.wgl-products .woocommerce-loop-product__title a:hover, .woocommerce ul.cart_list li a:hover, .woocommerce .woocommerce-cart-form table.shop_table td.product-name a:hover, .woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce ul.product_list_widget li a:hover .product-title, .woocommerce .star-rating span:before, .woocommerce #review_form #respond p a {
            color: #ffc85b;
        }

        .woocommerce a.button:hover, .woocommerce-message a.button:hover, .woocommerce .widget_shopping_cart .buttons a.checkout, .woocommerce.widget_shopping_cart .buttons a.checkout, .woocommerce button.button:hover, .woocommerce.widget_shopping_cart .buttons a:not(.checkout):hover, .woocommerce .widget_shopping_cart .buttons a:not(.checkout):hover, ul.wgl-products li .add_to_cart-btn .add_to_cart_button:hover, .woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover, .woocommerce button.button[name="update_cart"], .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .wgl-theme-header .woo_mini_cart .woocommerce-mini-cart__buttons a.checkout, .woocommerce div.product form.cart .button, .woocommerce span.onsale, .woocommerce #respond input#submit, .wgl-theme-header .mini-cart a.woo_icon, .wgl-theme-header .woo_mini_cart .woocommerce-mini-cart__buttons a:not(.checkout):hover, .woocommerce nav.woocommerce-pagination ul li .next, .woocommerce nav.woocommerce-pagination ul li .prev, .woocommerce nav.woocommerce-pagination ul li > .current:after, .woocommerce nav.woocommerce-pagination ul li > *:hover:after {
            background-color: #ffc85b;
        }

        .wgl-theme-header .mini-cart a.woo_icon:before {
            border-color: #ffc85b;
        }

        .woocommerce #payment #place_order:hover {
            background-color: #ffc85b;
            border-color: #ffc85b;
        }

        .product_list_widget .woocommerce-Price-amount, .woocommerce table.shop_table .woocommerce-Price-amount.amount, .wgl-theme-header .woo_mini_cart .woocommerce-mini-cart__total, .wgl-theme-header .mini-cart .woocommerce-mini-cart.cart_list .woocommerce-Price-amount, .woocommerce .widget_shopping_cart .total .woocommerce-Price-amount, .woocommerce.widget_shopping_cart .total .woocommerce-Price-amount, .woocommerce.single div.product .woocommerce-tabs ul.tabs, .woocommerce.single div.product .woocommerce-tabs ul.tabs li a, .woocommerce .quantity-wrapper span, .woocommerce div.product p.price, .woocommerce div.product span.price, ul.wgl-products .price {
            color: #45b3df;
        }

        .woocommerce table.shop_table.cart input.button, .woocommerce input.button, .woocommerce .cart .button, .woocommerce .cart input.button, ul.wgl-products li .products-post_wrapper .added_to_cart.wc-forward, .woocommerce #respond input#submit:hover, .woocommerce.single div.product .woocommerce-tabs ul.tabs li.active {
            background-color: #45b3df;
        }

        body {
            background: #ffffff;
        }

        ol.commentlist:after {
            background: #ffffff;
        }

        h1, h1 a, h1 span {
            font-family: Nunito;
            font-weight: 900;
            font-size: 52px;
            line-height: 60px;
        }

        h2, h2 a, h2 span {
            font-family: Nunito;
            font-weight: 900;
            font-size: 48px;
            line-height: 56px;
        }

        h3, h3 a, h3 span {
            font-family: Nunito;
            font-weight: 900;
            font-size: 42px;
            line-height: 48px;
        }

        h4, h4 a, h4 span {
            font-family: Nunito;
            font-weight: 900;
            font-size: 36px;
            line-height: 42px;
        }

        h5, h5 a, h5 span {
            font-family: Nunito;
            font-weight: 900;
            font-size: 30px;
            line-height: 38px;
        }

        h6, h6 a, h6 span {
            font-family: Nunito;
            font-weight: 900;
            font-size: 24px;
            line-height: 32px;
        }

        @media only screen and (max-width: 1200px) {
            .wgl-theme-header {
                background-color: rgba(49, 49, 49, 1) !important;
                color: #ffffff !important;
            }

            .hamburger-inner, .hamburger-inner:before, .hamburger-inner:after {
                background-color: #ffffff;
            }
        }

        @media only screen and (max-width: 1200px) {
            .wgl-theme-header .wgl-mobile-header {
                display: block;
            }

            .wgl-site-header {
                display: none;
            }

            .wgl-theme-header .mobile-hamburger-toggle {
                display: inline-block;
            }

            .wgl-theme-header .primary-nav {
                display: none;
            }

            header.wgl-theme-header .mobile_nav_wrapper .primary-nav {
                display: block;
            }

            .wgl-theme-header .wgl-sticky-header {
                display: none;
            }

            .wgl-social-share_pages {
                display: none;
            }
        }

        @media only screen and (max-width: 1200px) {
            body .wgl-theme-header.header_overlap {
                position: relative;
                z-index: 2;
            }
        }

        @media only screen and (max-width: 768px) {
            .page-header {
                padding-top: 15px !important;
                padding-bottom: 40px !important;
                height: 230px !important;
            }

            .page-header_content .page-header_title {
                color: #12265a !important;
                font-size: 52px !important;
                line-height: 60px !important;
            }

            .page-header_content .page-header_breadcrumbs {
                color: #12265a !important;
                font-size: 16px !important;
                line-height: 24px !important;
            }
        }

        .theme-gradient input[type="submit"], .rev_slider .rev-btn.gradient-button, body .widget .widget-title .widget-title_wrapper:before, .inside_image.sub_layer_animation .wgl-portfolio-item_description, .wpb-js-composer .wgl-container .vc_row .vc_general.vc_tta.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab:before, .wpb-js-composer .wgl-container .vc_row .vc_general.vc_tta.vc_tta-tabs .vc_tta-panels-container .vc_tta-panels .vc_tta-panel .vc_tta-panel-heading .vc_tta-panel-title:before, .littledino_module_progress_bar .progress_bar, .littledino_module_testimonials.type_inline_top .testimonials_meta_wrap:after {
            background-color: #fa9db7;
        }

        body.elementor-page main .wgl-container.wgl-content-sidebar, body.elementor-editor-active main .wgl-container.wgl-content-sidebar, body.elementor-editor-preview main .wgl-container.wgl-content-sidebar {
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto;
        }

        body.single main .wgl-container {
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('vendor/css/swipebox.min.css') }}">
    <script type="text/javascript" src="{{ asset('vendor/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/js/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var wpgmza_google_api_status = {"message": "Enqueued", "code": "ENQUEUED"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('vendor/js/wpgmza_data.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/js/perfect-scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/js/jquery.swipebox.min.js') }}"></script>
    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
    <script type="text/javascript">
        function setREVStartSize(a) {
            try {
                var b, c = document.getElementById(a.c).parentNode.offsetWidth;
                if (c = 0 === c || isNaN(c) ? window.innerWidth : c, a.tabw = void 0 === a.tabw ? 0 : parseInt(a.tabw), a.thumbw = void 0 === a.thumbw ? 0 : parseInt(a.thumbw), a.tabh = void 0 === a.tabh ? 0 : parseInt(a.tabh), a.thumbh = void 0 === a.thumbh ? 0 : parseInt(a.thumbh), a.tabhide = void 0 === a.tabhide ? 0 : parseInt(a.tabhide), a.thumbhide = void 0 === a.thumbhide ? 0 : parseInt(a.thumbhide), a.mh = void 0 === a.mh || "" == a.mh ? 0 : a.mh, "fullscreen" === a.layout || "fullscreen" === a.l) b = Math.max(a.mh, window.innerHeight); else {
                    for (var d in a.gw = Array.isArray(a.gw) ? a.gw : [a.gw], a.rl) (void 0 === a.gw[d] || 0 === a.gw[d]) && (a.gw[d] = a.gw[d - 1]);
                    for (var d in a.gh = void 0 === a.el || "" === a.el || Array.isArray(a.el) && 0 == a.el.length ? a.gh : a.el, a.gh = Array.isArray(a.gh) ? a.gh : [a.gh], a.rl) (void 0 === a.gh[d] || 0 === a.gh[d]) && (a.gh[d] = a.gh[d - 1]);
                    var e, f = Array(a.rl.length), g = 0;
                    for (var d in a.tabw = a.tabhide >= c ? 0 : a.tabw, a.thumbw = a.thumbhide >= c ? 0 : a.thumbw, a.tabh = a.tabhide >= c ? 0 : a.tabh, a.thumbh = a.thumbhide >= c ? 0 : a.thumbh, a.rl) f[d] = a.rl[d] < window.innerWidth ? 0 : a.rl[d];
                    for (var d in e = f[0], f) e > f[d] && 0 < f[d] && (e = f[d], g = d);
                    var h = c > a.gw[g] + a.tabw + a.thumbw ? 1 : (c - (a.tabw + a.thumbw)) / a.gw[g];
                    b     = a.gh[g] * h + (a.tabh + a.thumbh)
                }
                void 0 === window.rs_init_css && (window.rs_init_css = document.head.appendChild(document.createElement("style"))), document.getElementById(a.c).height = b, window.rs_init_css.innerHTML += "#" + a.c + "_wrapper { height: " + b + "px }"
            } catch (a) {
                console.log("Failure at Presize of Slider:" + a)
            }
        }
    </script>
    <style type="text/css" id="wp-custom-css">
        .primary-nav > ul > li > a {
            font-size: 16px;
            text-transform: uppercase;
        }

        .primary-nav ul li ul li > a > span {
            text-transform: uppercase;
        }        </style>
    <style type="text/css" title="dynamic-css" class="options-output">.wgl-footer {
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
        }

        #side-panel .side-panel_sidebar {
            padding-top: 105px;
            padding-right: 90px;
            padding-bottom: 105px;
            padding-left: 90px;
        }</style>
</head>
<body class="page-template-default page page-id-2827 theme-littledino woocommerce-checkout woocommerce-page woocommerce-js elementor-default"
      data-gr-c-s-loaded="true" data-elementor-device-mode="desktop" style="">
<div id="preloader-wrapper" style="background-color: rgb(255, 255, 255); display: none;">
    <div class="preloader-container">
        <div class="cssload-loader"></div>
    </div>
</div>
<div class="page-header page-header_align_center"
     style="background-image:url(vendor/img/page_title_bg.png); background-size:cover; background-repeat:no-repeat; background-attachment:scroll; background-position:center bottom;background-color:transparent; height:348px; margin-bottom:40px; padding-top:12px; padding-bottom:88px;">
    <div class="wgl-background-image_parallax"
         style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
        <div data-depth="0.20"
             style="background-image: url(vendor/img/page_title_bg_parallax.png); background-size: cover; background-repeat: no-repeat; background-attachment: scroll; background-position: center bottom; transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
        </div>
    </div>
    <div class="page-header_wrapper">
        <div class="wgl-container">
            <div class="page-header_content">
                <h1 class="page-header_title" style="color: #12265a; font-size: 52px; line-height: 60px;">
                    Đăng ký
                </h1>
                <div class="page-header_breadcrumbs" style="color: #12265a; font-size: 16px; line-height: 24px;">
                    <div class="breadcrumbs">
                        <a href="{{ asset('/') }}" class="home">Trang chủ</a>
                        <span class="divider"></span>
                        <span class="current"><a href="{{ asset('login') }}">Đăng nhập</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="main">
    <grammarly-extension class="_1KJtL" style="position: absolute; top: 0px; left: 0px; pointer-events: none;">
        <div data-grammarly-part="highlights" class="u_fNK" style="position: absolute; top: 0px; left: 0px;">
            <div style="box-sizing: content-box; top: 1174px; left: 421.5px; width: 451.562px; height: 118px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;">
                <div style="position: absolute; top: 0px; left: 0px;">
                    <div style="height: 1198px; width: 2372px;"></div>
                    <div style="position: absolute; top: 0px; left: 0px; height: 1198px; width: 2372px;"></div>
                </div>
            </div>
        </div>
        <div data-grammarly-part="button" class="u_fNK" style="position: absolute; top: 0px; left: 0px;">
            <div style="box-sizing: content-box; top: 1174px; left: 421.5px; width: 451.562px; height: 118px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;">
                <div style="position: absolute; transform: translate(-100%, -100%); top: 108px; left: 431.562px; width: auto; height: auto; pointer-events: all;">
                    <div style="flex-direction: row; display: flex;">
                        <div style="position: relative;"></div>
                        <div>
                            <div class="_5WizN _1QzSN">
                                <div class="_3YmQx">
                                    <div title="Protected by Grammarly" class="_3QdKe">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </grammarly-extension>
    <div class="wgl-container">
        <div class="row ">
            <div id="main-content" class="wgl_col-12">
                <div class="woocommerce">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="woocommerce-form-coupon-toggle">

                        <div class="woocommerce-info littledino_module_message_box type_info closable wpb_animate_when_almost_visible wpb_left-to-right left-to-right wpb_start_animation animated"
                             style="display: none;">
                            <div class="message_icon_wrap"><i class="message_icon "></i></div>
                            <div class="message_content">
                                <div class="message_text"> Have a coupon? <a
                                            href="http://littledino.wgl-demo.net/checkout/#" class="showcoupon">Click
                                        here to enter your code</a></div>
                            </div>
                            <span class="message_close_button"></span></div>
                    </div>

                    <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

                        <p>If you have a coupon code, please apply it below.</p>

                        <p class="form-row form-row-first">
                            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code"
                                   id="coupon_code" value="">
                        </p>

                        <p class="form-row form-row-last">
                            <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon
                            </button>
                        </p>

                        <div class="clear"></div>
                    </form>
                    <div class="woocommerce-notices-wrapper"></div>
                    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="" enctype="multipart/form-data" novalidate="novalidate">
                        <div class="col2-set" id="customer_details">
                            <div class="col-1">
                                <div class="woocommerce-billing-fields">
                                    <h3>Billing details</h3>
                                    <div class="woocommerce-billing-fields__field-wrapper">
                                        <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
                                            <label for="billing_first_name" class="">First name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name"></span>
                                        </p>
                                        <p class="form-row form-row-last validate-required" id="billing_last_name_field"
                                           data-priority="20"><label for="billing_last_name" class="">Last
                                                name&nbsp;<abbr class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="billing_last_name"
                                                                                             id="billing_last_name"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="family-name"></span>
                                        </p>
                                        <p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
                                            <label for="billing_company" class="">Company name&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="billing_company"
                                                                                             id="billing_company"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="organization"></span>
                                        </p>
                                        <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                           id="billing_country_field" data-priority="40"><label for="billing_country"
                                                                                                class="">Country&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper">
                                                <select name="billing_country"
                                                        id="billing_country"
                                                        class="country_to_state country_select select2-hidden-accessible"
                                                        autocomplete="country"
                                                        tabindex="-1"
                                                        aria-hidden="true">
                                                    <option value="">Select a country…</option>
                                                    </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_country-container" role="combobox">
                                                            <span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-billing_country-container"
                                                                    role="textbox" aria-readonly="true" title="Vietnam">Vietnam</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span><noscript><button
                                                            type="submit" name="woocommerce_checkout_update_totals"
                                                            value="Update country">Update country</button></noscript></span>
                                        </p>
                                        <p class="form-row form-row-wide address-field validate-required"
                                           id="billing_address_1_field" data-priority="50"><label
                                                    for="billing_address_1" class="">Street address&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="billing_address_1"
                                                                                             id="billing_address_1"
                                                                                             placeholder="House number and street name"
                                                                                             value=""
                                                                                             autocomplete="address-line1"
                                                                                             data-placeholder="House number and street name"></span>
                                        </p>
                                        <p class="form-row form-row-wide address-field" id="billing_address_2_field"
                                           data-priority="60" style="display: none;"><label for="billing_address_2"
                                                                                            class="screen-reader-text">Apartment,
                                                suite, unit etc. (optional)&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="billing_address_2"
                                                                                             id="billing_address_2"
                                                                                             placeholder="Apartment, suite, unit etc. (optional)"
                                                                                             value=""
                                                                                             autocomplete="address-line2"
                                                                                             data-placeholder="Apartment, suite, unit etc. (optional)"></span>
                                        </p>
                                        <p class="form-row form-row-wide address-field validate-postcode"
                                           id="billing_postcode_field" data-priority="65"
                                           data-o_class="form-row form-row-wide address-field validate-postcode"><label
                                                    for="billing_postcode" class="">Postcode / ZIP&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="billing_postcode"
                                                                                             id="billing_postcode"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="postal-code"></span>
                                        </p>
                                        <p class="form-row form-row-wide address-field validate-required"
                                           id="billing_city_field" data-priority="70"
                                           data-o_class="form-row form-row-wide address-field validate-required"><label
                                                    for="billing_city" class="">Town / City&nbsp;<abbr class="required"
                                                                                                       title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="billing_city"
                                                                                             id="billing_city"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="address-level2"></span>
                                        </p>
                                        <p class="form-row form-row-wide address-field validate-state"
                                           id="billing_state_field" style="display: none"
                                           data-o_class="form-row form-row-wide address-field validate-state"><label
                                                    for="billing_state" class="">State / County&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="hidden"
                                                                                             id="billing_state"
                                                                                             name="billing_state"
                                                                                             placeholder=""
                                                                                             data-input-classes=""
                                                                                             class="hidden"></span></p>
                                        <p class="form-row form-row-wide validate-required validate-phone"
                                           id="billing_phone_field" data-priority="100"><label for="billing_phone"
                                                                                               class="">Phone&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="tel"
                                                                                             class="input-text "
                                                                                             name="billing_phone"
                                                                                             id="billing_phone"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="tel"></span>
                                        </p>
                                        <p class="form-row form-row-wide validate-required validate-email"
                                           id="billing_email_field" data-priority="110"><label for="billing_email"
                                                                                               class="">Email address&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="email"
                                                                                             class="input-text "
                                                                                             name="billing_email"
                                                                                             id="billing_email"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="email username"></span>
                                        </p></div>

                                </div>

                            </div>

                            <div class="col-2">
                                <div class="woocommerce-shipping-fields">

                                    <h3 id="ship-to-different-address">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                            <input id="ship-to-different-address-checkbox"
                                                   class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                   type="checkbox" name="ship_to_different_address" value="1"> <span>Ship to a different address?</span>
                                        </label>
                                    </h3>

                                    <div class="shipping_address" style="display: none;">


                                        <div class="woocommerce-shipping-fields__field-wrapper">
                                            <p class="form-row form-row-first validate-required"
                                               id="shipping_first_name_field" data-priority="10"><label
                                                        for="shipping_first_name" class="">First name&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                                                                 class="input-text "
                                                                                                 name="shipping_first_name"
                                                                                                 id="shipping_first_name"
                                                                                                 placeholder="" value=""
                                                                                                 autocomplete="given-name"></span>
                                            </p>
                                            <p class="form-row form-row-last validate-required"
                                               id="shipping_last_name_field" data-priority="20"><label
                                                        for="shipping_last_name" class="">Last name&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                                                                 class="input-text "
                                                                                                 name="shipping_last_name"
                                                                                                 id="shipping_last_name"
                                                                                                 placeholder="" value=""
                                                                                                 autocomplete="family-name"></span>
                                            </p>
                                            <p class="form-row form-row-wide" id="shipping_company_field"
                                               data-priority="30"><label for="shipping_company" class="">Company name&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                                                                 class="input-text "
                                                                                                 name="shipping_company"
                                                                                                 id="shipping_company"
                                                                                                 placeholder="" value=""
                                                                                                 autocomplete="organization"></span>
                                            </p>
                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                               id="shipping_country_field" data-priority="40"><label
                                                        for="shipping_country" class="">Country&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><select
                                                            name="shipping_country" id="shipping_country"
                                                            class="country_to_state country_select select2-hidden-accessible"
                                                            autocomplete="country" tabindex="-1" aria-hidden="true"></select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    aria-haspopup="true" aria-expanded="false"
                                                                    tabindex="0"
                                                                    aria-labelledby="select2-shipping_country-container"
                                                                    role="combobox"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-shipping_country-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Vietnam">Vietnam</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span><noscript><button
                                                                type="submit" name="woocommerce_checkout_update_totals"
                                                                value="Update country">Update country</button></noscript></span>
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-required"
                                               id="shipping_address_1_field" data-priority="50"><label
                                                        for="shipping_address_1" class="">Street address&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                                                                 class="input-text "
                                                                                                 name="shipping_address_1"
                                                                                                 id="shipping_address_1"
                                                                                                 placeholder="House number and street name"
                                                                                                 value=""
                                                                                                 autocomplete="address-line1"
                                                                                                 data-placeholder="House number and street name"></span>
                                            </p>
                                            <p class="form-row form-row-wide address-field"
                                               id="shipping_address_2_field" data-priority="60" style="display: none;">
                                                <label for="shipping_address_2" class="screen-reader-text">Apartment,
                                                    suite, unit etc. (optional)&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                                                                 class="input-text "
                                                                                                 name="shipping_address_2"
                                                                                                 id="shipping_address_2"
                                                                                                 placeholder="Apartment, suite, unit etc. (optional)"
                                                                                                 value=""
                                                                                                 autocomplete="address-line2"
                                                                                                 data-placeholder="Apartment, suite, unit etc. (optional)"></span>
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-postcode"
                                               id="shipping_postcode_field" data-priority="65"
                                               data-o_class="form-row form-row-wide address-field validate-postcode">
                                                <label for="shipping_postcode" class="">Postcode / ZIP&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                                                                 class="input-text "
                                                                                                 name="shipping_postcode"
                                                                                                 id="shipping_postcode"
                                                                                                 placeholder="" value=""
                                                                                                 autocomplete="postal-code"></span>
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-required"
                                               id="shipping_city_field" data-priority="70"
                                               data-o_class="form-row form-row-wide address-field validate-required">
                                                <label for="shipping_city" class="">Town / City&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                                                                 class="input-text "
                                                                                                 name="shipping_city"
                                                                                                 id="shipping_city"
                                                                                                 placeholder="" value=""
                                                                                                 autocomplete="address-level2"></span>
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-state"
                                               id="shipping_state_field" style="display: none"
                                               data-o_class="form-row form-row-wide address-field validate-state"><label
                                                        for="shipping_state" class="">State / County&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="hidden"
                                                                                                 id="shipping_state"
                                                                                                 name="shipping_state"
                                                                                                 placeholder=""
                                                                                                 data-input-classes=""
                                                                                                 class="hidden"></span>
                                            </p></div>


                                    </div>

                                </div>
                                <div class="woocommerce-additional-fields">


                                    <div class="woocommerce-additional-fields__field-wrapper">
                                        <p class="form-row notes" id="order_comments_field" data-priority=""><label
                                                    for="order_comments" class="">Order notes&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><textarea name="order_comments"
                                                                                                class="input-text "
                                                                                                id="order_comments"
                                                                                                placeholder="Notes about your order, e.g. special notes for delivery."
                                                                                                rows="2" cols="5"
                                                                                                spellcheck="false"></textarea></span>
                                        </p></div>


                                </div>
                            </div>
                        </div>


                        <h3 id="order_review_heading">Your order</h3>


                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Rattle Rectangle&nbsp; <strong class="product-quantity">× 1</strong></td>
                                    <td class="product-total">
                                        <span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">$</span>16.00</span></td>
                                </tr>
                                </tbody>
                                <tfoot>

                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">$</span>16.00</span></td>
                                </tr>


                                <tr class="woocommerce-shipping-totals shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        <ul id="shipping_method" class="woocommerce-shipping-methods">
                                            <li>
                                                <input type="hidden" name="shipping_method[0]" data-index="0"
                                                       id="shipping_method_0_flat_rate2" value="flat_rate:2"
                                                       class="shipping_method"><label
                                                        for="shipping_method_0_flat_rate2">Flat rate: <span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">$</span>139.00</span></label>
                                            </li>
                                        </ul>


                                    </td>
                                </tr>


                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><strong><span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>155.00</span></strong>
                                    </td>
                                </tr>


                                </tfoot>
                            </table>


                            <div id="payment" class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="woocommerce-notice woocommerce-notice--info woocommerce-info">Sorry, it
                                        seems that there are no available payment methods for your state. Please contact
                                        us if you require assistance or wish to make alternate arrangements.
                                    </li>
                                </ul>
                                <div class="form-row place-order">
                                    <noscript>
                                        Since your browser does not support JavaScript, or it is disabled, please ensure
                                        you click the <em>Update Totals</em> button before placing your order. You may
                                        be charged more than the amount stated above if you fail to do so. <br/>
                                        <button type="submit" class="button alt"
                                                name="woocommerce_checkout_update_totals" value="Update totals">Update
                                            totals
                                        </button>
                                    </noscript>

                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                        <div class="woocommerce-privacy-policy-text"><p>Your personal data will be used
                                                to process your order, support your experience throughout this website,
                                                and for other purposes described in our <a
                                                        href="http://littledino.wgl-demo.net/?page_id=3"
                                                        class="woocommerce-privacy-policy-link" target="_blank">privacy
                                                    policy</a>.</p>
                                        </div>
                                    </div>


                                    <button type="submit" class="button alt" name="woocommerce_checkout_place_order"
                                            id="place_order" value="Place order" data-value="Place order">Place order
                                    </button>

                                    <input type="hidden" id="woocommerce-process-checkout-nonce"
                                           name="woocommerce-process-checkout-nonce" value="a7d818df41"><input
                                            type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">
                                </div>
                            </div>


                        </div>


                    </form>

                </div>
            </div>

        </div>
    </div>
</main>
<footer class="footer clearfix" style=" background-color :#ffffff;" id="footer">
    <div class="footer_top-area">
        <div class="wgl-container">
            <div class="row-footer">
                <div data-elementor-type="post" data-elementor-id="1177" class="elementor elementor-1177"
                     data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section
                                    class="elementor-element elementor-element-685a41f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="685a41f" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-element elementor-element-21529c4 elementor-column elementor-col-100 elementor-top-column"
                                             data-id="21529c4" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-dc3adf7 elementor-widget elementor-widget-spacer"
                                                         data-id="dc3adf7" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                    class="elementor-element elementor-element-aab501c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                    data-id="aab501c" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-row">
                                        <div class="elementor-element elementor-element-f15a590 elementor-column elementor-col-25 elementor-top-column"
                                             data-id="f15a590" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-edc9a9a elementor-widget elementor-widget-spacer"
                                                         data-id="edc9a9a" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4bbb608 elementor-widget elementor-widget-image"
                                                         data-id="4bbb608" data-element_type="widget"
                                                         data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img src="{{ asset('vendor/img/logo_312w-odp9gkufg10oexkjcuf9yfqr1up8ll1sz16ggjh1de.png') }}"
                                                                     title="logo_312w" alt="logo_312w"></div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-d271e0b elementor-widget elementor-widget-spacer"
                                                         data-id="d271e0b" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-fba0f4c elementor-widget elementor-widget-text-editor"
                                                         data-id="fba0f4c" data-element_type="widget"
                                                         data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-text-editor elementor-clearfix"><p>
                                                                    <span style="color: #ffffff;">Come visit The Little Dino Center for yourself so you can tour the rooms and meet some of our educators. We offer high Quality early education.</span>
                                                                </p></div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-113ece5 elementor-shape-circle elementor-widget elementor-widget-social-icons"
                                                         data-id="113ece5" data-element_type="widget"
                                                         data-widget_type="social-icons.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-social-icons-wrapper">
                                                                <a href="http://littledino.wgl-demo.net/checkout/"
                                                                   class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-float elementor-repeater-item-fb42abf"
                                                                   target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i> </a>
                                                                <a href="http://littledino.wgl-demo.net/checkout/"
                                                                   class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-float elementor-repeater-item-9cf59f2"
                                                                   target="_blank">
                                                                    <span class="elementor-screen-only">Facebook-f</span>
                                                                    <i class="fab fa-facebook-f"></i> </a>
                                                                <a href="http://littledino.wgl-demo.net/checkout/"
                                                                   class="elementor-icon elementor-social-icon elementor-social-icon-pinterest-p elementor-animation-float elementor-repeater-item-9d03b2d"
                                                                   target="_blank">
                                                                    <span class="elementor-screen-only">Pinterest-p</span>
                                                                    <i class="fab fa-pinterest-p"></i> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6238b4a elementor-column elementor-col-25 elementor-top-column"
                                             data-id="6238b4a" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-13a1693 elementor-widget elementor-widget-spacer"
                                                         data-id="13a1693" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-8c57e47 elementor-widget elementor-widget-heading"
                                                         data-id="8c57e47" data-element_type="widget"
                                                         data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h5 class="elementor-heading-title elementor-size-default">
                                                                Our Contacts</h5></div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6eb5ec7 elementor-position-left ib-align-left elementor-widget-image-box wgl-image-box elementor-widget elementor-widget-wgl-info-box"
                                                         data-id="6eb5ec7" data-element_type="widget"
                                                         data-widget_type="wgl-info-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wgl-infobox">
                                                                <div class="wgl-infobox_wrapper elementor-image-box-wrapper">
                                                                    <div class="wgl-infobox-icon_wrapper elementor-image-box-img">
                                                                        <div class="wgl-infobox-icon_container">
                                                                            <figure class="wgl-image-box_img">
                                                                                <span>
                                                                                    <img width="42" height="46" src="{{ asset('vendor/img/contacts_icon_01.png') }}" class="attachment-full size-full" alt="">
                                                                                </span>
                                                                            </figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wgl-infobox-content_wrapper">
                                                                        <div class="wgl-infobox-title_wrapper"></div>
                                                                        <div class="wgl-infobox_content"><span
                                                                                    style="color: #ffffff">27 Division St, New York, NY 10002, USA</span>
                                                                        </div>
                                                                    </div>
                                                                    <a class="wgl-infobox_item_link"
                                                                       href="http://littledino.wgl-demo.net/contacts"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-129d3e3 elementor-widget elementor-widget-spacer"
                                                         data-id="129d3e3" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-67de0b9 elementor-position-left ib-align-left elementor-widget-image-box wgl-image-box elementor-widget elementor-widget-wgl-info-box"
                                                         data-id="67de0b9" data-element_type="widget"
                                                         data-widget_type="wgl-info-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wgl-infobox">
                                                                <div class="wgl-infobox_wrapper elementor-image-box-wrapper">
                                                                    <div class="wgl-infobox-icon_wrapper elementor-image-box-img">
                                                                        <div class="wgl-infobox-icon_container">
                                                                            <figure class="wgl-image-box_img">
                                                                                <span>
                                                                                    <img src="{{ asset('vendor/img/contacts_icon_02-ocp4oc0k1kiido7wb5gldcnomqx86q8hjm7badi8e8.png') }}" title="contacts_icon_02" alt="contacts_icon_02">
                                                                                </span>
                                                                            </figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wgl-infobox-content_wrapper">
                                                                        <div class="wgl-infobox-title_wrapper"></div>
                                                                        <div class="wgl-infobox_content">
                                                                            <span style="color: #ffffff">+1 (888) 561 795 1 <br>+1 (888) 561 795 2 </span>
                                                                        </div>
                                                                    </div>
                                                                    <a class="wgl-infobox_item_link"
                                                                       href="http://littledino.wgl-demo.net/contacts"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-a9f8b3a elementor-widget elementor-widget-spacer"
                                                         data-id="a9f8b3a" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4f4b257 elementor-position-left ib-align-left elementor-widget-image-box wgl-image-box elementor-widget elementor-widget-wgl-info-box"
                                                         data-id="4f4b257" data-element_type="widget"
                                                         data-widget_type="wgl-info-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wgl-infobox">
                                                                <div class="wgl-infobox_wrapper elementor-image-box-wrapper">
                                                                    <div class="wgl-infobox-icon_wrapper elementor-image-box-img">
                                                                        <div class="wgl-infobox-icon_container">
                                                                            <figure class="wgl-image-box_img">
                                                                                <span>
                                                                                    <img src="{{ asset('vendor/img/contacts_icon_03-ocp4ocye8ejspa6j5nv7xuf584slefc7vqusrngu80.png') }}" title="contacts_icon_03" alt="contacts_icon_03">
                                                                                </span>
                                                                            </figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wgl-infobox-content_wrapper">
                                                                        <div class="wgl-infobox-title_wrapper"></div>
                                                                        <div class="wgl-infobox_content">
                                                                            <p>
                                                                                <span style="color: #ffffff">littledino@wgl.com dinoino@mail.com </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <a class="wgl-infobox_item_link"
                                                                       href="http://littledino.wgl-demo.net/contacts"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5e77713 elementor-column elementor-col-25 elementor-top-column"
                                             data-id="5e77713" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-2144b9b elementor-widget elementor-widget-spacer"
                                                         data-id="2144b9b" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-c0d0781 elementor-widget elementor-widget-heading"
                                                         data-id="c0d0781" data-element_type="widget"
                                                         data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h5 class="elementor-heading-title elementor-size-default">
                                                                Our Gallery</h5></div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-846fab7 elementor-widget elementor-widget-spacer"
                                                         data-id="846fab7" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-f646044 elementor-widget elementor-widget-wp-widget-media_gallery"
                                                         data-id="f646044" data-element_type="widget"
                                                         data-widget_type="wp-widget-media_gallery.default">
                                                        <div class="elementor-widget-container">

                                                            <style type="text/css">
                                                                #gallery-1 {
                                                                    margin: auto;
                                                                }

                                                                #gallery-1 .gallery-item {
                                                                    float: left;
                                                                    margin-top: 10px;
                                                                    text-align: center;
                                                                    width: 33%;
                                                                }

                                                                #gallery-1 img {
                                                                    border: 2px solid #cfcfcf;
                                                                }

                                                                #gallery-1 .gallery-caption {
                                                                    margin-left: 0;
                                                                }

                                                                /* see gallery_shortcode() in wp-includes/media.php */
                                                            </style>
                                                            <div id="gallery-1"
                                                                 class="gallery galleryid-2827 gallery-columns-3 gallery-size-thumbnail">
                                                                <dl class="gallery-item">
                                                                    <dt class="gallery-icon landscape">
                                                                        <a href="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_01.jpg"><img
                                                                                    width="150" height="150"
                                                                                    src="./Checkout – Littledino_files/widget-gallery_01-150x150.jpg"
                                                                                    class="attachment-thumbnail size-thumbnail"
                                                                                    alt=""
                                                                                    aria-describedby="gallery-1-155"
                                                                                    srcset="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_01-150x150.jpg 150w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_01-180x180.jpg 180w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_01-120x120.jpg 120w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_01.jpg 200w"
                                                                                    sizes="(max-width: 150px) 100vw, 150px"></a>
                                                                    </dt>
                                                                    <dd class="wp-caption-text gallery-caption"
                                                                        id="gallery-1-155">
                                                                        Gallery 1
                                                                    </dd>
                                                                </dl>
                                                                <dl class="gallery-item">
                                                                    <dt class="gallery-icon landscape">
                                                                        <a href="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_02.jpg"><img
                                                                                    width="150" height="150"
                                                                                    src="./Checkout – Littledino_files/widget-gallery_02-150x150.jpg"
                                                                                    class="attachment-thumbnail size-thumbnail"
                                                                                    alt=""
                                                                                    aria-describedby="gallery-1-156"
                                                                                    srcset="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_02-150x150.jpg 150w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_02-180x180.jpg 180w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_02-120x120.jpg 120w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_02.jpg 200w"
                                                                                    sizes="(max-width: 150px) 100vw, 150px"></a>
                                                                    </dt>
                                                                    <dd class="wp-caption-text gallery-caption"
                                                                        id="gallery-1-156">
                                                                        Gallery 2
                                                                    </dd>
                                                                </dl>
                                                                <dl class="gallery-item">
                                                                    <dt class="gallery-icon landscape">
                                                                        <a href="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_03.jpg"><img
                                                                                    width="150" height="150"
                                                                                    src="./Checkout – Littledino_files/widget-gallery_03-150x150.jpg"
                                                                                    class="attachment-thumbnail size-thumbnail"
                                                                                    alt=""
                                                                                    aria-describedby="gallery-1-157"
                                                                                    srcset="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_03-150x150.jpg 150w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_03-180x180.jpg 180w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_03-120x120.jpg 120w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_03.jpg 200w"
                                                                                    sizes="(max-width: 150px) 100vw, 150px"></a>
                                                                    </dt>
                                                                    <dd class="wp-caption-text gallery-caption"
                                                                        id="gallery-1-157">
                                                                        Gallery 3
                                                                    </dd>
                                                                </dl>
                                                                <br style="clear: both">
                                                                <dl class="gallery-item">
                                                                    <dt class="gallery-icon landscape">
                                                                        <a href="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_04.jpg"><img
                                                                                    width="150" height="150"
                                                                                    src="./Checkout – Littledino_files/widget-gallery_04-150x150.jpg"
                                                                                    class="attachment-thumbnail size-thumbnail"
                                                                                    alt=""
                                                                                    aria-describedby="gallery-1-158"
                                                                                    srcset="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_04-150x150.jpg 150w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_04-180x180.jpg 180w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_04-120x120.jpg 120w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_04.jpg 200w"
                                                                                    sizes="(max-width: 150px) 100vw, 150px"></a>
                                                                    </dt>
                                                                    <dd class="wp-caption-text gallery-caption"
                                                                        id="gallery-1-158">
                                                                        Gallery 4
                                                                    </dd>
                                                                </dl>
                                                                <dl class="gallery-item">
                                                                    <dt class="gallery-icon landscape">
                                                                        <a href="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_05.jpg"><img
                                                                                    width="150" height="150"
                                                                                    src="./Checkout – Littledino_files/widget-gallery_05-150x150.jpg"
                                                                                    class="attachment-thumbnail size-thumbnail"
                                                                                    alt=""
                                                                                    srcset="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_05-150x150.jpg 150w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_05-180x180.jpg 180w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_05-120x120.jpg 120w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_05.jpg 200w"
                                                                                    sizes="(max-width: 150px) 100vw, 150px"></a>
                                                                    </dt>
                                                                </dl>
                                                                <dl class="gallery-item">
                                                                    <dt class="gallery-icon landscape">
                                                                        <a href="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_06.jpg"><img
                                                                                    width="150" height="150"
                                                                                    src="./Checkout – Littledino_files/widget-gallery_06-150x150.jpg"
                                                                                    class="attachment-thumbnail size-thumbnail"
                                                                                    alt=""
                                                                                    srcset="http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_06-150x150.jpg 150w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_06-180x180.jpg 180w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_06-120x120.jpg 120w, http://littledino.wgl-demo.net/wp-content/uploads/2019/08/widget-gallery_06.jpg 200w"
                                                                                    sizes="(max-width: 150px) 100vw, 150px"></a>
                                                                    </dt>
                                                                </dl>
                                                                <br style="clear: both">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6c86586 elementor-column elementor-col-25 elementor-top-column"
                                             data-id="6c86586" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-28c0143 elementor-widget elementor-widget-spacer"
                                                         data-id="28c0143" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3f8e80e elementor-widget elementor-widget-heading"
                                                         data-id="3f8e80e" data-element_type="widget"
                                                         data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h5 class="elementor-heading-title elementor-size-default">
                                                                Open Hours</h5></div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6aef492 elementor-widget elementor-widget-spacer"
                                                         data-id="6aef492" data-element_type="widget"
                                                         data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6756ff0 elementor-widget elementor-widget-wgl-working-hours"
                                                         data-id="6756ff0" data-element_type="widget"
                                                         data-widget_type="wgl-working-hours.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wgl-working-hours">
                                                                <div class="wh__item">
                                                                    <div class="wh__day" style="color: #ffffff;">Mon -
                                                                        Fri
                                                                    </div>
                                                                    <div class="wh__hours" style="color: #ffffff;">8 am
                                                                        - 7pm
                                                                    </div>
                                                                </div>
                                                                <div class="wh__item">
                                                                    <div class="wh__day" style="color: #ffffff;">
                                                                        Saturday
                                                                    </div>
                                                                    <div class="wh__hours" style="color: #ffffff;">9 am
                                                                        - 4pm
                                                                    </div>
                                                                </div>
                                                                <div class="wh__item">
                                                                    <div class="wh__day" style="color: #ffffff;">
                                                                        Sunday
                                                                    </div>
                                                                    <div class="wh__hours" style="color: #ffffff;">
                                                                        Closed
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
                                <div data-item-id="8835eee" class="extended-parallax elementor-repeater-item-8835eee"
                                     style="transform: unset; transition: transform 0s linear 0s; will-change: transform; opacity: 1; visibility: visible;">
                                    <img src="vendor/img/cat.png"></div>
                                <div data-item-id="3c2c191" class="extended-parallax elementor-repeater-item-3c2c191"
                                     style="transform: unset; transition: transform 0s linear 0s; will-change: transform;">
                                    <img src="vendor/img/cloud_footer.png"></div>
                                <div data-item-id="f408fcf" class="extended-parallax elementor-repeater-item-f408fcf"
                                     style="transform: unset; transition: transform 0s linear 0s; will-change: transform; opacity: 1; visibility: visible;">
                                    <img src="vendor/img/stars.png"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="http://littledino.wgl-demo.net/checkout/#" id="scroll_up" class=""></a>
<script type="text/javascript">
    var c                   = document.body.className;
    c                       = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type="text/javascript">
    var wc_product_block_data = JSON.parse(decodeURIComponent('%7B%22min_columns%22%3A1%2C%22max_columns%22%3A6%2C%22default_columns%22%3A3%2C%22min_rows%22%3A1%2C%22max_rows%22%3A6%2C%22default_rows%22%3A1%2C%22thumbnail_size%22%3A540%2C%22placeholderImgSrc%22%3A%22http%3A%5C%2F%5C%2Flittledino.wgl-demo.net%5C%2Fwp-content%5C%2Fuploads%5C%2Fwoocommerce-placeholder-540x540.png%22%2C%22min_height%22%3A500%2C%22default_height%22%3A500%2C%22isLargeCatalog%22%3Afalse%2C%22limitTags%22%3Afalse%2C%22hasTags%22%3Atrue%2C%22productCategories%22%3A%5B%7B%22term_id%22%3A54%2C%22name%22%3A%22Uncategorized%22%2C%22slug%22%3A%22uncategorized%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A54%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Flittledino.wgl-demo.net%5C%2Fproduct-category%5C%2Funcategorized%5C%2F%22%7D%2C%7B%22term_id%22%3A84%2C%22name%22%3A%22Accessories%22%2C%22slug%22%3A%22accessories%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A84%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Flittledino.wgl-demo.net%5C%2Fproduct-category%5C%2Faccessories%5C%2F%22%7D%2C%7B%22term_id%22%3A83%2C%22name%22%3A%22Coloring%22%2C%22slug%22%3A%22coloring%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A83%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Flittledino.wgl-demo.net%5C%2Fproduct-category%5C%2Fcoloring%5C%2F%22%7D%2C%7B%22term_id%22%3A82%2C%22name%22%3A%22Notebook%22%2C%22slug%22%3A%22notebook%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A82%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Flittledino.wgl-demo.net%5C%2Fproduct-category%5C%2Fnotebook%5C%2F%22%7D%2C%7B%22term_id%22%3A70%2C%22name%22%3A%22Wooden%20Toys%22%2C%22slug%22%3A%22wooden-toys%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A70%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A12%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Flittledino.wgl-demo.net%5C%2Fproduct-category%5C%2Fwooden-toys%5C%2F%22%7D%5D%2C%22homeUrl%22%3A%22http%3A%5C%2F%5C%2Flittledino.wgl-demo.net%5C%2F%22%7D'));
</script>
<link rel="stylesheet" id="elementor-frontend-css" href="vendor/js/frontend.min.css" type="text/css"
      media="all">
<link rel="stylesheet" id="elementor-post-1177-css" href="vendor/js/post-1177.css" type="text/css"
      media="all">
<link rel="stylesheet" id="animate-css" href="vendor/js/animate.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-css" href="vendor/js/elementor-icons.min.css"
      type="text/css" media="all">
<link rel="stylesheet" id="elementor-animations-css" href="vendor/js/animations.min.css"
      type="text/css" media="all">
<link rel="stylesheet" id="elementor-global-css" href="vendor/js/global.css" type="text/css"
      media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="vendor/js/css(1)" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="vendor/js/fontawesome.min.css"
      type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="vendor/js/brands.min.css"
      type="text/css" media="all">
<script type="text/javascript">
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root"     : "http:\/\/littledino.wgl-demo.net\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="vendor/js/scripts.js"></script>
<script type="text/javascript" src="vendor/js/jquery.blockUI.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url"               : "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url"            : "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart"         : "View cart",
        "cart_url"               : "http:\/\/littledino.wgl-demo.net\/cart\/",
        "is_cart"                : "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="vendor/js/add-to-cart.min.js"></script>
<script type="text/javascript" src="vendor/js/selectWoo.full.min.js"></script>
<script type="text/javascript" src="vendor/js/js.cookie.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type="text/javascript" src="vendor/js/woocommerce.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_country_select_params = {
        "countries"                : "{\"AF\":[],\"AO\":{\"BGO\":\"Bengo\",\"BLU\":\"Benguela\",\"BIE\":\"Bi\\u00e9\",\"CAB\":\"Cabinda\",\"CNN\":\"Cunene\",\"HUA\":\"Huambo\",\"HUI\":\"Hu\\u00edla\",\"CCU\":\"Kuando Kubango\",\"CNO\":\"Kwanza-Norte\",\"CUS\":\"Kwanza-Sul\",\"LUA\":\"Luanda\",\"LNO\":\"Lunda-Norte\",\"LSU\":\"Lunda-Sul\",\"MAL\":\"Malanje\",\"MOX\":\"Moxico\",\"NAM\":\"Namibe\",\"UIG\":\"U\\u00edge\",\"ZAI\":\"Zaire\"},\"AR\":{\"C\":\"Ciudad Aut\u00f3noma de Buenos Aires\",\"B\":\"Buenos Aires\",\"K\":\"Catamarca\",\"H\":\"Chaco\",\"U\":\"Chubut\",\"X\":\"C\u00f3rdoba\",\"W\":\"Corrientes\",\"E\":\"Entre R\u00edos\",\"P\":\"Formosa\",\"Y\":\"Jujuy\",\"L\":\"La Pampa\",\"F\":\"La Rioja\",\"M\":\"Mendoza\",\"N\":\"Misiones\",\"Q\":\"Neuqu\u00e9n\",\"R\":\"R\u00edo Negro\",\"A\":\"Salta\",\"J\":\"San Juan\",\"D\":\"San Luis\",\"Z\":\"Santa Cruz\",\"S\":\"Santa Fe\",\"G\":\"Santiago del Estero\",\"V\":\"Tierra del Fuego\",\"T\":\"Tucum\u00e1n\"},\"AT\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"AX\":[],\"BD\":{\"BD-05\":\"Bagerhat\",\"BD-01\":\"Bandarban\",\"BD-02\":\"Barguna\",\"BD-06\":\"Barishal\",\"BD-07\":\"Bhola\",\"BD-03\":\"Bogura\",\"BD-04\":\"Brahmanbaria\",\"BD-09\":\"Chandpur\",\"BD-10\":\"Chattogram\",\"BD-12\":\"Chuadanga\",\"BD-11\":\"Cox's Bazar\",\"BD-08\":\"Cumilla\",\"BD-13\":\"Dhaka\",\"BD-14\":\"Dinajpur\",\"BD-15\":\"Faridpur \",\"BD-16\":\"Feni\",\"BD-19\":\"Gaibandha\",\"BD-18\":\"Gazipur\",\"BD-17\":\"Gopalganj\",\"BD-20\":\"Habiganj\",\"BD-21\":\"Jamalpur\",\"BD-22\":\"Jashore\",\"BD-25\":\"Jhalokati\",\"BD-23\":\"Jhenaidah\",\"BD-24\":\"Joypurhat\",\"BD-29\":\"Khagrachhari\",\"BD-27\":\"Khulna\",\"BD-26\":\"Kishoreganj\",\"BD-28\":\"Kurigram\",\"BD-30\":\"Kushtia\",\"BD-31\":\"Lakshmipur\",\"BD-32\":\"Lalmonirhat\",\"BD-36\":\"Madaripur\",\"BD-37\":\"Magura\",\"BD-33\":\"Manikganj \",\"BD-39\":\"Meherpur\",\"BD-38\":\"Moulvibazar\",\"BD-35\":\"Munshiganj\",\"BD-34\":\"Mymensingh\",\"BD-48\":\"Naogaon\",\"BD-43\":\"Narail\",\"BD-40\":\"Narayanganj\",\"BD-42\":\"Narsingdi\",\"BD-44\":\"Natore\",\"BD-45\":\"Nawabganj\",\"BD-41\":\"Netrakona\",\"BD-46\":\"Nilphamari\",\"BD-47\":\"Noakhali\",\"BD-49\":\"Pabna\",\"BD-52\":\"Panchagarh\",\"BD-51\":\"Patuakhali\",\"BD-50\":\"Pirojpur\",\"BD-53\":\"Rajbari\",\"BD-54\":\"Rajshahi\",\"BD-56\":\"Rangamati\",\"BD-55\":\"Rangpur\",\"BD-58\":\"Satkhira\",\"BD-62\":\"Shariatpur\",\"BD-57\":\"Sherpur\",\"BD-59\":\"Sirajganj\",\"BD-61\":\"Sunamganj\",\"BD-60\":\"Sylhet\",\"BD-63\":\"Tangail\",\"BD-64\":\"Thakurgaon\"},\"BE\":[],\"BG\":{\"BG-01\":\"Blagoevgrad\",\"BG-02\":\"Burgas\",\"BG-08\":\"Dobrich\",\"BG-07\":\"Gabrovo\",\"BG-26\":\"Haskovo\",\"BG-09\":\"Kardzhali\",\"BG-10\":\"Kyustendil\",\"BG-11\":\"Lovech\",\"BG-12\":\"Montana\",\"BG-13\":\"Pazardzhik\",\"BG-14\":\"Pernik\",\"BG-15\":\"Pleven\",\"BG-16\":\"Plovdiv\",\"BG-17\":\"Razgrad\",\"BG-18\":\"Ruse\",\"BG-27\":\"Shumen\",\"BG-19\":\"Silistra\",\"BG-20\":\"Sliven\",\"BG-21\":\"Smolyan\",\"BG-23\":\"Sofia\",\"BG-22\":\"Sofia-Grad\",\"BG-24\":\"Stara Zagora\",\"BG-25\":\"Targovishte\",\"BG-03\":\"Varna\",\"BG-04\":\"Veliko Tarnovo\",\"BG-05\":\"Vidin\",\"BG-06\":\"Vratsa\",\"BG-28\":\"Yambol\"},\"BH\":[],\"BI\":[],\"BO\":{\"B\":\"Chuquisaca\",\"H\":\"Beni\",\"C\":\"Cochabamba\",\"L\":\"La Paz\",\"O\":\"Oruro\",\"N\":\"Pando\",\"P\":\"Potos\\u00ed\",\"S\":\"Santa Cruz\",\"T\":\"Tarija\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BA\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NL\":\"Newfoundland and Labrador\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CH\":{\"AG\":\"Aargau\",\"AR\":\"Appenzell Ausserrhoden\",\"AI\":\"Appenzell Innerrhoden\",\"BL\":\"Basel-Landschaft\",\"BS\":\"Basel-Stadt\",\"BE\":\"Bern\",\"FR\":\"Fribourg\",\"GE\":\"Geneva\",\"GL\":\"Glarus\",\"GR\":\"Graub\u00fcnden\",\"JU\":\"Jura\",\"LU\":\"Luzern\",\"NE\":\"Neuch\u00e2tel\",\"NW\":\"Nidwalden\",\"OW\":\"Obwalden\",\"SH\":\"Schaffhausen\",\"SZ\":\"Schwyz\",\"SO\":\"Solothurn\",\"SG\":\"St. Gallen\",\"TG\":\"Thurgau\",\"TI\":\"Ticino\",\"UR\":\"Uri\",\"VS\":\"Valais\",\"VD\":\"Vaud\",\"ZG\":\"Zug\",\"ZH\":\"Z\u00fcrich\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"CZ\":[],\"DE\":[],\"DK\":[],\"EE\":[],\"ES\":{\"C\":\"A Coru\u00f1a\",\"VI\":\"Araba\\\/\u00c1lava\",\"AB\":\"Albacete\",\"A\":\"Alicante\",\"AL\":\"Almer\u00eda\",\"O\":\"Asturias\",\"AV\":\"\u00c1vila\",\"BA\":\"Badajoz\",\"PM\":\"Baleares\",\"B\":\"Barcelona\",\"BU\":\"Burgos\",\"CC\":\"C\u00e1ceres\",\"CA\":\"C\u00e1diz\",\"S\":\"Cantabria\",\"CS\":\"Castell\u00f3n\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"C\u00f3rdoba\",\"CU\":\"Cuenca\",\"GI\":\"Girona\",\"GR\":\"Granada\",\"GU\":\"Guadalajara\",\"SS\":\"Gipuzkoa\",\"H\":\"Huelva\",\"HU\":\"Huesca\",\"J\":\"Ja\u00e9n\",\"LO\":\"La Rioja\",\"GC\":\"Las Palmas\",\"LE\":\"Le\u00f3n\",\"L\":\"Lleida\",\"LU\":\"Lugo\",\"M\":\"Madrid\",\"MA\":\"M\u00e1laga\",\"ML\":\"Melilla\",\"MU\":\"Murcia\",\"NA\":\"Navarra\",\"OR\":\"Ourense\",\"P\":\"Palencia\",\"PO\":\"Pontevedra\",\"SA\":\"Salamanca\",\"TF\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SE\":\"Sevilla\",\"SO\":\"Soria\",\"T\":\"Tarragona\",\"TE\":\"Teruel\",\"TO\":\"Toledo\",\"V\":\"Valencia\",\"VA\":\"Valladolid\",\"BI\":\"Bizkaia\",\"ZA\":\"Zamora\",\"Z\":\"Zaragoza\"},\"FI\":[],\"FR\":[],\"GP\":[],\"GR\":{\"I\":\"\\u0391\\u03c4\\u03c4\\u03b9\\u03ba\\u03ae\",\"A\":\"\\u0391\\u03bd\\u03b1\\u03c4\\u03bf\\u03bb\\u03b9\\u03ba\\u03ae \\u039c\\u03b1\\u03ba\\u03b5\\u03b4\\u03bf\\u03bd\\u03af\\u03b1 \\u03ba\\u03b1\\u03b9 \\u0398\\u03c1\\u03ac\\u03ba\\u03b7\",\"B\":\"\\u039a\\u03b5\\u03bd\\u03c4\\u03c1\\u03b9\\u03ba\\u03ae \\u039c\\u03b1\\u03ba\\u03b5\\u03b4\\u03bf\\u03bd\\u03af\\u03b1\",\"C\":\"\\u0394\\u03c5\\u03c4\\u03b9\\u03ba\\u03ae \\u039c\\u03b1\\u03ba\\u03b5\\u03b4\\u03bf\\u03bd\\u03af\\u03b1\",\"D\":\"\\u0389\\u03c0\\u03b5\\u03b9\\u03c1\\u03bf\\u03c2\",\"E\":\"\\u0398\\u03b5\\u03c3\\u03c3\\u03b1\\u03bb\\u03af\\u03b1\",\"F\":\"\\u0399\\u03cc\\u03bd\\u03b9\\u03bf\\u03b9 \\u039d\\u03ae\\u03c3\\u03bf\\u03b9\",\"G\":\"\\u0394\\u03c5\\u03c4\\u03b9\\u03ba\\u03ae \\u0395\\u03bb\\u03bb\\u03ac\\u03b4\\u03b1\",\"H\":\"\\u03a3\\u03c4\\u03b5\\u03c1\\u03b5\\u03ac \\u0395\\u03bb\\u03bb\\u03ac\\u03b4\\u03b1\",\"J\":\"\\u03a0\\u03b5\\u03bb\\u03bf\\u03c0\\u03cc\\u03bd\\u03bd\\u03b7\\u03c3\\u03bf\\u03c2\",\"K\":\"\\u0392\\u03cc\\u03c1\\u03b5\\u03b9\\u03bf \\u0391\\u03b9\\u03b3\\u03b1\\u03af\\u03bf\",\"L\":\"\\u039d\\u03cc\\u03c4\\u03b9\\u03bf \\u0391\\u03b9\\u03b3\\u03b1\\u03af\\u03bf\",\"M\":\"\\u039a\\u03c1\\u03ae\\u03c4\\u03b7\"},\"GF\":[],\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"HU\":{\"BK\":\"B\\u00e1cs-Kiskun\",\"BE\":\"B\\u00e9k\\u00e9s\",\"BA\":\"Baranya\",\"BZ\":\"Borsod-Aba\\u00faj-Zempl\\u00e9n\",\"BU\":\"Budapest\",\"CS\":\"Csongr\\u00e1d\",\"FE\":\"Fej\\u00e9r\",\"GS\":\"Gy\\u0151r-Moson-Sopron\",\"HB\":\"Hajd\\u00fa-Bihar\",\"HE\":\"Heves\",\"JN\":\"J\\u00e1sz-Nagykun-Szolnok\",\"KE\":\"Kom\\u00e1rom-Esztergom\",\"NO\":\"N\\u00f3gr\\u00e1d\",\"PE\":\"Pest\",\"SO\":\"Somogy\",\"SZ\":\"Szabolcs-Szatm\\u00e1r-Bereg\",\"TO\":\"Tolna\",\"VA\":\"Vas\",\"VE\":\"Veszpr\\u00e9m\",\"ZA\":\"Zala\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"IE\":{\"CW\":\"Carlow\",\"CN\":\"Cavan\",\"CE\":\"Clare\",\"CO\":\"Cork\",\"DL\":\"Donegal\",\"D\":\"Dublin\",\"G\":\"Galway\",\"KY\":\"Kerry\",\"KE\":\"Kildare\",\"KK\":\"Kilkenny\",\"LS\":\"Laois\",\"LM\":\"Leitrim\",\"LK\":\"Limerick\",\"LD\":\"Longford\",\"LH\":\"Louth\",\"MO\":\"Mayo\",\"MH\":\"Meath\",\"MN\":\"Monaghan\",\"OY\":\"Offaly\",\"RN\":\"Roscommon\",\"SO\":\"Sligo\",\"TA\":\"Tipperary\",\"WD\":\"Waterford\",\"WH\":\"Westmeath\",\"WX\":\"Wexford\",\"WW\":\"Wicklow\"},\"IN\":{\"AP\":\"Andhra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TS\":\"Telangana\",\"TR\":\"Tripura\",\"UK\":\"Uttarakhand\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadra and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"IR\":{\"KHZ\":\"Khuzestan  (\\u062e\\u0648\\u0632\\u0633\\u062a\\u0627\\u0646)\",\"THR\":\"Tehran  (\\u062a\\u0647\\u0631\\u0627\\u0646)\",\"ILM\":\"Ilaam (\\u0627\\u06cc\\u0644\\u0627\\u0645)\",\"BHR\":\"Bushehr (\\u0628\\u0648\\u0634\\u0647\\u0631)\",\"ADL\":\"Ardabil (\\u0627\\u0631\\u062f\\u0628\\u06cc\\u0644)\",\"ESF\":\"Isfahan (\\u0627\\u0635\\u0641\\u0647\\u0627\\u0646)\",\"YZD\":\"Yazd (\\u06cc\\u0632\\u062f)\",\"KRH\":\"Kermanshah (\\u06a9\\u0631\\u0645\\u0627\\u0646\\u0634\\u0627\\u0647)\",\"KRN\":\"Kerman (\\u06a9\\u0631\\u0645\\u0627\\u0646)\",\"HDN\":\"Hamadan (\\u0647\\u0645\\u062f\\u0627\\u0646)\",\"GZN\":\"Ghazvin (\\u0642\\u0632\\u0648\\u06cc\\u0646)\",\"ZJN\":\"Zanjan (\\u0632\\u0646\\u062c\\u0627\\u0646)\",\"LRS\":\"Luristan (\\u0644\\u0631\\u0633\\u062a\\u0627\\u0646)\",\"ABZ\":\"Alborz (\\u0627\\u0644\\u0628\\u0631\\u0632)\",\"EAZ\":\"East Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u0634\\u0631\\u0642\\u06cc)\",\"WAZ\":\"West Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u063a\\u0631\\u0628\\u06cc)\",\"CHB\":\"Chaharmahal and Bakhtiari (\\u0686\\u0647\\u0627\\u0631\\u0645\\u062d\\u0627\\u0644 \\u0648 \\u0628\\u062e\\u062a\\u06cc\\u0627\\u0631\\u06cc)\",\"SKH\":\"South Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u062c\\u0646\\u0648\\u0628\\u06cc)\",\"RKH\":\"Razavi Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0631\\u0636\\u0648\\u06cc)\",\"NKH\":\"North Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0634\\u0645\\u0627\\u0644\\u06cc)\",\"SMN\":\"Semnan (\\u0633\\u0645\\u0646\\u0627\\u0646)\",\"FRS\":\"Fars (\\u0641\\u0627\\u0631\\u0633)\",\"QHM\":\"Qom (\\u0642\\u0645)\",\"KRD\":\"Kurdistan \\\/ \\u06a9\\u0631\\u062f\\u0633\\u062a\\u0627\\u0646)\",\"KBD\":\"Kohgiluyeh and BoyerAhmad (\\u06a9\\u0647\\u06af\\u06cc\\u0644\\u0648\\u06cc\\u06cc\\u0647 \\u0648 \\u0628\\u0648\\u06cc\\u0631\\u0627\\u062d\\u0645\\u062f)\",\"GLS\":\"Golestan (\\u06af\\u0644\\u0633\\u062a\\u0627\\u0646)\",\"GIL\":\"Gilan (\\u06af\\u06cc\\u0644\\u0627\\u0646)\",\"MZN\":\"Mazandaran (\\u0645\\u0627\\u0632\\u0646\\u062f\\u0631\\u0627\\u0646)\",\"MKZ\":\"Markazi (\\u0645\\u0631\\u06a9\\u0632\\u06cc)\",\"HRZ\":\"Hormozgan (\\u0647\\u0631\\u0645\\u0632\\u06af\\u0627\\u0646)\",\"SBN\":\"Sistan and Baluchestan (\\u0633\\u06cc\\u0633\\u062a\\u0627\\u0646 \\u0648 \\u0628\\u0644\\u0648\\u0686\\u0633\\u062a\\u0627\\u0646)\"},\"IS\":[],\"IT\":{\"AG\":\"Agrigento\",\"AL\":\"Alessandria\",\"AN\":\"Ancona\",\"AO\":\"Aosta\",\"AR\":\"Arezzo\",\"AP\":\"Ascoli Piceno\",\"AT\":\"Asti\",\"AV\":\"Avellino\",\"BA\":\"Bari\",\"BT\":\"Barletta-Andria-Trani\",\"BL\":\"Belluno\",\"BN\":\"Benevento\",\"BG\":\"Bergamo\",\"BI\":\"Biella\",\"BO\":\"Bologna\",\"BZ\":\"Bolzano\",\"BS\":\"Brescia\",\"BR\":\"Brindisi\",\"CA\":\"Cagliari\",\"CL\":\"Caltanissetta\",\"CB\":\"Campobasso\",\"CE\":\"Caserta\",\"CT\":\"Catania\",\"CZ\":\"Catanzaro\",\"CH\":\"Chieti\",\"CO\":\"Como\",\"CS\":\"Cosenza\",\"CR\":\"Cremona\",\"KR\":\"Crotone\",\"CN\":\"Cuneo\",\"EN\":\"Enna\",\"FM\":\"Fermo\",\"FE\":\"Ferrara\",\"FI\":\"Firenze\",\"FG\":\"Foggia\",\"FC\":\"Forl\\u00ec-Cesena\",\"FR\":\"Frosinone\",\"GE\":\"Genova\",\"GO\":\"Gorizia\",\"GR\":\"Grosseto\",\"IM\":\"Imperia\",\"IS\":\"Isernia\",\"SP\":\"La Spezia\",\"AQ\":\"L'Aquila\",\"LT\":\"Latina\",\"LE\":\"Lecce\",\"LC\":\"Lecco\",\"LI\":\"Livorno\",\"LO\":\"Lodi\",\"LU\":\"Lucca\",\"MC\":\"Macerata\",\"MN\":\"Mantova\",\"MS\":\"Massa-Carrara\",\"MT\":\"Matera\",\"ME\":\"Messina\",\"MI\":\"Milano\",\"MO\":\"Modena\",\"MB\":\"Monza e della Brianza\",\"NA\":\"Napoli\",\"NO\":\"Novara\",\"NU\":\"Nuoro\",\"OR\":\"Oristano\",\"PD\":\"Padova\",\"PA\":\"Palermo\",\"PR\":\"Parma\",\"PV\":\"Pavia\",\"PG\":\"Perugia\",\"PU\":\"Pesaro e Urbino\",\"PE\":\"Pescara\",\"PC\":\"Piacenza\",\"PI\":\"Pisa\",\"PT\":\"Pistoia\",\"PN\":\"Pordenone\",\"PZ\":\"Potenza\",\"PO\":\"Prato\",\"RG\":\"Ragusa\",\"RA\":\"Ravenna\",\"RC\":\"Reggio Calabria\",\"RE\":\"Reggio Emilia\",\"RI\":\"Rieti\",\"RN\":\"Rimini\",\"RM\":\"Roma\",\"RO\":\"Rovigo\",\"SA\":\"Salerno\",\"SS\":\"Sassari\",\"SV\":\"Savona\",\"SI\":\"Siena\",\"SR\":\"Siracusa\",\"SO\":\"Sondrio\",\"SU\":\"Sud Sardegna\",\"TA\":\"Taranto\",\"TE\":\"Teramo\",\"TR\":\"Terni\",\"TO\":\"Torino\",\"TP\":\"Trapani\",\"TN\":\"Trento\",\"TV\":\"Treviso\",\"TS\":\"Trieste\",\"UD\":\"Udine\",\"VA\":\"Varese\",\"VE\":\"Venezia\",\"VB\":\"Verbano-Cusio-Ossola\",\"VC\":\"Vercelli\",\"VR\":\"Verona\",\"VV\":\"Vibo Valentia\",\"VI\":\"Vicenza\",\"VT\":\"Viterbo\"},\"IL\":[],\"IM\":[],\"JP\":{\"JP01\":\"Hokkaido\",\"JP02\":\"Aomori\",\"JP03\":\"Iwate\",\"JP04\":\"Miyagi\",\"JP05\":\"Akita\",\"JP06\":\"Yamagata\",\"JP07\":\"Fukushima\",\"JP08\":\"Ibaraki\",\"JP09\":\"Tochigi\",\"JP10\":\"Gunma\",\"JP11\":\"Saitama\",\"JP12\":\"Chiba\",\"JP13\":\"Tokyo\",\"JP14\":\"Kanagawa\",\"JP15\":\"Niigata\",\"JP16\":\"Toyama\",\"JP17\":\"Ishikawa\",\"JP18\":\"Fukui\",\"JP19\":\"Yamanashi\",\"JP20\":\"Nagano\",\"JP21\":\"Gifu\",\"JP22\":\"Shizuoka\",\"JP23\":\"Aichi\",\"JP24\":\"Mie\",\"JP25\":\"Shiga\",\"JP26\":\"Kyoto\",\"JP27\":\"Osaka\",\"JP28\":\"Hyogo\",\"JP29\":\"Nara\",\"JP30\":\"Wakayama\",\"JP31\":\"Tottori\",\"JP32\":\"Shimane\",\"JP33\":\"Okayama\",\"JP34\":\"Hiroshima\",\"JP35\":\"Yamaguchi\",\"JP36\":\"Tokushima\",\"JP37\":\"Kagawa\",\"JP38\":\"Ehime\",\"JP39\":\"Kochi\",\"JP40\":\"Fukuoka\",\"JP41\":\"Saga\",\"JP42\":\"Nagasaki\",\"JP43\":\"Kumamoto\",\"JP44\":\"Oita\",\"JP45\":\"Miyazaki\",\"JP46\":\"Kagoshima\",\"JP47\":\"Okinawa\"},\"KR\":[],\"KW\":[],\"LB\":[],\"LR\":{\"BM\":\"Bomi\",\"BN\":\"Bong\",\"GA\":\"Gbarpolu\",\"GB\":\"Grand Bassa\",\"GC\":\"Grand Cape Mount\",\"GG\":\"Grand Gedeh\",\"GK\":\"Grand Kru\",\"LO\":\"Lofa\",\"MA\":\"Margibi\",\"MY\":\"Maryland\",\"MO\":\"Montserrado\",\"NM\":\"Nimba\",\"RV\":\"Rivercess\",\"RG\":\"River Gee\",\"SN\":\"Sinoe\"},\"LU\":[],\"MD\":{\"C\":\"Chi\u0219in\u0103u\",\"BL\":\"B\u0103l\u021bi\",\"AN\":\"Anenii Noi\",\"BS\":\"Basarabeasca\",\"BR\":\"Briceni\",\"CH\":\"Cahul\",\"CT\":\"Cantemir\",\"CL\":\"C\u0103l\u0103ra\u0219i\",\"CS\":\"C\u0103u\u0219eni\",\"CM\":\"Cimi\u0219lia\",\"CR\":\"Criuleni\",\"DN\":\"Dondu\u0219eni\",\"DR\":\"Drochia\",\"DB\":\"Dub\u0103sari\",\"ED\":\"Edine\u021b\",\"FL\":\"F\u0103le\u0219ti\",\"FR\":\"Flore\u0219ti\",\"GE\":\"UTA G\u0103g\u0103uzia\",\"GL\":\"Glodeni\",\"HN\":\"H\u00eence\u0219ti\",\"IL\":\"Ialoveni\",\"LV\":\"Leova\",\"NS\":\"Nisporeni\",\"OC\":\"Ocni\u021ba\",\"OR\":\"Orhei\",\"RZ\":\"Rezina\",\"RS\":\"R\u00ee\u0219cani\",\"SG\":\"S\u00eengerei\",\"SR\":\"Soroca\",\"ST\":\"Str\u0103\u0219eni\",\"SD\":\"\u0218old\u0103ne\u0219ti\",\"SV\":\"\u0218tefan Vod\u0103\",\"TR\":\"Taraclia\",\"TL\":\"Telene\u0219ti\",\"UN\":\"Ungheni\"},\"MQ\":[],\"MT\":[],\"MX\":{\"DF\":\"Ciudad de M\u00e9xico\",\"JA\":\"Jalisco\",\"NL\":\"Nuevo Le\u00f3n\",\"AG\":\"Aguascalientes\",\"BC\":\"Baja California\",\"BS\":\"Baja California Sur\",\"CM\":\"Campeche\",\"CS\":\"Chiapas\",\"CH\":\"Chihuahua\",\"CO\":\"Coahuila\",\"CL\":\"Colima\",\"DG\":\"Durango\",\"GT\":\"Guanajuato\",\"GR\":\"Guerrero\",\"HG\":\"Hidalgo\",\"MX\":\"Estado de M\u00e9xico\",\"MI\":\"Michoac\u00e1n\",\"MO\":\"Morelos\",\"NA\":\"Nayarit\",\"OA\":\"Oaxaca\",\"PU\":\"Puebla\",\"QT\":\"Quer\u00e9taro\",\"QR\":\"Quintana Roo\",\"SL\":\"San Luis Potos\u00ed\",\"SI\":\"Sinaloa\",\"SO\":\"Sonora\",\"TB\":\"Tabasco\",\"TM\":\"Tamaulipas\",\"TL\":\"Tlaxcala\",\"VE\":\"Veracruz\",\"YU\":\"Yucat\u00e1n\",\"ZA\":\"Zacatecas\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"LBN\":\"Labuan\",\"MLK\":\"Malacca (Melaka)\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PNG\":\"Penang (Pulau Pinang)\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"PJY\":\"Putrajaya\",\"KUL\":\"Kuala Lumpur\"},\"NG\":{\"AB\":\"Abia\",\"FC\":\"Abuja\",\"AD\":\"Adamawa\",\"AK\":\"Akwa Ibom\",\"AN\":\"Anambra\",\"BA\":\"Bauchi\",\"BY\":\"Bayelsa\",\"BE\":\"Benue\",\"BO\":\"Borno\",\"CR\":\"Cross River\",\"DE\":\"Delta\",\"EB\":\"Ebonyi\",\"ED\":\"Edo\",\"EK\":\"Ekiti\",\"EN\":\"Enugu\",\"GO\":\"Gombe\",\"IM\":\"Imo\",\"JI\":\"Jigawa\",\"KD\":\"Kaduna\",\"KN\":\"Kano\",\"KT\":\"Katsina\",\"KE\":\"Kebbi\",\"KO\":\"Kogi\",\"KW\":\"Kwara\",\"LA\":\"Lagos\",\"NA\":\"Nasarawa\",\"NI\":\"Niger\",\"OG\":\"Ogun\",\"ON\":\"Ondo\",\"OS\":\"Osun\",\"OY\":\"Oyo\",\"PL\":\"Plateau\",\"RI\":\"Rivers\",\"SO\":\"Sokoto\",\"TA\":\"Taraba\",\"YO\":\"Yobe\",\"ZA\":\"Zamfara\"},\"NL\":[],\"NO\":[],\"NP\":{\"BAG\":\"Bagmati\",\"BHE\":\"Bheri\",\"DHA\":\"Dhaulagiri\",\"GAN\":\"Gandaki\",\"JAN\":\"Janakpur\",\"KAR\":\"Karnali\",\"KOS\":\"Koshi\",\"LUM\":\"Lumbini\",\"MAH\":\"Mahakali\",\"MEC\":\"Mechi\",\"NAR\":\"Narayani\",\"RAP\":\"Rapti\",\"SAG\":\"Sagarmatha\",\"SET\":\"Seti\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"GI\":\"Gisborne\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"PE\":{\"CAL\":\"El Callao\",\"LMA\":\"Municipalidad Metropolitana de Lima\",\"AMA\":\"Amazonas\",\"ANC\":\"Ancash\",\"APU\":\"Apur\u00edmac\",\"ARE\":\"Arequipa\",\"AYA\":\"Ayacucho\",\"CAJ\":\"Cajamarca\",\"CUS\":\"Cusco\",\"HUV\":\"Huancavelica\",\"HUC\":\"Hu\u00e1nuco\",\"ICA\":\"Ica\",\"JUN\":\"Jun\u00edn\",\"LAL\":\"La Libertad\",\"LAM\":\"Lambayeque\",\"LIM\":\"Lima\",\"LOR\":\"Loreto\",\"MDD\":\"Madre de Dios\",\"MOQ\":\"Moquegua\",\"PAS\":\"Pasco\",\"PIU\":\"Piura\",\"PUN\":\"Puno\",\"SAM\":\"San Mart\u00edn\",\"TAC\":\"Tacna\",\"TUM\":\"Tumbes\",\"UCA\":\"Ucayali\"},\"PH\":{\"ABR\":\"Abra\",\"AGN\":\"Agusan del Norte\",\"AGS\":\"Agusan del Sur\",\"AKL\":\"Aklan\",\"ALB\":\"Albay\",\"ANT\":\"Antique\",\"APA\":\"Apayao\",\"AUR\":\"Aurora\",\"BAS\":\"Basilan\",\"BAN\":\"Bataan\",\"BTN\":\"Batanes\",\"BTG\":\"Batangas\",\"BEN\":\"Benguet\",\"BIL\":\"Biliran\",\"BOH\":\"Bohol\",\"BUK\":\"Bukidnon\",\"BUL\":\"Bulacan\",\"CAG\":\"Cagayan\",\"CAN\":\"Camarines Norte\",\"CAS\":\"Camarines Sur\",\"CAM\":\"Camiguin\",\"CAP\":\"Capiz\",\"CAT\":\"Catanduanes\",\"CAV\":\"Cavite\",\"CEB\":\"Cebu\",\"COM\":\"Compostela Valley\",\"NCO\":\"Cotabato\",\"DAV\":\"Davao del Norte\",\"DAS\":\"Davao del Sur\",\"DAC\":\"Davao Occidental\",\"DAO\":\"Davao Oriental\",\"DIN\":\"Dinagat Islands\",\"EAS\":\"Eastern Samar\",\"GUI\":\"Guimaras\",\"IFU\":\"Ifugao\",\"ILN\":\"Ilocos Norte\",\"ILS\":\"Ilocos Sur\",\"ILI\":\"Iloilo\",\"ISA\":\"Isabela\",\"KAL\":\"Kalinga\",\"LUN\":\"La Union\",\"LAG\":\"Laguna\",\"LAN\":\"Lanao del Norte\",\"LAS\":\"Lanao del Sur\",\"LEY\":\"Leyte\",\"MAG\":\"Maguindanao\",\"MAD\":\"Marinduque\",\"MAS\":\"Masbate\",\"MSC\":\"Misamis Occidental\",\"MSR\":\"Misamis Oriental\",\"MOU\":\"Mountain Province\",\"NEC\":\"Negros Occidental\",\"NER\":\"Negros Oriental\",\"NSA\":\"Northern Samar\",\"NUE\":\"Nueva Ecija\",\"NUV\":\"Nueva Vizcaya\",\"MDC\":\"Occidental Mindoro\",\"MDR\":\"Oriental Mindoro\",\"PLW\":\"Palawan\",\"PAM\":\"Pampanga\",\"PAN\":\"Pangasinan\",\"QUE\":\"Quezon\",\"QUI\":\"Quirino\",\"RIZ\":\"Rizal\",\"ROM\":\"Romblon\",\"WSA\":\"Samar\",\"SAR\":\"Sarangani\",\"SIQ\":\"Siquijor\",\"SOR\":\"Sorsogon\",\"SCO\":\"South Cotabato\",\"SLE\":\"Southern Leyte\",\"SUK\":\"Sultan Kudarat\",\"SLU\":\"Sulu\",\"SUN\":\"Surigao del Norte\",\"SUR\":\"Surigao del Sur\",\"TAR\":\"Tarlac\",\"TAW\":\"Tawi-Tawi\",\"ZMB\":\"Zambales\",\"ZAN\":\"Zamboanga del Norte\",\"ZAS\":\"Zamboanga del Sur\",\"ZSI\":\"Zamboanga Sibugay\",\"00\":\"Metro Manila\"},\"PK\":{\"JK\":\"Azad Kashmir\",\"BA\":\"Balochistan\",\"TA\":\"FATA\",\"GB\":\"Gilgit Baltistan\",\"IS\":\"Islamabad Capital Territory\",\"KP\":\"Khyber Pakhtunkhwa\",\"PB\":\"Punjab\",\"SD\":\"Sindh\"},\"PL\":[],\"PT\":[],\"PY\":{\"PY-ASU\":\"Asunci\u00f3n\",\"PY-1\":\"Concepci\u00f3n\",\"PY-2\":\"San Pedro\",\"PY-3\":\"Cordillera\",\"PY-4\":\"Guair\u00e1\",\"PY-5\":\"Caaguaz\u00fa\",\"PY-6\":\"Caazap\u00e1\",\"PY-7\":\"Itap\u00faa\",\"PY-8\":\"Misiones\",\"PY-9\":\"Paraguar\u00ed\",\"PY-10\":\"Alto Paran\u00e1\",\"PY-11\":\"Central\",\"PY-12\":\"\u00d1eembuc\u00fa\",\"PY-13\":\"Amambay\",\"PY-14\":\"Canindey\u00fa\",\"PY-15\":\"Presidente Hayes\",\"PY-16\":\"Alto Paraguay\",\"PY-17\":\"Boquer\u00f3n\"},\"RE\":[],\"RO\":{\"AB\":\"Alba\",\"AR\":\"Arad\",\"AG\":\"Arge\u0219\",\"BC\":\"Bac\u0103u\",\"BH\":\"Bihor\",\"BN\":\"Bistri\u021ba-N\u0103s\u0103ud\",\"BT\":\"Boto\u0219ani\",\"BR\":\"Br\u0103ila\",\"BV\":\"Bra\u0219ov\",\"B\":\"Bucure\u0219ti\",\"BZ\":\"Buz\u0103u\",\"CL\":\"C\u0103l\u0103ra\u0219i\",\"CS\":\"Cara\u0219-Severin\",\"CJ\":\"Cluj\",\"CT\":\"Constan\u021ba\",\"CV\":\"Covasna\",\"DB\":\"D\u00e2mbovi\u021ba\",\"DJ\":\"Dolj\",\"GL\":\"Gala\u021bi\",\"GR\":\"Giurgiu\",\"GJ\":\"Gorj\",\"HR\":\"Harghita\",\"HD\":\"Hunedoara\",\"IL\":\"Ialomi\u021ba\",\"IS\":\"Ia\u0219i\",\"IF\":\"Ilfov\",\"MM\":\"Maramure\u0219\",\"MH\":\"Mehedin\u021bi\",\"MS\":\"Mure\u0219\",\"NT\":\"Neam\u021b\",\"OT\":\"Olt\",\"PH\":\"Prahova\",\"SJ\":\"S\u0103laj\",\"SM\":\"Satu Mare\",\"SB\":\"Sibiu\",\"SV\":\"Suceava\",\"TR\":\"Teleorman\",\"TM\":\"Timi\u0219\",\"TL\":\"Tulcea\",\"VL\":\"V\u00e2lcea\",\"VS\":\"Vaslui\",\"VN\":\"Vrancea\"},\"RS\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"TH\":{\"TH-37\":\"Amnat Charoen\",\"TH-15\":\"Ang Thong\",\"TH-14\":\"Ayutthaya\",\"TH-10\":\"Bangkok\",\"TH-38\":\"Bueng Kan\",\"TH-31\":\"Buri Ram\",\"TH-24\":\"Chachoengsao\",\"TH-18\":\"Chai Nat\",\"TH-36\":\"Chaiyaphum\",\"TH-22\":\"Chanthaburi\",\"TH-50\":\"Chiang Mai\",\"TH-57\":\"Chiang Rai\",\"TH-20\":\"Chonburi\",\"TH-86\":\"Chumphon\",\"TH-46\":\"Kalasin\",\"TH-62\":\"Kamphaeng Phet\",\"TH-71\":\"Kanchanaburi\",\"TH-40\":\"Khon Kaen\",\"TH-81\":\"Krabi\",\"TH-52\":\"Lampang\",\"TH-51\":\"Lamphun\",\"TH-42\":\"Loei\",\"TH-16\":\"Lopburi\",\"TH-58\":\"Mae Hong Son\",\"TH-44\":\"Maha Sarakham\",\"TH-49\":\"Mukdahan\",\"TH-26\":\"Nakhon Nayok\",\"TH-73\":\"Nakhon Pathom\",\"TH-48\":\"Nakhon Phanom\",\"TH-30\":\"Nakhon Ratchasima\",\"TH-60\":\"Nakhon Sawan\",\"TH-80\":\"Nakhon Si Thammarat\",\"TH-55\":\"Nan\",\"TH-96\":\"Narathiwat\",\"TH-39\":\"Nong Bua Lam Phu\",\"TH-43\":\"Nong Khai\",\"TH-12\":\"Nonthaburi\",\"TH-13\":\"Pathum Thani\",\"TH-94\":\"Pattani\",\"TH-82\":\"Phang Nga\",\"TH-93\":\"Phatthalung\",\"TH-56\":\"Phayao\",\"TH-67\":\"Phetchabun\",\"TH-76\":\"Phetchaburi\",\"TH-66\":\"Phichit\",\"TH-65\":\"Phitsanulok\",\"TH-54\":\"Phrae\",\"TH-83\":\"Phuket\",\"TH-25\":\"Prachin Buri\",\"TH-77\":\"Prachuap Khiri Khan\",\"TH-85\":\"Ranong\",\"TH-70\":\"Ratchaburi\",\"TH-21\":\"Rayong\",\"TH-45\":\"Roi Et\",\"TH-27\":\"Sa Kaeo\",\"TH-47\":\"Sakon Nakhon\",\"TH-11\":\"Samut Prakan\",\"TH-74\":\"Samut Sakhon\",\"TH-75\":\"Samut Songkhram\",\"TH-19\":\"Saraburi\",\"TH-91\":\"Satun\",\"TH-17\":\"Sing Buri\",\"TH-33\":\"Sisaket\",\"TH-90\":\"Songkhla\",\"TH-64\":\"Sukhothai\",\"TH-72\":\"Suphan Buri\",\"TH-84\":\"Surat Thani\",\"TH-32\":\"Surin\",\"TH-63\":\"Tak\",\"TH-92\":\"Trang\",\"TH-23\":\"Trat\",\"TH-34\":\"Ubon Ratchathani\",\"TH-41\":\"Udon Thani\",\"TH-61\":\"Uthai Thani\",\"TH-53\":\"Uttaradit\",\"TH-95\":\"Yala\",\"TH-35\":\"Yasothon\"},\"TR\":{\"TR01\":\"Adana\",\"TR02\":\"Ad\u0131yaman\",\"TR03\":\"Afyon\",\"TR04\":\"A\u011fr\u0131\",\"TR05\":\"Amasya\",\"TR06\":\"Ankara\",\"TR07\":\"Antalya\",\"TR08\":\"Artvin\",\"TR09\":\"Ayd\u0131n\",\"TR10\":\"Bal\u0131kesir\",\"TR11\":\"Bilecik\",\"TR12\":\"Bing\u00f6l\",\"TR13\":\"Bitlis\",\"TR14\":\"Bolu\",\"TR15\":\"Burdur\",\"TR16\":\"Bursa\",\"TR17\":\"\u00c7anakkale\",\"TR18\":\"\u00c7ank\u0131r\u0131\",\"TR19\":\"\u00c7orum\",\"TR20\":\"Denizli\",\"TR21\":\"Diyarbak\u0131r\",\"TR22\":\"Edirne\",\"TR23\":\"Elaz\u0131\u011f\",\"TR24\":\"Erzincan\",\"TR25\":\"Erzurum\",\"TR26\":\"Eski\u015fehir\",\"TR27\":\"Gaziantep\",\"TR28\":\"Giresun\",\"TR29\":\"G\u00fcm\u00fc\u015fhane\",\"TR30\":\"Hakkari\",\"TR31\":\"Hatay\",\"TR32\":\"Isparta\",\"TR33\":\"\u0130\u00e7el\",\"TR34\":\"\u0130stanbul\",\"TR35\":\"\u0130zmir\",\"TR36\":\"Kars\",\"TR37\":\"Kastamonu\",\"TR38\":\"Kayseri\",\"TR39\":\"K\u0131rklareli\",\"TR40\":\"K\u0131r\u015fehir\",\"TR41\":\"Kocaeli\",\"TR42\":\"Konya\",\"TR43\":\"K\u00fctahya\",\"TR44\":\"Malatya\",\"TR45\":\"Manisa\",\"TR46\":\"Kahramanmara\u015f\",\"TR47\":\"Mardin\",\"TR48\":\"Mu\u011fla\",\"TR49\":\"Mu\u015f\",\"TR50\":\"Nev\u015fehir\",\"TR51\":\"Ni\u011fde\",\"TR52\":\"Ordu\",\"TR53\":\"Rize\",\"TR54\":\"Sakarya\",\"TR55\":\"Samsun\",\"TR56\":\"Siirt\",\"TR57\":\"Sinop\",\"TR58\":\"Sivas\",\"TR59\":\"Tekirda\u011f\",\"TR60\":\"Tokat\",\"TR61\":\"Trabzon\",\"TR62\":\"Tunceli\",\"TR63\":\"\u015eanl\u0131urfa\",\"TR64\":\"U\u015fak\",\"TR65\":\"Van\",\"TR66\":\"Yozgat\",\"TR67\":\"Zonguldak\",\"TR68\":\"Aksaray\",\"TR69\":\"Bayburt\",\"TR70\":\"Karaman\",\"TR71\":\"K\u0131r\u0131kkale\",\"TR72\":\"Batman\",\"TR73\":\"\u015e\u0131rnak\",\"TR74\":\"Bart\u0131n\",\"TR75\":\"Ardahan\",\"TR76\":\"I\u011fd\u0131r\",\"TR77\":\"Yalova\",\"TR78\":\"Karab\u00fck\",\"TR79\":\"Kilis\",\"TR80\":\"Osmaniye\",\"TR81\":\"D\u00fczce\"},\"TZ\":{\"TZ01\":\"Arusha\",\"TZ02\":\"Dar es Salaam\",\"TZ03\":\"Dodoma\",\"TZ04\":\"Iringa\",\"TZ05\":\"Kagera\",\"TZ06\":\"Pemba North\",\"TZ07\":\"Zanzibar North\",\"TZ08\":\"Kigoma\",\"TZ09\":\"Kilimanjaro\",\"TZ10\":\"Pemba South\",\"TZ11\":\"Zanzibar South\",\"TZ12\":\"Lindi\",\"TZ13\":\"Mara\",\"TZ14\":\"Mbeya\",\"TZ15\":\"Zanzibar West\",\"TZ16\":\"Morogoro\",\"TZ17\":\"Mtwara\",\"TZ18\":\"Mwanza\",\"TZ19\":\"Coast\",\"TZ20\":\"Rukwa\",\"TZ21\":\"Ruvuma\",\"TZ22\":\"Shinyanga\",\"TZ23\":\"Singida\",\"TZ24\":\"Tabora\",\"TZ25\":\"Tanga\",\"TZ26\":\"Manyara\",\"TZ27\":\"Geita\",\"TZ28\":\"Katavi\",\"TZ29\":\"Njombe\",\"TZ30\":\"Simiyu\"},\"LK\":[],\"SE\":[],\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\"},\"VN\":[],\"YT\":[],\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"}}",
        "i18n_select_state_text"   : "Select an option\u2026",
        "i18n_no_matches"          : "No matches found",
        "i18n_ajax_error"          : "Loading failed",
        "i18n_input_too_short_1"   : "Please enter 1 or more characters",
        "i18n_input_too_short_n"   : "Please enter %qty% or more characters",
        "i18n_input_too_long_1"    : "Please delete 1 character",
        "i18n_input_too_long_n"    : "Please delete %qty% characters",
        "i18n_selection_too_long_1": "You can only select 1 item",
        "i18n_selection_too_long_n": "You can only select %qty% items",
        "i18n_load_more"           : "Loading more results\u2026",
        "i18n_searching"           : "Searching\u2026"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="vendor/js/country-select.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_address_i18n_params = {
        "locale"            : "{\"AE\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"AF\":{\"state\":{\"required\":false}},\"AO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"AT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"AU\":{\"city\":{\"label\":\"Suburb\"},\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"State\"}},\"AX\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"BD\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"District\"}},\"BE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"label\":\"Province\"}},\"BH\":{\"postcode\":{\"required\":false},\"state\":{\"required\":false}},\"BI\":{\"state\":{\"required\":false}},\"BO\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"BS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"CA\":{\"postcode\":{\"label\":\"Postal code\"},\"state\":{\"label\":\"Province\"}},\"CH\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Canton\",\"required\":false}},\"CL\":{\"city\":{\"required\":true},\"postcode\":{\"required\":false},\"state\":{\"label\":\"Region\"}},\"CN\":{\"state\":{\"label\":\"Province\"}},\"CO\":{\"postcode\":{\"required\":false}},\"CZ\":{\"state\":{\"required\":false}},\"DE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"DK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"EE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"FI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"FR\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"GP\":{\"state\":{\"required\":false}},\"GF\":{\"state\":{\"required\":false}},\"GR\":{\"state\":{\"required\":false}},\"HK\":{\"postcode\":{\"required\":false},\"city\":{\"label\":\"Town \\\/ District\"},\"state\":{\"label\":\"Region\"}},\"HU\":{\"state\":{\"label\":\"County\"}},\"ID\":{\"state\":{\"label\":\"Province\"}},\"IE\":{\"postcode\":{\"required\":false,\"label\":\"Eircode\"},\"state\":{\"label\":\"County\"}},\"IS\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"IL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"IM\":{\"state\":{\"required\":false}},\"IT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":true,\"label\":\"Province\"}},\"JP\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Prefecture\",\"priority\":66},\"city\":{\"priority\":67},\"address_1\":{\"priority\":68},\"address_2\":{\"priority\":69}},\"KR\":{\"state\":{\"required\":false}},\"KW\":{\"state\":{\"required\":false}},\"LV\":{\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LB\":{\"state\":{\"required\":false}},\"MQ\":{\"state\":{\"required\":false}},\"MT\":{\"state\":{\"required\":false}},\"MZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"NL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"label\":\"Province\"}},\"NG\":{\"postcode\":{\"label\":\"Postcode\",\"required\":false,\"hidden\":true},\"state\":{\"label\":\"State\"}},\"NZ\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"required\":false,\"label\":\"Region\"}},\"NO\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"NP\":{\"state\":{\"label\":\"State \\\/ Zone\"},\"postcode\":{\"required\":false}},\"PL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"PT\":{\"state\":{\"required\":false}},\"RE\":{\"state\":{\"required\":false}},\"RO\":{\"state\":{\"label\":\"County\",\"required\":true}},\"RS\":{\"state\":{\"required\":false,\"hidden\":true}},\"SG\":{\"state\":{\"required\":false},\"city\":{\"required\":false}},\"SK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"SI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"SR\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"ES\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"LI\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LK\":{\"state\":{\"required\":false}},\"LU\":{\"state\":{\"required\":false}},\"MD\":{\"state\":{\"label\":\"Municipality \\\/ District\"}},\"SE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"TR\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"UG\":{\"postcode\":{\"required\":false,\"hidden\":true},\"city\":{\"label\":\"Town \\\/ Village\",\"required\":true},\"state\":{\"label\":\"District\",\"required\":true}},\"US\":{\"postcode\":{\"label\":\"ZIP\"},\"state\":{\"label\":\"State\"}},\"GB\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"County\",\"required\":false}},\"ST\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"District\"}},\"VN\":{\"state\":{\"required\":false},\"postcode\":{\"priority\":65,\"required\":false,\"hidden\":false},\"address_2\":{\"required\":false,\"hidden\":true}},\"WS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"YT\":{\"state\":{\"required\":false}},\"ZA\":{\"state\":{\"label\":\"Province\"}},\"ZW\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"default\":{\"first_name\":{\"label\":\"First name\",\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\",\"priority\":10},\"last_name\":{\"label\":\"Last name\",\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\",\"priority\":20},\"company\":{\"label\":\"Company name\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30,\"required\":false},\"country\":{\"type\":\"country\",\"label\":\"Country\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"Street address\",\"placeholder\":\"House number and street name\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\",\"priority\":50},\"address_2\":{\"placeholder\":\"Apartment, suite, unit etc. (optional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line2\",\"priority\":60,\"required\":false},\"city\":{\"label\":\"Town \\\/ City\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\",\"priority\":70},\"state\":{\"type\":\"state\",\"label\":\"State \\\/ County\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\",\"priority\":80},\"postcode\":{\"label\":\"Postcode \\\/ ZIP\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\",\"priority\":90}}}",
        "locale_fields"     : "{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}",
        "i18n_required_text": "required",
        "i18n_optional_text": "optional"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="vendor/js/address-i18n.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_checkout_params = {
        "ajax_url"                 : "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url"              : "\/?wc-ajax=%%endpoint%%",
        "update_order_review_nonce": "fef151c210",
        "apply_coupon_nonce"       : "981d8a3871",
        "remove_coupon_nonce"      : "d055d13664",
        "option_guest_checkout"    : "yes",
        "checkout_url"             : "\/?wc-ajax=checkout",
        "is_checkout"              : "1",
        "debug_mode"               : "",
        "i18n_checkout_error"      : "Error processing checkout. Please try again."
    };
    /* ]]> */
</script>
<script type="text/javascript" src="vendor/js/checkout.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url"       : "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url"    : "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key"  : "wc_cart_hash_240977cf05606738dd3fdb67e1b47233",
        "fragment_name"  : "wc_fragments_240977cf05606738dd3fdb67e1b47233",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="vendor/js/cart-fragments.min.js"></script>
<script type="text/javascript" src="vendor/js/theme-addons.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wgl_core = {
        "ajaxurl"            : "http:\/\/littledino.wgl-demo.net\/wp-admin\/admin-ajax.php",
        "slickSlider"        : "http:\/\/littledino.wgl-demo.net\/wp-content\/themes\/littledino\/js\/slick.min.js",
        "JarallaxPlugin"     : "http:\/\/littledino.wgl-demo.net\/wp-content\/themes\/littledino\/js\/jarallax-video.min.js",
        "JarallaxPluginVideo": "http:\/\/littledino.wgl-demo.net\/wp-content\/themes\/littledino\/js\/jarallax.min.js",
        "like"               : "Like",
        "unlike"             : "Unlike"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="vendor/js/theme.js"></script>
<script type="text/javascript" src="vendor/js/wp-embed.min.js"></script>
<script type="text/javascript" src="vendor/js/parallax.min.js"></script>
<script type="text/javascript" src="vendor/js/jquery.paroller.min.js"></script>
<script type="text/javascript" src="vendor/js/jquery.appear.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wgl_parallax_settings = [{
        "aab501c": {
            "structure"                                 : "40",
            "background_background"                     : "classic",
            "background_color"                          : "#2d4073",
            "background_text"                           : "Text",
            "padding"                                   : {
                "unit"    : "px",
                "top"     : "0",
                "right"   : "0",
                "bottom"  : "35",
                "left"    : "0",
                "isLinked": false
            },
            "add_background_animation"                  : "yes",
            "items_parallax"                            : [{
                "image_effect"                  : "scroll",
                "animation_name"                : "fadeIn",
                "animation_name_tablet"         : "",
                "animation_name_mobile"         : "",
                "animation_name_iteration_count": "1",
                "animation_name_speed"          : "1",
                "animation_name_direction"      : "normal",
                "image_bg"                      : {
                    "url": "http:\/\/littledino.wgl-demo.net\/wp-content\/uploads\/2019\/08\/cat.png",
                    "id" : 1180
                },
                "parallax_dir"                  : "vertical",
                "parallax_factor"               : 0.08000000000000000166533453693773481063544750213623046875,
                "position_top"                  : {"unit": "%", "size": 73, "sizes": []},
                "position_top_tablet"           : {"unit": "px", "size": "", "sizes": []},
                "position_top_mobile"           : {"unit": "px", "size": "", "sizes": []},
                "position_left"                 : {"unit": "%", "size": 5, "sizes": []},
                "position_left_tablet"          : {"unit": "px", "size": "", "sizes": []},
                "position_left_mobile"          : {"unit": "px", "size": "", "sizes": []},
                "image_index"                   : 3,
                "hide_on_mobile"                : "yes",
                "hide_mobile_resolution"        : 1200,
                "_id"                           : "8835eee"
            }, {
                "image_effect"                  : "scroll",
                "animation_name"                : "fadeIn",
                "animation_name_tablet"         : "",
                "animation_name_mobile"         : "",
                "animation_name_iteration_count": "1",
                "animation_name_speed"          : "1",
                "animation_name_direction"      : "normal",
                "image_bg"                      : {
                    "url": "http:\/\/littledino.wgl-demo.net\/wp-content\/uploads\/2019\/08\/cloud_footer.png",
                    "id" : 1355
                },
                "parallax_dir"                  : "horizontal",
                "parallax_factor"               : -0.08000000000000000166533453693773481063544750213623046875,
                "position_top"                  : {"unit": "px", "size": -205, "sizes": []},
                "position_top_tablet"           : {"unit": "px", "size": "", "sizes": []},
                "position_top_mobile"           : {"unit": "px", "size": "", "sizes": []},
                "position_left"                 : {"unit": "%", "size": 8, "sizes": []},
                "position_left_tablet"          : {"unit": "px", "size": "", "sizes": []},
                "position_left_mobile"          : {"unit": "px", "size": "", "sizes": []},
                "image_index"                   : 0,
                "hide_on_mobile"                : "",
                "hide_mobile_resolution"        : 1200,
                "_id"                           : "3c2c191"
            }, {
                "image_effect"                  : "scroll",
                "animation_name"                : "fadeIn",
                "animation_name_tablet"         : "",
                "animation_name_mobile"         : "",
                "animation_name_iteration_count": "1",
                "animation_name_speed"          : "1",
                "animation_name_direction"      : "normal",
                "image_bg"                      : {
                    "url": "http:\/\/littledino.wgl-demo.net\/wp-content\/uploads\/2019\/08\/stars.png",
                    "id" : 1181
                },
                "parallax_dir"                  : "vertical",
                "parallax_factor"               : 0.08000000000000000166533453693773481063544750213623046875,
                "position_top"                  : {"unit": "%", "size": 10, "sizes": []},
                "position_top_tablet"           : {"unit": "px", "size": "", "sizes": []},
                "position_top_mobile"           : {"unit": "px", "size": "", "sizes": []},
                "position_left"                 : {"unit": "%", "size": 87, "sizes": []},
                "position_left_tablet"          : {"unit": "px", "size": "", "sizes": []},
                "position_left_mobile"          : {"unit": "px", "size": "", "sizes": []},
                "image_index"                   : 0,
                "hide_on_mobile"                : "yes",
                "hide_mobile_resolution"        : 1200,
                "_id"                           : "f408fcf"
            }],
            "gap"                                       : "extended",
            "_title"                                    : "",
            "stretch_section"                           : "",
            "layout"                                    : "boxed",
            "content_width"                             : {"unit": "px", "size": "", "sizes": []},
            "height"                                    : "default",
            "custom_height"                             : {"unit": "px", "size": 400, "sizes": []},
            "custom_height_tablet"                      : {"unit": "px", "size": "", "sizes": []},
            "custom_height_mobile"                      : {"unit": "px", "size": "", "sizes": []},
            "height_inner"                              : "default",
            "custom_height_inner"                       : {"unit": "px", "size": 400, "sizes": []},
            "custom_height_inner_tablet"                : {"unit": "px", "size": "", "sizes": []},
            "custom_height_inner_mobile"                : {"unit": "px", "size": "", "sizes": []},
            "column_position"                           : "middle",
            "content_position"                          : "",
            "overflow"                                  : "",
            "html_tag"                                  : "",
            "background_color_stop"                     : {"unit": "%", "size": 0, "sizes": []},
            "background_color_b"                        : "#f2295b",
            "background_color_b_stop"                   : {"unit": "%", "size": 100, "sizes": []},
            "background_gradient_type"                  : "linear",
            "background_gradient_angle"                 : {"unit": "deg", "size": 180, "sizes": []},
            "background_gradient_position"              : "center center",
            "background_image"                          : {"url": "", "id": ""},
            "background_image_tablet"                   : {"url": "", "id": ""},
            "background_image_mobile"                   : {"url": "", "id": ""},
            "background_position"                       : "",
            "background_position_tablet"                : "",
            "background_position_mobile"                : "",
            "background_xpos"                           : {"unit": "px", "size": 0, "sizes": []},
            "background_xpos_tablet"                    : {"unit": "px", "size": 0, "sizes": []},
            "background_xpos_mobile"                    : {"unit": "px", "size": 0, "sizes": []},
            "background_ypos"                           : {"unit": "px", "size": 0, "sizes": []},
            "background_ypos_tablet"                    : {"unit": "px", "size": 0, "sizes": []},
            "background_ypos_mobile"                    : {"unit": "px", "size": 0, "sizes": []},
            "background_attachment"                     : "",
            "background_repeat"                         : "",
            "background_repeat_tablet"                  : "",
            "background_repeat_mobile"                  : "",
            "background_size"                           : "",
            "background_size_tablet"                    : "",
            "background_size_mobile"                    : "",
            "background_bg_width"                       : {"unit": "%", "size": 100, "sizes": []},
            "background_bg_width_tablet"                : {"unit": "px", "size": "", "sizes": []},
            "background_bg_width_mobile"                : {"unit": "px", "size": "", "sizes": []},
            "background_video_link"                     : "",
            "background_video_start"                    : "",
            "background_video_end"                      : "",
            "background_play_once"                      : "",
            "background_video_fallback"                 : {"url": "", "id": ""},
            "background_hover_background"               : "",
            "background_hover_color"                    : "",
            "background_hover_color_stop"               : {"unit": "%", "size": 0, "sizes": []},
            "background_hover_color_b"                  : "#f2295b",
            "background_hover_color_b_stop"             : {"unit": "%", "size": 100, "sizes": []},
            "background_hover_gradient_type"            : "linear",
            "background_hover_gradient_angle"           : {"unit": "deg", "size": 180, "sizes": []},
            "background_hover_gradient_position"        : "center center",
            "background_hover_image"                    : {"url": "", "id": ""},
            "background_hover_image_tablet"             : {"url": "", "id": ""},
            "background_hover_image_mobile"             : {"url": "", "id": ""},
            "background_hover_position"                 : "",
            "background_hover_position_tablet"          : "",
            "background_hover_position_mobile"          : "",
            "background_hover_xpos"                     : {"unit": "px", "size": 0, "sizes": []},
            "background_hover_xpos_tablet"              : {"unit": "px", "size": 0, "sizes": []},
            "background_hover_xpos_mobile"              : {"unit": "px", "size": 0, "sizes": []},
            "background_hover_ypos"                     : {"unit": "px", "size": 0, "sizes": []},
            "background_hover_ypos_tablet"              : {"unit": "px", "size": 0, "sizes": []},
            "background_hover_ypos_mobile"              : {"unit": "px", "size": 0, "sizes": []},
            "background_hover_attachment"               : "",
            "background_hover_repeat"                   : "",
            "background_hover_repeat_tablet"            : "",
            "background_hover_repeat_mobile"            : "",
            "background_hover_size"                     : "",
            "background_hover_size_tablet"              : "",
            "background_hover_size_mobile"              : "",
            "background_hover_bg_width"                 : {"unit": "%", "size": 100, "sizes": []},
            "background_hover_bg_width_tablet"          : {"unit": "px", "size": "", "sizes": []},
            "background_hover_bg_width_mobile"          : {"unit": "px", "size": "", "sizes": []},
            "background_hover_video_link"               : "",
            "background_hover_video_start"              : "",
            "background_hover_video_end"                : "",
            "background_hover_play_once"                : "",
            "background_hover_video_fallback"           : {"url": "", "id": ""},
            "background_hover_transition"               : {
                "unit" : "px",
                "size" : 0.299999999999999988897769753748434595763683319091796875,
                "sizes": []
            },
            "background_overlay_background"             : "",
            "background_overlay_color"                  : "",
            "background_overlay_color_stop"             : {"unit": "%", "size": 0, "sizes": []},
            "background_overlay_color_b"                : "#f2295b",
            "background_overlay_color_b_stop"           : {"unit": "%", "size": 100, "sizes": []},
            "background_overlay_gradient_type"          : "linear",
            "background_overlay_gradient_angle"         : {"unit": "deg", "size": 180, "sizes": []},
            "background_overlay_gradient_position"      : "center center",
            "background_overlay_image"                  : {"url": "", "id": ""},
            "background_overlay_image_tablet"           : {"url": "", "id": ""},
            "background_overlay_image_mobile"           : {"url": "", "id": ""},
            "background_overlay_position"               : "",
            "background_overlay_position_tablet"        : "",
            "background_overlay_position_mobile"        : "",
            "background_overlay_xpos"                   : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_xpos_tablet"            : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_xpos_mobile"            : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_ypos"                   : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_ypos_tablet"            : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_ypos_mobile"            : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_attachment"             : "",
            "background_overlay_repeat"                 : "",
            "background_overlay_repeat_tablet"          : "",
            "background_overlay_repeat_mobile"          : "",
            "background_overlay_size"                   : "",
            "background_overlay_size_tablet"            : "",
            "background_overlay_size_mobile"            : "",
            "background_overlay_bg_width"               : {"unit": "%", "size": 100, "sizes": []},
            "background_overlay_bg_width_tablet"        : {"unit": "px", "size": "", "sizes": []},
            "background_overlay_bg_width_mobile"        : {"unit": "px", "size": "", "sizes": []},
            "background_overlay_video_link"             : "",
            "background_overlay_video_start"            : "",
            "background_overlay_video_end"              : "",
            "background_overlay_play_once"              : "",
            "background_overlay_video_fallback"         : {"url": "", "id": ""},
            "background_overlay_opacity"                : {"unit": "px", "size": 0.5, "sizes": []},
            "css_filters_css_filter"                    : "",
            "css_filters_blur"                          : {"unit": "px", "size": 0, "sizes": []},
            "css_filters_brightness"                    : {"unit": "px", "size": 100, "sizes": []},
            "css_filters_contrast"                      : {"unit": "px", "size": 100, "sizes": []},
            "css_filters_saturate"                      : {"unit": "px", "size": 100, "sizes": []},
            "css_filters_hue"                           : {"unit": "px", "size": 0, "sizes": []},
            "overlay_blend_mode"                        : "",
            "background_overlay_hover_background"       : "",
            "background_overlay_hover_color"            : "",
            "background_overlay_hover_color_stop"       : {"unit": "%", "size": 0, "sizes": []},
            "background_overlay_hover_color_b"          : "#f2295b",
            "background_overlay_hover_color_b_stop"     : {"unit": "%", "size": 100, "sizes": []},
            "background_overlay_hover_gradient_type"    : "linear",
            "background_overlay_hover_gradient_angle"   : {"unit": "deg", "size": 180, "sizes": []},
            "background_overlay_hover_gradient_position": "center center",
            "background_overlay_hover_image"            : {"url": "", "id": ""},
            "background_overlay_hover_image_tablet"     : {"url": "", "id": ""},
            "background_overlay_hover_image_mobile"     : {"url": "", "id": ""},
            "background_overlay_hover_position"         : "",
            "background_overlay_hover_position_tablet"  : "",
            "background_overlay_hover_position_mobile"  : "",
            "background_overlay_hover_xpos"             : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_hover_xpos_tablet"      : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_hover_xpos_mobile"      : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_hover_ypos"             : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_hover_ypos_tablet"      : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_hover_ypos_mobile"      : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_hover_attachment"       : "",
            "background_overlay_hover_repeat"           : "",
            "background_overlay_hover_repeat_tablet"    : "",
            "background_overlay_hover_repeat_mobile"    : "",
            "background_overlay_hover_size"             : "",
            "background_overlay_hover_size_tablet"      : "",
            "background_overlay_hover_size_mobile"      : "",
            "background_overlay_hover_bg_width"         : {"unit": "%", "size": 100, "sizes": []},
            "background_overlay_hover_bg_width_tablet"  : {"unit": "px", "size": "", "sizes": []},
            "background_overlay_hover_bg_width_mobile"  : {"unit": "px", "size": "", "sizes": []},
            "background_overlay_hover_video_link"       : "",
            "background_overlay_hover_video_start"      : "",
            "background_overlay_hover_video_end"        : "",
            "background_overlay_hover_play_once"        : "",
            "background_overlay_hover_video_fallback"   : {"url": "", "id": ""},
            "background_overlay_hover_opacity"          : {"unit": "px", "size": 0.5, "sizes": []},
            "css_filters_hover_css_filter"              : "",
            "css_filters_hover_blur"                    : {"unit": "px", "size": 0, "sizes": []},
            "css_filters_hover_brightness"              : {"unit": "px", "size": 100, "sizes": []},
            "css_filters_hover_contrast"                : {"unit": "px", "size": 100, "sizes": []},
            "css_filters_hover_saturate"                : {"unit": "px", "size": 100, "sizes": []},
            "css_filters_hover_hue"                     : {"unit": "px", "size": 0, "sizes": []},
            "background_overlay_hover_transition"       : {
                "unit" : "px",
                "size" : 0.299999999999999988897769753748434595763683319091796875,
                "sizes": []
            },
            "border_border"                             : "",
            "border_width"                              : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_width_tablet"                       : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_width_mobile"                       : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_color"                              : "",
            "border_radius"                             : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_radius_tablet"                      : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_radius_mobile"                      : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "box_shadow_box_shadow_type"                : "",
            "box_shadow_box_shadow"                     : {
                "horizontal": 0,
                "vertical"  : 0,
                "blur"      : 10,
                "spread"    : 0,
                "color"     : "rgba(0,0,0,0.5)"
            },
            "box_shadow_box_shadow_position"            : " ",
            "border_hover_border"                       : "",
            "border_hover_width"                        : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_hover_width_tablet"                 : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_hover_width_mobile"                 : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_hover_color"                        : "",
            "border_radius_hover"                       : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_radius_hover_tablet"                : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "border_radius_hover_mobile"                : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "box_shadow_hover_box_shadow_type"          : "",
            "box_shadow_hover_box_shadow"               : {
                "horizontal": 0,
                "vertical"  : 0,
                "blur"      : 10,
                "spread"    : 0,
                "color"     : "rgba(0,0,0,0.5)"
            },
            "box_shadow_hover_box_shadow_position"      : " ",
            "border_hover_transition"                   : {
                "unit" : "px",
                "size" : 0.299999999999999988897769753748434595763683319091796875,
                "sizes": []
            },
            "shape_divider_top"                         : "",
            "shape_divider_top_color"                   : "",
            "shape_divider_top_width"                   : {"unit": "%", "size": "", "sizes": []},
            "shape_divider_top_width_tablet"            : {"unit": "%", "size": "", "sizes": []},
            "shape_divider_top_width_mobile"            : {"unit": "%", "size": "", "sizes": []},
            "shape_divider_top_height"                  : {"unit": "px", "size": "", "sizes": []},
            "shape_divider_top_height_tablet"           : {"unit": "px", "size": "", "sizes": []},
            "shape_divider_top_height_mobile"           : {"unit": "px", "size": "", "sizes": []},
            "shape_divider_top_flip"                    : "",
            "shape_divider_top_negative"                : "",
            "shape_divider_top_above_content"           : "",
            "shape_divider_bottom"                      : "",
            "shape_divider_bottom_color"                : "",
            "shape_divider_bottom_width"                : {"unit": "%", "size": "", "sizes": []},
            "shape_divider_bottom_width_tablet"         : {"unit": "%", "size": "", "sizes": []},
            "shape_divider_bottom_width_mobile"         : {"unit": "%", "size": "", "sizes": []},
            "shape_divider_bottom_height"               : {"unit": "px", "size": "", "sizes": []},
            "shape_divider_bottom_height_tablet"        : {"unit": "px", "size": "", "sizes": []},
            "shape_divider_bottom_height_mobile"        : {"unit": "px", "size": "", "sizes": []},
            "shape_divider_bottom_flip"                 : "",
            "shape_divider_bottom_negative"             : "",
            "shape_divider_bottom_above_content"        : "",
            "heading_color"                             : "",
            "color_text"                                : "",
            "color_link"                                : "",
            "color_link_hover"                          : "",
            "text_align"                                : "",
            "add_background_text"                       : "",
            "background_text_typo_typography"           : "",
            "background_text_typo_font_family"          : "",
            "background_text_typo_font_size"            : {"unit": "px", "size": "", "sizes": []},
            "background_text_typo_font_size_tablet"     : {"unit": "px", "size": "", "sizes": []},
            "background_text_typo_font_size_mobile"     : {"unit": "px", "size": "", "sizes": []},
            "background_text_typo_font_weight"          : "",
            "background_text_typo_text_transform"       : "",
            "background_text_typo_font_style"           : "",
            "background_text_typo_text_decoration"      : "",
            "background_text_typo_line_height"          : {"unit": "em", "size": "", "sizes": []},
            "background_text_typo_line_height_tablet"   : {"unit": "em", "size": "", "sizes": []},
            "background_text_typo_line_height_mobile"   : {"unit": "em", "size": "", "sizes": []},
            "background_text_typo_letter_spacing"       : {"unit": "px", "size": "", "sizes": []},
            "background_text_typo_letter_spacing_tablet": {"unit": "px", "size": "", "sizes": []},
            "background_text_typo_letter_spacing_mobile": {"unit": "px", "size": "", "sizes": []},
            "background_text_indent"                    : {
                "unit" : "vw",
                "size" : 8.9000000000000003552713678800500929355621337890625,
                "sizes": []
            },
            "background_text_indent_tablet"             : {"unit": "px", "size": "", "sizes": []},
            "background_text_indent_mobile"             : {"unit": "px", "size": "", "sizes": []},
            "background_text_color"                     : "#f1f1f1",
            "background_text_spacing"                   : {"unit": "px", "size": 0, "sizes": []},
            "background_text_spacing_tablet"            : {"unit": "px", "size": "", "sizes": []},
            "background_text_spacing_mobile"            : {"unit": "px", "size": "", "sizes": []},
            "apply_animation_background_text"           : "animation-background-text",
            "margin"                                    : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "margin_tablet"                             : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "margin_mobile"                             : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "padding_tablet"                            : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "padding_mobile"                            : {
                "unit"    : "px",
                "top"     : "",
                "right"   : "",
                "bottom"  : "",
                "left"    : "",
                "isLinked": true
            },
            "z_index"                                   : "",
            "_element_id"                               : "",
            "css_classes"                               : "",
            "animation"                                 : "",
            "animation_tablet"                          : "",
            "animation_mobile"                          : "",
            "animation_duration"                        : "",
            "animation_delay"                           : "",
            "reverse_order_tablet"                      : "",
            "reverse_order_mobile"                      : "",
            "hide_desktop"                              : "",
            "hide_tablet"                               : "",
            "hide_mobile"                               : ""
        }
    }];
    /* ]]> */
</script>
<script type="text/javascript" src="vendor/js/wgl_elementor_sections.js"></script>
<script type="text/javascript" src="vendor/js/frontend-modules.min.js"></script>
<script type="text/javascript" src="vendor/js/position.min.js"></script>
<script type="text/javascript" src="vendor/js/dialog.min.js"></script>
<script type="text/javascript" src="vendor/js/waypoints.min.js"></script>
<script type="text/javascript" src="vendor/js/swiper.min.js"></script>
<script type="text/javascript">
    var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false},
        "is_rtl"         : false,
        "breakpoints"    : {
            "xs" : 0,
            "sm" : 480,
            "md" : 768,
            "lg" : 1025,
            "xl" : 1440,
            "xxl": 1600
        },
        "version"        : "2.6.8",
        "urls"           : {"assets": "http:\/\/littledino.wgl-demo.net\/wp-content\/plugins\/elementor\/assets\/"},
        "settings"       : {
            "page"   : [],
            "general": {"elementor_global_image_lightbox": "yes", "elementor_enable_lightbox_in_editor": "yes"}
        },
        "post"           : {"id": 2827, "title": "Checkout", "excerpt": ""}
    };
</script>
<script type="text/javascript" src="{{ asset('vendor/js/frontend.min.js') }}"></script>
<span id="elementor-device-mode" class="elementor-screen-only"></span>
<script id="wgl_custom_footer_js"></script>

</body>
<grammarly-popups class="_1KJtL">
    <div></div>
</grammarly-popups>
<div class="_1KJtL">
    <div class="gr_-editor gr-iframe-first-load" style="display: none;">
        <div class="gr_-editor_back"></div>
        <iframe class="gr_-ifr gr-_dialog-content" src="vendor/js/saved_resource.html"></iframe>
    </div>
</div>
<grammarly-card class="_1KJtL" style="">
    <div></div>
</grammarly-card>
<span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span
            class="gr__triangle"></span></span>
<grammarly-mirror>
    <div style="border: 0px transparent; margin: 0px; padding: 10px 20px; font: 400 16px/24px Muli; direction: ltr; text-align: left; text-shadow: none; text-indent: 0px; letter-spacing: normal; word-break: normal; overflow-wrap: break-word; word-spacing: 0px; writing-mode: horizontal-tb; white-space: pre-wrap; vertical-align: baseline; clear: none; box-sizing: content-box; width: 411.562px; height: 98px; position: fixed; top: 0px; left: 0px; background: transparent; pointer-events: none; overflow: hidden; color: transparent; z-index: -2147483648; visibility: hidden;">
    </div>
</grammarly-mirror>
</html>