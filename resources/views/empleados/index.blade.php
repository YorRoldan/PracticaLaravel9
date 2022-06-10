<h3>Soy la vista Index</h1>

<h1>{{$titulo}}</h1>
<!--El @forelse es como el forech solo que adicional te 
devuelve un texto sino encuentra ningún dato -->
@forelse ($empleados as $empleado)
    {{$empleado['nombre']}}
    <br>
    <br>
@empty
    No hay empleados
@endforelse