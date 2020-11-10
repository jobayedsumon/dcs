<style>
.footer-row .latest-post li {
    margin-top: 25px !important;
}
.padding-bottom-36 {
    padding-bottom: 0px;
}
.vmsl_footer{
	border-top: 1px solid #3f4c56;
	margin-top: 30px;
}
.vmsl_footer p{
    padding-top:8px;
    font-size: 12px;
}
.vmsl_column{
	margin-left: 0px;
}
.footer-row .social-icons a::before{
    font-size: 12px;
}
.footer-row .social-icons li a{
    width: 13px;
    height: 13px;
    padding: 12px;
    margin-top: 0px;
}
.social-icons.align-center {
    margin-top: 2px;
    margin-bottom: 0px;
    margin-left: 30px;
}
li.template-arrow-horizontal-2 {
    padding-bottom: 17px;
}
.bookNow a{
    position: fixed;
    right: 15px;
    bottom: 85px;
    background-color: rgba(8, 94, 173, .8);
    font-size: 12px;
    padding: 20px;
    text-decoration: none;
    color: #fff;
    border-radius: 50%;
    height: 65px;
    width: 65px;
    text-align: center;
    display: flex;
    align-items: center;
    box-shadow: 0 6px 10px 0 #666;
    justify-content: center;

}

.bookNow a:hover {
    box-shadow: 0 6px 14px 0 #666;
    transform: scale(1.05);
}
.list li {
    margin-bottom: 5px;
}
.fab {
    width: 70px;
    height: 70px;
    background-color: red;
    border-radius: 50%;
    box-shadow: 0 6px 10px 0 #666;

    font-size: 50px;
    line-height: 70px;
    color: white;
    text-align: center;

    position: fixed;
    right: 50px;
    bottom: 50px;

    transition: all 0.1s ease-in-out;
}

.fab:hover {
    box-shadow: 0 6px 14px 0 #666;
    transform: scale(1.05);
}
.value a, .list li a {
    color: #fff;
}
.list li {
    margin-bottom: 15px;
}
.copyRight {
    display: flex;
    justify-content: space-between;
}
</style>
{{--<div class="row dark footer-row full-width" style="--}}
{{--background: linear-gradient(90deg, rgba(8, 94, 173, .4) 0%, rgba(8, 94, 173, .8) 100%);">--}}
{{--	<div class="row" style="width: 100%; justify-content: flex-end; padding-bottom: 10px 0">--}}
{{--		<div class="column column-1-2">--}}
{{--			<ul class="contact-details-list">--}}
{{--				<li class="features-phone">--}}
{{--					<label>CALL US TODAY</label>--}}
{{--					<p><a href="+8802 58810200">+8802 58810200</a></p>--}}
{{--				</li>--}}
{{--			</ul>--}}
{{--		</div>--}}
{{--		<div class="column column-1-2">--}}
{{--			<ul class="contact-details-list">--}}
{{--				<li class="features-map">--}}
{{--					<label class="text-white">House- 11 (5th floor), Road- 1, Block J,</label>--}}
{{--					<p class="text-white">Baridhara, Dhaka- 1212.</p>--}}
{{--				</li>--}}
{{--			</ul>--}}
{{--		</div>--}}
{{--		<div class="column column-1-3">--}}
{{--			<ul class="contact-details-list">--}}
{{--				<li class="features-wallet">--}}
{{--					<label>ESTIMATE YOUR COSTS</label>--}}
{{--					<p><a href="?page=service_calculator" title="Online Service Calculator">Online Calculator</a></p>--}}
{{--				</li>--}}
{{--			</ul>--}}
{{--		</div>--}}
{{--	</div>--}}
{{--</div>--}}
<div class="container-fluid px-5" style="
background: linear-gradient(90deg, rgba(8, 94, 173, .5) 0%, rgba(8, 94, 173, .8) 100%);">

    <div class="logo m-3">
        <h1>
            <a href="{{ url('') }}" title="DCS">
                <img style="height: 30px" src="{{ asset('') }}final.png" srcset="{{ asset('') }}final.png" alt="logo">
            </a>
        </h1>

    </div>


        <div class="col-md-4 col-sm-6">


            <h6 class="text-white">ABOUT US</h6>
            <!--<p class="margin-top-23">Providing Housekeeping & Maintenance Services For More Than 07 Years!</p>-->
            <p class="text-justify text-white">DCS Organization limited is a professional Facility Management Organization that has been serving in several local & Multi-national companies, Chain Hotels, Airlines offices, Garments, corporate offices etc. for the last six years. DCS Organization limited is supported 100% by Johnson Diversey cleaning Chemicals & treatment; we are pleased to avail the opportunity to enhance the beautifying of your area with the help of world-famous Johnson Diversey Chemical Treatment.</p>
        </div>
        <div class="col-md-2 col-sm-6">
            <ul class="list">
                <li style="margin-bottom: 14px"><h6 class="text-white">OUR SERVICES</h6></li>
                <?php
                $category = Helper::get_limited_category(8);
                if (!empty($category)) {
                foreach ($category as $data) {
                ?>
                <li class="mb-3">
                    <a class="text-white" href="{{ route('single.service', $data->id) }}" title="Commercial Cleaning">
                        {{ $data->title }}
                    </a>
                </li>
                <?php }}?>
            </ul>
        </div>
        <div class="col-md-2 col-sm-6">

            <ul class="list">
                <li style="margin-bottom: 14px"><h6 class="text-white">QUICK LINKS</h6></li>
                <li>
                    <a href="{{ route('about.page') }}" title="Best pro tips for home cleaning">About Us </a>
                </li>
                <li>
                    <a href="{{ route('service.page') }}" title="Best pro tips for home cleaning">Our services </a>
                </li>
                <li>
                    <a href="{{ route('contact.page') }}" title="Best pro tips for home cleaning">Contact Us </a>
                </li>
                <li>
                    <a href="#" title="Best pro tips for home cleaning">Gallary</a>
                </li>
                <li>
                    <a href="#" title="Best pro tips for home cleaning">FAQ</a>
                </li>
                <li>
                    <a href="#" title="Best pro tips for home cleaning">Blog</a>
                </li>
                <li>
                    <a href="{{ url('/hr-outsourcing') }}" title="Best pro tips for home cleaning">HR-outsourcing </a>

                </li>
                <li>
                    <a href="{{ url('/disinfection') }}" title="Best pro tips for home cleaning">Disinfection </a>

                </li>

            </ul>
        </div>
        <div class="col-md-4 col-sm-6">
            <h6 class="text-white">CONTACT INFO</h6>
            <ul class="contact-data">
                <li class="template-location"><div class="value text-white">House- 11 (5th floor), Road- 1, Block J,Baridhara, Dhaka- 1212</div></li>
                <li class="template-mobile"><div class="value"><a href="tel:2507257052"> +880 1979606001-3 (Hotline)</a></div></li>
                <li class="features-phone"><div class="value"><a href="tel:2507257052"> +880 2588 10200</a></div></li>
                <li class="template-mobile"><div class="value"><a href="tel:2507257052"> +880 1783-877630
                            <br></a></div></li>
                <li class="template-email"><div class="value"><a href="mailto:hello@dcsorgbd.com">hello@dcsorgbd.com, dcsorganization@gmail.com</a></div></li>


            </ul>
        </div>
    </div>

</div>
<section id="copy_write" style="
background: linear-gradient(90deg, rgba(8, 94, 173, .8) 0%, rgba(8, 94, 173, .8) 100%);">
	<div class="container-fluid px-5">

			<div class="col-12 flex copyRight">
				<p class="text-white" style="font-size: 11px">Disclaimer | © 2020 DCS Organization Ltd. | Designed by
					<a href="https://vmsl.com.bd/">VMSL</a>
				</p>
                <ul class="social-icons align-center m-0 mt-1">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/dcsorg" class="social-facebook" title="facebook"></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/" class="social-instagram" title="instagram"></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/dcs-organization-ltd/" class="social-linkedin" title="linkedin"></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCwGVhlQupYgrPrZMPhprQBA
" class="social-youtube" title="youtube"></a>
                    </li>
                </ul>
			</div>
		</div>

</section>

<div class="bookNow">
    <a href="/booking">BOOK NOW</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>






		<a href="#top" class="scroll-top animated-element template-arrow-vertical-3" title="Scroll to top"></a>
		<div class="background-overlay"></div>
		<!--js-->
		<script type="text/javascript" src="{{ asset('') }}js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery-migrate-1.4.1.min.js"></script>
		<!--slider revolution-->
		<script type="text/javascript" src="{{ asset('') }}rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery-ui-1.12.1.custom.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.easing.1.3.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.timeago.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.hint.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.costCalculator.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.parallax.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/jquery.blockUI.min.js"></script>
		<?php if($_GET["page"]=="contact" || $_GET["page"]=="contact_2" || $_GET["page"]=="contact_3"):?>
		<script type="text/javascript" src="//maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
		<?php endif; ?>
		<script type="text/javascript" src="{{ asset('') }}js/main.js"></script>
		<script type="text/javascript" src="{{ asset('') }}js/odometer.min.js"></script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<?php
			if(File::exists(public_path('style_selector/style_selector.php'))){
				File::requireOnce(public_path('style_selector/style_selector.php'));
			}
			//require_once('C:\xampp\htdocs/dcs/public/style_selector/style_selector.php');
		?>



<script>
    $(document).ready(function(){
        $("#dLabel").mouseover(function(){
            $('.dropdown-menu').show();
        });
    });
</script>
	</body>
</html>
