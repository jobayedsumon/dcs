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
        <div class="row">
            <div class="col-8">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $cart_sub_total = 0; @endphp
                    @forelse($cart as $data)
                        @php
                            $product = \App\Models\product::findOrFail($data['product_id']);
                        @endphp


                        <tr>

                            <td style="display: flex; align-items: center;">
                                <a href="/cart/remove/{{ $data['cart_id'] }}"><i class="fa fa-trash-o mr-2"></i></a>
                                <div class="cartProduct">

                                    <img width="150px" height="100px" src="{{ asset('uploads/images/'.$product->image) }}" alt="">
                                    <span class="ml-3">{{ $product->title }}</span>
                                </div>

                            </td>
                            <td>
                                {{ $data['size'] }}
                            </td>
                            <td>
                               BDT {{ $data['price'] }}
                            </td>
                            <td style="text-align: center">
                                {{ $data['count'] }}
                            </td>
                            <td>
                                BDT {{ $amount = $data['count'] * $data['price'] }}
                                @php $cart_sub_total += $amount; @endphp
                            </td>
                        </tr>
                    @empty
                        <h1>No item in cart</h1>
                    @endforelse

                    @php session()->put('cart_sub_total', $cart_sub_total) @endphp


                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Cart Totals</th>
                        <th scope="col">Taka</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>Subtotal</td>
                        <td>BDT {{ session()->get('cart_sub_total') }}</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>BDT {{ session()->get('cart_sub_total') }}</td>
                    </tr>


                    </tbody>
                </table>

                <a href="/checkout" class="btn btn-primary">Proceed to Checkout</a>
            </div>
        </div>

    </div>






</div>

@endsection
