<h1>Listado de Autos</h1>
<a href="{{url('/pet/create/')}}">Crear</a>
<table>
<thead>
    <tr>
        <td>#</td>
        <td>marca</td>
        <td>Precio</td>
        <td>Modelo</td>
        <td>N° de placa</td>
        <td>Color</td>
        <td></td>
    </tr>
</thead>
<tbody>
    @foreach($pets as $pet)
    <tr>
        <td>{{$pet->id}}</td>
        <td>{{$pet->marca}}</td>
        <td>{{$pet->precio}}</td>
        <td>{{$pet->modelo}}</td>
        <td>{{$pet->placa}}</td>
        <td>{{$pet->color}}</td>
        <td>
            <a href="{{url('/pet/'.$pet->id.'/edit')}}">editar</a>
        
        </td>

        <td>
            <form action="{{url('/pet/'.$pet->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" value="eliminar"
                onclick="return confirm('desea eliminar el registro?')">
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

</table>