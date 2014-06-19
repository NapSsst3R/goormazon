$(document).ready(function(){
    $('.basket').hover(
        function(){
            $('.cart-products').show(200);
        },
        function(){
            $('.cart-products').hide(200);
        }
    );
    $('.remove-product').on('click', function(){
       href = $(this).attr('href');
       id = $(this).attr('data-id');
        $.get(href, {id:id, del:'Y'}, function(){
            $('.del_'+id).remove();
            if($('.cart-products > div.cart-product').size()==0){
                $('.cart-products').remove();
            }
            $('.basket_counter .product_count').text($('.cart-products > div.cart-product').size());
        })
        return false;
    });
});