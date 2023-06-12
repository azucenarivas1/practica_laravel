

@include('proyecto.layout');
<form action="{{url('proyecto')}}" method="post">
    @csrf
    @include('proyecto.form');

</form>
