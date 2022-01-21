
<form action="{{ url('/acta/'.$acta->id) }} " method="post" enctype="multipart/form-data">

    @csrf
    {{ method_field('PATCH') }}
    @include('acta.form')

</form>