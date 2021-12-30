function setParam(uri, key, val) {
    return uri
        .replace(RegExp("([?&]"+key+"(?=[=&#]|$)[^#&]*|(?=#|$))"), "&"+key+"="+encodeURIComponent(val))
        .replace(/^([^?&]+)&/, "$1?");
}

(function($) {
    @import './vendor/jquery.uniform.js'
    @import './vendor/slick.js'
    @import '../../node_modules/js-cookie/src/js.cookie.js'

    $(document).ready(() => {
      
        $("form[id^='mktoForm']:not('.gated'),form.marketo-form:not('.gated')").each(function() {
          var formID = $(this).attr("id").split("_")[1];

          var tyblock = $(this).data("thankyou");          
          if (typeof tyblock !== 'undefined' && tyblock.length > 0) {
            // we're going to display a thank-you block on submission so hide the block now.
            console.log(tyblock);
            $(tyblock).hide();   
          }
          
//          console.log(" loading " + formID);
          MktoForms2.loadForm("//app-sj27.marketo.com", "713-LJI-283", formID, function(form) {
            var formEl = form.getFormElem(); // get jQuery element            
            if (typeof tyblock !== 'undefined' && tyblock.length > 0) {
              // we're going to display a thank-you block on submission so hide the block now.
              console.log(tyblock);
              $(tyblock).hide();   
              
              // display thank-you on success
              form.onSuccess(function(values, followUpUrl) {
                $(tyblock).show();
                formEl.hide();
                return false;
              });
            } // if thankyou
          });            
        });
        
        // resource forms
        
        $("form.marketo-form.gated").each(function() {
          var assetID = $(this).data("assetid");

          var formID = $(this).data("formID");
          var submitText = $(this).data("submit-text");

          if (formID == '' || formID === undefined) formID = 1021; // fallback to be safe
//console.log("loading form " + formID);
          MktoForms2.loadForm("//app-sj27.marketo.com", "713-LJI-283", formID, function(form) {
            var formEl = form.getFormElem(); // get jQuery element

            form.setValues({ assetID: assetID });            

            if (typeof submitText !== 'undefined' && submitText.length) {
              formEl.find("button[type='submit']").text(submitText);
            }
            
            form.onSuccess(function(values, followUpUrl) {
                // generate a thank-you URL using the nonce, ID, and media ID

                var destURL = setParam(window.location.href, 'success', 'true');
                var destURL = setParam(destURL, 'n', formEl.data("nonce"));
                var destURL = setParam(destURL, 'i', formEl.data("media"));   
                var destURL = setParam(destURL, 'a', formEl.data("assetid"));                   

                destURL += "&redir=1";                
                window.location.href = destURL; 
                return false;
            });

          });// end loadform
        }); // end each form
        
        $(document).on("click", ".fc-tabbed-content__tab", (e) => {
            e.preventDefault();
            let tab = parseInt($(e.currentTarget).attr('href').substr(4));

            $(`.fc-tabbed-content__tab`).removeClass(`fc-tabbed-content__tab--active`);
            $(`.fc-tabbed-content__tab[href="#tab${tab}"]`).addClass(`fc-tabbed-content__tab--active`);

            $('.fc-tabbed-content__tab > .fa').removeClass(`fa-chevron-up`).addClass(`fa-chevron-down`);
            $(`.fc-tabbed-content__tab[href="#tab${tab}"] > .fa`).removeClass(`fa-chevron-down`).addClass(`fa-chevron-up`);
            
            $(".fc-tabbed-content__tab-content").removeClass(() => [0,1,2].map((e) => `fc-tabbed-content__tab-content--arr${e}`).join(' '));
            $(".fc-tabbed-content__tab-content").addClass(`fc-tabbed-content__tab-content--arr${tab}`);

            $(`.fc-tabbed-content__tab-content-inner`).removeClass(`fc-tabbed-content__tab-content-inner--active`)
            $(`#tab${tab}.fc-tabbed-content__tab-content-inner`).addClass(`fc-tabbed-content__tab-content-inner--active`)
        });

        $(".fc-testimonial-slider").each(function() {

          if ($(this).hasClass("teaser")) {            
            var slidesToShow = 3;
            var responsive = [
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ];
            
          } else {
            var slidesToShow = 1;
            var dots = true;
          }
        
          
          $(this).find(".fc-testimonial-slider__testimonials").slick({
            dots: false,
            infinite: true,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 5000,            
            slidesToShow: slidesToShow,
            slidesToScroll: slidesToShow,
            responsive: responsive
          });

        });

        $(document).on("click", ".homepage-features__tab", (e) => {
            e.preventDefault();
            let tab = parseInt($(e.target).attr('href').substr(4));

            $(`.homepage-features__tab`).removeClass(`homepage-features__tab--active`);
            $(`.homepage-features__tab[href="#tab${tab}"]`).addClass(`homepage-features__tab--active`);

            $('.homepage-features__tab > .fa').removeClass(`fa-chevron-up`).addClass(`fa-chevron-down`);
            $(`.homepage-features__tab[href="#tab${tab}"] > .fa`).removeClass(`fa-chevron-down`).addClass(`fa-chevron-up`);
            
            $(".homepage-features__tab-content").removeClass(() => [0,1,2].map((e) => `homepage-features__tab-content--arr${e}`).join(' '));
            $(".homepage-features__tab-content").addClass(`homepage-features__tab-content--arr${tab}`);

            $(`.homepage-features__tab-content-inner`).removeClass(`homepage-features__tab-content-inner--active`)
            $(`#tab${tab}.homepage-features__tab-content-inner`).addClass(`homepage-features__tab-content-inner--active`)
        });

        $(".homepage-testimonials").each((i, e) => {
            let pos = 0;
            const $e = $(e);
            const $s = $(e).find(".homepage-testimonials__testimonials");
            const len = $s[0].children.length;
            const move = (p) => {
                let x;
                if(window.innerWidth >= 1040) x = Math.ceil(len / 3); // 3 per slide
                else if(window.innerWidth >= 656) x = Math.ceil(len / 2); // 2 per slide
                else x = len; // 1 per slide
                p = Math.max(0, Math.min(x-1, p));
                $s.css('left', (p * -100) + "%");
                pos = p;
            };
            $e.on("click", ".homepage-testimonials__control--prev", (e) => {
                e.preventDefault();
                move(pos - 1);
            });
            $e.on("click", ".homepage-testimonials__control--next", (e) => {
                e.preventDefault();
                move(pos + 1);
            });
        });

        $(".resources-resources__form-select, .resources-resources__form-submit").uniform({
            selectClass: 'resources-resources__form-select',
            buttonClass: 'resources-resources__form-submit',
            useID: false,
        });

        $(".subpage-signup__form-submit").uniform({
            buttonClass: 'subpage-signup__form-submit',
            useID: false,
        });

        $(".homepage-testimonials__testimonials").slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        
        // GC add for resizing iframes
        if ($("iframe").length) {
          $('iframe').iFrameResize();
        }
        
        // topbar alerts
        if ($(".topbar__alert").length) {
          // open it
          var alertID = $(".topbar__alert").attr("id");
          var alertStatus = Cookies.get("tophat_alert");
          if (alertStatus != alertID) {

            $(".topbar__alert").delay(1500).queue(function(next) { $(this).addClass("open"); next(); });
          
            $(".topbar__alert__close").click(function() {
                $(".topbar__alert").removeClass("open");
                Cookies.set("tophat_alert", alertID);
            });
          }
        }      

        // LEGACY
        $('.responsive').slick({
            dots: false,
            fade: true,
            cssEase: 'linear',
            arrows: false,
            autoplay: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        autoplay: false,
                        draggable:false,
                        swipe: false
                    }
                }

            ]
        });

        $('.multiple-items').slick({
            infinite: true,
            dots: false,
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            nextArrow: '<i class="fa fa-3x fa-chevron-right" style="font-style:normal;"></i>',
            prevArrow: '<i class="fa fa-3x fa-chevron-left" style="font-style:normal;"></i>',
        });

        $('.carousel').slick({
            infinite: true,
            dots: false,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            nextArrow: '<i class="fa fa-3x fa-chevron-right" style="font-style:normal;"></i>',
            prevArrow: '<i class="fa fa-3x fa-chevron-left" style="font-style:normal;"></i>',
        });
    });
})(jQuery);