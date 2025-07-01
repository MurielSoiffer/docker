<table border="1">
    <tr>
        <th>id</th>
        <th>nombre</th>
    </tr>
@foreach ($paises as $pais)
    <tr>
        <td>{{ $pais ->id}}</td>
        <td>{{ $pais ->nombre}}</td>
    </tr>
    
@endforeach
</table>