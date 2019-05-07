<div class="form-group">
<label for="nombres">Nombres:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-user-plus"></i>
</div>
<input type="text" class="form-control" id="name" placeholder="Nombre" name="name" value="{{ old('name') }}"/>
</div>
<span class="text-red">{{ $errors->first('name') }}</span>
</div>

<div class="form-group">
<label for="nombres">Direccion Corta:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-user-plus"></i>
</div>
<input type="text" class="form-control" id="slug" placeholder="Direccion Corta" name="slug" value="{{ old('slug') }}"/>
</div>
<span class="text-red">{{ $errors->first('slug') }}</span>
</div>

<div class="form-group">
<label for="nombres">Descripcion:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-fw fa-user-plus"></i>
</div>
<input type="textarea" class="form-control" id="description" placeholder="Descripcion" name="description" value="{{ old('description') }}"/>
</div>
<span class="text-red">{{ $errors->first('description') }}</span>
</div>


<hr>
<h3>Permiso especial</h3>

<div class="form-group">
<div class="radio">
<label>
<input type="radio" name="special" value="all-access"> Acceso Total
</label>
<label>
<input type="radio" name="special" value="no-access"> Ningun Acceso
</label>
</div>
</div>




<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach($permissions as $permission)
    <li>
        <label>
        <input type="checkbox" name="{{'permissions[]'}}" value="{{ $permission->id }}">{{ $permission->name }}     
           <em>({{ $permission->description ?: 'Sin descripcion' }})</em>
        </label>
    </li>
    @endforeach
  </ul>
</div>


<div class="form-group">
<button type="submit" class="btn btn-warning">Crear</button>
</div>


