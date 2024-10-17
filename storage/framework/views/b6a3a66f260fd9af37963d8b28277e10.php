<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" />
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

	</head>
    <body>
        <section class="ftco-section">
                <main>
                    <?php echo e($slot); ?>

                </main>
            </div>

        </div>
	</section>
  <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

  <script src="<?php echo e(asset('s/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\REPORTING_SYSTEM_V4 - test_new\resources\views/layouts/user-login.blade.php ENDPATH**/ ?>