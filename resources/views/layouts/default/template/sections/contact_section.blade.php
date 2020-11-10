		<div class="row page-margin-top">
			<form class="contact-form" id="contact-form" method="post" action="{{ route('contact.page.message') }}">
				@csrf
				<div class="row flex-box">
					<fieldset class="column column-1-2">
						<label>YOUR NAME</label>
						<input class="text-input" name="name" type="text" value="">
						<small class="text-danger">{{ $errors->first('name') }}</small>
						<label>YOUR EMAIL</label>
						<input class="text-input" name="email" type="text" value="">
						<small class="text-danger">{{ $errors->first('email') }}</small>
						<label>YOUR PHONE</label>
						<input class="text-input" name="phone" type="text" value="">
					</fieldset>
					<fieldset class="column column-1-2">
						<label>MESSAGE</label>
						<textarea name="message"></textarea>
						<small class="text-danger">{{ $errors->first('message') }}</small>
					</fieldset>
				</div>

				<div class="row">
					<div class="col-md-12">
	                    @if(Session::has('message'))
	                        <p class="alert alert-success" style="margin-top:10px; color: green; font-style: italic;font-size: 18px;">{{ Session::get('message') }}</p>
	                    @endif
	                </div>
	            </div>
				<div class="row margin-top-30">
					<div class="column column-1-1">
						<input type="hidden" name="action" value="contact_form" />
						<div class="row margin-top-15 padding-bottom-16 align-center">
							<input class="more submit-contact-form" type="submit" value="Send message">
						</div>
					</div>
				</div>
			</form>
		</div>