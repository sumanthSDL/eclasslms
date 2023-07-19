
<?php $__env->startSection('title'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- breadcumb start -->
<?php
$gets = App\Breadcum::first();
?>
<?php if(isset($gets)): ?>
<section id="business-home" class="business-home-main-block">
    <div class="business-img">
        <?php if($gets['img'] !== NULL && $gets['img'] !== ''): ?>
        <img src="<?php echo e(url('/images/breadcum/'.$gets->img)); ?>" class="img-fluid" alt="" />
        <?php else: ?>
        <img src="<?php echo e(Avatar::create($gets->text)->toBase64()); ?>" alt="course" class="img-fluid">
        <?php endif; ?>
    </div>
    <div class="overlay-bg"></div>
    <div class="container-xl">
        <div class="business-dtl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bredcrumb-dtl">
                        <h1 class="wishlist-home-heading"><?php echo e(__('Alumni')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- breadcumb end -->
<?php if(isset($alumini)): ?>
<section id="alumini" class="alumini-main-block">
    <div class="container-xl">
        <div class="row">
            <?php $__currentLoopData = $alumini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4">
                <div class="alumini-block">
                    <div class="alumini-img">
                        <?php if($data->user['user_img'] == !NULL): ?>
                        <img src="<?php echo e(asset('images/user_img/'.$data->user['user_img'])); ?>" class="img-fluid" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(Avatar::create($data->user->fname)->toBase64()); ?>" class="img-fluid" alt="">
                    <?php endif; ?>  
                    </div>
                    <div class="alumini-dtl text-center">
                        <h5 class="alumini-heading mb-2" data-toggle="tooltip" data-title="<?php echo e(__('Alumni')); ?>"><?php echo e($data->user->fname); ?> <?php echo e($data->user->lname); ?></h5> <!-- Add the data-toggle and data-title attributes -->
                        <div class="alumini-email mb-2"><?php echo e($data->user->email); ?></div>
                        <div class="alumini-no mb-2"><?php echo e($data->user->mobile); ?></div>
                        <a href="<?php echo e(url('footer/update',$data->id)); ?>" type="" class="btn btn-primary"><?php echo e(__('View')); ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eclass-licenced\resources\views/front/alumini/footer.blade.php ENDPATH**/ ?>