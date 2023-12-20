<!DOCTYPE html>     
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Laravel Blog</title>
  <style>
    li{
      display:inline;
      padding-right:20px;
    }
    a{
      text-decoration: none; 
    }
    .cont{
      border: 1px solid black;
      width: 500px;
	    border-radius: 10px;
	    padding: 10px;
	    margin-top: 5px;
    }
    .com{
      border: 1px solid black;
      width: 400px;
	    border-radius: 10px;
	    padding: 10px;
	    margin-top: 5px;
    }
    table{
      border: 2px solid black;
      border-collapse: collapse;
    }
    td, th{
      padding: 5px;
      border: 1px solid black;
    }
    th{
      background-color: #fcd4db;
    }
  </style> 
</head>
<body>
    
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <hr>
    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>
    <hr>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /mnt/c/Users/kozic/blog-app/resources/views/layouts/app.blade.php ENDPATH**/ ?>