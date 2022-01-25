<form action="{{ url('/acta') }}" method="post" enctype="multipart/form-data">
@csrf

@include('acta.form',['modo'=>'Crear'])

</form>