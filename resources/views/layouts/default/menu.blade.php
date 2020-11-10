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
		<li>
	        <div class="service_btn">
	            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle my_services_main_menu"
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
	                    <a class="dropdown-item" tabindex="-1" href="#"><?php echo $primary->title; ?> </a>
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
		<li><a href="?page=blog" title="Blog">Projects</a></li>
		<li><a href="<?php echo url('posts');?>" title="Blog">BLOG</a></li>
		<li><a href="<?php echo route('faq.page');?>" title="FAQ">FAQ</a></li>
		<li><a href="?page=contact" title="Contact">CONTACT</a></li>
	</ul>
</nav>
<div class="mobile-menu-container">
	<nav>
		<li><a href="<?php echo url('/'); ?>" title="Home">HOME</a></li>
		<li>
	        <div class="service_btn">
	            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle my_services_main_menu"
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
	                    <a class="dropdown-item" tabindex="-1" href="#"><?php echo $primary->title; ?> </a>
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
		<li><a href="<?php echo route('gallery.page');?>" title="Gallery">GALLERY</a></li>
		<li><a href="?page=blog" title="Blog">BLOG</a></li>
		<li><a href="<?php echo route('faq.page');?>" title="FAQ">FAQ</a></li>
		<li><a href="<?php echo route('contact.page');?>" title="Contact">CONTACT</a></li>
	</nav>
</div>

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