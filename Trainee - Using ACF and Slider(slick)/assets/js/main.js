jQuery(document).ready(function () {
    var clicked = false;
    var timer;

    jQuery('.slider').slick({
        prevArrow: "<button type=\"button\" class=\"slick-prev\"><i class=\"fa-solid fa-chevron-left\"></i></button>",
        nextArrow: "<button type=\"button\" class=\"slick-next\"><i class=\"fa-solid fa-chevron-right\"></i></button>",
        autoplay: true,
        draggable: false,
        responsive: [
            {
                breakpoint: 575.98,
                settings: {
                    arrows: false,
                    draggable: true,
                }
            },
        ]
    });

    // Для однакової висоти фото в слайдах
    // var maxSlideHeight = 0;
    // jQuery('.slick-slide > img').each(function (index, element) {
    //     var slideHeight = jQuery(this).height();
    //     if (maxSlideHeight === 0) {
    //         maxSlideHeight = slideHeight;
    //     } else if (maxSlideHeight > slideHeight) {
    //         maxSlideHeight = slideHeight;
    //     }
    // });
    // jQuery('.slick-slide  > img').height(maxSlideHeight);

    jQuery('.slider').append('<a href="#over" class="slick-scroll-down slick-arrow"><i class="fa-solid fa-chevron-down"></i></a>');
    jQuery('li[id^=menu-item-] a').click(function (e) {
        e.preventDefault();
        jQuery('li[id^=menu-item-] a').removeClass('active');
        jQuery(this).addClass('active');
        // Отримати id цільового елемента.
        var targetId = jQuery(this).attr('href');
        // Отримати елемент з відповідним id
        var targetElement = jQuery(targetId).get(0);
        // Якщо такий елемент існує
        if (targetElement) {
            var offset = targetElement.offsetTop - 100;
            window.scrollTo({
                top: offset,
                behavior: 'smooth'
            });
        }
        clicked = true;
    });

    startup_price_table();
    jQuery('div.price-table-mobile > div.table-left-side > div.full-stuk-container-mobile > button').click(function (e) { 
        clear_price_table();
        jQuery(this).addClass('active').attr('disabled', 'disabled');
        jQuery('#' + jQuery(this).val().replace(' ', '_')).show();
    });

    jQuery('a.slick-scroll-down').click(function (e) { 
        e.preventDefault();
        // Отримати id цільового елемента.
        var targetId = jQuery(this).attr('href');
        // Отримати елемент з відповідним id
        var targetElement = jQuery(targetId).get(0);
        if (targetElement) {
            var offset = targetElement.offsetTop - 100;
            window.scrollTo({
                top: offset,
                behavior: 'smooth'
            });
        }
        clicked = true;
    });

    jQuery('a.button-scroll-to-contact').click(function (e) { 
        e.preventDefault();
        // Отримати id цільового елемента.
        var targetId = jQuery(this).attr('href');
        // Отримати елемент з відповідним id
        var targetElement = jQuery(targetId).get(0);
        if (targetElement) {
            var offset = targetElement.offsetTop - 100;
            window.scrollTo({
                top: offset,
                behavior: 'smooth'
            });
        }
        clicked = true;
    });

    jQuery('nav.navbar > div > a.navbar-brand').click(function (e) { 
        e.preventDefault();
        // Отримати id цільового елемента.
        var targetId = jQuery(this).attr('href');
        // Отримати елемент з відповідним id
        var targetElement = jQuery(targetId).get(0);
        if (targetElement) {
            var offset = targetElement.offsetTop - 100;
            window.scrollTo({
                top: offset,
                behavior: 'smooth'
            });
        }
        clicked = true;
    });

    jQuery(window).scroll(function () {
        clearTimeout(timer);
        if (!clicked) {
            timer = setTimeout(function() {
                // Масив всіх елементів навігаційного меню
                let navLinks = jQuery('nav #navbarNav ul li a');
                // Отримати всі елементи header та section
                let sections = jQuery('header, section');
                
                sections.each(function (index, section) {
                    var top = section.offsetTop;
                    var height = section.offsetHeight;

                    if (window.scrollY >= (top * 0.8) && window.scrollY < top + height) {
                        if(jQuery(section).attr('id') === 'slogan') {
                            var sectionId = 'over';
                        } else {
                            var sectionId = jQuery(section).attr('id');
                        }
                        navLinks.each(function (index, link) {
                            if (link.getAttribute('href') === '#' + sectionId) {
                                link.classList.add('active');
                            } else {
                                link.classList.remove('active');
                            }
                        });
                    }
                });
            }, 50);
        } else {
            clicked = false;
        }
    });

    Fancybox.bind('[data-fancybox="gallery"]', {
        // Your custom options for a specific gallery
    });
    
    jQuery('.wpcf7-spinner').remove();
    jQuery('p > input.contact__submit').wrap("<div class=\"submit-container\"></div>");
});

function startup_price_table() {
    jQuery('div.price-table-mobile > div.table-right-side > div.price-container').each(function (index, element) {
        jQuery(this).hide();
    });
    jQuery('div.price-table-mobile > div.table-left-side > div.full-stuk-container-mobile > button.stuk-container-mobile').eq(0).addClass('active').attr('disabled', 'disabled');
    jQuery('#' + jQuery('div.price-table-mobile > div.table-left-side > div.full-stuk-container-mobile > button.stuk-container-mobile').eq(0).val().replace(' ', '_')).show();
}

function clear_price_table() {
    jQuery('div.price-table-mobile > div.table-right-side > div.price-container').each(function (index, element) {
        jQuery(this).hide();
    });
    jQuery('div.price-table-mobile > div.table-left-side > div.full-stuk-container-mobile > button').removeClass('active').removeAttr('disabled');
}