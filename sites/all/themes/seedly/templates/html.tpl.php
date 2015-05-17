<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<!doctype html>
<!--[if lt IE 9]>
    <html class="lt-ie9 lt-ie10 no-js" lang="">
<![endif]-->
<!--[if lt IE 10]>
    <html class="lt-ie10 no-js" lang="">
<![endif]-->
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

   
    <head profile="<?php print $grddl_profile; ?>">
        <?php print $head; ?>
        <title><?php print $head_title; ?></title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="theme-color" content="#2CC8A5">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <?php print $styles; ?>
        <link rel="stylesheet" href="/sites/all/themes/seedly/styles/css/base.css">
        <script src="/sites/all/themes/seedly/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="<?php print $classes; ?>">
        <div id="skip-link">
            <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
        </div>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
        
        <?php include_once path_to_theme() . '/templates/components/includes/header.php'; ?>
        
        <?php // print $page_top; ?>
        <?php print $page; ?>
        <?php // print $page_bottom; ?>

        <?php print $scripts; ?>
        <?php include_once path_to_theme() . '/templates/components/includes/footer.php'; ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/sites/all/themes/seedly/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        
        <script src="/<?php print path_to_theme() ?>/js/vendor/imagesloaded.pkgd.min.js"></script>
        <script src="/<?php print path_to_theme() ?>/js/vendor/masonry.pkgd.min.js"></script>
        
        <script src="/<?php print path_to_theme() ?>/js/min/plugins.min.js"></script>
        <script src="/<?php print path_to_theme() ?>/js/min/main.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

