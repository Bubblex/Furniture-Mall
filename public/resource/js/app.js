$(function() {
    $('.add-cart').on('click', function(e) {
        e.preventDefault();

        if (!is_login) {
            alert('请先登录')
        }

        var id = $(this).attr('data-id');
        var norm = $('.goods-norm li.active').attr('data-norm')
        var goods_num = $('.goods-num').val()

        if (!norm) {
            alert('请选择商品规格')
            return
        }
        else if (!goods_num) {
            alert('请输入购买数量')
            return
        }
        else if (!/[0-9]{1,4}/.test(goods_num)) {
            alert('购买数量必须为数字')
            return
        }

        $.ajax({
            url: '/goods/add/cart',
            type: 'post',
            data: {
                id: id,
                norm: norm,
                num: goods_num
            },
            success: function(data) {
                alert(data.message)
            }
        })
    })

    $('.goods-norm li').on('click', function() {
        $('.goods-norm li').not($(this)).removeClass('active')
        $(this).addClass('active')
    })
})
