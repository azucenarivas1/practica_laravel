

        <label>Nombre del projecto</label></br>
        <input type="text" name="nombreProyecto" value="{{isset($proyecto->nombreProyecto)?$proyecto->nombreProyecto:'' }}" id="nombreProyecto" class="form-control"></br>
        <label>Fuente de los fondos</label></br>
        <input type="text" name="fuenteFondos"  value="{{isset($proyecto->fuenteFondos) ?$proyecto->fuenteFondos:'' }}"  id="fuenteFondos" class="form-control"></br>
        <label>Monto Planificado</label></br>
        <input type="number" step="0.01" name="montoPlanificado" value="{{ isset($proyecto->montoPlanificado) ?$proyecto->montoPlanificado : '' }}" id="montoPlanificado" class="form-control"></br>
        <label>Monto Patrocinado</label></br>
        <input type="number" step="0.01" name="montoPatrocinado" value="{{isset($proyecto->montoPatrocinado) ?$proyecto->montoPatrocinado:'' }}"  id="montoPatrocinado" class="form-control"></br>
        <label>Monto Fondos Propios</label></br>
        <input type="number" step="0.01" name="montoFondosPropios" value="{{isset($proyecto->montoFondosPropios) ?$proyecto->montoFondosPropios:'' }}"  id="montoFondosPropios" class="form-control"></br>
        </br>
        <input type="submit" value="Guardar datos" class="btn btn-success">
          <!--<a href="{{url('proyecto/')}}">Regresar al menu principal</a>-->
