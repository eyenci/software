<?php
$sell = SellData::getById($_GET["id"]);
if($sell!=null):
?>
<section class="content-header">
    <h1><?php echo $sell->id ?> <small>Editar Producto</small></h1>
</section>
<section class="content">
<div class="row">
	<div class="col-md-12">
  <?php if(isset($_COOKIE["prdupd"])):?>
    <p class="alert alert-info">La informacion del producto se ha actualizado exitosamente.</p>
  <?php setcookie("prdupd","",time()-18600); endif; ?>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatemesa" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Id_Mesa</label> 
    <div class="col-md-6">
      <input type="text" name="id" class="form-control" id="id" value="<?php echo $sell->id; ?>" placeholder="Codigo del Producto" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Numero de mesa</label>
    <div class="col-md-6">
      <input type="text" name="item_id" class="form-control" id="item_id" value="<?php echo $sell->item_id; ?>" placeholder="Nombre del Producto">
    </div>
  </div>
 
     </div>
  </div>
 
<p class="alert alert-info">* Cambiar numero de mesa</p>

  <div class="form-group">
    <div class="col-lg-offset-3 col-lg-9">
    <input type="hidden" name="sell_id" value="<?php echo $sell->id; ?>">
      <button type="submit" class="btn  btn-success">Actualizar Numero de mesa</button>
    </div>
  </div>
</form>


<br><br><br><br><br><br><br><br><br>
	</div>
</div>
<?php endif; ?>
</section>