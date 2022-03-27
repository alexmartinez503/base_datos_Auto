<h2>Nuevo Auto</h2>
<form action="{{url('pet')}}" method="post">
    @csrf
    @include('pets.form')

</form>