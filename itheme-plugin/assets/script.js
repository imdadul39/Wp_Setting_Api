jQuery(document).ready(function(){
    jQuery('.tab-menu li').click(function() {
        if(!jQuery(this).hasClass('active')) {
            jQuery('.tab-menu li').removeClass('active');
            jQuery(this).addClass('active');
            let tabID = jQuery(this).data('toggle');
            let show = jQuery('#' + tabID);
            jQuery('.tab-content').hide();
            jQuery(show).fadeIn();
        }
    });
});