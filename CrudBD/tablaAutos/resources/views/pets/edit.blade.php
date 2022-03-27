<h1>editar datos de mascotas</h1>
 <form action="{{url('/pet/'.$pet->id)}}" method="POST">
     @csrf
     {{method_field('PUT')}}
     @include('pets.form')
 </form>