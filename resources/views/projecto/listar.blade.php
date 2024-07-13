<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>projecto</h1>
        <a href="{{ route('project.create') }}" class="btn btn-primary " style="backgrand-color:red;">crear projecto</a>
        <table class="table" >
            <td>
                <h4>codigo
            </td>
            <td>
                <h4>numero social
            </td>
            <td>
                <h4>telefono
            </td>
            <td>
                <h4>domicilio
            </td>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->codigo }}</td>
                    
                    <td>{{ $project->cuantia}}</td>
                    <td>{{ $project->descripcion}} </td>
                    <td>{{ $project->fecha_inicio}} </td>
                    <td>{{ $project->fecha_fin}} </td>
                    <td><a href="{{ route('project.show', $project->id) }}" style="text-decoration: none">Mostrar</a></td>
                    <td><a href="{{ route('project.edit', $project->id) }}" style="text-decoration: none">Editar</a></td>
                    <td>
                        <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
    
</body>
</html>