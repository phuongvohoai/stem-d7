<?php
/**
 * User CSS function. Separate from gavias_preprocess_html so function can be called directly before </head> tag.
 */
function gavias_user_css() {
  if (theme_get_setting('user_css') != '') {
    echo "<!-- User defined CSS -->";
    echo "<style type='text/css'>";
    echo theme_get_setting('user_css');
    echo "</style>";
    echo "<!-- End user defined CSS -->"; 
  }

  if(theme_get_setting('enable_skin_color') == '1' && theme_get_setting('skin_color') != ''){ 
  ?>
      <style type='text/css'>
        .tb-megamenu .nav-collapse ul.nav > li.active > a, >a:hover, >a:focus,
        .tb-megamenu .nav-collapse ul.nav > li.dropdown.open .active > a,
        .tb-megamenu .nav-collapse ul.nav > li > a:focus, .tb-megamenu .nav-collapse ul.nav > li > a:hover,
        .animating a, .tb-megamenu .nav-collapse ul.nav > li.open > a,
        .tb-megamenu .dropdown-menu a:hover,
        .header-fixed .tb-megamenu .nav-collapse ul.nav > li > a:hover,
        .header-fixed .tb-megamenu .nav-collapse ul.nav > li.active > a,
        .footer a:hover, .copyright .copyright-inner a,
        .blog-single-post .post-meta > span a:hover, .post-block .post-meta a:hover,
        .view-home-blog .grid-inner .meta .entry-title a:hover,
        .view-home-blog-v2 .meta .entry-title a:hover,
        .gallery-teaser-display .post-block .post-content a:hover,
        .style-dark .post-block .post-title a:hover,
        .main-slideshow .caption .post-title a:hover,
        .list-highlight-post .view-list ul li .post-block .post-meta-wrap * a:hover,
        .text-theme, .list-1 li i, ul.icons-list li i, .service-button a,
        .icon-small, .icon-small:hover, .service-box:hover .icon-small,
        .icon-medium:hover, .icon-large:hover, .service-box:hover .icon-large,
        .icon-effect-1:hover, .service-box:hover .icon-effect-1,
        .icon-effect-2, .icon-effect-3, .icon-effect-4, .icon-effect-5, .icon-effect-6 ,
        .nav-tabs > li > a:hover, .nav-tabs > li > a:focus,
        .block.style-higlight .more-link a:hover,
        .view-list-content .views-row .views-field-title a:hover,
        .view-portfolio .portfolio-v2.isotope-item a:hover,
        .view-gallery .item .xcolor i
        {
          color: #<?php echo theme_get_setting('skin_color'); ?>!important;
        }
        .block .block-title span::after,
        .tb-megamenu .nav-collapse ul.nav > li .dropdown-menu,
        .main-menu .region-main-menu, .pager .paginations a.active,
        .node-teaser-display .field-type-taxonomy-term-reference .field-items > .field-item ,
        .view-home-blog-v2 .meta, .team-item .team-content .team-social a:hover
        {
          border-color: #<?php echo theme_get_setting('skin_color'); ?>;
        }
        .footer .block .block-title span::after, .tb-megamenu .block .block-title span::after,
        .btn-primary,#comments h3::after, .post-author h3::after,
        .gavias-slider .btn-slide.btn-slide-flat,  .show-case .item .highlight-icon i::after,
        .pager .paginations a.active, .main-menu, .post-author h3:after,
        .node-teaser-display .field-type-taxonomy-term-reference .field-items > .field-item:hover, .node-teaser-display .field-type-taxonomy-term-reference .field-items > .field-item:focus, .node-teaser-display .field-type-taxonomy-term-reference .field-items > .field-item:active,
        .team-item .team-content .team-social a:hover,
        .icon-effect-1:after, .icon-effect-2:after, .milestone-block .milestone-icon:after,
        .portfolio-filter .nav-tabs > li > a:hover, .portfolio-filter .nav-tabs > li > a:focus, .portfolio-filter .nav-tabs > li > a:active,
        .portfolio-filter .nav-tabs > li > a.active,
        .btn-system, .button-hover:hover, .btn-ouline:hover,
        .owl-carousel .owl-buttons > div:hover, #comments h3:after,
        .sidebar .block .block-title:after,
        .show-case .item .highlight-icon i:after,
        .list-tags .view-list ul > li:hover, .poll .bar .foreground
        {
          background: #<?php echo theme_get_setting('skin_color'); ?>;
        }
      </style>
  <?php
  }
}