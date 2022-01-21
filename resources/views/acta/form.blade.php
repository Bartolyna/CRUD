<label for="Usuario">Nombre de usuario</label>
    <input type="text" name="Usuario" value="{{ $acta->Usuario}}" id="Usuario">
    <br>

    <label for="Ubicacion">Ubicacion</label>
    <input type="text" name="Ubicacion" value="{{ $acta->Ubicacion}}" id="Ubicacion">
    <br>

    <label for="Tipo_Solicitud">Tipo de Solicitud</label>
    <input type="text" name="Tipo_Solicitud" value="{{ $acta->Tipo_Solicitud}}" id="Tipo_Solicitud">
    <br>

    <label for="Fecha">Fecha</label>
    <input type="date" name="Fecha" value="{{ $acta->Fecha}}" id="Fecha">
    <br>

    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion" value="{{ $acta->Descripcion}}" id="Descripcion">
    <br>

    <label for="Serial">Serial</label>
    <input type="text" name="Serial" value="{{ $acta->Serial}}" id="Serial">
    <br>

    <label for="Equipo">Equipo</label>
    <input type="text" name="Equipo" value="{{ $acta->Equipo}}" id="Equipo">
    <br>

    <label for="Responsable">Responsable</label>
    <input type="text" name="Responsable" value="{{ $acta->Responsable}}" id="Responsable">
    <br>

    <label for="Version">Version</label>
    <input type="text" name="Version" value="{{ $acta->Version}}" id="Version">
    <br>

    <label for="Observacion">Observacion</label>
    <input type="text" name="Observacion" value="{{ $acta->Observacion}}" id="Observacion">
    <br>

    <label for="Documento">Documento</label>
    <input type="file" name="Documento" value="{{ $acta->Documento}}" id="Documento">
    <br>


    <input type="submit" value="Enviar">