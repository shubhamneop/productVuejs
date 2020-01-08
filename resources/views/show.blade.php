@extends('master')
@section('content')
<product-show v-bind:product='@json($product)'></product-show>
@endsection