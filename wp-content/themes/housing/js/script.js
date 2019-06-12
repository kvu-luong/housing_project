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
                slidesToShow: 2,
            }
        }, {
            breakpoint: 375,
            settings: {
                slidesToShow: 1,
            }
        }]
    })
    new WOW().init();

    jQuery('.get-price_over').click(function(e) {
        e.preventDefault();
        jQuery('.form-get-price').css({ "display": "none" });
    });
    jQuery('.get-price').click(function(e) {
        e.preventDefault();
        jQuery('.form-get-price').css({ "display": "block" });
    });
    //check validation
    jQuery('#search-post').on("click", function() {
        var search = jQuery('.search-field').val();
        var regex = /[<>'";`\s]/gi;
        if (search == '') {
            alert("Missing input information!");
            return false;
        } else if (regex.test(search)) {
            alert("Input should not contain special charater!");
            return false;
        }
    });
    jQuery('#baogia').on("click", function() {
        console.log("hello");
        var name = jQuery('.kh_name').val();
        var mail = jQuery('.kh_mail').val();
        var message = jQuery('.kh_message').val();
        var regex = /[<>'";`\s]/gi;
        if (name == '') {
            alert("Missing name input information!");
            return false;
        }
        if (regex.test(name)) {
            alert("Input should not contain special charater!");
            return false;
        }
        if (mail == '') {
            alert("Missing mail input information!");
            return false;
        }
        if (regex.test(mail)) {
            alert("Input should not contain special charater!");
            return false;
        }
        if (message == '') {
            alert("Missing message input information!");
            return false;
        }
        if (regex.test(message)) {
            alert("Input should not contain special charater!");
            return false;
        }
    });
})