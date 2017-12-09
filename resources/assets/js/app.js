
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function () {
    $(window).scroll(function () {
        var windowHeight = $(window).scrollTop();
        if (windowHeight >= 88) {
            $('.menu-fixed').stop().animate({top: 0}, 300)
        } else {
            $('.menu-fixed').stop().animate({top: -200}, 300)
        }
    });
    $(document).foundation();
    $(document).on("formvalid.zf.abide", function(ev,frm) {

        $.ajax({
            type: "POST",
            url: '/contact',
            dataType: 'json',
            data: $("#frmContact").serialize(),
            statusCode: {
                201: function () {
                    swal({
                            title: "Gracias por escribirnos!",
                            text: "Pronto nos pondremos en contacto con usted.",
                            confirmButtonText: "OK",
                            confirmButtonColor: "#336629",
                            animation: "slide-from-top"
                        },
                        function (isConfirm) {
                            if (isConfirm) {
                                location.reload();
                            }
                        });

                },
                501: function () {
                    swal('¡Lo sentimos!', 'Algo ha salido mal. Es nuestra culpa.');
                },
                500: function () {
                    swal('¡Lo sentimos!', 'Algo ha salido mal. Es nuestra culpa.');
                }
            }
        });
    }).on('submit', function (e) {
        e.preventDefault();
    });
   $(".slick-carousel").slick({
       prevArrow: $("#izq"),
       nextArrow: $("#der"),
       autoplay: true,
       autoplaySpeed: 5000,
       fade: true,
       speed: 500
   })
});
