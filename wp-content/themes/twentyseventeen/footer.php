<footer id="footer">
    <div class="top-footer clearfix">
        <div class="container clearfix">
            <h3 class="tfooter-title">ĐĂNG KÝ NHẬN THÔNG TIN </h3>
            <div class="tfooter-details">
                <div class="row">
                    <div class="col-md-6">
                        <p><span style="font-size: 14pt;"><strong>LIÊN HỆ </strong></span></p>
                        <p><strong><span style="font-size: 36pt;"><?php the_field('hotline','option')?></span></strong></p>
                        <p><span style="font-size: 12pt;">Vui lòng để lại thông tin, đội ngũ chuyên viên tư vấn của chúng tôi sẽ liên hệ, tư vấn và gửi thông tin cho Quý vị trong thời gian nhanh nhất.</span></p>
                    </div>
                    <div class="col-md-6">
                        <?php echo do_shortcode('[contact-form-7 id="102" title="Đăng ký nhận thông tin"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer clearfix">
        <div class="container">
            <div class="left-bfooter"><div class="copyright"><p><?php the_field('copyright','option')?></p></div></div>
            <div class="right-bfooter">
                <ul class="coinfo">

                      <li class="email-icon hidden-xs"><a href="mailto:<?php the_field('address','option')?>"><i class="fa fa-map hidden-dex"></i></a></li>
                    <li class="email-txt"><a href="mailto:<?php the_field('address','option')?>">  <?php the_field('address','option')?></a></li>


                    <li class="email-icon hidden-xs"><a href="mailto:<?php the_field('email','option')?>"><i class="fa fa-envelope"></i></a></li>
                    <li class="email-txt"><a href="mailto:<?php the_field('email','option')?>"><?php the_field('email','option')?></a></li>
                    <li class="hotline-icon hidden-xs"><a href="tel:<?php the_field('hotline','option')?>"><i class="fa fa-mobile"></i></a></li>
                    <li class="hotline-txt"><a href="tel:<?php the_field('hotline','option')?>"><?php the_field('hotline','option')?></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</div>
<div class="quick-alo-phone quick-alo-green quick-alo-show" id="quick-alo-phoneIcon"> <a href="tel:<?php the_field('hotline','option')?>" title="Liên hệ nhanh với chúng tôi"><div class="quick-alo-ph-circle"></div><div class="quick-alo-ph-circle-fill"></div><div class="quick-alo-ph-img-circle"></div> </a></div>
<a href="#0" class="cd-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php echo do_shortcode('[contact-form-7 id="4" title="Popup"]'); ?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.min.js"></script>
<script type="text/javascript">
    (function($) {
        // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if( $(this).scrollTop() > offset_opacity ) { 
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0 ,
            }, scroll_top_duration
        );
    });

        $('.slider-home').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 20,
            autoplayTimeout: 5000,
            nav: true,navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            dots: false,
            responsiveClass: true,
            responsiveRefreshRate: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                960: {
                    items: 1
                },
                1100: {
                    items: 1
                },
            }
        });
            // Clone defaults
    var imgOpts = $.extend(true, {}, $.fancybox.defaults);
    // Shortcut to apply options to image gallery
    function applyImgOpts() {
        $('[data-fancybox="images"]').fancybox(imgOpts);
    }
    $("#imgOpts select").change(function () {
        var opt = $(this).attr("id");
        var val = $(this).val();
       imgOpts[opt] = val === "" ? false : val;
        // Make "fade" transiton faster than others
        if (opt === 'transitionEffect') {
            imgOpts['transitionDuration'] = opt === 'fade' ? 330 : 550;
        }
        applyImgOpts();
    });
    $("#imgOpts input[type=radio][name=lang]").on("change", function () {
        imgOpts.lang = $(this).val();
        applyImgOpts();
    });
    $("#imgOpts .toggle").change(function () {
        if (this.id === 'thumbs') {
            imgOpts.thumbs.autoStart = this.checked ? true : false;
        } else {
            imgOpts[this.id] = this.checked ? true : false;
        }
        applyImgOpts();
    });
    $("#imgOpts .buttons").change(function () {
        var buttonArr = $('input:checkbox:checked.buttons').map(function () {
            return this.value;
        }).get();
        buttonArr.push('close');
        imgOpts.buttons = buttonArr;
        applyImgOpts();
    });
    })(jQuery);
</script>
<?php wp_footer(); ?>
</body>

</html>