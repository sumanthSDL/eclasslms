
<?php $__env->startSection('title', 'Attendance'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Attendance';
$data['title'] = 'Attendance';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
    <div class="row">
<?php if($errors->any()): ?>  
  <div class="alert alert-danger" role="alert">
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
  <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close" title="<?php echo e(__('Close')); ?>">
  <span aria-hidden="true" style="color:red;">&times;</span></button></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
  </div>
  <?php endif; ?>
  <!-- row started -->
    <div class="col-lg-12">
        <div class="card dashboard-card m-b-30">
                <!-- Card header will display you the heading -->
                <div class="card-header">
                    <h5 class="card-box"><?php echo e(__('Attendance')); ?></h5>
                </div>                
                <!-- card body started -->
                <div class="card-body">
                <ul class="nav nav-tabs mb-3" id="defaultTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#facebook" role="tab" aria-controls="home" aria-selected="true" title="<?php echo e(__('Courses')); ?>"><?php echo e(__('Courses')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#google" role="tab" aria-controls="profile" aria-selected="false" title="<?php echo e(__('Meetings')); ?>"><?php echo e(__('Meetings')); ?></a>
                        </li>
                  
                    </ul>
                    <div class="tab-content" id="defaultTabContent">

                        <!-- === language start ======== -->
                        <div class="tab-pane fade show active" id="facebook" role="tabpanel" aria-labelledby="home-tab">
                            <!-- === language form start ======== -->
                            <?php echo $__env->make('admin.attandance.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!-- === language form end ===========-->    
                        </div>
                          <!-- === language end ======== -->

                          <!-- === frontstatic start ======== -->
                        <div class="tab-pane fade" id="google" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- === frontstatic form start ======== -->
                            <?php echo $__env->make('admin.attandance.liveclass', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           
                            <!-- === frontstatic form end ===========-->
                        </div>
                        <!-- === frontstatic end ======== -->

                    </div>
                </div><!-- card body end -->
            
        </div><!-- col end -->
    </div>
</div>
</div><!-- row end -->
    <br><br>
<?php $__env->stopSection(); ?>
<!-- main content section ended -->
<!-- This section will contain javacsript start -->
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<!-- This section will contain javacsript end -->
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eclass-licenced\resources\views/admin/attandance/show.blade.php ENDPATH**/ ?>