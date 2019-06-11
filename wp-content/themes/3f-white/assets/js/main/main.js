document.addEventListener('DOMContentLoaded', () => {

    function raf(fn) {
        window.requestAnimationFrame(function () {
            window.requestAnimationFrame(function () {
                fn();
            })
        })
    }

    function scrollToAnchor(id) {
        let onPlace = $("[data-anchor='" + id + "']");
        $('body, html').animate({scrollTop: onPlace.offset().top - 100}, 2000);
    }

    class Popup {

        constructor(options) {
            this.body = document.querySelector('body');
            this.overlay = document.querySelector(options.overlay);
            this.windowContent = document.querySelector(options.windowContent);
            this.classes = {
                overlay: {
                    open: options.classes.overlay.open,
                    beforeActive: options.classes.overlay.beforeActive,
                    active: options.classes.overlay.active,
                    close: options.classes.overlay.close
                },
                window: {
                    open: options.classes.window.open,
                    beforeActive: options.classes.window.beforeActive,
                    active: options.classes.window.active,
                    close: options.classes.window.close
                },
                destroyScrollbar: options.classes.destroyScrollbar
            };
        }

        open(selector) {

            if (!this.body.classList.contains(this.classes.destroyScrollbar)) {
                this.body.classList.add(this.classes.destroyScrollbar);
            }

            this.overlay.classList.add(this.classes.overlay.open);
            this.overlay.classList.add(this.classes.overlay.beforeActive);

            selector.classList.add('popup-window__content--active');

            raf(() => {

                this.overlay.classList.add(this.classes.overlay.active);
                this.overlay.classList.remove(this.classes.overlay.beforeActive);

            });

            let handler = () => {

                this.overlay.classList.remove(this.classes.overlay.active);
                this.overlay.removeEventListener('transitionend', handler);

            };

            this.overlay.addEventListener('transitionend', handler);

        };

        close(selector) {

            this.overlay.classList.add(this.classes.overlay.close);

            selector.classList.remove('popup-window__content--active');

            if (this.body.classList.contains(this.classes.destroyScrollbar)) {
                this.body.classList.remove(this.classes.destroyScrollbar);
            }

            let handler = () => {

                this.overlay.classList.remove(this.classes.overlay.open);
                this.overlay.classList.remove(this.classes.overlay.close);
                this.overlay.removeEventListener('transitionend', handler);

            };

            this.overlay.addEventListener('transitionend', handler);

        };

    }

    let wrap_preload = $('.preloader'),
        progress = $('.preloader__progress'),
        images = document.images,
        images_total_count = images.length,
        images_loaded_count = 0;

    for (let i = 0; i < images_total_count; i++) {
        let image_clone = new Image();
        image_clone.onload = loadImgs;
        image_clone.onerror = loadImgs;
        image_clone.src = images[i].src;
    }

    function loadImgs() {
        images_loaded_count++;

        progress.css('transform', 'scaleX(' + ((1 / images_total_count) * images_loaded_count) + ')');

        window.onload = () => {

            if (images_loaded_count >= images_total_count) {

                wrap_preload.remove();

                let swiperAnimation = new SwiperAnimation();

                let params = {
                    direction: 'vertical',
                    slidesPerView: 1,
                    spaceBetween: 30,
                    speed: 700,
                    mousewheel: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        type: 'fraction',
                    },
                    effect: 'fade',
                    simulateTouch: false,
                };


                let breakpoint = 768;

                if ($(window).width() > breakpoint) {
                    params.on = {
                        init: function () {
                            swiperAnimation.init(this).animate();
                        },
                        slideChange: function () {
                            swiperAnimation.init(this).animate();
                        }
                    }
                }

                let swiper = new Swiper('.swiper-container', params);

                if ($(window).width() < breakpoint) {
                    swiper.destroy();
                }

                let state;

                $(window).on('resize', () => {
                    if ($(window).width() <= breakpoint && !state) {
                        $('[data-swiper-animation]').removeAttr('style');
                        swiper.destroy();
                        state = true;
                    } else if ($(window).width() > breakpoint && state) {
                        swiperAnimation = new SwiperAnimation();
                        params.on = {
                            init: function () {
                                swiperAnimation.init(this).animate();
                            },
                            slideChange: function () {
                                swiperAnimation.init(this).animate();
                            }
                        }
                        swiper = new Swiper('.swiper-container', params);
                        state = false;
                    }
                });

                var swiper2 = new Swiper('.front-content__slider', {
                    navigation: {
                        nextEl: '.feedback-slider__next',
                        prevEl: '.feedback-slider__prev',
                    },
                });

                let $layer_0 = $('.layer-0'),
                    $layer_1 = $('.layer-1'),
                    $layer_2 = $('.layer-2'),
                    $container = $('body'),
                    container_w = $container.width(),
                    container_h = $container.height();

                $(window).on('mousemove.parallax', (event) => {
                    if ($(window).width() >= 1200) {
                        let pos_x = event.pageX,
                            pos_y = event.pageY,
                            left = 0,
                            top = 0;

                        left = container_w / 4 - pos_x;
                        top = container_h / 4 - pos_y;

                        TweenMax.to(
                            $layer_1,
                            1, {
                                css: {
                                    transform: 'translateX(' + left / 120 + 'px) translateY(' + top / 120 + 'px)'
                                },
                                ease: Expo.easeOut,
                                overwrite: 'all'
                            });
                    } else {
                        return false;
                    }

                });

                var calculatorGadget = new function () {

                    var moneyTable = {
                        "30": {
                            "плохо": {
                                "0 мес.": 17062,
                                "1 мес.": 27507,
                                "6 мес.": 40739
                            },
                            "уверенно": {
                                "0 мес.": 21327,
                                "1 мес.": 34385,
                                "6 мес.": 50924
                            },
                            "свободно": {
                                "0 мес.": 25593,
                                "1 мес.": 41261,
                                "6 мес.": 61108
                            }
                        },
                        "40": {
                            "плохо": {
                                "0 мес.": 22749,
                                "1 мес.": 36676,
                                "6 мес.": 54318
                            },
                            "уверенно": {
                                "0 мес.": 28436,
                                "1 мес.": 45845,
                                "6 мес.": 67897
                            },
                            "свободно": {
                                "0 мес.": 34122,
                                "1 мес.": 55014,
                                "6 мес.": 81477
                            }
                        },
                        "50": {
                            "плохо": {
                                "0 мес.": 28436,
                                "1 мес.": 47645,
                                "6 мес.": 67897
                            },
                            "уверенно": {
                                "0 мес.": 35545,
                                "1 мес.": 57307,
                                "6 мес.": 84872
                            },
                            "свободно": {
                                "0 мес.": 42653,
                                "1 мес.": 68768,
                                "6 мес.": 101846
                            }
                        }
                    }

                    var self = this;
                    var currencySymbol = "";

                    this.toNum = function (number) {

                        number = parseInt(number, 10);
                        if (isNaN(number)) number = 0;

                        return number;

                    }

                    this.changePrice = function () {

                        var data = {}

                        $("input[type=\"radio\"]:checked").each(function () {
                            if ($(this).attr("name")) {
                                data[$(this).attr("name")] = $(this).val();
                            }
                        });

                        var price = moneyTable[data["hours"]][data["eng"]][data["months"]];
                        price = parseInt(price);
                        if (isNaN(price) || price < 0) price = 0;

                        if (price > 0) {

                            var formattedPrice = price.toString().replace(/(\d)(?=(\d{3})+$)/g, '$1' + ' ');

                            $(".calculate-block__value").html(formattedPrice + " " + currencySymbol);

                        } else {
                            $(".calculate-block__value").html("");
                        }

                    }

                    $(document).ready(function () {
                        self.changePrice();
                        $("input[type=\"radio\"]").on("change", self.changePrice);
                    });

                }

                let popupBtns = document.querySelectorAll("[data-popup-btn]"),
                    popupBlocks = document.querySelectorAll("[data-popup-content]"),
                    btnsClose = document.querySelectorAll('.popup-overlay__close'),

                    popup = new Popup({
                        overlay: '.popup-overlay',
                        window: '.popup-window',
                        windowContent: '.popup-window__content',
                        classes: {
                            overlay: {
                                open: 'popup-overlay--open',
                                beforeActive: 'popup-overlay--beforeActive',
                                active: 'popup-overlay--active',
                                close: 'popup-overlay--hide'
                            },
                            window: {
                                open: 'popup-window--open',
                                beforeActive: 'popup-window--beforeActive',
                                active: 'popup-window--active',
                                close: 'popup-window--hide'
                            },
                            destroyScrollbar: "destroyed-scrollbar",
                        }
                    });


                // FOR OPTIMIZATION

                if (popupBlocks) {
                    for (let i = 0; i < popupBtns.length; i++) {
                        popupBtns[i].addEventListener('click', function (e) {
                            e.preventDefault();
                            popupBtns.forEach(item => {
                                return item.classList.add('disabled-link')
                            });
                            let data_attr = this.getAttribute('data-popup-btn');
                            // console.log(data_attr);
                            for (let i = 0; i < popupBlocks.length; i++) {
                                if (data_attr === popupBlocks[i].getAttribute('data-popup-content')) {
                                    popup.open(popupBlocks[i]);
                                }
                            }
                        })
                    }
                }


                if (btnsClose) {

                    for (let i = 0; i < btnsClose.length; i++) {
                        btnsClose[i].addEventListener('click', function () {
                            popupBtns.forEach(item => {
                                return item.classList.contains('disabled-link') ? item.classList.remove('disabled-link') : false
                            });
                            for (let i = 0; i < popupBlocks.length; i++) {
                                if (popupBlocks[i].classList.contains('popup-window__content--active')) {
                                    popup.close(popupBlocks[i]);
                                }
                            }
                        });
                    }
                }

                document.addEventListener('keydown', function (e) {
                    if (e.key === "Escape") {
                        popupBtns.forEach(item => {
                            return item.classList.contains('disabled-link') ? item.classList.remove('disabled-link') : false
                        });
                        for (let i = 0; i < popupBlocks.length; i++) {
                            if (popupBlocks[i].classList.contains('popup-window__content--active')) {
                                popup.close(popupBlocks[i]);
                            }
                        }
                    }
                });

                $('.main-header__burger').on('click', () => {
                    $('.main-header__social').toggleClass('main-header__social--active');
                    $('.ham').toggleClass('active');
                });

                $('.main-header__logo a').on('click', () => {
                    if ($('.main-header__social').hasClass('main-header__social--active')) {
                        $('.main-header__social').removeClass('main-header__social--active');
                    }
                })

                // for slide event
                $('.main-header__logo a').on('click', (e) => {
                    e.preventDefault();
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(0, 500);
                    }
                });

                // for slide event
                $('.def-button__positive-toForm').on('click', (e) => {
                    e.preventDefault();
                    if($('.main-header__social').hasClass('main-header__social--active') || $('.ham').hasClass('active')){
                        $('.main-header__social').removeClass('main-header__social--active');
                        $('.ham').removeClass('active');
                    }
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(+contactForm187.slideIndex - 1, 500);
                    }
                });
                
                $('.def-button__positive--to3').on('click', (e) => {
                    e.preventDefault();
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(2, 500);
                    }
                });
                
                $('.def-button__positive--to4').on('click', (e) => {
                    e.preventDefault();
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(3, 500);
                    }
                });
                
                $('.def-button__positive--to7').on('click', (e) => {
                    e.preventDefault();
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(6, 500);
                    }
                });

                $('.def-button__negative--back').on('click', (e) => {
                    e.preventDefault();
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(swiper.activeIndex - 1, 500);
                    }
                });

                $('.def-button__positive--next').on('click', (e) => {
                    e.preventDefault();
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(swiper.activeIndex + 1, 500);
                    }
                });

                $('.popup-window__try-2').on('click', (e) => {
                    e.preventDefault();
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(1, 500);
                        popupBtns.forEach(item => {
                            return item.classList.contains('disabled-link') ? item.classList.remove('disabled-link') : false
                        });
                        for (let i = 0; i < popupBlocks.length; i++) {
                            if (popupBlocks[i].classList.contains('popup-window__content--active')) {
                                popup.close(popupBlocks[i]);
                            }
                        }
                    }
                });

                $('.popup-window__try--3').on('click', (e) => {
                    e.preventDefault();
                    console.log(1);
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(2, 500);
                        popupBtns.forEach(item => {
                            return item.classList.contains('disabled-link') ? item.classList.remove('disabled-link') : false
                        });
                        for (let i = 0; i < popupBlocks.length; i++) {
                            if (popupBlocks[i].classList.contains('popup-window__content--active')) {
                                popup.close(popupBlocks[i]);
                            }
                        }
                    }
                });
                
                $('.popup-window--third .popup-window__try--3').on('click', (e) => {
                    e.preventDefault();
                    console.log(1);
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(3, 500);
                        popupBtns.forEach(item => {
                            return item.classList.contains('disabled-link') ? item.classList.remove('disabled-link') : false
                        });
                        for (let i = 0; i < popupBlocks.length; i++) {
                            if (popupBlocks[i].classList.contains('popup-window__content--active')) {
                                popup.close(popupBlocks[i]);
                            }
                        }
                    }
                });

                $('.popup-window__try-4').on('click', (e) => {
                    e.preventDefault();
                    if ($(window).width() > breakpoint) {
                        swiper.slideTo(3, 500);
                        popupBtns.forEach(item => {
                            return item.classList.contains('disabled-link') ? item.classList.remove('disabled-link') : false
                        });
                        for (let i = 0; i < popupBlocks.length; i++) {
                            if (popupBlocks[i].classList.contains('popup-window__content--active')) {
                                popup.close(popupBlocks[i]);
                            }
                        }
                    }
                });

                $('.def-button__positive-toForm').click(function(e) {
                    e.preventDefault();
                    scrollToAnchor('last');
                });
                
                $('.def-button__jsform').click(function(e) {
                    e.preventDefault();
                    scrollToAnchor('last');
                });
                
                $('.def-button__facts').click(function(e) {
                    e.preventDefault();
                    scrollToAnchor('facts');
                });

                $('.popup-window__toForm').click(function(e) {
                    e.preventDefault();
                    scrollToAnchor('last');
                    popupBtns.forEach(item => {
                        return item.classList.contains('disabled-link') ? item.classList.remove('disabled-link') : false
                    });
                    for (let i = 0; i < popupBlocks.length; i++) {
                        if (popupBlocks[i].classList.contains('popup-window__content--active')) {
                            popup.close(popupBlocks[i]);
                        }
                    }
                });

                $('.main-header__logo').click(function(e) {
                    e.preventDefault();
                    scrollToAnchor('first');
                });

                $('.def-button__positive--calculate').click(function(e) {
                    e.preventDefault();
                    scrollToAnchor('calculate');
                });

                var inputFile = $( ".form-block__input[type='file']" );
                var infoArea = $( '.form-block__file-name' );

                inputFile.on( 'change', showFileName );

                function showFileName( event ) {

                    // the change event gives us the input it occurred in
                    let input = event.target;

                    // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                    let fileName = input.files[0].name;

                    // use fileName however fits your app best, i.e. add it into a div
                    infoArea.html(fileName);
                }



            }

        }

    }


});