/*!
    * Start Bootstrap - Grayscale v6.0.2 (https://startbootstrap.com/themes/grayscale)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
    */
    (function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ===
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 70,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 100,
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
})(jQuery); // End of use strict




/* ======== LOGO Animation Text ======== */

/*


const logo = document.querySelectorAll("#logo path");

console.log(logo)
for (let i = 0; i < logo.length; i++){
    console.log("1")
    console.log('Letter ' + i +  ' is ' +  logo[i].getTotalLength());
}
*/




/* ======== Sroll Animation About-Section ======== */

window.addEventListener(
    "scroll",
    () => {
        document.body.style.setProperty(
            "--scroll",
            window.pageYOffset / (document.body.offsetHeight - window.innerHeight)

        );
    },
    false
);



// ========= About Animation =========


var svgContainer = document.getElementsByClassName("svg_container")[0];
var initSet = false;

var result = isElementInViewport(svgContainer);

if (!result && svgContainer.classList.contains("testo")){
    svgContainer.classList.remove("testo");
    console.log("Removed Init");
}


function isElementInViewport (el) {
    // Special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }


    var rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
    );
}





function onVisibilityChange(el, callback) {
    var old_visible;
    return function () {
        var visible = isElementInViewport(el);
        if (visible !== old_visible) {
            old_visible = visible;
            if (typeof callback == 'function') {
                callback();
            }
        }
    }
}


var handler = onVisibilityChange(svgContainer, function() {

    if(!svgContainer.classList.contains("testo")){
        svgContainer.classList.add("testo");
    } else if(svgContainer.classList.contains("testo")){
        svgContainer.classList.remove("testo");
    }

});


// jQuery
$(window).on('DOMContentLoaded load resize scroll', handler);



const constraints = {
    name: {
        presence: { allowEmpty: false }
    },
    email: {
        presence: { allowEmpty: false },
        email: true
    },
    message: {
        presence: { allowEmpty: false }
    }
};



// ========= Contact-Form Data Validation =========

const form = document.getElementsByClassName("contact-form")[0];

form.addEventListener('submit', function (event) {
    const formValues = {
        name: form.elements.name.value,
        email: form.elements.email.value,
        message: form.elements.message.value
    };

    const errors = validate(formValues, constraints);

    if (errors) {
        event.preventDefault();
        const errorMessage = Object
            .values(errors)
            .map(function (fieldValues) { return fieldValues.join(', ')})
            .join("\n");

        alert(errorMessage);
    }
}, false);


function messageSent() {
    var contactform = document.getElementsByClassName("contact-form")[0];
    contactform.style.display = "none";


}







