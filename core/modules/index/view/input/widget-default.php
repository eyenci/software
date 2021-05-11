<?php
$product = ProductData::getById($_GET['product_id']);
?>

<?php if($product!=null):?>
<div class="row">
	<div class="col-md-8">
<a href="index.php?view=inputn&product_id=<?php echo $product->id; ?>" class="btn btn-default btn-lg pull-right">Alta sin Factura</a>
  <div style="font-size:34px;">Alta en inventario <small style="color:#666;font-size:24px;">Con factura</small></div>
		<h2>Producto: <?php echo $product->name; ?></h2>
		<p class="alert alert-success"> Se esta trabajando sobre el corte iniciado la fecha (AAAA-MM-DD HH:MM:SS): <b><?php echo $cut->created_at; ?></b></p>

<br><form class="form-horizontal" method="post" action="index.php?view=processinput" role="form">
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Unidad</label>
    <div class="col-lg-10">
      <input type="text" value="<?php echo $product->unit; ?>" readonly="readonly" class="form-control" id="inputEmail1" placeholder="Cantidad de productos">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cantidad</label>
    <div class="col-lg-10">
      <input type="float" required name="q" class="form-control" id="inputEmail1" placeholder="Cantidad de productos">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input type="hidden" name="product_id" value="<?php echo $_GET['product_id']; ?>">
          <input name="is_oficial" type="hidden" value="1">
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-circle-arrow-up"></i> Alta en inventario</button>
    </div>
  </div>
</form>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php endif; ?>