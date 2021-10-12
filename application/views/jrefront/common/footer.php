<!-- Footer -->
<!--<footer id="footer" class="footer" data-bg-img="--><?php //echo FRONT_ASSETS_FOLDER; ?><!--funpro/images/footer-bg.png" data-bg-color="#25272e">-->
<!--    <div class="container pt-70 pb-40">-->
<!--        <div class="row border-bottom-black">-->
<!--            <div class="col-sm-6 col-md-4">-->
<!--                <div class="widget dark">                    -->
<!--                    <p>WZ-A-1/1, 3rd Floor,Budella Market,Vikaspuri,New Delhi-110018.</p>-->
<!--                    <ul class="list-inline mt-5">-->
<!--                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-fax text-theme-colored mr-5"></i> <a class="text-gray" href="#">011-28533632</a> </li>-->
<!--                        <br>-->
<!--                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">info@bhsedelhi-edu.org.in</a> </li>-->
<!--                        <br>-->
<!--                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="--><?php //echo BASE_URL; ?><!--">www.bhsedelhi-edu.org.in</a> </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-6 col-md-4">-->
<!--                <div class="widget dark">-->
<!--                    <h5 class="widget-title line-bottom">Useful Links</h5>-->
<!--                    <ul class="list angle-double-right list-border">-->
<!--                        <li><a href="--><?php //echo FRONT_CONTACT_LINK; ?><!--">Contact Us</a></li>-->
<!--                        <li><a href="--><?php //echo FRONT_ABOUT_LINK; ?><!--">About Us</a></li>-->
<!--                        <li><a href="--><?php //echo FRONT_RESULT_LINK; ?><!--">Results</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-6 col-md-4">-->
<!--                <div class="widget dark">-->
<!--                    <h5 class="widget-title line-bottom">Opening Hours</h5>-->
<!--                    <div class="opening-hours">-->
<!--                        <ul class="list-border">-->
<!--                            <li class="clearfix"> <span> Mon - Sat :  </span>-->
<!--                                <div class="value pull-right"> 10.00 am - 06.00 pm </div>-->
<!--                            </li>                            -->
<!--                            <li class="clearfix"> <span> Sun : </span>-->
<!--                                <div class="value pull-right"> <a href="--><?php //echo EMPLOYEE_LOGIN_LINK; ?><!--">Colosed </a></div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        -->
<!--        <div class="row mt-10">       -->
<!--        <div class="col-md-12">-->
<!--          <div class="widget dark">-->
<!--            <h5 class="widget-title mb-10">Connect With Us</h5>-->
<!--            <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">              -->
<!--               <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--              <li><a href="#"><i class="fa fa-twitter"></i></a></li>              -->
<!--              <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
<!--              <li><a href="#"><i class="fa fa-instagram"></i></a></li>              -->
<!--            </ul>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--        -->
<!--    </div>-->
<!--    <div class="footer-bottom bg-black-333">-->
<!--        <div class="container pt-15 pb-10">-->
<!--            <div class="row">-->
<!--                -->
<!--                <div class="col-md-12">-->
<!--                    <center>-->
<!--                    <p class="font-11 text-black-777 m-0">Copyright &copy;2020 bhsedelhi-edu.org.in. All Rights Reserved</p>-->
<!--                    </center>-->
<!--                </div>              -->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/custom.js"></script>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script src="<?php echo FRONT_ASSETS_FOLDER; ?>news/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo FRONT_ASSETS_FOLDER; ?>funpro/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo EMPLOYEE_ASSETS_FOLDER; ?>js/toastr.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".mobileno").keyup(function (e) {
            var str = $(this).val();
            for (var i = 0; i < str.length; i++) {
                var charCode = str.charAt(i).charCodeAt(0);
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                {
                    $(this).val('');
                    return false;
                }
            }
            return true;
        });
    });

    $('form').on('focus', 'input[type=number]', function (e) {
      $(this).on('wheel.disableScroll', function (e) {
        e.preventDefault()
      })
    })
    $('form').on('blur', 'input[type=number]', function (e) {
      $(this).off('wheel.disableScroll')
    })
</script>
</body>
</html>




