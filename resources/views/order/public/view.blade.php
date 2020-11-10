<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product Id', (isset($fields['product_id']['language'])? $fields['product_id']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->product_id,'product_id','1:product:id:title') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Size', (isset($fields['size']['language'])? $fields['size']['language'] : array())) }}</td>
						<td>{{ $row->size}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Price', (isset($fields['price']['language'])? $fields['price']['language'] : array())) }}</td>
						<td>{{ $row->price}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Count', (isset($fields['count']['language'])? $fields['count']['language'] : array())) }}</td>
						<td>{{ $row->count}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total', (isset($fields['total']['language'])? $fields['total']['language'] : array())) }}</td>
						<td>{{ $row->total}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Billing Name', (isset($fields['billing_name']['language'])? $fields['billing_name']['language'] : array())) }}</td>
						<td>{{ $row->billing_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Billing Division', (isset($fields['billing_division']['language'])? $fields['billing_division']['language'] : array())) }}</td>
						<td>{{ $row->billing_division}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Billing District', (isset($fields['billing_district']['language'])? $fields['billing_district']['language'] : array())) }}</td>
						<td>{{ $row->billing_district}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Billing City', (isset($fields['billing_city']['language'])? $fields['billing_city']['language'] : array())) }}</td>
						<td>{{ $row->billing_city}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Billing Street', (isset($fields['billing_street']['language'])? $fields['billing_street']['language'] : array())) }}</td>
						<td>{{ $row->billing_street}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Billing Phone Number', (isset($fields['billing_phone_number']['language'])? $fields['billing_phone_number']['language'] : array())) }}</td>
						<td>{{ $row->billing_phone_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Billing Email', (isset($fields['billing_email']['language'])? $fields['billing_email']['language'] : array())) }}</td>
						<td>{{ $row->billing_email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Shipping Name', (isset($fields['shipping_name']['language'])? $fields['shipping_name']['language'] : array())) }}</td>
						<td>{{ $row->shipping_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Shipping Division', (isset($fields['shipping_division']['language'])? $fields['shipping_division']['language'] : array())) }}</td>
						<td>{{ $row->shipping_division}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Shipping City', (isset($fields['shipping_city']['language'])? $fields['shipping_city']['language'] : array())) }}</td>
						<td>{{ $row->shipping_city}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Shipping District', (isset($fields['shipping_district']['language'])? $fields['shipping_district']['language'] : array())) }}</td>
						<td>{{ $row->shipping_district}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Shipping Street', (isset($fields['shipping_street']['language'])? $fields['shipping_street']['language'] : array())) }}</td>
						<td>{{ $row->shipping_street}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Shipping Phone Number', (isset($fields['shipping_phone_number']['language'])? $fields['shipping_phone_number']['language'] : array())) }}</td>
						<td>{{ $row->shipping_phone_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Shipping Email', (isset($fields['shipping_email']['language'])? $fields['shipping_email']['language'] : array())) }}</td>
						<td>{{ $row->shipping_email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Order Notes', (isset($fields['order_notes']['language'])? $fields['order_notes']['language'] : array())) }}</td>
						<td>{{ $row->order_notes}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	