

		 {!! Form::open(array('url'=>'order', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Order</legend>
									
									  <div class="form-group row  " >
										<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
										<div class="col-md-6">
										  <input  type='text' name='id' id='id' value='{{ $row['id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Product Id" class=" control-label col-md-4 text-left"> Product Id </label>
										<div class="col-md-6">
										  <input  type='text' name='product_id' id='product_id' value='{{ $row['product_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Size" class=" control-label col-md-4 text-left"> Size </label>
										<div class="col-md-6">
										  <input  type='text' name='size' id='size' value='{{ $row['size'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Price" class=" control-label col-md-4 text-left"> Price </label>
										<div class="col-md-6">
										  <input  type='text' name='price' id='price' value='{{ $row['price'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Count" class=" control-label col-md-4 text-left"> Count </label>
										<div class="col-md-6">
										  <input  type='text' name='count' id='count' value='{{ $row['count'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Total" class=" control-label col-md-4 text-left"> Total </label>
										<div class="col-md-6">
										  <input  type='text' name='total' id='total' value='{{ $row['total'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Billing Name" class=" control-label col-md-4 text-left"> Billing Name </label>
										<div class="col-md-6">
										  <input  type='text' name='billing_name' id='billing_name' value='{{ $row['billing_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Billing Division" class=" control-label col-md-4 text-left"> Billing Division </label>
										<div class="col-md-6">
										  <input  type='text' name='billing_division' id='billing_division' value='{{ $row['billing_division'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Billing District" class=" control-label col-md-4 text-left"> Billing District </label>
										<div class="col-md-6">
										  <input  type='text' name='billing_district' id='billing_district' value='{{ $row['billing_district'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Billing City" class=" control-label col-md-4 text-left"> Billing City </label>
										<div class="col-md-6">
										  <input  type='text' name='billing_city' id='billing_city' value='{{ $row['billing_city'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Billing Street" class=" control-label col-md-4 text-left"> Billing Street </label>
										<div class="col-md-6">
										  <input  type='text' name='billing_street' id='billing_street' value='{{ $row['billing_street'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Billing Phone Number" class=" control-label col-md-4 text-left"> Billing Phone Number </label>
										<div class="col-md-6">
										  <input  type='text' name='billing_phone_number' id='billing_phone_number' value='{{ $row['billing_phone_number'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Billing Email" class=" control-label col-md-4 text-left"> Billing Email </label>
										<div class="col-md-6">
										  <input  type='text' name='billing_email' id='billing_email' value='{{ $row['billing_email'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Shipping Name" class=" control-label col-md-4 text-left"> Shipping Name </label>
										<div class="col-md-6">
										  <input  type='text' name='shipping_name' id='shipping_name' value='{{ $row['shipping_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Shipping Division" class=" control-label col-md-4 text-left"> Shipping Division </label>
										<div class="col-md-6">
										  <input  type='text' name='shipping_division' id='shipping_division' value='{{ $row['shipping_division'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Shipping City" class=" control-label col-md-4 text-left"> Shipping City </label>
										<div class="col-md-6">
										  <input  type='text' name='shipping_city' id='shipping_city' value='{{ $row['shipping_city'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Shipping District" class=" control-label col-md-4 text-left"> Shipping District </label>
										<div class="col-md-6">
										  <input  type='text' name='shipping_district' id='shipping_district' value='{{ $row['shipping_district'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Shipping Street" class=" control-label col-md-4 text-left"> Shipping Street </label>
										<div class="col-md-6">
										  <input  type='text' name='shipping_street' id='shipping_street' value='{{ $row['shipping_street'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Shipping Phone Number" class=" control-label col-md-4 text-left"> Shipping Phone Number </label>
										<div class="col-md-6">
										  <input  type='text' name='shipping_phone_number' id='shipping_phone_number' value='{{ $row['shipping_phone_number'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Shipping Email" class=" control-label col-md-4 text-left"> Shipping Email </label>
										<div class="col-md-6">
										  <input  type='text' name='shipping_email' id='shipping_email' value='{{ $row['shipping_email'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Order Notes" class=" control-label col-md-4 text-left"> Order Notes </label>
										<div class="col-md-6">
										  <textarea name='order_notes' rows='5' id='order_notes' class='form-control form-control-sm '  
				           >{{ $row['order_notes'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Updated At" class=" control-label col-md-4 text-left"> Updated At </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('updated_at', $row['updated_at'],array('class'=>'form-control form-control-sm datetime')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div>
				 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Created At" class=" control-label col-md-4 text-left"> Created At </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('created_at', $row['created_at'],array('class'=>'form-control form-control-sm datetime')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div>
				 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
