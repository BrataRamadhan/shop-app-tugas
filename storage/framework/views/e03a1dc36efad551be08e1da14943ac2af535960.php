

<?php $__env->startSection('title'); ?>
<?= $title; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h1><?php echo e($barang->nama_barang); ?> </h1>
        <?php $__currentLoopData = $barang->kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h2><?php echo e($kategori->nama_kategori); ?> </h2>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop_app\resources\views/admin/content.blade.php ENDPATH**/ ?>