

<?php $__env->startSection('content'); ?>
<h2>Мой блог</h2>
<button><a href="/post/add">Создать новый пост</a></button>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="cont">
    <h3><a href="/post/<?php echo e($post->id); ?>"><b><?php echo e($post->title); ?></b></a></h3>
    <p><?php echo e($post->content); ?></p>
    <hr/>
    
    <button><a href="/post/<?php echo e($post->id); ?>/comment/add">Написать комментарий</a></button>
    
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($comment->post_id == $post->id): ?>
		<p><b><?php echo e($comment->nickname); ?></b></p>
		<p><?php echo e($comment->content); ?></p>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/kozic/blog-app/resources/views/blog.blade.php ENDPATH**/ ?>