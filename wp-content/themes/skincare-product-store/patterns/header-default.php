<?php
/**
 * Header Default
 * 
 * slug: skincare-product-store/header-default
 * title: Header Default
 * categories: skincare-product-store
 */

return array(
    'title'      =>__( 'Header Default', 'skincare-product-store' ),
    'categories' => array( 'skincare-product-store' ),
    'content'    => '<!-- wp:group {"className":"header-box-upper","backgroundColor":"thirdaccent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group header-box-upper has-thirdaccent-background-color has-background"><!-- wp:group {"className":"header-box-middle","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group header-box-middle" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"1px","width":"1px"}}} -->
<div class="wp-block-column" style="border-width:1px;border-radius:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"className":"menu-group","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"backgroundColor":"background"} -->
<div class="wp-block-columns menu-group has-background-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"header-logo","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo has-primary-color has-text-color has-link-color" style="padding-top:0px;padding-right:var(--wp--preset--spacing--20);padding-bottom:0px;padding-left:var(--wp--preset--spacing--20);flex-basis:30%"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize","fontSize":"27px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"textColor":"primary","fontFamily":"rajdhani"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"header-inner-menu"} -->
<div class="wp-block-column is-vertically-aligned-center header-inner-menu" style="flex-basis:60%"><!-- wp:navigation -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/skincare-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"meta-column","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center meta-column" style="flex-basis:20%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","className":"wishlist-col"} -->
<div class="wp-block-column is-vertically-aligned-center wishlist-col"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textColor":"primary","className":"is-style-fill","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" href="#" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><img class="wp-image-156" style="width: 14px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/heart.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"admin-col"} -->
<div class="wp-block-column is-vertically-aligned-center admin-col"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","align":"center","fontSize":"medium","style":{"spacing":{"margin":{"left":"0.5em"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"cart-col"} -->
<div class="wp-block-column is-vertically-aligned-center cart-col"><!-- wp:woocommerce/mini-cart {"productCountVisibility":"never","fontSize":"medium"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%","className":"search-column","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"color":{"background":"#ffffff00"}},"textColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center search-column has-primary-color has-text-color has-background has-link-color" style="background-color:#ffffff00;flex-basis:10%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search....","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"align":"right","className":"header-search","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"accent","textColor":"white","fontSize":"medium"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);