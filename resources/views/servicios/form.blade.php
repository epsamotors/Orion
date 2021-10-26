<h1>{{ $modo}} SERVICIO</h1>
@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
    <ul>    
    @foreach ($errors->all() as $error)

     <li>{{$error}}</li>
    @endforeach
</ul>
    </div>

   

@endif

<div class="form-group">
<label for="titulo"> TITULO DEL SERVICIO </label>
<input type="text" class="form-control" name="titulo"  value="{{ isset($servicio->titulo)?$servicio->titulo:'' }}" id="titulo"> 
</div>
<label for="des"> DESCRIPCION DEL SERVICIO</label>
<div class="form-group">

<textarea name="descripcion" class="form-control" rows="5"   id="descripcion">{{isset($servicio->descripcion)?$servicio->descripcion:''}}</textarea>
</div>

<div class="form-group">
<label for="imagen"></label>
@if(isset($servicio->urlimagen))
<td><img src="{{ asset('storage').'/'.$servicio->urlimagen}}" width="100" alt=""></td>

@endif
<input type="file" class="form-control" name="urlimagen"  id="urlimagen"> 
</div>
<div>
<td><label for="des1">Las imagenes deben tener una tamaño de 400x290</label></td>
</div>
<input type="submit" class="btn btn-success" value="{{ $modo }} DATOS ">

<a  href=" {{ url('servicios/') }} " class="btn btn-primary">REGRESAR</a>