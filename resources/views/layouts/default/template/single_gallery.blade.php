@extends('layouts.default.master')
@section('content')


<div class="theme-page padding-bottom-100">
	<div class="row gray full-width page-header vertical-align-table">
		<div class="row">
			<div class="page-header-left">
				<h1>{{ $single_gallery->title }}</h1>
			</div>
			<div class="page-header-right">
				<div class="bread-crumb-container">
					<ul class="bread-crumb">
						<li>
							<a title="Home" href="?page=home">
								Home
							</a>
						</li>
						<li class="separator">
							&#47;
						</li>
						<li>
							<a title="Home" href="{{ route('gallery.page') }}">
								Gallery
							</a>
						</li>
						<li class="separator">
							&#47;
						</li>
						<li>
							{{ $single_gallery->title }}
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<div class="row page-margin-top-section">
			<div class="column column-2-3">
				<div class="row">
					<div class="column column-1-2">
						<a href="{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[0]  }}" class="prettyPhoto cm-preload" title="{{ $single_gallery->title }}">
							<img src='{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[0]  }}' alt='img'>
						</a>
					</div>
					<div class="column column-1-2">
						<a href="{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[1]  }}" class="prettyPhoto cm-preload" title="{{ $single_gallery->title }}">
							<img src='{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[1]  }}' alt='img'>
						</a>
					</div>
				</div>
				<div class="row margin-top-30">
					<a href="{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[2]  }}" class="prettyPhoto cm-preload" title="{{ $single_gallery->title }}">
						<img src='{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[2]  }}' alt='img'>
					</a>
				</div>
				<div class="row margin-top-30">
					<div class="column column-1-2">
						<a href="{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[3]  }}" class="prettyPhoto cm-preload" title="{{ $single_gallery->title }}">
							<img src='{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[3]  }}' alt='img'>
						</a>
					</div>
					<div class="column column-1-2">
						<a href="{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[4]  }}" class="prettyPhoto cm-preload" title="{{ $single_gallery->title }}">
							<img src='{{ asset('') }}images/gallery/{{ explode(',',$single_gallery->image)[4]  }}' alt='img'>
						</a>
					</div>
				</div>
			</div>
			<div class="column column-1-3">
				<h3>PROJECT OVERVIEW</h3>
				{!! $single_gallery->description !!}

				<h5 class="margin-top-23">Project details</h5>
				<table class="margin-top-33 gray-first">
					<tbody>
						<tr>
							<td>Project type</td>
							<td>{{ Helper::get_gallery_type($single_gallery->type) }}</td>
						</tr>
						<tr>
							<td>Client</td>
							<td>{{ $single_gallery->client }}</td>
						</tr>
						<tr>
							<td>Completion date</td>
							<td>{{ $single_gallery->complete_date }}</td>
						</tr>
					</tbody>
				</table>
				<h5 class="margin-top-42">Scope of work</h5>
				<p class="margin-top-27 padding-0">Founded in 1995 we became one of the leading providers of residential and commercial cleaning solutions in Canada and United States.</p>
				<ul class="list margin-top-20">
					<li class="template-tick-1">Offer a different kind of services.</li>
					<li class="template-tick-1">Deliver high quality and consistent services.</li>
					<li class="template-tick-1">Use environmentall friendly cleaning products.</li>
				</ul>
			</div>
		</div>
	</div>
</div>

@endsection