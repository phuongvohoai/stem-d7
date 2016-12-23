<?php 
    $customize = (array)json_decode($data);
    if($customize):
?>
    .header-fixed #header.gv-fixonscroll.gv-fixed .tb-megamenu .nav-collapse ul.nav > li > a:hover,
    .footer a:hover,
    .copyright .copyright-inner a,
    .blog-single-post .post-meta > span a:hover,
    .post-block .post-meta a:hover,
    .view-home-blog .grid-inner .meta .entry-title a:hover,
    .view-home-blog .grid-inner .meta .entry-date,
    .view-home-blog-v2 .meta .entry-title a:hover,
    .gallery-teaser-display .post-block .post-content a:hover,
    .style-dark .post-block .post-title a:hover,
    .main-slideshow .caption .post-title a:hover,
    .list-highlight-post .view-list ul li .post-block .post-meta-wrap * a:hover,
    .text-theme,
    .list-1 li i,
     ul.icons-list li i,
    .service-button a,
    .icon-small:hover,
    .service-box:hover .icon-small,
    .icon-medium:hover,
    .service-box:hover .icon-medium,
    .icon-large:hover,
    .service-box:hover .icon-large,
    .icon-effect-1:hover, 
    .service-box:hover .icon-effect-1,
    .icon-effect-2,
    .icon-effect-3, .icon-effect-4, .icon-effect-5, .icon-effect-6,
    .nav-tabs > li > a:hover, .nav-tabs > li > a:focus,
    .nav-theme > li > a:hover, .nav-theme > li > a:focus, .nav-theme > li > a:active,
    .nav-theme > li > a.active,
    .nav-theme > li.active > a,
    .view-list-content .views-row .views-field-title a:hover,
    .view-portfolio .portfolio-v2.isotope-item a:hover,
    .view-gallery .item-x .xcolor i,
    .product-single-content .product-detail .product-price,
    .event-item-grid .grid-inner .event-bottom i,
     a:hover, a:focus,
    .text-primary,
    .btn-primary .badge,
    .btn-link:hover, .btn-link:focus,
    .pagination > li > a:hover, .pagination > li > a:focus,
    .pagination > li > span:hover,
    .pagination > li > span:focus,
    .panel-primary > .panel-heading .badge,
    .tb-megamenu .dropdown-menu a:hover,
    .tb-megamenu .nav-collapse ul.nav > li.open > a,
    .tb-megamenu .nav-collapse ul.nav > li > a:focus, .tb-megamenu .nav-collapse ul.nav > li > a:hover,
    .tb-megamenu .nav-collapse ul.nav > li.active > a,
    .tb-megamenu .nav-collapse ul.nav > li.dropdown.open .active > a,
    .tb-megamenu .nav-collapse ul.nav > li .dropdown-menu .tb-megamenu-subnav > li > a:hover, .tb-megamenu .nav-collapse ul.nav > li .dropdown-menu .tb-megamenu-subnav > li > a:focus, .tb-megamenu .nav-collapse ul.nav > li .dropdown-menu .tb-megamenu-subnav > li > a:active,
    .tb-megamenu > .nav-collapse > ul.nav > li > a:hover,
    #block-search-form .gavias-search-form .search-icon,
    .view-testimonial .testimonial-item.testimonial-v2 .views-field-field-testimonial-name
    {
      color: <?php echo $customize['theme_color'] ?>!important;
    }

    .pager .paginations a.active,
    .node-teaser-display .field-type-taxonomy-term-reference .field-items > .field-item,
    .team-item .team-content .team-social a:hover,
    .nav-tabs > li.active > a,
    .btn-outline,
    .btn-outline:hover,
    .gavias-slider .btn-slide.btn-slide-flat,
    .spinner-blue, .spinner-blue-only,
    .pagination > .active > a, .pagination > .active > a:hover, .pagination > .active > a:focus,
    .pagination > .active > span,
    .pagination > .active > span:hover,
    .pagination > .active > span:focus,
    .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus,
    .panel-primary, .panel-primary > .panel-heading,
    .panel-primary > .panel-heading + .panel-collapse > .panel-body,
    .panel-primary > .panel-footer + .panel-collapse > .panel-body,
    .btn-primary,
    .readmore a:hover,
    #block-search-form .gavias-search-form .search-icon
    {
      border-color: <?php echo $customize['theme_color'] ?>!important;
    }

    .view-home-blog-v2 .meta{
       border-top-color: <?php echo $customize['theme_color'] ?>!important;
   }

    .pager .paginations a.active,
    .post-author h3:after,
    .node-teaser-display .field-type-taxonomy-term-reference .field-items > .field-item:hover, .node-teaser-display .field-type-taxonomy-term-reference .field-items > .field-item:focus, .node-teaser-display .field-type-taxonomy-term-reference .field-items > .field-item:active,
    .team-item .team-content .team-social a:hover,
    .icon-effect-1:after,
    .icon-effect-2:after,
    .milestone-block .milestone-icon,
    .milestone-block .milestone-icon:after,
    .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus,
    .portfolio-filter .nav-tabs > li > a:hover, .portfolio-filter .nav-tabs > li > a:focus, .portfolio-filter .nav-tabs > li > a:active,
    .portfolio-filter .nav-tabs > li > a.active,
    .btn-system,
    .button-hover:hover,
    .btn-outline:hover,
    .owl-carousel .owl-buttons > div:hover,
    #comments h3:after,
    .block.block-v2 .block-title span:after,
    .sidebar .block .block-title:after,
    .show-case .item .highlight-icon i:after,
    .list-tags .view-list ul > li:hover,
    .poll .bar .foreground,
    .gavias-slider .btn-slide.btn-slide-flat,
    .event-item-list .list-inner .event-date:after,
    .calendar-calendar .month-view table.full .single-day td.today .inner:after,
    .page-event-month .inner .item .calendar.monthview,
    .page-event-month .inner .item .calendar.monthview .contents,
    .gavias-skins-panel .control-panel,
    .gavias-skins-panel .panel-skins-content .layout.active,
    .bg-primary,
    .btn-primary,
    .btn-primary.disabled, .btn-primary.disabled:hover, .btn-primary.disabled:focus, .btn-primary.disabled:active, .btn-primary.disabled.active, .btn-primary[disabled], .btn-primary[disabled]:hover, .btn-primary[disabled]:focus, .btn-primary[disabled]:active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary, fieldset[disabled] .btn-primary:hover, fieldset[disabled] .btn-primary:focus, fieldset[disabled] .btn-primary:active, fieldset[disabled] .btn-primary.active,
    .dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus,
    .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus,
    .pagination > .active > a, .pagination > .active > a:hover, .pagination > .active > a:focus,
    .pagination > .active > span,
    .pagination > .active > span:hover,
    .pagination > .active > span:focus,
    .label-primary,.progress-bar,
    .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus,
    .panel-primary > .panel-heading,
    .readmore a:hover,
    .tb-megamenu .nav-collapse ul.nav > li > a::after
    {
      background-color: <?php echo $customize['theme_color'] ?>!important;
    }

    body .gavias-main-page{
        color: <?php echo $customize['text_color'] ?>;
    }

    body .gavias-main-page a{
        color: <?php echo $customize['link_color'] ?>!important;
    }
    body .gavias-main-page a:hover{
        color: <?php echo $customize['link_hover_color']?>!important;
    }

    <?php //===================Menu=================== ?>
    .header-main{
        background: <?php echo $customize['header_bg'] ?>!important;
    }

    .area-main-menu .tb-megamenu .nav-collapse ul.nav > li > a{
        color: <?php echo $customize['menu_color_link'] ?>!important;
    }

    .area-main-menu .tb-megamenu .nav-collapse ul.nav > li > a:hover{
        color: <?php echo $customize['menu_color_link_hover'] ?>!important;
    }

    .area-main-menu .tb-megamenu .tb-megamenu-submenu{
        background: <?php echo $customize['submenu_background'] ?>!important;
        color: <?php echo $customize['submenu_color'] ?>!important;
    }

    .area-main-menu .tb-megamenu .tb-megamenu-submenu a{
        color: <?php echo $customize['submenu_color_link'] ?>!important;
    }

    .area-main-menu .tb-megamenu .tb-megamenu-submenu a:hover{
        color: <?php echo $customize['submenu_color_link_hover'] ?>!important;
    }

    <?php //===================Footer=================== ?>
    .footer{
        background: <?php echo $customize['footer_bg'] ?>!important;
        color: <?php echo $customize['footer_color'] ?> !important;
    }
    .footer ul.menu > li a::after, .footer a{
        color: <?php echo $customize['footer_color_link'] ?>!important;
    }
    .footer a:hover{
        color: <?php echo $customize['footer_color_link_hover'] ?> !important;
    }

    <?php //===================Copyright======================= ?>
    .copyright{
        background: <?php echo $customize['copyright_bg'] ?>!important;
        color: <?php echo $customize['copyright_color'] ?> !important;
    }
    .copyright a{
        color: <?php echo $customize['copyright_color_link'] ?>!important;
    }
    .copyright a:hover{
        color: <?php echo $customize['copyright_color_link_hover'] ?> !important;
    }

<?php endif ?>