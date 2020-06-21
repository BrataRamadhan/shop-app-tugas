

<?php $__env->startSection('content'); ?>
<style>
    .badge-pill {
       padding: 10px;
       /* width: 5%; */
    }
</style>
<div class="container">
    <div class="pb-3">
        <span class="badge badge-pill badge-primary">Sepatu</span>
        <span class="badge badge-pill badge-primary">Sepatu</span>
        <span class="badge badge-pill badge-primary">Sepatu</span>
    </div>
    <div class="row justify-content-">
    <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                   <img src="<?php echo e(url('images')); ?>/<?php echo e($barang->gambar); ?>" class="p-4 img-fluid">
                   <?php echo e($barang->nama_barang); ?> <br />
                   <b>Rp <?= number_format($barang->harga) ?></b>
                </div>
                <button onclick="event.preventDefault(); alert(' Add to cart ')" class="btn btn-success" >Add to cart</button>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="mt-5 mb-4 row justify-content-center">
    <?php echo e($barangs->links()); ?>

    </div>
   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop_app\resources\views/home.blade.php ENDPATH**/ ?>