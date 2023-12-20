

<?php $__env->startSection("content"); ?>
<h1>Пользователи</h1>
<table>
<tr>
	<th>Никнейм</th>
	<th>Комментарий</th>
	<th>Удалить</th>
</tr>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($row->nickname); ?></a></td>
		<td><?php echo e($row->content); ?></td>
     		<td><b><a href="/admin/<?php echo e($row->id); ?>/delete">x</a></b></td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/kozic/blog-app/resources/views/admin.blade.php ENDPATH**/ ?>