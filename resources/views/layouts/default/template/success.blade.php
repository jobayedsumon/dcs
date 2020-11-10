@extends('layouts.default.master')
@section('content')

<style>
.header clearfix li a{
color: #fff !important;
}
.sticky .sf-menu li a, sticky .sf-menu li a:visited {
    color: #fff;
}
.transition .sf-menu li a, transition .sf-menu li a:visited {
    color: #303030;
}
.sticky .sf-menu li a{
    color: #333;
}
.contact-details li {
    color: #333;
}
.contact-details li a {
    color: #333;
}
.row.gray {
    margin-top: 0;
}
.flex {
    display: flex !important;
}
.table {
    font-family: sans-serif;
    font-size: 16px;

    font-weight: bold;
}
.cartProduct {
    display: flex;
}
</style>
<div id="about_page" class="theme-page">
	<div class="row gray full-width page-header vertical-align-table">
		<div class="row">
			<div class="page-header-left">
				<h1>SHOPPING CART</h1>
			</div>
			<div class="page-header-right">
				<div class="bread-crumb-container">
					<ul class="bread-crumb">
						<li>
							<a title="Home" href="{{ url('/') }}">
								Home
							</a>
						</li>
						<li class="separator">
							&#47;
						</li>
						<li>
							Shopping Cart
						</li>
                        <li class="separator">
                            &#47;
                        </li>
                        <li>
                            Checkout Details
                        </li>
                        <li class="separator">
                            &#47;
                        </li>
                        <li>
                            Order Complete
                        </li>
					</ul>
				</div>
			</div>
		</div>
	</div>

    <div class="container">

        <h1 class="text-success">Your order has been placed successfully!</h1>

    </div>






</div>

@endsection
