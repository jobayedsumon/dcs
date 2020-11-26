<style>
.dropdown-submenu {
position: relative;
}

.dropdown-submenu> a:after {
content: ">";
float: right;
}

.dropdown-submenu>.dropdown-menu {
top: 0;
left: 100%;
margin-top: 0px;
margin-left: 0px;
}

.dropdown-submenu:hover>.dropdown-menu {
display: block;
}


</style>

<nav>
	<ul class="sf-menu">

		<li><a href="<?php echo url('/'); ?>" title="Home">HOME</a></li>
		<li><a href="<?php echo route('about.page'); ?>" title="Home">ABOUT US</a></li>
		<li>
	        <div class="service_btn">
	            <a id="dLabel" role="" data-toggle="" class="dropdown-toggle"
	               href="<?php echo route('service.page');?>">
	                SERVICES
	            </a>
	            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
					<?php
						 $primary_cat = Helper::get_category(0);
						 if (!empty($primary_cat)) {
						 	foreach ($primary_cat as $primary) {
					?>
	                <li class="dropdown-submenu">
	                    <a class="dropdown-item" tabindex="-1" href="<?php echo route('get.services', $primary->id); ?>"><?php echo $primary->title; ?> </a>
	                    <ul class="dropdown-menu">
							<?php
								 $services_cat = Helper::get_category($primary->id);
								 if (!empty($services_cat)) {
								 foreach ($services_cat as $sub_category) {
							?>
							<li>
								<a class="dropdown-item" href="<?php echo route('single.service', $sub_category->id) ?>">
									<?php echo $sub_category->title; ?>
								</a>
							</li>
							<?php }}?>
	                    </ul>
	                </li>
					<?php }}?>
	            </ul>

	        </div>
		</li>

		<li><a href="<?php echo route('gallery.page');?>" title="Gallery">PORTFOLIO</a></li>
		<li><a href="/career" title="FAQ">CAREER</a></li>
        <li><a href="#" title="FAQ">BLOG</a></li>
        <li><a href="/contact" title="FAQ">CONTACT US</a></li>
        <li>

        </li>
	</ul>
</nav>
<div class="mobile-menu-container">
	<nav>
		<ul class="mobile-menu collapsible-mobile-submenus">
			<li><a class="template-arrow-vertical-3" href="#">&nbsp;</a></li>
			<li><a href="<?php echo url('/'); ?>" title="Home">HOME</a></li>
			<li><a href="<?php echo route('about.page'); ?>" title="Home">ABOUT US</a></li>

			<li>
		        <div class="service_btn">
		            <a id="dLabel" role="button" data-toggle="dropdown" class="dropdown-toggle my_services_main_menu"
		               href="javascript:void(0)">
		                SERVICES
		            </a>
		            <ul class="dropdown-menu my_services_sub_menu" role="menu" aria-labelledby="dropdownMenu">
						<?php
							 $primary_cat = Helper::get_category(0);
							 if (!empty($primary_cat)) {
							 	foreach ($primary_cat as $primary) {
						?>
		                <li class="dropdown-submenu">
		                    <a class="dropdown-item" tabindex="-1" href="javascript:void(0)"><?php echo $primary->title; ?> </a>
		                    <ul class="dropdown-menu">
								<?php
									 $services_cat = Helper::get_category($primary->id);
									 if (!empty($services_cat)) {
									 foreach ($services_cat as $sub_category) {
								?>
								<li>
									<a class="dropdown-item" href="<?php echo route('single.service', $sub_category->id) ?>">
										<?php echo $sub_category->title; ?>
									</a>
								</li>
								<?php }}?>
		                    </ul>
		                </li>
						<?php }}?>
		            </ul>
		        </div>
			</li>


			<li><a href="<?php echo route('gallery.page');?>" title="Gallery">PORTFOLIO</a></li>
			<li><a href="/career" title="FAQ">CAREER</a></li>
			<li><a href="#" title="FAQ">BLOG</a></li>
			<li><a href="/contact" title="FAQ">CONTACT US</a></li>

		</ul>
	</nav>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(".service_btn, .dropdown").hover(
function () {
$('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
$(this).addClass('open');
},
function () {
$('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
$(this).removeClass('open');
});
</script>
<script>
    $(document).ready(function(){
        $("#dLabel").mouseover(function(){
            $('.dropdown-menu').show();
        });
    });
</script>

<script type="text/javascript">
$(document).ready(function(){

  $(".search_icon").mouseover(function(){
    $(".full_box").toggle();
  });
  $(".full_box input").blur(function(){
    $(".full_box").hide();
  });
});
</script>







