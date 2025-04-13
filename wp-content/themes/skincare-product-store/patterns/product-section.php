<?php
/**
 * Category Section
 * 
 * slug: skincare-product-store/product-section
 * title: Product Section
 * categories: skincare-product-store
 */

$skincare_product_store_plugins_list = get_option( 'active_plugins' );
$skincare_product_store_plugin = 'woocommerce/woocommerce.php';
$skincare_product_store_results = in_array( $skincare_product_store_plugin , $skincare_product_store_plugins_list);
if ( $skincare_product_store_results )  {

    return array(
        'title'      =>__( 'Product Section', 'skincare-product-store' ),
        'categories' => array( 'skincare-product-store' ),
        'content'    => '<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"services-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group services-box"><!-- wp:group {"className":"service-group","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-group"><!-- wp:group {"className":"product-section-top"} -->
<div class="wp-block-group product-section-top"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontSize":"30px"}},"textColor":"tertiary","fontFamily":"rubik"} -->
<h2 class="wp-block-heading has-text-align-center has-tertiary-color has-text-color has-link-color has-rubik-font-family" style="font-size:30px">'. esc_html__('Best Seller Products','skincare-product-store').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"product-sec-short-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-center product-sec-short-heading has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:300">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text','skincare-product-store').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":2,"query":{"perPage":8,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"dynamic-product-section"} -->
<div class="wp-block-woocommerce-product-collection dynamic-product-section"><!-- wp:woocommerce/product-template {"className":"product-template-section"} -->
<!-- wp:group {"className":"stack-img-cart","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group stack-img-cart"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:columns {"className":"cart-wishlist-button"} -->
<div class="wp-block-columns cart-wishlist-button"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"product_cat","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secaccent","fontFamily":"rubik"} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"secaccent","fontSize":"medium","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}}} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);
} else {
    
    return array(
        'title'      =>__( 'Product Section', 'skincare-product-store' ),
        'categories' => array( 'skincare-product-store' ),
        'content'    => '<!-- wp:spacer {"height":"40px"} -->
    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:group {"className":"services-box","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group services-box"><!-- wp:group {"className":"service-group","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group service-group"><!-- wp:group {"className":"product-section-top"} -->
    <div class="wp-block-group product-section-top"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontSize":"30px"}},"textColor":"tertiary","fontFamily":"rubik"} -->
    <h2 class="wp-block-heading has-text-align-center has-tertiary-color has-text-color has-link-color has-rubik-font-family" style="font-size:30px">'. esc_html__('Best Seller Products','skincare-product-store') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","className":"product-sec-short-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
    <p class="has-text-align-center product-sec-short-heading has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:300">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text','skincare-product-store') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"className":"product-section-static","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns product-section-static" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","className":"static-product","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    <div class="wp-block-column is-vertically-aligned-center static-product"><!-- wp:image {"id":13,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product01.png" alt="" class="wp-image-13"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"tertiary"} -->
    <p class="has-text-align-left has-tertiary-color has-text-color has-link-color" style="font-style:normal;font-weight:300">'. esc_html__('Brand Name Here','skincare-product-store') .'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
    <h2 class="wp-block-heading has-text-align-left has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Product Name Here','skincare-product-store') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
    <p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('$159.00','skincare-product-store') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","className":"static-product","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    <div class="wp-block-column is-vertically-aligned-center static-product"><!-- wp:image {"id":13,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product02.png" alt="" class="wp-image-13"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"tertiary"} -->
    <p class="has-text-align-left has-tertiary-color has-text-color has-link-color" style="font-style:normal;font-weight:300">'. esc_html__('Brand Name Here','skincare-product-store') .'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
    <h2 class="wp-block-heading has-text-align-left has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Product Name Here','skincare-product-store') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
    <p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('$159.00','skincare-product-store') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","className":"static-product","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    <div class="wp-block-column is-vertically-aligned-center static-product"><!-- wp:image {"id":13,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product03.png" alt="" class="wp-image-13"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"tertiary"} -->
    <p class="has-text-align-left has-tertiary-color has-text-color has-link-color" style="font-style:normal;font-weight:300">'. esc_html__('Brand Name Here','skincare-product-store') .'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
    <h2 class="wp-block-heading has-text-align-left has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Product Name Here','skincare-product-store') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
    <p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('$159.00','skincare-product-store') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","className":"static-product","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    <div class="wp-block-column is-vertically-aligned-center static-product"><!-- wp:image {"id":13,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product04.png" alt="" class="wp-image-13"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"tertiary"} -->
    <p class="has-text-align-left has-tertiary-color has-text-color has-link-color" style="font-style:normal;font-weight:300">'. esc_html__('Brand Name Here','skincare-product-store') .'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
    <h2 class="wp-block-heading has-text-align-left has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Product Name Here','skincare-product-store') .'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"rubik"} -->
    <p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('$159.00','skincare-product-store') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->',
);
}