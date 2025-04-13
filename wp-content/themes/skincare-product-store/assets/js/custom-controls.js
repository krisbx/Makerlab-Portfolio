(function(api) {

    api.sectionConstructor['skincare-product-store-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

})(wp.customize);