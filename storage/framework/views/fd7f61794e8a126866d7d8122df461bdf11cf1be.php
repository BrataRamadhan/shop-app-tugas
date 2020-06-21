

<?php $__env->startSection('title'); ?>
<?= $title; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header py-3">
            <button class="btn btn-primary">
        Add Kategori
    </button>
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ktg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td> <?php echo e($ktg->nama_kategori); ?> </td>
                <td> Aksi </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop_app\resources\views/admin/kategori.blade.php ENDPATH**/ ?>