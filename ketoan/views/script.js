$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip({container: "body"});

    //hiệu ứngs effice cho màn hình lớn trên 750px
    if ($(window).width() > 750) {
        // Add slideDown animation to dropdown
        $('.dropdown').on('show.bs.dropdown', function (e) {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(100);
        });

        // Add slideUp animation to dropdown
        $('.dropdown').on('hide.bs.dropdown', function (e) {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(100);
        });
        $('li.dropdown').mouseenter(function () {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(100);
            $(this).find('a.dropdown-toggle').css('color', '#FFF');
        }).mouseleave(function () {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(100);
            $(this).find('a.dropdown-toggle').css('color', '#000');
        });

        //vô hiệu hóa click chuột vào menu có dropdown,
        // chỉ để howver chuột là hiện ra dropdown
        $('.navbar-nav a[data-toggle="dropdown"]').on('click', function () {
            return false;
        });
    }

    //subcribe email
    $('#btn_subcribe').on('click', function () {
        var email = $('#input_email_subcride').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (regex.test(email)) {
            var loading = new Spinner();
            loading.show(CI_language.please_wait);

            //ajax lưu email
            $.ajax({
                'url': CI_language.site_url+'/home/save_email_subcribe',
                'type': 'POST',
                'async': true,
                'data': {email_subcribe:email},
                dataType: "json",
                'success': function (data) {
                    if (data.success == 1) {
                        alertify.success(data.message);
                    }
                    else {
                        alertify.error(data.message);
                    }
                    loading.hide();
                },
                'error': function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    alertify.error(CI_language.error_unsave);
                    loading.hide();
                }
            });
        }else{
            alertify.error(CI_language.invalid_email);
        }
    });
});