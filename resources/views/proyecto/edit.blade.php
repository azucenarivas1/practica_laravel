@include('proyecto.layout');

<form action="{{url('proyecto/'.$proyecto->id)}}" method="post">

@csrf
@method("PATCH")

@include('proyecto.form');

</form>
