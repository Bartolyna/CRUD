@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/acta') }}" method="post" enctype="multipart/form-data">
@csrf

@include('acta.form',['modo'=>'Crear'])

</form>

</div>
@endsection