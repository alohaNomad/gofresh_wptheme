<?php
/**
 * gofresh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage gofresh
 * @since gofresh 1.0
 */

/**
 * Table of Contents:
 * //Theme Support
 * //Required Files
 * //Register Styles
 * //Register Scripts
 * //Register Menus
 * //Custom Logo
 * //WP Body Open
 * //Register Sidebars
 * //Enqueue Block Editor Assets
 * //Enqueue Classic Editor Styles
 * //Block Editor Settings
 */


 /* SETS UP THEME DEFAULTS AND REGISTER SUPPORT */
require_once get_template_directory() . '/inc/theme-support.php';

/* TEMPLATE TAGS */
require_once get_template_directory() . '/inc/template-tags.php';

/* HANDLE SVG ICONS */
require_once  get_template_directory() . '/classes/class-gofresh-svg-icons.php';
require_once get_template_directory() . '/inc/filter/svg-icons.php';

/* CUSTOMIZER ZEUG */
/* HANDLE CUSTOMIZER SETTINGS */
require_once get_template_directory() . '/classes/class-gofresh-customize.php';
/* OUTPUT CUSTOMIZER SETTINGS IN THE CLASSIC EDITOR */
require_once get_template_directory() . '/inc/filter/customizer-settings.php';
/* ENQUEUE SCRIPTS FOR CUSTOMIZER CONTROLS $ SETTINGS */
require_once get_template_directory() . '/inc/customizer-scripts.php';
/* ENQUEUE SCRIPTS FOR CUSTOMIZER PREVIEW */
require_once get_template_directory() . '/inc/customizer-preview-scripts.php';
/* RETURNS ARRAY FOR COSTUMIZER PREVIEW */
require_once get_template_directory() . '/inc/array-customizer-preview.php';
 
/* REQUIRE SEPARATOR CONTROLL CLASS */
require_once get_template_directory() . '/classes/class-gofresh-separator-control.php';
 
/* CUSTOM COMMENT WALKER */
require_once get_template_directory() . '/classes/class-gofresh-walker-comment.php';
 
/* CUSTOM PAGE WALKER */
require_once get_template_directory() . '/classes/class-gofresh-walker-page.php';
 
/* CUSTOM SCRIPT LOADER CLASS */
require_once get_template_directory() . '/classes/class-gofresh-script-loader.php';
 
/* NON-LATIN LANGUAGE HANDLING */
require_once get_template_directory() . '/classes/class-gofresh-non-latin-languages.php';
 
/* CUSTOM CSS */
require_once get_template_directory() . '/inc/custom-css.php';

/* REGISTER AND ENQUEUE STYLES */
require_once get_template_directory() . '/inc/register-styles.php';

/* REGISTER AND ENQUEUE SCRIPTS */
require_once get_template_directory() . '/inc/register-scripts.php';

/* REGISTER NAV MENUS */
require_once get_template_directory() . '/inc/register-nav-menus.php';

/* CUSTOM LOGO */
/* to be included */

/* FIX SKIP LINK FOKUS IE11 */
require_once get_template_directory() . '/inc/fix-skip-link-fokus-IE11.php';

/* ENQUEUE NON-LATIN LANGUAGE STYLES */
require_once get_template_directory() . '/inc/non-latin-styles.php';

/* WP-BODY-OPEN */
require_once get_template_directory() . '/inc/bodyopen.php';

/* SKIP CONTENT */
require_once get_template_directory() . '/inc/skip-content.php';

/* REGISTER WIDGET AREAS */
require_once get_template_directory() . '/inc/register-widgets.php';

/* ENQUEUE CLASSIC EDITOR STYLES */
require_once get_template_directory() . '/inc/classic-editor-styles.php';

/* OUTPUT NON-LATIN STYLES IN THE CLASSIC EDITOR */
require_once get_template_directory() . '/inc/filter/non-latin-styles-classic.php';

/* OVERWRITE DEFAULT MORE TAG */
require_once get_template_directory() . '/inc/filter/default-more-tag.php';

/* GET COLOR FOR AREA */
require_once get_template_directory() . '/inc/get-color-area.php';

/* ARRAY OF ELEMENTS */
require_once get_template_directory() . '/inc/elements-array.php';

/* BLOCK ZEUG */
/* BLOCK-EDITOR SETTINGS */
require_once get_template_directory() . '/inc/block-editor-settings.php';
/* ENQUEUE BLOCK EDITOR STYLES  */
require_once get_template_directory() . '/inc/block-editor-styles.php';
/* BLOCK PATTERNS */
require_once get_template_directory() . '/inc/block-patterns.php';
?>