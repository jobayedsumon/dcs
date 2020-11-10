@extends('layouts.default.master')
@section('content')

    <style>
        .header clearfix li a {
            color: #fff !important;
        }

        .sticky .sf-menu li a, sticky .sf-menu li a:visited {
            color: #fff;
        }

        .transition .sf-menu li a, transition .sf-menu li a:visited {
            color: #303030;
        }

        .sticky .sf-menu li a {
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

        label {
            margin-bottom: 10px;
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

        <form action="/place-order" method="POST" class="">
            @csrf

        <div class="container">
            <div class="row">
                <div class="col-7">



                        <h1 class="mb-3">Billing Details</h1>

                        <div class="form-group">
                            <label>Name <span>*</span></label>
                            <input class="form-control" required type="text" name="billing_name" value="">
                        </div>
                        <div class="form-group">
                            <label for="division">Division <span>*</span></label>
                            <select required class="select_option" name="billing_division" id="division">
                                <option value="{{ $division ?? '' }}">{{ $division ?? '' }}</option>
                                <option value="dhaka">Dhaka</option>
                                <option value="chittagong">Chittagong</option>
                                <option value="barisal">Barisal</option>
                                <option value="khulna">Khulna</option>
                                <option value="mymensingh">Mymensingh</option>
                                <option value="sylhet">Sylhet</option>
                                <option value="rangpur">Rangpur</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>District <span>*</span></label>
                            <input class="form-control" required type="text" name="billing_district"
                                   value="{{ $district ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>Town / City <span>*</span></label>
                            <input class="form-control" required type="text" name="billing_city" value="{{ $city ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label>Street address <span>*</span></label>
                            <input class="form-control" required name="billing_street"
                                   placeholder="House number and street name" value="{{ $street ?? '' }}" type="text">
                        </div>
                        <div class="form-group">
                            <label>Phone<span>*</span></label>
                            <input class="form-control" required name="billing_phone_number" type="text" value="">

                        </div>
                        <div class="form-group">
                            <label> Email Address <span>*</span></label>
                            <input class="form-control" required name="billing_email" type="email" value="">

                        </div>

                        <hr>

                        <div class="">
                            <input id="address" type="checkbox" name="shiiping_address" data-target="createp_account"/>
                            <label class="righ_0" for="address" data-toggle="collapse" data-target="#collapsetwo"
                                   aria-controls="collapseOne">Ship to a different address?</label>

                            <hr>

                            <div id="collapsetwo" class="collapse one" data-parent="#accordion">

                                <h1 class="mb-5">Shipping Details</h1>

                                <div class="form-group">
                                    <label>Name <span>*</span></label>
                                    <input class="form-control" type="text" name="shipping_name" value="">
                                </div>
                                <div class="form-group">
                                    <label for="division">Division <span>*</span></label>
                                    <select class="select_option" name="shipping_division" id="division">
                                        <option value="{{ $division ?? '' }}">{{ $division ?? '' }}</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="chittagong">Chittagong</option>
                                        <option value="barisal">Barisal</option>
                                        <option value="khulna">Khulna</option>
                                        <option value="mymensingh">Mymensingh</option>
                                        <option value="sylhet">Sylhet</option>
                                        <option value="rangpur">Rangpur</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>District <span>*</span></label>
                                    <input class="form-control" type="text" name="shipping_district"
                                           value="{{ $district ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Town / City <span>*</span></label>
                                    <input class="form-control" type="text" name="shipping_city"
                                           value="{{ $city ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Street address <span>*</span></label>
                                    <input class="form-control" name="shipping_street"
                                           placeholder="House number and street name" value="{{ $street ?? '' }}"
                                           type="text">
                                </div>
                                <div class="form-group">
                                    <label>Phone<span>*</span></label>
                                    <input class="form-control" name="shipping_phone_number" type="text" value="">

                                </div>
                                <div class="form-group">
                                    <label> Email Address <span>*</span></label>
                                    <input class="form-control" name="shipping_email" type="email" value="">

                                </div>


                            </div>
                        </div>
                        <div class="">
                            <div class="order-notes">
                                <label for="order_note">Order Notes</label>
                                <textarea id="order_note" name="order_notes"
                                          placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>



                </div>

                <div class="col-5">

                    <h1>Your Order</h1>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($cart as $data)
                            @php
                                $product = \App\Models\product::findOrFail($data['product_id']);
                            @endphp


                            <tr>

                                <td>

                                    <div style="    display: flex; flex-direction: column;">
                                        <span class="mb-2">{{ $product->title }}</span>
                                        <span>{{ $data['size'] }} x {{ $data['count'] }}</span>
                                    </div>


                                </td>
                                <td>
                                    BDT {{ $amount = $data['count'] * $data['price'] }}
                                </td>
                            </tr>
                        @empty
                            <h1>No item in cart</h1>
                        @endforelse

                        <tr>
                            <td>
                                Subtotal
                            </td>
                            <td>
                                {{ session()->get('cart_sub_total') }}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Total
                            </td>
                            <td>
                                {{ session()->get('cart_sub_total') }}
                            </td>
                        </tr>




                        </tbody>
                    </table>


                    <button type="submit" class="btn btn-primary">Place Order</button>

                </div>

            </div>

        </div>

        </form>

    </div>






@endsection
