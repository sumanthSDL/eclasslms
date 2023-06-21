
<?php $__env->startSection('title','Progress Report View'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Progress Report View';
$data['title'] = 'Reports';
$data['title1'] = 'Progress Reports';
$data['title2'] = 'Progress Report View';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar"> 
  <div class="row">
      <div class="col-lg-12">
          <div class="card dashboard-card m-b-30">
              <div class="card-header">
                  <h5 class="card-box"><?php echo e(__('Progress Report View')); ?></h5>
                  <div>
                        <div class="widgetbar">
                            <a href="<?php echo e(url('show/progress/report')); ?>" class="btn btn-primary-rgba" title="<?php echo e(__('Back')); ?>"><i
                                    class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
                        </div>
                    </div>
              </div>
              <div class="card-body">
              <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                 <label for="checkboxAll" class="material-checkbox"></label></th>
                 <th><?php echo e(__('User')); ?></th>
                 <th><?php echo e(__('Course')); ?></th>
                    <th><?php echo e(__('Progress')); ?></th>
                  </thead>
                   <tbody>
                    <?php $__currentLoopData = $progress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if(!is_null($progres->user) && !is_null($progres->courses)): ?>
                   
                      <?php
                        if(Auth::user()->role == "instructor") 
                        {
                          $check = $progres->courses->user_id == Auth::user()->id;
                        }
                        else{
                          $check = $progres->courses;
                        }

                      ?>

                      <?php if($check): ?> 
                      <?php
                           $total_class = $progres->all_chapter_id;
                            $total_count = count($total_class);
                            $total_per = 100;
                            $read_class = $progres->mark_chapter_id;
                            $read_count =  count($read_class);
                            $progres_total = ($read_count/$total_count) * 100;
                                    
                        ?>

                        <tr>
                          <td>
                              <?php echo e(optional($progres->user)->fname); ?>

                            </td>
                            <td>
                              <?php echo e(optional($progres->courses)->title); ?>

                            </td>
                          <td>
                              <div class="progressbar-list">
                                  <div class="progress">
                                      <?php if($progres_total == '100'): ?>
                                      <div class="progress-bar" role="progressbar" style="width: <?php echo $progres_total; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo e($progres_total); ?>%</div>
                                      <?php elseif($progres_total <= '50'): ?>
                                      <div class="progress-bar" role="progressbar" style="width: <?php echo $progres_total; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo e($progres_total); ?>%</div>
                                      <?php elseif($progres_total >= '25'): ?>
                                      <div class="progress-bar" role="progressbar" style="width: <?php echo $progres_total; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo e($progres_total); ?>%</div>
                                      <?php endif; ?>
                                  </div>
                              </div>
                          </td>
                        </tr>
                      <?php endif; ?>
                      <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
<!-- End col -->
</div>
<!-- End row -->
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eclass-licenced\resources\views/admin/report/progressview.blade.php ENDPATH**/ ?>