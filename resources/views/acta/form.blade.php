    
    <label for="Usuario">Nombre de usuario</label>
    <input type="text" name="Usuario" value="{{ isset($acta->Usuario)?$acta->Usuario:'' }}" id="Usuario">
    <br>

    <label for="Ubicacion">Ubicacion</label>
    <input type="text" name="Ubicacion" value="{{ isset($acta->Ubicacion)?$acta->Ubicacion:''}}" id="Ubicacion">
    <br>

    <label for="Tipo_Solicitud">Tipo de Solicitud</label>
    <input type="text" name="Tipo_Solicitud" value="{{ isset($acta->Solicitud)?$acta->Solicitud:''}}" id="Tipo_Solicitud">
    <br>

    <label for="Fecha">Fecha</label>
    <input type="date" name="Fecha" value="{{ isset($acta->Fecha)?$acta->Fecha:''}}" id="Fecha">
    <br>

    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion" value="{{ isset($acta->Descripcion)?$acta->Descripcion:''}}" id="Descripcion">
    <br>

    <label for="Serial">Serial</label>
    <input type="text" name="Serial" value="{{ isset($acta->Serial)?$acta->Serial:''}}" id="Serial">
    <br>

    <label for="Equipo">Equipo</label>
    <input type="text" name="Equipo" value="{{ isset($acta->Equipo)?$acta->Equipo:''}}" id="Equipo">
    <br>

    <label for="Responsable">Responsable</label>
    <input type="text" name="Responsable" value="{{ isset($acta->Responsable)?$acta->Responsable:''}}" id="Responsable">
    <br>

    <label for="Version">Version</label>
    <input type="text" name="Version" value="{{ isset($acta->Version)?$acta->Version:''}}" id="Version">
    <br>

    <label for="Observacion">Observacion</label>
    <input type="text" name="Observacion" value="{{ isset($acta->Observacion)?$acta->Observacion:''}}" id="Observacion">
    <br>

    <label for="Documento">Documento</label>
    <input type="file" name="Documento" value="{{ isset($acta->Documento)?$acta->Documento:''}}" id="Documento">
    <br>

    <a href="{{ url('acta')}}">Ir al index</a>


    <input type="submit" value="Enviar">