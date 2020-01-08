@extends('master')
@section('content')
<product-list v-bind:products='@json($products)'></product-list>
@endsection