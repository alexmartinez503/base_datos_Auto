<form action="">
<lavel  for="marca">Marca: </lavel>
<input type="text" name="Marca" id="" value="{{ isset($pet->marca)?$pet->marca:''}}">
<br>
<label for="precio">Precio:</label>
<input type="text" name="precio" id="" value="{{isset($pet->precio)?$pet->precio:''}}">
<br>
<label for="modelo">Modelo:</label>
<input type="text" name="modelo" id="" value="{{isset($pet->modelo)?$pet->modelo:''}}">
<br>
<label for="placa">N° de placa:</label>
<input type="text" name="placa" id="" value="{{isset($pet->placa)?$pet->placa:''}}">
<br>
<label for="color">Color:</label>
<input type="text" name="color" id="" value="{{isset($pet->color)?$pet->color:''}}">
<br>
<button type="submit"> Guardar</button>
</form>