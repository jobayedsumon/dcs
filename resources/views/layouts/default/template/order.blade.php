@extends('layouts.default.master')
@section('content')

<div class="row">
    <div class="column column-1-3"></div>  
    <div class="column column-1-3">
        <div class="myform">
            <form action="#" method="post">
                @csrf
                <input type="text" name="name" placeholder="Name..">
                <input type="text" name="name" placeholder="Name..">
                <input type="text" name="name" placeholder="Name..">
            </form>
        </div>
    </div> 
    <div class="column column-1-3"></div> 
</div>
@endsection