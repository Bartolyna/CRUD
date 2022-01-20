<form action="{{ url('/acta') }}" method="post" enctype="multipart/form-data">
@csrf
    <label for="Usuario">Nombre de usuario</label>
    <input type="text" name="Usuario" id="Usuario">
    <br>

    <label for="Ubicacion">Ubicacion</label>
    <input type="text" name="Ubicacion" id="Ubicacion">
    <br>

    <label for="Tipo_Solicitud">Tipo de Solicitud</label>
    <input type="text" name="Tipo_Solicitud" id="Tipo_Solicitud">
    <br>

    <label for="Fecha">Fecha</label>
    <input type="date" name="Fecha" id="Fecha">
    <br>

    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion" id="Descripcion">
    <br>

    <label for="Serial">Serial</label>
    <input type="text" name="Serial" id="Serial">
    <br>

    <label for="Equipo">Equipo</label>
    <input type="text" name="Equipo" id="Equipo">
    <br>

    <label for="Responsable">Responsable</label>
    <input type="text" name="Responsable" id="Responsable">
    <br>

    <label for="Version">Version</label>
    <input type="text" name="Version" id="Version">
    <br>

    <label for="Observacion">Observacion</label>
    <input type="text" name="Observacion" id="Observacion">
    <br>

    <label for="Documento">Documento</label>
    <input type="file" name="Documento" id="Documento">
    <br>


    <input type="submit" value="Enviar">

</form>