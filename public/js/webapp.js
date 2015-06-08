function _showLoader() {
    //显示加载器.for jQuery Mobile 1.2.0  
    $.mobile.loading('show', {
        text: '加载中...', //加载器中显示的文字  
        textVisible: true, //是否显示文字  
        theme: 'a', //加载器主题样式a-e  
        textonly: false, //是否只显示文字  
        html: ""           //要显示的html内容，如图片等  
    });
}

//隐藏加载器.for jQuery Mobile 1.2.0  
function _hideLoader()
{
    //隐藏加载器  
    $.mobile.loading('hide');
}


(function($) {

    //ajax 全局参数设置
    $.ajaxSetup({
        beforeSend: function() {
            _showLoader()
        },
        complete: function() {
            _hideLoader()
        }
    });



    $(document).on("pagebeforecreate", function(event) {
        toggleMainMenu()
        slideShow()
    });

    $(document).on('pagecreate', function() {
        $('body').css('visibility', 'visible')
    })

    $(document).on('pageint', function() {

    })


    $(document).ready(function() {
        toggleAddressList();
        selectBank();
        addressForm();
        editFavorite();

        loadMoreData();

        showDetailorNot();
        productDetailTab()

        // Icheck
        //$('input').iCheck({
        //    checkboxClass: 'icheckbox'
        //});

        //结算页面
        $('.confirm-buy').on("tap", function() {
            $('.confirm-form').submit();
        })

        //地址选项
        $('.locations').each(function(i) {

            $(this).find('select.province').change(function() {
                var proviceid = $(this).val()
                $(this).closest('.locations').find('.city').html(_getCities(proviceid))
                $(this).closest('.locations').find('.district').html(_getDistricts(0))
            })
            $(this).find('select.city').change(function() {
                var cityid = $(this).val()
                $(this).closest('.locations').find('.district').html(_getDistricts(cityid))
            })

            $(this).find('select.city').on("focus", function() {
                if (parseInt($(this).val()) > 0)
                    return
                pid = parseInt($(this).closest('.locations').find('select.province').val())
                $(this).html(_getCities(pid))
            })

            $(this).find('select.district').on("focus", function() {
                if (parseInt($(this).val()) > 0)
                    return
                cid = parseInt($(this).closest('.locations').find('select.city').val())
                $(this).html(_getDistricts(cid))
            })

        })
    })

    $(window).resize(function() {
        closeLeftMenu()
    })




    function _getCities(pid) {

        html = '<option value="0">--请选择--</option>';
        for (i in window.addr_locations.cities) {
            city = window.addr_locations.cities[i]
            if (city.province_id == pid) {
                html += '<option value="' + city.id + '">' + city.name + '</option>';
            }
        }

        return html;
    }

    function _getDistricts(cid) {

        html = '<option value="0">--请选择--</option>';
        for (i in window.addr_locations.districts) {
            district = window.addr_locations.districts[i]
            if (district.city_id == cid) {
                html += '<option value="' + district.id + '">' + district.name + '</option>';
            }
        }

        return html;
    }


    function openLeftMenu() {
        $('#main-content-wrapper').animate({left: '60%'}, 400, function() {
            $('#menu-button').toggleClass('opened')
            $('#menu-bar-wrapper').css({'z-index': 0});
        })
    }

    function closeLeftMenu() {
        $('#menu-bar-wrapper').css({'z-index': -1});
        $('#main-content-wrapper').animate({left: 0}, 400, function() {
            $('#menu-button').toggleClass('opened')
        })
    }


    function slideShow() {
        var imgWidth = $(window).width() > 640 ? 640 : $(window).width();
        var imgNum = $('#slideshow img').length - 1;

        $('#slideshow img').width(imgWidth);
        var imgIndex = 0;

        $('#slideshow').on('swipeleft', function() {
            imgIndex = imgIndex++ >= imgNum ? imgNum : imgIndex++;
            $('#slideshow .images-list').stop().animate({left: -imgWidth * imgIndex}, 300, function() {
                $('#slideshow .images-pager li').removeClass('active').eq(imgIndex).addClass('active')
            })
        })
        $('#slideshow').on('swiperight', function() {
            imgIndex = imgIndex-- <= 0 ? 0 : imgIndex--;
            $('#slideshow .images-list').stop().animate({left: -imgWidth * imgIndex}, 300, function() {
                $('#slideshow .images-pager li').removeClass('active').eq(imgIndex).addClass('active')
            })
        })

    }

    function toggleMainMenu() {
        $('#main-content-wrapper').on("swipeleft", function() {
            closeLeftMenu()
        });

        $('#menu-button').on("tap", function() {
            if (!$(this).hasClass('opened')) {
                openLeftMenu()
            } else {
                closeLeftMenu()
            }
        })
    }

    function toggleAddressList() {

        $('.select-address').each(function() {
            if ($(this).prop('checked')) {
                $('.address-list .address.selected').removeClass('selected')
                $(this).closest('.address').addClass('selected')
            }
        })


        $('.address-info').on('click', function() {
            $('.address-list .address.selected').removeClass('selected')
            $(this).closest('.address').addClass('selected')
            $(this).closest('.address').find('.select-address').iCheck('check')
            $('.address-list').toggleClass('opened')
            if ($('.address-list').hasClass('opened')) {
                $('.address-list .address').slideDown(500);
            } else {
                $('.address-list .address').slideUp(500);
                $('.address-list .address.selected').stop().slideDown(500)
            }
        })
    }


    function selectBank() {

        $('.banks-list li').on('tap', function() {

            $('.banks-list li').removeClass('selected');
            $(this).addClass('selected');
            $('input.bank').val($(this).data('code'));
            $('.card-name').text($(this).text())

            $(".ui-dialog").dialog("close");

        })

    }

    function addressForm() {
        $('#add-address').on("tap", function() {
            var validate = _validateAddressForm($('.address-form'))
            if (validate !== true) {
                alert(validate);
                return;
            } else {
                $.ajax({
                    url: "/users/address",
                    data: $('.address-form').serialize(),
                    dataType: "json",
                    type: "post",
                    success: function(result) {
                        if (result.state) {
                            $(':input', '.address-form')
                                    .not(':button, :submit, :reset, :hidden')
                                    .val('')
                                    .removeAttr('checked')
                                    .removeAttr('selected');

                            $(".ui-dialog").dialog("close");
                        }
                    }
                })
            }

        })
    }

    function _validateAddressForm($form) {

        if ($form.find('.receiver-name').val() == '') {
            return '请输入收货人名称';
        }
        if ($form.find('.mobile').val() == '') {
            return '请输入手机号';
        } else if (!_validatePhone($form.find('.mobile').val())) {
            return '手机号格式不正确';
        }

        if (!($form.find('select.province').val() != 0 || $form.find('select.city').val() != 0 || $form.find('select.district').val() != 0)) {
            return '请选择所在地区';
        }
        if ($form.find('.zip').val() == '') {
            return '请输入邮编';
        } else if (!_validateZip($form.find('.zip').val())) {
            return '邮编格式不正确';
        }
        if ($form.find('.loc').val() == '') {
            return '请输入详细地址';
        }
        return true;
    }
    function _validatePhone(value) {
        var length = value.length;
        var mobile = /^(((1(3|4|5|7|8)[0-9]{1}))+\d{8})$/;
        if (length == 11 && mobile.test(value)) {
            return true;
        } else {
            return false;
        }
    }
    function _validateZip(value) {
        var length = value.length;
        var zip = /^[1-9]\d{5}$/
        if (length == 6 && zip.test(value)) {
            return true;
        } else {
            return false;
        }
    }


    function editFavorite() {
        window.editFav = false;

        $('#edit-favor').on('tap', function() {
            if (!window.editFav) {
                window.editFav = true;
                $(this).text('删除');
                $('#footer').show();
            } else {

                if ($('.fav-product.selected').length <= 0) {
                    alert('点击选择需要删除的收藏商品');
                    return;
                }

                var pids = new Array();

                $('.fav-product.selected').each(function() {
                    pids.push($(this).data('pid'));
                })

                $.ajax({
                    url: "/users/favorite/delete",
                    data: {productId: pids},
                    dataType: "json",
                    type: "post",
                    success: function(result) {
                        if (result.state) {
                            window.location.reload();
                        } else if (result.msg == 'require_login') {
                            window.location.href = "/users/login";
                        }
                    }
                })

            }
        })

        $('.favorite-products-list').delegate('.fav-product', 'tap', function() {
            if (!window.editFav)
                return
            $(this).toggleClass('selected');
            return false;
        })

        $('.select-all-fav').on('tap', function() {
            if (!window.editFav)
                return
            $('.fav-product').addClass('selected');
        })

    }


    function loadMoreData() {
        if (window.loadMore) {
            var stopLoad = false;
            var scrollBottom;
            $(window).scroll(function() {

                scrollBottom = $(document).scrollTop() + $(window).height() > $(document).height() - 100

                if (scrollBottom && !stopLoad) {
                    stopLoad = true;

                    $(window.dataWrapper).append('<div class="loading-more">正在加载数据...</div>');

                    $.ajax({
                        url: window.dataUrl,
                        data: {page: (window.page + 1)},
                        dataType: "json",
                        type: "get",
                        success: function(result) {
                            if (result.state) {
                                $('.loading-more').remove();
                                $(window.dataWrapper).append(result.data);
                                if (result.state == 1) {
                                    window.page++;
                                    stopLoad = false;
                                }
                            }
                        }
                    })
                }

            })

        }

    }


    function showDetailorNot() {
        $('#dialog-wrapper .confirm_yes').on('tap', function() {
            $('#dialog-wrapper').hide()
        })

        $('#dialog-wrapper .confirm_no').on('tap', function() {
            $('#dialog-wrapper').hide();

            $.ajax({
                url: '/product/' + $(this).data('id') + '/detail',
                dataType: 'text',
                success: function(result) {
                    $('#tab-1').html(result)
                }
            })
        })

        $('.loadDetail').on('tap', function() {
            $('#dialog-wrapper').show();
        })
    }

    function productDetailTab() {

        $('.product-detail-info .menu-tab li').on('tap', function() {
            $('.product-detail-info .menu-tab li').removeClass('active')
            $(this).addClass('active')
            $('.product-detail-info .tab').hide();
            $('.product-detail-info #tab-' + ($(this).index() + 1)).show();
        })

    }

})(jQuery)