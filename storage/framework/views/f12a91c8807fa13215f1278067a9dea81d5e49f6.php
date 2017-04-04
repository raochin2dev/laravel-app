
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php if(count($errors)): ?>
  <div class="alert alert-danger">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($err); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
  </div>
<?php endif; ?>
<div class="container ">
<form method="POST" action="/products" id="myForm">
<?php echo e(csrf_field()); ?>

<div class="form-group row">
</div>
<div class="form-group row">
  <label for="product_name" class="col-2 col-form-label">Name</label>
  <div class="col-10">
    <input class="form-control" type="text" value="" name="product_name" id="product_name" required>
  </div>
</div>

<div class="form-group row">
  <label for="product_qty" class="col-2 col-form-label">Quantity</label>
  <div class="col-10">
    <input class="form-control" type="text" value="" name="product_qty" id="product_qty" required>
  </div>
</div>

<div class="form-group row">
  <label for="product_price" class="col-2 col-form-label">Price</label>
  <div class="col-10">
    <input class="form-control" type="number" value="" name="product_price" id="product_price" required>
  </div>
</div>
<div class="form-group row">
  <!-- <input type="submit" class="btn btn-info" value="Submit Button"> -->
  <button id="submitBtn" type="button" class="btn btn-primary">Submit</button>

</div>
</form>

</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
