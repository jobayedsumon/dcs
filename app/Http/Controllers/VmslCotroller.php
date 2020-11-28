<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Order;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Categories;
use App\Models\Testimonial;
use App\Models\Ourbrand;
use App\Models\Dcsfaq;
use App\Models\Dcsgallary;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Membershipaccreditation;


use DB;

use Illuminate\Support\Facades\Mail;
use function Sodium\compare;

class VmslCotroller extends Controller{

public function home(){

    $data['title'] = "Home | DCS-Organization Ltd.";
	$data['slider'] = Slider::where('status', 1)->orderby('id', 'DESC')->get();
	$data['service'] = Service::where('status', 1)->orderby('id', 'DESC')->get();
	$data['featuredServices'] = Categories::where('status', 1)->where('is_featured', 1)->orderby('priority', 'ASC')->get();
	$data['testimonial'] = Testimonial::where('status', 1)->orderby('id', 'DESC')->get();
	$data['portfolios'] = Portfolio::orderby('id', 'DESC')->get();
	$data['posts'] = DB::table('tb_pages')->where('status', 'enable')->where('pagetype', 'post')->orderby('pageID', 'DESC')->limit(20)->get();
	$data['clients'] = Ourbrand::where('status', 1)->orderby('id', 'DESC')->get();
	$data['faqs'] = Dcsfaq::where('status', 1)->orderby('id', 'DESC')->limit(6)->get();
	$data['membership'] = Membershipaccreditation::where('status', 1)->orderby('id', 'DESC')->get();
	$data['gallarys'] = Dcsgallary::where('status', 1)->orderby('id', 'DESC')->get();
	return view('layouts.default.template.home', $data);
}

public function search(Request $request)
{
    $query = $request->input('query');

    $services = Service::where('name', 'LIKE', '%'.$query.'%')->where('status', 1)->get();
    $products = Product::where('title', 'LIKE', '%'.$query.'%')->where('status', 1)->get();

    $clients = Ourbrand::where('status', 1)->orderby('id', 'DESC')->get();

    return view('layouts.default.template.search', compact('services', 'products', 'clients'));


}

public function SingleService($id=null, $limit=null){
    $data['title'] = "Service | DCS-Organization Ltd.";
    $category = Categories::where('id', $id)->first();
    if($category->type == 1){
        $data['SingleProduct'] = Product::where('catergory_id', $id);
        $data['SingleService'] = Service::where('category', $id)->first();
    }elseif($category->type == 2){
        $data['SingleService'] = Service::where('category', $id)->first();
    }
	$data['all_category'] = Categories::where('parent_id', '>', 0)->limit(10)->get();
	$data['id'] = $id;


    if ($category->title == 'Pest Control Services') {
        return view('layouts.default.template.pest_control_service', $data);
    } else {
        return view('layouts.default.template.single_service', $data);
    }

}

public function not_found_page(){
	return view('layouts.default.template.404');
}

public function testimonial_page(){
    $data['title'] = "Testimonial | DCS-Organization Ltd.";
	$data['testimonial'] = Testimonial::where('status', 1)->orderby('id', 'DESC')->get();
	$data['ourbrand'] = Ourbrand::where('status', 1)->orderby('id', 'DESC')->get();
	return view('layouts.default.template.testimonial', $data);
}


public function services_page(){
    $data['title'] = "Service | DCS-Organization Ltd.";

	$data['service'] = DB::table('category')
         ->where('category.type', '!=', 0)
        ->orderBy('priority', 'ASC')
        ->paginate(6);
	return view('layouts.default.template.service', $data);
}
public function service_by_primary_cat($id=null){
     $data['title'] = "Service | DCS-Organization Ltd.";
    $data['service'] = DB::table('category')->where('parent_id', $id)->orderBy('priority', 'ASC')->paginate(6);
	return view('layouts.default.template.service', $data);
}
public function about_page(){
    $data['title'] = "About | DCS-Organization Ltd.";
	$data['ourbrand'] = Ourbrand::where('status', 1)->orderby('id', 'DESC')->get();
	$data['testimonial'] = Testimonial::where('status', 1)->orderby('id', 'DESC')->get();
	return view('layouts.default.template.about', $data);
}

public function contact_page(){
    $data['title'] = "Contact | DCS-Organization Ltd.";
	return view('layouts.default.template.contact',  $data);
}


public function contact_message(Request $request){

        $rules = [
            'fname' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
        $customMessages = [
            'fname.required' => 'First name field is required.',
            'email.required' => 'Email field is required.',
            'message.required' => 'Sessage field is required.',
        ];
        if ($this->validate($request, $rules, $customMessages)) {
            $insert['name']    = $request->fname;
            $insert['lname']    = $request->lname;
            $insert['email']   = $request->email;
            $insert['phone']   = $request->phone;
            $insert['message'] = $request->message;
            DB::table('contact')->insert($insert);


            Mail::send('contact_email' ,
                array(
                    'name' => $request->fname . ' ' . $request->lname,
                    'email' => $request->email,
                    'user_message' => $request->message,
                ), function($message) use ($request)
                {
                    $message->from('contact@dcsorgbd.com');
                    $message->to('hello@dcsorgbd.com');
                    $message->subject('DCS Contact');

                });

            return redirect()->back()->with('message', "Message send Successfully..!");


        }

}


public function faq_page(){
    $data['title'] = "Faq | DCS-Organization Ltd.";
	$data['commercial_faq']  = Dcsfaq::where('status', 1)->where('type', 1)->orderby('id', 'DESC')->get();
	$data['residential_faq']  = Dcsfaq::where('status', 1)->where('type', 2)->orderby('id', 'DESC')->get();
	return view('layouts.default.template.faq', $data);
}
public function single_gallery($id=null){
    $data['title'] = "Gallary | DCS-Organization Ltd.";
	$data['single_gallery']  = Gallary::where('id', $id)->where('status', 1)->first();
	return view('layouts.default.template.single_gallery', $data);
}


public function portfolio_page(){
$data['title'] = "Portfolio | DCS-Organization Ltd.";
$data['Portfolios'] = Portfolio::orderby('id', 'DESC')->paginate(18);
return view('layouts.default.template.portfolio', $data);
}

public function calculator_page(){
    $data['title'] = "Calculator | DCS-Organization Ltd.";
    return view('layouts.default.template.calculator', $data);
}

public function order($id){
     $data['title'] = "Order | DCS-Organization Ltd.";
     return view('layouts.default.template.order', $data);
}

public function membership(){
    $data['title'] = "Membership and Accreditation | DCS-Organization Ltd.";
	$data['clients'] = Ourbrand::where('status', 1)->orderby('id', 'DESC')->get();
	$data['membership'] = Membershipaccreditation::where('status', 1)->orderby('id', 'DESC')->get();
     return view('layouts.default.template.membership', $data);
}

public function careerList(){
    $data['title'] = "Vacancy Announcement | DCS-Organization Ltd.";
	$data['clients'] = Ourbrand::where('status', 1)->orderby('id', 'DESC')->get();
	$data['circular'] = DB::table('con_circular')->orderby('id', 'DESC')->get();

    return view('layouts.default.template.career', $data);
}

 public function savecareer(Request $request ){

    $file = $request->file('cv');
    $this->validate($request, [
        'firstname' => 'required',
        'lastname'=>'required',
        'email'=>'required | email',
        'phone'=>'required',
        'job_post'=>'required',
        'cv'=>'required | mimes:doc,docx,pdf'
    ]);

    $allowedfileExtension=['pdf','doc','docx'];
    $extension = $file->getClientOriginalExtension();
    $check = in_array($extension,$allowedfileExtension);

    if($check){
        $data = array_map('strip_tags', $request->input());
        unset($data['job_title']);
        if($request->hasFile('cv')){
            $newName = round(microtime(true)+rand(11,99)).'.'.$extension;
            $data ['cv'] = $newName;

            $destinationPath = 'uploads/cv';
            $uploaded = $file->move($destinationPath,$newName);
            if($uploaded){
                $response =  DB::table('con_career')->insert($data);
                $emailVars = [];
                $emailVars['firstname'] = $request->input('firstname');
                $emailVars['job_title'] = $request->input('job_title');
                $emailVars['company'] = $this->config['cnf_appname'];
                $recipient = $request->input('email');
                $message = view('emails.career_request',array('data'=> $emailVars));
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: '.$this->config['cnf_appname'].' < career@dcs.vmsl.website >' . "\r\n";
                mail($recipient, 'Thank You For Your Application', $message, $headers);
            }
        }
    }

    if($response){
        return redirect()->back()->with('success', 'Successfully submitted your request. Please check your email for further procedure.');
    }

}


public function career(Request $req ){
        $data = [];
        $modelData = DB::table('con_circular')->where('id',$req->id)->first();

        if(count($modelData) > 0){
            $data['career'] = $modelData;
            $data['title'] = $modelData->title ;
    	    return view('layouts.default.template.career_view',$data);
        }else{
            $data['title'] = '404' ;
			return view('layouts.default.template.404',$data);
        }

}

public function booking_form()
{

    $data['title'] = "Home | DCS-Organization Ltd.";
    $data['slider'] = Slider::where('status', 1)->orderby('id', 'DESC')->get();
    $data['service'] = Service::where('status', 1)->where('is_featured', 1)->orderby('id', 'DESC')->get();
    $data['testimonial'] = Testimonial::where('status', 1)->orderby('id', 'DESC')->get();
    $data['portfolios'] = Portfolio::orderby('id', 'DESC')->get();
    $data['posts'] = DB::table('tb_pages')->where('status', 'enable')->where('pagetype', 'post')->orderby('pageID', 'DESC')->limit(20)->get();
    $data['clients'] = Ourbrand::where('status', 1)->orderby('id', 'DESC')->get();
    $data['faqs'] = Dcsfaq::where('status', 1)->orderby('id', 'DESC')->limit(6)->get();
    $data['membership'] = Membershipaccreditation::where('status', 1)->orderby('id', 'DESC')->get();
    $data['gallarys'] = Dcsgallary::where('status', 1)->orderby('id', 'DESC')->get();


    return view('bookingcontroller.public.form', $data);
}

    public function loadModal($id)
    {
        $product = product::where('id', $id)->first();

        return view('modal_body', compact('product'));
    }


    public function addCart(Request $request)
    {
        $cart = session()->get('cart');
        $cart_sub_total = session()->get('cart_sub_total') ??  0;
        $cart_quantity = session()->get('cart_quantity') ??  0;

        $sizes = $request->size;
        $counts = $request->count;
        $prices = $request->price;

        foreach ($counts as $i => $count) {
            if ($count != 0) {
                $cart[] = array(
                    'cart_id' => uniqid(),
                    'product_id' => $request->product_id,
                    'size' => $sizes[$i],
                    'count' => $count,
                    'price' => $prices[$i],
                );
            }
        }




        session()->put('cart', $cart);

        session()->put('cart_sub_total', $cart_sub_total);

        return redirect('/cart');


    }

    public function showCart()
    {
        $cart = session()->get('cart');
        return view('layouts.default.template.cart', compact('cart'));
    }

    public function remove_cart($cartId)
    {
        $cart = session()->get('cart');
        $cart_sub_total = session()->get('cart_sub_total') ??  0;

        foreach ($cart as $i => $data) {
            if ($data['cart_id'] == $cartId) {
                unset($cart[$i]);
            }
        }

        session()->put('cart', $cart);

        return redirect('/cart');
    }

    public function checkout()
    {
        $cart = session()->get('cart');
        return view('layouts.default.template.checkout', compact('cart'));
    }

    public function place_order(Request $request)
    {

        if (!session()->has('cart')) {
            return redirect('/');
        }

        $cart_sub_total = session()->get('cart_sub_total');
        $cart = session()->get('cart');
        $count = count($cart) ?? [];

        if ($count <= 0 || $cart_sub_total <= 0) {
            session()->put('msg', 'An error occurred while processing your order!');
            session()->forget(['cart', 'cart_sub_total']);
            return view('layouts.default.template.cart');
        }

        if ($request->shipping_address) {

            $shipping_name = $request->shipping_name;
            $shipping_phone_number = $request->shipping_phone_number;
            $shipping_email = $request->shipping_email;
            $shipping_division = $request->shipping_division;
            $shipping_city = $request->shipping_city;
            $shipping_district = $request->shipping_district;
            $shipping_street = $request->shipping_street;

        } else {
            $shipping_name = $request->billing_name;
            $shipping_phone_number = $request->billing_phone_number;
            $shipping_email = $request->billing_email;
            $shipping_division = $request->billing_division;
            $shipping_city = $request->billing_city;
            $shipping_district = $request->billing_district;
            $shipping_street = $request->billing_street;
        }

        $order_notes = $request->order_notes;

        for ($i=0; $i<$count; $i++) {

            \Illuminate\Support\Facades\DB::table('orders')->insert([
                'product_id' => (int)$cart[$i]['product_id'],
                'size' => $cart[$i]['size'],
                'count' => (int)$cart[$i]['count'],
                'price' => (int)$cart[$i]['price'],
                'total' => (int)$cart[$i]['count'] * (int)$cart[$i]['price'],
                'billing_name' => $request->billing_name,
                'billing_phone_number' => $request->billing_phone_number,
                'billing_email' => $request->billing_email,
                'billing_city' => $request->billing_city,
                'billing_division' => $request->billing_division,
                'billing_district' => $request->billing_district,
                'billing_street' => $request->billing_street,
                'shipping_name' => $shipping_name,
                'shipping_phone_number' => $shipping_phone_number,
                'shipping_email' => $shipping_email,
                'shipping_division' => $shipping_division,
                'shipping_city' => $shipping_city,
                'shipping_district' => $shipping_district,
                'shipping_street' => $shipping_street,
                'order_notes' => $request->order_notes,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        session()->put('msg', 'Order placed successfully!');

        session()->forget(['cart', 'cart_sub_total']);

        return view('layouts.default.template.success');



    }






}?>
