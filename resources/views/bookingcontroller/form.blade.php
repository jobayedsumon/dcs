@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'bookingcontroller?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">

			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm btn-default  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm btn-default"  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button>
				</div>
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-default  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>
			</div>
		</div>
	</div>


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		<div class="row">
	<div class="col-md-12">
						<fieldset><legend> Bookings</legend>

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
										<label for="Name" class=" control-label col-md-4 text-left"> Name </label>
										<div class="col-md-6">
										  <input  type='text' name='name' id='name' value='{{ $row['name'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email </label>
										<div class="col-md-6">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="Phone Number" class=" control-label col-md-4 text-left"> Phone Number </label>
										<div class="col-md-6">
										  <input  type='text' name='phone_number' id='phone_number' value='{{ $row['phone_number'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="Zip" class=" control-label col-md-4 text-left"> Zip </label>
										<div class="col-md-6">
										  <input  type='text' name='zip' id='zip' value='{{ $row['zip'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="City" class=" control-label col-md-4 text-left"> City </label>
										<div class="col-md-6">
										  <input  type='text' name='city' id='city' value='{{ $row['city'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="Service Id" class=" control-label col-md-4 text-left"> Service Id </label>
										<div class="col-md-6">
										  <input  type='text' name='service_id' id='service_id' value='{{ $row['service_id'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="Special Notes" class=" control-label col-md-4 text-left"> Special Notes </label>
										<div class="col-md-6">
										  <textarea name='comments' rows='5' id='comments' class='form-control form-control-sm '
				           >{{ $row['comments'] }}</textarea>
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
									  </div> </fieldset></div>

		</div>

		<input type="hidden" name="action_task" value="save" />

		</div>
	</div>
	{!! Form::close() !!}

   <script type="text/javascript">
	$(document).ready(function() {





		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("bookingcontroller/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();
			return false;
		});

	});
	</script>
@stop
