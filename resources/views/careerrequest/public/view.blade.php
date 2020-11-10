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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Firstname', (isset($fields['firstname']['language'])? $fields['firstname']['language'] : array())) }}</td>
						<td>{{ $row->firstname}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lastname', (isset($fields['lastname']['language'])? $fields['lastname']['language'] : array())) }}</td>
						<td>{{ $row->lastname}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Phone', (isset($fields['phone']['language'])? $fields['phone']['language'] : array())) }}</td>
						<td>{{ $row->phone}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cv', (isset($fields['cv']['language'])? $fields['cv']['language'] : array())) }}</td>
						<td>{{ $row->cv}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cover Letter', (isset($fields['cover_letter']['language'])? $fields['cover_letter']['language'] : array())) }}</td>
						<td>{{ $row->cover_letter}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Job Post', (isset($fields['job_post']['language'])? $fields['job_post']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->job_post,'job_post','1:con_circular:id:title') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->status,'status','1:con_status:id:name') }} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	