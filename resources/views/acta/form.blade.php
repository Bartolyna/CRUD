    <h1>{{ $modo }} acta</h1>

    <div class="form-group">
        <label for="Usuario">Nombre de usuario</label>
        <input type="text" class="form-control" name="Usuario" value="{{ isset($acta->Usuario)?$acta->Usuario:'' }}" id="Usuario">
        <br>  
    </div>
    
    <div class="form-group">
        <label for="Ubicacion">Ubicacion</label>
        <input type="text" class="form-control" name="Ubicacion" value="{{ isset($acta->Ubicacion)?$acta->Ubicacion:''}}" id="Ubicacion">
        <br>
    </div>

    <div class="form-group">
        <label for="Tipo_Solicitud">Tipo de Solicitud</label>
        <input type="text" class="form-control" name="Tipo_Solicitud" value="{{ isset($acta->Solicitud)?$acta->Solicitud:''}}" id="Tipo_Solicitud">
        <br>
    </div>        

    <div class="form-group">
        <label for="Fecha">Fecha</label>
        <input type="date" class="form-control" name="Fecha" value="{{ isset($acta->Fecha)?$acta->Fecha:''}}" id="Fecha">
        <br>
    </div>

    <div class="form-group">
        <label for="Descripcion">Descripcion</label>
        <input type="text" class="form-control" name="Descripcion" value="{{ isset($acta->Descripcion)?$acta->Descripcion:''}}" id="Descripcion">
        <br>
    </div>

    <div class="form-group">
        <label for="Serial">Serial</label>
        <input type="text" class="form-control" name="Serial" value="{{ isset($acta->Serial)?$acta->Serial:''}}" id="Serial">
        <br>
    </div>

    <div class="form-group">
        <label for="Equipo">Equipo</label>
        <input type="text" class="form-control" name="Equipo" value="{{ isset($acta->Equipo)?$acta->Equipo:''}}" id="Equipo">
        <br>
    </div>

    <div class="form-group">
        <label for="Responsable">Responsable</label>
        <input type="text" class="form-control" name="Responsable" value="{{ isset($acta->Responsable)?$acta->Responsable:''}}" id="Responsable">
        <br>
    </div>

    <div class="form-group">
        <label for="Version">Version</label>
        <input type="text" class="form-control" name="Version" value="{{ isset($acta->Version)?$acta->Version:''}}" id="Version">
        <br>
    </div>

    <div class="form-group">
        <label for="Observacion">Observacion</label>
        <input type="text" class="form-control" name="Observacion" value="{{ isset($acta->Observacion)?$acta->Observacion:''}}" id="Observacion">
        <br>
    </div>

    <div class="form-group">
        <label for="Documento">Documento</label>
        <input type="file" class="form-control" name="Documento" value="{{ isset($acta->Documento)?$acta->Documento:''}}" id="Documento">
        <br>
    </div>

    <a href="{{ url('acta')}}" class="btn btn-primary">Ir al index</a>


    <input type="submit" value="{{ $modo }} acta" class="btn btn-success">