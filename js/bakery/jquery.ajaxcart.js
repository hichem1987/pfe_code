/**
 *
 * ------------------------------------------------------------------------------
 * @category     ONE
 * @package      ONE_Themes
 * ------------------------------------------------------------------------------
 * @copyright    Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license      GNU General Public License version 2 or later;
 * @author       nouthemes.com
 * @email        support.nouthemes.com
 * ------------------------------------------------------------------------------
 *
 */
$one(function($) { 
    themeResize();
    $(window).resize(function(){
        themeResize();
    });
    $('.one-maincart a').live('click', function(){
        var checkUrl = ($(this).attr('href').indexOf('checkout/cart/delete') > -1);
        if(checkUrl && $(this).attr('class') !='deletecart' && $(this).attr('class').indexOf('btn-remove2') == -1){
            deletecart($(this).attr('href'));
            return false;
        }
    });
    $('.success button.close').live('click', function() {
        $(this).parent().fadeOut('slow', function() {
            $(this).remove();
        });
    });

    $('.btn-cart').live('click', function () {
        var cart = $('.one-maincart');
        if($('.product-view').length>0){
            if($('#qty').val()>0 && $('.validation-failed').length==0){
                var currentImg = $('.product-view').find('p.product-image img');
            }
        }else{
            var currentImg = $(this).parents('.item').find('a.product-image img');
        }
        if (currentImg && $(cart).length>0 && $(this).hasClass('option-file') == false && $(this).hasClass('btn-cart-mobile') == false) {
            var imgclone = currentImg.clone()
                .offset({ top:currentImg.offset().top, left:currentImg.offset().left })
                .addClass('imgfly')
                .css({'opacity':'0.7', 'position':'absolute', 'height':'180px', 'width':'180px', 'z-index':'1000'})
                .appendTo($('body'))
                .animate({
                    'top':cart.offset().top + 10,
                    'left':cart.offset().left + 10,
                    'width':55,
                    'height':55
                }, 1000, 'easeInOutExpo');
            imgclone.animate({'width':0, 'height':0});
        }
        return false;
    });

    $('.options-cart').live('click', function() {
        $.colorbox({
            iframe: true,
            href:this.href,
            opacity:    0.5,
            speed:      300,
            current:    '{current} / {total}',
            close:      "close",
            innerWidth:'780px',
            innerHeight:'650px',
            onOpen: function(){
                $('#cboxLoadingGraphic').addClass('box-loading');
            },
            onComplete: function(){
                setTimeout(function(){
                    $('#cboxLoadingGraphic').removeClass('box-loading');
                },1300);
            }
        });
        
         $('body').find('img.imgfly').remove();
    });

    $('.show-options').live('click', function(e){
        if($('.btn-cart-mobile').length == 0){
            $('[data-id=options-cart-' + $(this).attr('data-id')+']').trigger('click');
        }else{
            return window.location.href=$(this).attr('data-submit');
        }
    });

    if($('.product-view').length>0 && $('.option-file').length == 0 && $('.btn-cart-mobile').length == 0){
        productAddToCartForm.submit = function(button, url) {
            if (this.validator.validate()) {
                var form = this.form;
                var oldUrl = form.action;
                if (url) {
                    form.action = url;
                }
                var e = null;
                if (!url) {
                    url = $('#product_addtocart_form').attr('action');
                }
                var checkWishlistUrl = (url.indexOf('wishlist/index/cart') > -1);

                url = url.replace("checkout/cart","ajaxcart/index");
                
                var data = $('#product_addtocart_form').serialize();
                data += '&isAjax=1';
                try {
                    if(checkWishlistUrl){
                        this.form.submit();
                    }else{
                        if($('#qty').val()==0){
                            if($('.error_qty').length==0){
                                $('<span/>').html('The quantity not zero!')
                                    .addClass('error_qty')
                                    .appendTo($('.add-to-cart'));
                            }
                        }else{
                            $('.error_qty').remove();
                            $("span.textrepuired").html('');
                            if(!$('.ajaxcart-index-options').length > 0){
                                showPPopup(datatext.load,true);
                            }
                            $.ajax( {
                                url : url,
                                dataType : 'json',
                                type : 'post',
                                data : data,
                                success : function(data) {
                                    parent.setAjaxData(data,true);
                                    $.colorbox.close();
                                    if (button && button != 'undefined') {
                                        button.disabled = false;
                                    }
                                }
                            });
                        }
                    }
                } catch (e) {
                }
                this.form.action = oldUrl;
                if (e) {
                    throw e;
                }

            }
            return false;
        }.bind(productAddToCartForm);
    }
});
function themeResize()
{
    width = $one(window).width();
    if(width <= 752){
        $one('body').find('.btn-cart').addClass('btn-cart-mobile');
        if($one('.product-quick-view').length>0){
            $one('body').find('.btn-cart').removeClass('btn-cart-mobile');
        }
    }else{
        $one('body').find('.btn-cart').removeClass('btn-cart-mobile');
    }
}


function setAjaxData(data,iframe){
    if(data.status=="ERROR"){
        showPPopup(data.message);
    }else{
        $one(".one-maincart").html("");
        if($one(".one-maincart")){
            $one(".one-maincart").append(data.output);
        }
        if($one('.header .links')){
            $one('.header .links').replaceWith(data.toplink);
        }
        if($one('.one-wrapper .header-cart')){
            $one('.long-box-shadow.edit-account').replaceWith(data.topcart);
          
        }

        $one.colorbox.close();
        showPPopup(data.message);
    }
}

function showPPopup(message){
    $one('body').append('<div class="message-alert wait-loading"></div>');
    $one('.message-alert').html(message).append('<button></button>');
    $one('.message-alert').animate({opacity:1}, 300);
    $one('button').click(function () {
        $one('.message-alert').animate({opacity:0}, 300);
    });
    $one('.message-alert').animate({opacity: 1},'300', function () {
        setTimeout(function () {
            $one('.message-alert').animate({opacity: 0},'300', function () {
                $one(this).animate({opacity:0},300, function(){ $one(this).detach(); })
            });
        }, 9000)
    });
}

function setLocation(url)
{
    var checkUrl = (url.indexOf('checkout/cart') > -1);
    var pass = true;
    if($one('body').find('.btn-cart-mobile').length > 0){
        pass = false;
    }
    if(checkUrl && pass){ 
        data = '&isAjax=1&qty=1';
        url = url.replace("checkout/cart","ajaxcart/index");
        showPPopup(datatext.load,true);
        try {
            $one.ajax( {
                url : url,
                dataType : 'json',
                data: data,
                type: 'post',
                success : function(data) {
                    setAjaxData(data);
                }
            });
        } catch (e) {
        }
        return false;
    }
    return window.location.href=url;
}
function deletecart(url){
    var checkUrl = (url.indexOf('checkout/cart') > -1);
    if(checkUrl){ 
        if (confirm("Are you sure you would like to remove this item from the shopping cart?")) {
            data = '&isAjax=1&qty=1';
            var url = url.replace("checkout/cart","ajaxcart/index");
            showPPopup(datatext.load,true);
            $one.ajax( {
                url : url,
                dataType : 'json',
                data: data,
                type: 'post',
                success : function(data) {
                    setAjaxData(data,false);
                }
            });
        } 
    }
    return false;
}