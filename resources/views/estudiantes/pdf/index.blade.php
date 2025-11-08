<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reporte PDF</title>
    </head>
    <body>
        <h1>Reporte de Estudinates</h1>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>CÓDIGO</th>
                        <th>NOMBRES</th>
                        <th>PRI_APE</th>
                        <th>SEG_APE</th>
                        <th>DNI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estudiantes as $estudiante)
                        <tr>
                            <td>{{ $estudiante->codigo }}</td>
                            <td>{{ $estudiante->nombres }}</td>
                            <td>{{ $estudiante->pri_ape }}</td>
                            <td>{{ $estudiante->seg_ape }}</td>
                            <td>{{ $estudiante->dni }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>