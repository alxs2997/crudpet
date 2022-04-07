<h1>Listado De Mascotas</h1>
<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
    </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->age }}</td>
            @endforeach
            </tr>
        </tbody>
</table>