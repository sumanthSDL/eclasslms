

<?php $__env->startSection('title', 'Setting - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Google Meetings Settings';
$data['title'] = 'Meetings';
$data['title1'] = 'Google Meetings';
$data['title2'] = 'Google Meetings Settings';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
  <div class="row">
    <div class="col-lg-12">
      <div class="card dashboard-card m-b-30">
        <div class="card-header">
          <h5 class="card-title"><?php echo e(__('Google Meetings Settings')); ?></h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <form action="<?php echo e(route('googlemeet.updatefile')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <div class="eyeCy">
                    <label><?php echo e(__('Choose JSON File')); ?> (clientsecret.json):</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                      </div>
                      <div class="custom-file">
                        <input type="file"  name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose File')); ?></label>
                      </div>
                    </div>
                    
                  </div>
                </div>
    
                <?php
    
                $auth_email = Auth::user()->email;
    
                $path = 'files/googlemeet'.'/'.$auth_email;    
               
    
                ?>
    
                <div class="form-group">
                 
                    <label>My Credentials:</label>
                
                    <?php if(file_exists(public_path().'/'.$path.'/'.'client_secret.json')): ?>                 
    
                    <a href="<?php echo e(asset('files/googlemeet'.'/'.$auth_email.'/'.'client_secret.json')); ?>" download="client_secret.json" class="btn btn-info-rgba" style="width:100%" title="<?php echo e(__('Download')); ?>"><i class="fa fa-download"></i> <?php echo e(__('Download')); ?></a>
    
                    <br>
                    <br>
                  <?php else: ?>
                    <div class="btn btn-primary" style="width:100%">
                      <?php echo e(__('No File Found')); ?>

                      
                    </div>
                  <?php endif; ?>
                </div>
                
    
    
                <div class="form-group">
                  <button type="reset" class="btn btn-danger-rgba mr-1" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                  <button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Update')); ?>"><i class="fa fa-check-circle"></i>
                  <?php echo e(__("Update")); ?></button>
                </div>
    
              </form>
            </div>
    
            <div class="col-md-6">
              <h4 style="color: black"><i class="fa fa-question-circle"></i> <?php echo e(__('How to get Google Meet clientsecret.json file')); ?> : </h4>
              <hr>
              <div class="panel panel-default">
                <div class="panel-body">
                  <ul>
                    <li> <?php echo e(__('Use the link to create or select a project in the google developers console and automatically turn on the APi. Click continue then')); ?> <b><?php echo e(__('go to credential')); ?></b>. : <a href="https://console.cloud.google.com/flows/enableapi?apiid=calendar" target="_blank"><?php echo e(__('Google Cloud Platform')); ?></a></li>
                     <li><?php echo e(__('On the')); ?> <b><?php echo e(__('Add credentials to your project')); ?></b> <?php echo e(__('click the')); ?> <b><?php echo e(__('Cancel')); ?></b> <?php echo e(__('button')); ?>.</li>
                     <li><?php echo e(__('At the top of the page, select the')); ?> <b><?php echo e(__('Oauth consent screen')); ?></b><?php echo e(__('tab. Select an')); ?> <b><?php echo e(__('Email Address')); ?></b>, <?php echo e(__('Enter product name if not already set and click the')); ?> <b><?php echo e(__('Save')); ?></b> <?php echo e(__('button')); ?>.</li>
                     <li><?php echo e(__('Select the')); ?> <b><?php echo e(__('Credentials')); ?></b> <?php echo e(__('tab, click the')); ?> <b><?php echo e(__('Create Credentials')); ?></b> <?php echo e(__('button and select')); ?> <b><?php echo e(__('Oauth client id')); ?></b>.</li>    
                     <li><?php echo e(__('Use this URL as Redirect URL')); ?> <b><?php echo e(url('oauth')); ?></b> </li>    
                     <li><?php echo e(__('Select the application type')); ?> <b><?php echo e(__('Other')); ?></b>, <?php echo e(__('enter the name "googlemeet". and click the')); ?> <b><?php echo e(__('Create')); ?></b> <?php echo e(__('button')); ?>.</li> 
                     <li><?php echo e(__('Click')); ?> <b>Ok</b> <?php echo e(__('to dismiss the resulting dialog')); ?>.</li>
                     <li><?php echo e(__('Click the')); ?> <b><?php echo e(__('download json')); ?></b> <?php echo e(__('button to the right of the client id')); ?>.</li>
                     <li><?php echo e(__('Upload your')); ?> <b><?php echo e(__('(Downloaded json)')); ?></b> <?php echo e(__('file')); ?>.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('script'); ?>
  <script>
     $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
      });

    
  </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eclass-licenced\resources\views/googlemeet/setting.blade.php ENDPATH**/ ?>