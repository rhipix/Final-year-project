
@extends('layouts.app')
@section('content')
    @extends('layouts.sidebar')
    @extends('layouts.homepagenav')
    @extends('styles.styling')

    <div class="container" id="create-order-form">
        <div class="panel panel-default col-md-3 col-lg-5 col-md-offset-2">

<div class="row">
<div class="col-md-3 col-lg-9 col-md-offset-2">
   <div class="container-fluid">
    <h1>New Order</h1>
   </div>

    <!--using laravel collective to create a csrf field to protect data and only authenticated users have access-->
    {!! Form::open(['route' =>'orders.store']) !!}
    <!--Item Name-->

    {{Form::label('itemName', 'Item Name:')}}
    {{Form::text('itemName', null, array('class'=> 'form-control'))}}
   <!--Quantity field-->
    {{Form::label('quantity', 'Quantity Needed:')}}
    {{Form::text('quantity', null, array ('class'=>'form-control'))}}

<!--Second item in order-->
    {{Form::label('itemName2', 'Item Name:')}}
    {{Form::text('itemName2', null, array('class'=> 'form-control'))}}
    <!--Quantity-->
    {{Form::label('quantity2', 'Quantity Needed:')}}
    {{Form::text('quantity2', null, array ('class' => 'form-control'))}}

<!--Third item in Order-->
    <!--Name-->
    {{Form::label('itemName3', 'Item Name:')}}
    {{Form::text('itemName3', null, array('class'=> 'form-control'))}}
    <!--Quantity needed-->
    {{Form::label('quantity3','Quantity Needed:')}}
    {{Form::text('quantity3', null, array('class'=> 'form-control'))}}

<!--Fourth item in order-->
    <!--Name-->
    {{Form::label('itemName4','Item Name:')}}
    {{Form::text('itemName4', null, array('class'=> 'form-control'))}}
   <!--Quantity needed-->
    {{Form::label('quantity4', 'Quantity Needed:')}}
    {{Form::text('quantity4', null, array('class'=> 'form-control'))}}

<!--Fifth item in order-->
    <!--Name-->
    {{Form::label('itemName5', 'Item Name:')}}
    {{Form::text('itemName5', null, array('class'=>'form-control'))}}
    <!--Quantity needed-->
    {{Form::label('quantity5', 'Quantity Needed:')}}
    {{Form::text('quantity5', null, array('class'=> 'form-control'))}}
    <hr>
    {{Form::label('date', 'Date of Order:')}}
    {{Form::date('date', \Carbon\Carbon::now())}}
<!--Submit button--><hr>
    {{Form::submit('Make a new order', array('class'=> 'btn btn-danger','id'=>'submit-button' ))}}
    {!! Form::close() !!}
</div>
</div>
</div>
        </div>



 @endsection



