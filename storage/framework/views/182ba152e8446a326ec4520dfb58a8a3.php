

<?php $__env->startSection("content"); ?>
<h2>Редактирование поста</h2>

<form method="POST" action="">
	<?php echo csrf_field(); ?>

	<input type="hidden" name="id" value="<?php echo e($post->id); ?>">

	<div>
		<label for="title"><div>Тема:</div></label>
		<input type="text" name="title" value="<?php echo e(old('title') ?? $post->title); ?>">
		<?php $__errorArgs = ["title"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<span><?php echo e($message); ?></span>
		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	</div>

	<div>
		<label for="content"><div>Содержание:</div></label>
		<textarea name="content" ><?php echo e($post->content); ?></textarea>
		<?php $__errorArgs = ["content"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<span><?php echo e($message); ?></span>
		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	</div>
	<button type="submit">Сохранить</button>
	<button type="cancel">Отменить</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/kozic/blog-app/resources/views/edit_post.blade.php ENDPATH**/ ?>