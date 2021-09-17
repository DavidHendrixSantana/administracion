<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
    <div >
    <h4>Tarjeta Informativa.</h4>
    <table  >
        <tr>
        <td>Nombre de la persona:</td>
        <td> {{$person->nombre}} </td>
        </tr>
        <tr>
        <td>Nombre del tutor:</td>
        <td>{{$person->tutor}} </td>
        </tr></td>
        </tr>
        <tr>
        <td>Edad:</td>
        <td>{{$person->edad}}</td>
        </tr>
        <tr>
        <td>Telefono:</td>
        <td>{{$person->telefono}}</td>
        </tr>
        <tr>
        <td>Nivel:</td>
        <td>{{$person->nivel}}</td>
        </tr>
        <tr>
        <td>Profesor:</td>
        <td>{{$person->teacher_id}}</td>
        </tr>
        <tr>
        <td>Horario:</td>
        <td>{{$person->schedule_id}}</td>
        </tr>
     
    </table>
</div>
</body>
</html>