

<?php $__env->startSection("content"); ?>
<div>
	<h1><?php echo e($post->title); ?></h1>
	<p><?php echo e($post->content); ?></p>
	<button><a href="/post/<?php echo e($post->id); ?>/edit">Редактировать</a></button>
 	<button><a href="/post/<?php echo e($post->id); ?>/delete">Удалить</a></button>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/kozic/blog-app/resources/views/post.blade.php ENDPATH**/ ?>