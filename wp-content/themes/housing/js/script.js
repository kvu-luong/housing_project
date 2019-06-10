var e = jQuery("#back-to-top");
jQuery(window).scroll(function() {
    300 < jQuery(window).scrollTop() ? e.addClass("show") : e.removeClass("show")
}), e.on("click", function(e) {
    e.preventDefault(), jQuery("html, body").animate({
        scrollTop: 0
    }, "300")
}), jQuery(document).ready(function() {
    for (var e = document.getElementById("my-navbar-js").getElementsByClassName("nav-item"), s = 0; s < e.length; s++) e[s].addEventListener("click", function() {
        var e = document.getElementsByClassName("active");
        e[0].className = e[0].className.replace(" active", ""), this.className += " active"
    });
    jQuery(".carousel").slick({
        slidesToShow: 4,
        centerMode: !0,
        rows: 2,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 776,
            settings: {
                slidesToShow: 1,
                rows: 1
            }
        }]
    })

    jQuery(".relate-slider").slick({
        slidesToShow: 5,
        // centerMode: !0,
        autoplaySpeed: 1500,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 776,
            settings: {
                slidesToShow: 1,
            }
        }]
    })
    new WOW().init();

    $('.btn-close').click(function(e) {
        e.preventDefault();
        $('.get-price_over').css({ "display": "none" });
    });
    $('.get-price').click(function(e) {
        e.preventDefault();
        $('.get-price_over').css({ "display": "flex" });
    })
})