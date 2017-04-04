

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php echo $__env->make('products.add', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
  <h2>Products</h2>

  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Per Unit Price</th>
        <th>Date Time Submitted</th>
        <th>Total Value</th>
      </tr>
    </thead>
    <tbody id="tblBody">
      <?php if(!empty($products)): ?>
        <?php  $total_price = 0;  ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php 
              $cur_price = $p->product_qty*$p->product_price;
              $total_price += $cur_price;
           ?>
        <tr>
          <td><?php echo e($p->product_name); ?></td>
          <td><?php echo e($p->product_qty); ?></td>
          <td><?php echo e($p->product_price); ?></td>
          <td><?php echo e(date('n/j/Y H:i',strtotime($p->created_at))); ?></td>
          <td><?php echo e($cur_price); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr><td colspan="5"></td></tr>
        <tr>
          <td colspan="5">Collective total : <?php echo e($total_price); ?></td>
        </tr>
      <?php endif; ?>

    </tbody>
  </table>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="<?php echo e(asset('js/myapp.js')); ?>"></script>