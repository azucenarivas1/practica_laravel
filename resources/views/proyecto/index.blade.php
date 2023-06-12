
@include('proyecto.layout');
<br></br>
<a href="{{url('proyecto/create')}}">Agregar nuevo registro</a>
<br></br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del proyecto</th>
            <th>Fuente fondos</th>
            <th>Monto planificado</th>
            <th>Monto patrocinado</th>
            <th>Monto Fondos Propios</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proyectos as $proyecto)
        <tr>
            <td>{{isset($proyecto->id)?$proyecto->id:'' }}</td>
            <td>{{isset($proyecto->nombreProyecto)?$proyecto->nombreProyecto:'' }}</td>
            <td>{{isset($proyecto->fuenteFondos)?$proyecto->fuenteFondos:'' }}</td>
            <td>{{isset($proyecto->montoPlanificado)?$proyecto->montoPlanificado:'' }}</td>
            <td>{{isset($proyecto->montoPatrocinado)?$proyecto->montoPatrocinado:'' }}</td>
            <td>{{isset($proyecto->montoFondosPropios)?$proyecto->montoFondosPropios:'' }}</td>
            <td>

            <a href="{{url('/proyecto/'.(isset($proyecto->id)?$proyecto->id:'').'/edit')}}">
            Editar
            </a>
             |

            <form action="{{url('/proyecto/'.(isset($proyecto->id)?$proyecto->id:''))}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit"
                     onclick="return confirm('Desea eliminar el registro?')"
                     value="Borrar">
            </form>
        </td>

        </tr>
        @endforeach
    </tbody>
</table>
