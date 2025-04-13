<?php
/**
 * Banner Section
 * 
 * slug: skincare-product-store/banner
 * title: Banner
 * categories: skincare-product-store
 */

 $skincare_product_store_plugins_list = get_option( 'active_plugins' );
 $skincare_product_store_plugin = 'woocommerce/woocommerce.php';
 $skincare_product_store_results = in_array( $skincare_product_store_plugin , $skincare_product_store_plugins_list);
 if ( $skincare_product_store_results )  {

return array(
    'title'      =>__( 'Banner', 'skincare-product-store' ),
    'categories' => array( 'skincare-product-store' ),
    'content'    => '<!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"minHeight":700,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"80%"}} -->
<div class="wp-block-cover is-light banner-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:columns {"verticalAlignment":"center","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"%","layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"center","className":"banner-col01","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-columns are-vertically-aligned-center banner-col01" style="border-radius:0px;margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"extra-large","fontFamily":"rubik"} -->
<h2 class="wp-block-heading has-rubik-font-family has-extra-large-font-size" style="font-style:normal;font-weight:600">'. esc_html__('We Are Ready For Your Skin Care Help','skincare-product-store').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"short-para-text","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.5"}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="short-para-text has-rubik-font-family has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.5">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.','skincare-product-store').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium","fontFamily":"rubik"} -->
<div class="wp-block-buttons has-custom-font-size has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:400"><!-- wp:button {"backgroundColor":"secaccent","textColor":"white","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-secaccent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">'. esc_html__('Explore More','skincare-product-store').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70px","className":"social-icon-column","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center social-icon-column" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:70px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"accent","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0"}}},"textColor":"white","fontFamily":"rubik"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-rubik-font-family" style="padding-top:0;font-style:normal;font-weight:500">'. esc_html__('Follow Us','skincare-product-store').'</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#000000","iconBackgroundColor":"white","iconBackgroundColorValue":"#ffffff","openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"www.twiter.com","service":"x"} /-->

<!-- wp:social-link {"url":"www.instagam.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.dribble.com","service":"dribbble"} /-->

<!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"banner-col12","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"0","left":"0"}},"border":{"radius":"0px"}},"backgroundColor":"secaccent"} -->
<div class="wp-block-columns are-vertically-aligned-center banner-col12 has-secaccent-background-color has-background" style="border-radius:0px;margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:woocommerce/product-collection {"queryId":5,"query":{"perPage":1,"pages":0,"offset":1,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true},"tagName":"div","displayLayout":{"type":"list","columns":2,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"layout":{"type":"constrained","contentSize":"95%","justifyContent":"center"}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"className":"banner-product"} -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","className":"product-col01"} -->
<div class="wp-block-column is-vertically-aligned-center product-col01"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"270px","height":"160px","scale":"contain","className":"product-image"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-col02","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column product-col02" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","className":"product-price","textColor":"white","fontFamily":"rubik","fontSize":"upper-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"product-title","style":{"spacing":{"margin":{"top":"0","bottom":"0px","right":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"textColor":"white","fontSize":"upper-heading","fontFamily":"rubik","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:post-content {"className":"product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"0"}},"textColor":"white","fontSize":"small","fontFamily":"rubik"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:columns {"className":"banner-right-col01","style":{"spacing":{"blockGap":{"top":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns banner-right-col01" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"bottom","width":"","className":"image-column"} -->
<div class="wp-block-column is-vertically-aligned-bottom image-column"><!-- wp:image {"id":48,"aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner01.png" alt="" class="wp-image-48" style="aspect-ratio:2/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"banner-right-col02","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"width":"0px","style":"none","radius":"0px"}},"backgroundColor":"accent"} -->
<div class="wp-block-columns banner-right-col02 has-accent-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:columns {"className":"review-col01","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns review-col01"><!-- wp:column {"width":"50px"} -->
<div class="wp-block-column" style="flex-basis:50px"><!-- wp:image {"id":201,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"left"} -->
<figure class="wp-block-image alignleft size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/medal.png" alt="" class="wp-image-201" style="object-fit:contain;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-link-color">'. esc_html__('Quality Assurance','skincare-product-store').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"tiny","fontFamily":"rubik"} -->
<p class="has-background-color has-text-color has-link-color has-rubik-font-family has-tiny-font-size">'. esc_html__('Quality checked by our team','skincare-product-store').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:columns {"className":"review-col01","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns review-col01"><!-- wp:column {"width":"50px"} -->
<div class="wp-block-column" style="flex-basis:50px"><!-- wp:image {"id":208,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"left"} -->
<figure class="wp-block-image alignleft size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/truck.png" alt="" class="wp-image-208" style="object-fit:contain;width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-link-color">'. esc_html__('Free Shipping','skincare-product-store').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"tiny","fontFamily":"rubik"} -->
<p class="has-background-color has-text-color has-link-color has-rubik-font-family has-tiny-font-size">'. esc_html__('Deliver within 24 hours','skincare-product-store').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->',
);

} else {

    return array(
        'title'      =>__( 'Banner', 'skincare-product-store' ),
        'categories' => array( 'skincare-product-store' ),
        'content'    => '<!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"minHeight":700,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"80%"}} -->
    <div class="wp-block-cover is-light banner-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:columns {"verticalAlignment":"center","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"0px"}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"%","layout":{"type":"default"}} -->
    <div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"center","className":"banner-col01","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"0px"}}} -->
    <div class="wp-block-columns are-vertically-aligned-center banner-col01" style="border-radius:0px;margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"extra-large","fontFamily":"rubik"} -->
    <h2 class="wp-block-heading has-rubik-font-family has-extra-large-font-size" style="font-style:normal;font-weight:600">'. esc_html__('We Are Ready For Your Skin Care Help','skincare-product-store').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"short-para-text","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.5"}},"fontSize":"small","fontFamily":"rubik"} -->
    <p class="short-para-text has-rubik-font-family has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.5">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.','skincare-product-store').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium","fontFamily":"rubik"} -->
    <div class="wp-block-buttons has-custom-font-size has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:400"><!-- wp:button {"backgroundColor":"secaccent","textColor":"white","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-secaccent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">'. esc_html__('Explore More','skincare-product-store').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"70px","className":"social-icon-column","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-column is-vertically-aligned-center social-icon-column" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:70px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"accent","layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0"}}},"textColor":"white","fontFamily":"rubik"} -->
    <p class="has-text-align-center has-white-color has-text-color has-link-color has-rubik-font-family" style="padding-top:0;font-style:normal;font-weight:500">'. esc_html__('Follow Us','skincare-product-store').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#000000","iconBackgroundColor":"white","iconBackgroundColorValue":"#ffffff","openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"www.twiter.com","service":"x"} /-->
    
    <!-- wp:social-link {"url":"www.instagam.com","service":"instagram"} /-->
    
    <!-- wp:social-link {"url":"www.dribble.com","service":"dribbble"} /-->
    
    <!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"static-product-box","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"0","left":"0"}},"border":{"radius":"0px"}},"backgroundColor":"secaccent"} -->
    <div class="wp-block-columns are-vertically-aligned-center static-product-box has-secaccent-background-color has-background" style="border-radius:0px;margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","className":"product-col01"} -->
    <div class="wp-block-column is-vertically-aligned-center product-col01"><!-- wp:image {"id":70,"width":"261px","height":"178px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner02.png" alt="" class="wp-image-70" style="object-fit:contain;width:261px;height:178px"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"","className":"product-col02","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-column is-vertically-aligned-center product-col02" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"small","fontFamily":"rubik"} -->
    <p class="has-background-color has-text-color has-link-color has-rubik-font-family has-small-font-size" style="font-style:normal;font-weight:600">'. esc_html__('$239.00','skincare-product-store').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
    <h2 class="wp-block-heading has-background-color has-text-color has-link-color">'. esc_html__('Luxury Lounge Chair','skincare-product-store').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"className":"short-para-text","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"extra-small","fontFamily":"rubik"} -->
    <p class="short-para-text has-background-color has-text-color has-link-color has-rubik-font-family has-extra-small-font-size" style="font-style:normal;font-weight:300;line-height:1.3">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.','skincare-product-store').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:columns {"className":"banner-right-col01","style":{"spacing":{"blockGap":{"top":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns banner-right-col01" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"bottom","width":"","className":"image-column"} -->
    <div class="wp-block-column is-vertically-aligned-bottom image-column"><!-- wp:image {"id":48,"aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner01.png" alt="" class="wp-image-48" style="aspect-ratio:2/3;object-fit:cover"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"className":"banner-right-col02","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"width":"0px","style":"none","radius":"0px"}},"backgroundColor":"accent"} -->
    <div class="wp-block-columns banner-right-col02 has-accent-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"layout":{"type":"default"}} -->
    <div class="wp-block-column"><!-- wp:columns {"className":"review-col01","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns review-col01"><!-- wp:column {"width":"50px"} -->
    <div class="wp-block-column" style="flex-basis:50px"><!-- wp:image {"id":201,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"left"} -->
    <figure class="wp-block-image alignleft size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/medal.png" alt="" class="wp-image-201" style="object-fit:contain;width:40px;height:40px"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}}} -->
    <div class="wp-block-column" style="padding-right:0;padding-left:0"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
    <h2 class="wp-block-heading has-background-color has-text-color has-link-color">'. esc_html__('Quality Assurance','skincare-product-store').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"tiny","fontFamily":"rubik"} -->
    <p class="has-background-color has-text-color has-link-color has-rubik-font-family has-tiny-font-size">'. esc_html__('Quality checked by our team','skincare-product-store').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"layout":{"type":"default"}} -->
    <div class="wp-block-column"><!-- wp:columns {"className":"review-col01","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns review-col01"><!-- wp:column {"width":"50px"} -->
    <div class="wp-block-column" style="flex-basis:50px"><!-- wp:image {"id":208,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"left"} -->
    <figure class="wp-block-image alignleft size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/truck.png" alt="" class="wp-image-208" style="object-fit:contain;width:40px;height:40px"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}}} -->
    <div class="wp-block-column" style="padding-right:0;padding-left:0"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
    <h2 class="wp-block-heading has-background-color has-text-color has-link-color">'. esc_html__('Free Shipping','skincare-product-store').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"tiny","fontFamily":"rubik"} -->
    <p class="has-background-color has-text-color has-link-color has-rubik-font-family has-tiny-font-size">'. esc_html__('Deliver within 24 hours','skincare-product-store').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div></div>
    <!-- /wp:cover -->',
    );

}