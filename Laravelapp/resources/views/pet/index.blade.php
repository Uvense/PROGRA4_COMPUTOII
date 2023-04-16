Listado de mascotas 
<a href="{{url('pet/create')}}"> AGREGAR REGISTRO</A>
<table>
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Actions</th>

</thead>
<tbody>
    @foreach($pets as $pet)

    <tr>
        <td> {{$pet->id }}</td>
        <td> {{$pet->name}}</td>
        <td>{{$pet->age}}</td>

    <form method="POST" action="{{url('/pet/'.$pet->id)}}">
        <td>
        <a href="{{route('pet.edit', $pet->id)}}">Editar</a>
        </td>
        @csrf
        {{ method_field('DELETE')}} 
        <td>
            <input type="submit" onclick="return confirm('Desea borrar el registro')" value="Eliminar">
</td>

</form>
    </tr>
    @endforeach
</tbody>
</table>