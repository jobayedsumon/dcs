@extends('layouts.default.master')
@section('content')
</div>
	<div class="row gray full-width page-header vertical-align-table">
		<div class="row">
			<div class="page-header-left">
				<h1>HOME CLEANING COST</h1>
			</div>
			<div class="page-header-right">
				<div class="bread-crumb-container">
					<ul class="bread-crumb">
						<li>
							<a title="Home" href="{{ url('') }}">
								Home
							</a>
						</li>
						<li class="separator">
							&#47;
						</li>
						<li>
							Calculator
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="theme-page">
	<div class="row full-width header-background header-background-5"></div>
	<div class="clearfix">
		<div class="row full-width gray page-padding-top padding-bottom-100">
			<div class="row">
				<p class="description align-center">Cleanmate comes with cost calculator - a unique tool which allows you to easily create<br>price estimation forms to give your client idea of the cost of your service.</p>
				<h3 class="page-margin-top align-center">Please tell us about your home</h3>
				<form id="contact-form" class="cost-calculator-container contact-form margin-top-40" method="post" action="contact_form/contact_form.php">
					<div class="row">
						<fieldset class="column column-1-2">
							<div class="cost-calculator-box clearfix">
								<label>Total area to be cleaned in square feet:</label>
								<input type="hidden" name="clean-area-label" value="Total area to be cleaned">
								<div class="cost-slider-container">
									<input id="clean-area" class="cost-slider-input" name="clean-area" type="number" value="<?php echo (isset($_POST["clean-area"]) ? (int)$_POST["clean-area"] : 1200); ?>">
									<div class="cost-slider" data-value="<?php echo (isset($_POST["clean-area"]) ? (int)$_POST["clean-area"] : 1200); ?>" data-step="1" data-min="1" data-max="2000" data-input="clean-area"></div>
								</div>
							</div>
							<div class="cost-calculator-box margin-top-30 clearfix">
								<label>Number of bathrooms:</label>
								<input type="hidden" name="bathrooms-label" value="Number of bathrooms">
								<div class="cost-slider-container">
									<input id="bathrooms" class="cost-slider-input" name="bathrooms" type="number" value="<?php echo (isset($_POST["bathrooms"]) ? (int)$_POST["bathrooms"] : 2); ?>">
									<div class="cost-slider" data-value="<?php echo (isset($_POST["bathrooms"]) ? (int)$_POST["bathrooms"] : 2); ?>" data-step="1" data-min="0" data-max="5" data-input="bathrooms"></div>
								</div>
							</div>
							<!-- date box
							<div class="cost-calculator-box clearfix">
								<label>Prefered date</label>
								<input type="hidden" name="service-date-label" value="Prefered date">
								<div class="datepicker-container">
									<span class="ui-icon template-arrow-dropdown"></span>
									<input id="service-date" class="cost-slider-datepicker big" name="service-date" value="" placeholder="Preffered date">
								</div>
							</div>
							-->
						</fieldset>
						<fieldset class="column column-1-2">
							<div class="cost-calculator-box clearfix">
								<label>Number of bedrooms:</label>
								<input type="hidden" name="bedrooms-label" value="Number of bedrooms">
								<div class="cost-slider-container">
									<input id="bedrooms" class="cost-slider-input" name="bedrooms" type="number" value="<?php echo (isset($_POST["bedrooms"]) ? (int)$_POST["bedrooms"] : 4); ?>">
									<div class="cost-slider" data-value="<?php echo (isset($_POST["bedrooms"]) ? (int)$_POST["bedrooms"] : 4); ?>" data-step="1" data-min="0" data-max="8" data-input="bedrooms"></div>
								</div>
							</div>
							<div class="cost-calculator-box margin-top-30 clearfix">
								<label>Number of living rooms:</label>
								<input type="hidden" name="livingrooms-label" value="Number of living rooms">
								<div class="cost-slider-container">
									<input id="livingrooms" class="cost-slider-input" name="livingrooms" type="number" value="<?php echo (isset($_POST["livingrooms"]) ? (int)$_POST["livingrooms"] : 1); ?>">
									<div class="cost-slider" data-value="<?php echo (isset($_POST["livingrooms"]) ? (int)$_POST["livingrooms"] : 1); ?>" data-step="1" data-min="0" data-max="3" data-input="livingrooms"></div>
								</div>
							</div>
						</fieldset>
					</div>
					<div class="row margin-top-30">
						<fieldset class="column column-1-3">
							<div class="cost-calculator-box margin-top-30 clearfix">
								<label>Size of your kitchen:</label>
								<input type="hidden" name="kitchen-size-label" value="Kitchen size">
								<select name="kitchen-size" id="kitchen-size" class="cost-dropdown">
									<option value="" selected="selected">Choose...</option>
									<option value="15"<?php echo (isset($_POST["kitchen-size"]) && (int)$_POST["kitchen-size"]==15 ? ' selected="selected"' : ''); ?>>Small (0 - 150 ft2)</option>
									<option value="20"<?php echo (isset($_POST["kitchen-size"]) && (int)$_POST["kitchen-size"]==20 ? ' selected="selected"' : ''); ?>>Medium (151 - 250 ft2)</option>
									<option value="25"<?php echo (isset($_POST["kitchen-size"]) && (int)$_POST["kitchen-size"]==25 ? ' selected="selected"' : ''); ?>>Large (>250 ft2)</option>
								</select>
								<input type="hidden" class="kitchen-size" name="kitchen-size-name" value="">
							</div>
						</fieldset>
						<fieldset class="column column-1-3">
							<div class="cost-calculator-box margin-top-30 clearfix">
								<label>Master bathroom includes:</label>
								<input type="hidden" name="bathroom-includes-label" value="Bathroom includes">
								<select name="bathroom-includes" id="bathroom-includes" class="cost-dropdown">
									<option value="" selected="selected">Choose...</option>
									<option value="10"<?php echo (isset($_POST["bathroom-includes"]) && (int)$_POST["bathroom-includes"]==10 ? ' selected="selected"' : ''); ?>>Shower only</option>
									<option value="13"<?php echo (isset($_POST["bathroom-includes"]) && (int)$_POST["bathroom-includes"]==13 ? ' selected="selected"' : ''); ?>>Tub only</option>
									<option value="15"<?php echo (isset($_POST["bathroom-includes"]) && (int)$_POST["bathroom-includes"]==15 ? ' selected="selected"' : ''); ?>>Separete shower and tub</option>
									<option value="0"<?php echo (isset($_POST["bathroom-includes"]) && (int)$_POST["bathroom-includes"]==0 ? ' selected="selected"' : ''); ?>>No appliances</option>
								</select>
								<input type="hidden" class="bathroom-includes" name="bathroom-includes-name" value="">
							</div>
						</fieldset>
						<fieldset class="column column-1-3">
							<div class="cost-calculator-box margin-top-30 clearfix">
								<label>Do you have pets?</label>
								<label for="pets" class="cost-calculator-switch radius">
									<input type="hidden" value="Have pets?" name="pets-label">
									<input type="checkbox" data-value="30" value="<?php echo (isset($_POST["pets"]) && (int)$_POST["pets"]==30 ? (int)$_POST["pets"] : 0); ?>"<?php echo (isset($_POST["pets"]) && (int)$_POST["pets"]==30 ? ' checked="checked"' : ''); ?> name="pets" class="cost-slider-input type-checkbox" id="pets">
									<span class="cost-calculator-switch-slider"></span>
								</label>
							</div>
						</fieldset>
					</div>
					<div class="row margin-top-60">
						<h3 class="align-center">Select your service &amp; extras</h3>
					</div>
					<div class="row margin-top-40">
						<fieldset class="column column-1-2">
							<div class="cost-calculator-box clearfix">
								<label>Choose your cleaning supplies:</label>
								<input type="hidden" name="cleaning-supplies-label" value="Cleaning supplies">
								<select name="cleaning-supplies" id="cleaning-supplies" class="cost-dropdown">
									<option value="">Choose...</option>
									<option value="500"<?php echo ((isset($_POST["cleaning-supplies"]) && (int)$_POST["cleaning-supplies"]==500) || !isset($_POST["cleaning-supplies"]) ? ' selected="selected"' : ''); ?>>Green cleaning</option>
									<option value="300"<?php echo (isset($_POST["cleaning-supplies"]) && (int)$_POST["cleaning-supplies"]==300 ? ' selected="selected"' : ''); ?>>Company's supplies</option>
									<option value="0"<?php echo (isset($_POST["cleaning-supplies"]) && (int)$_POST["cleaning-supplies"]==0 ? ' selected="selected"' : ''); ?>>Client's supplies</option>
								</select>
								<input type="hidden" class="cleaning-supplies" name="cleaning-supplies-name" value="">
							</div>
						</fieldset>
						<fieldset class="column column-1-2">
							<div class="cost-calculator-box clearfix">
								<label>Cleaning frequency:</label>
								<input type="hidden" name="cleaning-frequency-label" value="Cleaning frequency">
								<select name="cleaning-frequency" id="cleaning-frequency" class="cost-dropdown">
									<option value="">Choose...</option>
									<option value="0.4"<?php echo (isset($_POST["cleaning-frequency"]) && (float)$_POST["cleaning-frequency"]==0.4 ? ' selected="selected"' : ''); ?>>Weekly Service</option>
									<option value="0.8"<?php echo (isset($_POST["cleaning-frequency"]) && (float)$_POST["cleaning-frequency"]==0.8 ? ' selected="selected"' : ''); ?>>Bi-Weekly Service</option>
									<option value="1.2"<?php echo (isset($_POST["cleaning-frequency"]) && (float)$_POST["cleaning-frequency"]==1.2 ? ' selected="selected"' : ''); ?>>Tri-Weekly Service</option>
									<option value="1.6"<?php echo (isset($_POST["cleaning-frequency"]) && (float)$_POST["cleaning-frequency"]==1.6 ? ' selected="selected"' : ''); ?>>Quarter Weekly Service</option>
									<option value="0.1"<?php echo (isset($_POST["cleaning-frequency"]) && (float)$_POST["cleaning-frequency"]==0.1 ? ' selected="selected"' : ''); ?>>Monthly Service</option>
									<option value="0.2"<?php echo ((isset($_POST["cleaning-frequency"]) && (float)$_POST["cleaning-frequency"]==0.2) || !isset($_POST["cleaning-frequency"]) ? ' selected="selected"' : ''); ?>>One Time Service</option>
								</select>
								<input type="hidden" class="cleaning-frequency" name="cleaning-frequency-name" value="">
							</div>
						</fieldset>
					</div>
					<div class="row margin-top-30">
						<fieldset class="column column-2-3">
							<div class="cost-calculator-box margin-top-30 clearfix">
								<label>Additional rooms you would like us to clean:</label>
								<ul class="checkboxes-list">
									<li>
										<input type="hidden" value="Dining room" name="dining-room-label">
										<input type="checkbox" data-value="10" value="<?php echo (isset($_POST["dining-room"]) && (int)$_POST["dining-room"]==10 ? (int)$_POST["dining-room"] : 0); ?>"<?php echo (isset($_POST["dining-room"]) && (int)$_POST["dining-room"]==10 ? ' checked="checked"' : ''); ?> name="dining-room" class="cost-slider-input type-checkbox" id="dining-room">
										<label for="dining-room" class="checkbox-label template-bullet">Dining room</label>
									</li>
									<li>
										<input type="hidden" value="Play room" name="play-room-label">
										<input type="checkbox" data-value="15" value="<?php echo (isset($_POST["play-room"]) && (int)$_POST["play-room"]==15 ? (int)$_POST["play-room"] : 0); ?>"<?php echo (isset($_POST["play-room"]) && (int)$_POST["play-room"]==15 ? ' checked="checked"' : ''); ?> name="play-room" class="cost-slider-input type-checkbox" id="play-room">
										<label for="play-room" class="checkbox-label template-bullet">Play room</label>
									</li>
									<li>
										<input type="hidden" value="Laundry" name="laundry-label">
										<input type="checkbox" data-value="14" value="<?php echo (isset($_POST["laundry"]) && (int)$_POST["laundry"]==14 ? (int)$_POST["laundry"] : 0); ?>"<?php echo (isset($_POST["laundry"]) && (int)$_POST["laundry"]==14 ? ' checked="checked"' : ''); ?> name="laundry" class="cost-slider-input type-checkbox" id="laundry">
										<label for="laundry" class="checkbox-label template-bullet">Laundry</label>
									</li>
									<li>
										<input type="hidden" value="Gym" name="gym-label">
										<input type="checkbox" data-value="17" value="<?php echo (isset($_POST["gym"]) && (int)$_POST["gym"]==17 ? (int)$_POST["gym"] : 0); ?>"<?php echo (isset($_POST["gym"]) && (int)$_POST["gym"]==17 ? ' checked="checked"' : ''); ?> name="gym" class="cost-slider-input type-checkbox" id="gym">
										<label for="gym" class="checkbox-label template-bullet">Gym</label>
									</li>
									<li>
										<input type="hidden" value="Garage" name="garage-label">
										<input type="checkbox" data-value="20" value="<?php echo (isset($_POST["garage"]) && (int)$_POST["garage"]==20 ? (int)$_POST["garage"] : 0); ?>"<?php echo (isset($_POST["garage"]) && (int)$_POST["garage"]==20 ? ' checked="checked"' : ''); ?> name="garage" class="cost-slider-input type-checkbox" id="garage">
										<label for="garage" class="checkbox-label template-bullet">Garage</label>
									</li>
								</ul>
							</div>
						</fieldset>
						<fieldset class="column column-1-3">
							<div class="cost-calculator-box margin-top-30 clearfix">
								<label>Clean inside the refrigerator?</label>
								<label for="refrigerator-clean" class="cost-calculator-switch radius">
									<input type="hidden" value="Refrigerator clean?" name="refrigerator-clean-label">
									<input type="checkbox" data-value="20" value="<?php echo (isset($_POST["refrigerator-clean"]) && (int)$_POST["refrigerator-clean"]==20 ? (int)$_POST["refrigerator-clean"] : 0); ?>"<?php echo (isset($_POST["refrigerator-clean"]) && (int)$_POST["refrigerator-clean"]==20 ? ' checked="checked"' : ''); ?> name="refrigerator-clean" class="cost-slider-input type-checkbox" id="refrigerator-clean">
									<span class="cost-calculator-switch-slider"></span>
								</label>
							</div>
						</fieldset>
					</div>
					<div class="row align-center margin-top-60">
						<h3>Final cost</h3>
						<span class="cost-calculator-price after-border margin-top-15" id="final-service-cost"><span class="currency">$</span>0.00</span>
						<input type="hidden" id="final-service-cost-hidden" name="final-service-cost-hidden">
						<p class="page-margin-top">Enter your contact details. We will give you a call to finish up.</p>
					</div>
					
					
					
					
					<!--<div class="row flex-box gray margin-top-20">-->
					<!--	<fieldset class="column column-1-2">-->
					<!--		<label>YOUR NAME</label>-->
					<!--		<input class="text-input" name="name" type="text" value="">-->
					<!--		<label>YOUR EMAIL</label>-->
					<!--		<input class="text-input" name="email" type="text" value="">-->
					<!--		<label>YOUR PHONE</label>-->
					<!--		<input class="text-input" name="phone" type="text" value="">-->
					<!--	</fieldset>-->
					<!--	<fieldset class="column column-1-2">-->
					<!--		<label>QUESTIONS OR COMMENTS</label>-->
					<!--		<textarea name="message_calculator"></textarea>-->
					<!--	</fieldset>-->
					<!--</div>-->
					
					
					
					@include('layouts.default.template.sections.contact_section');
					
					
					<!--<div class="row margin-top-30">-->
					<!--	<div class="column column-1-1">-->
					<!--		<input type="hidden" name="action" value="contact_form" />-->
					<!--		<input type="hidden" name="form_type" value="service_calculator">-->
					<!--		<div class="row margin-top-15 padding-bottom-16 align-center">-->
					<!--			<a class="more submit-contact-form" href="#" title="Submit now">Submit now</a>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
				</form>
			</div>
		</div>
	</div>
</div>
@endsection