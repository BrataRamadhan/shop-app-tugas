<?php $__env->startSection('title'); ?>
<?= $title; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <a href="/admin/tambah_barang">
                <button class="btn btn-primary">
                    Add Barang
                </button>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($barang->nama_barang); ?> </td>
                        <td> <?php echo e($barang->stok); ?> </td>
                        <td> Rp.<?= number_format($barang->harga) ?> </td>
                        <td> <?php echo e($barang->keterangan); ?> </td>
                        <td> <img width="80px" src=<?php echo e(url('images/' .$barang->gambar)); ?>> <td>
                        <td> <a href='edit_barang/<?php echo e($barang->id); ?>' class="btn btn-primary">Edit</a> </td>
                        <td>
                            <form action ="<?php echo e(route('delete',[$barang->id])); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-primary" >hapus</button>
                              </form>
                            </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop_app\resources\views/admin/data_barang.blade.php ENDPATH**/ ?>