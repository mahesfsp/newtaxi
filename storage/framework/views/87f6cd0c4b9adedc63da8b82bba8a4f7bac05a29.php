<?php $__env->startSection('main'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Add Mobile App Version
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo e(url('admin/mobile_app_version')); ?>">Mobile App Versions</a></li>
      <li class="active">Add</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- right column -->
      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Add Mobile App Version Form</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo Form::open(['url' => 'admin/add_app_version', 'class' => 'form-horizontal form']); ?>

          <div class="box-body">
            <span class="text-danger">(*)Fields are Mandatory</span>
            <div class="form-group">
              <label for="input_name" class="col-sm-3 control-label">Version<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::text('version', '', ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => 'Version']); ?>

                <span class="text-danger"><?php echo e($errors->first('version')); ?></span>
              </div>
            </div>
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">Device Type<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::select('device_type', array('1' => 'Apple','2' => 'Android'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

                <span class="text-danger"><?php echo e($errors->first('device_type')); ?></span>
              </div>
            </div> 
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">User Type<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::select('user_type', array('0' => 'Rider', '1' => 'Driver'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

                <span class="text-danger"><?php echo e($errors->first('user_type')); ?></span>
              </div>
            </div>   
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">Force Update<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::select('force_update', array('1' => 'Yes','0' => 'No'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

                <span class="text-danger"><?php echo e($errors->first('force_update')); ?></span>
              </div>
            </div>   
          </div>         
          <!-- /.box-body -->
          <div class="box-footer text-center">
            <button type="submit" class="btn btn-info" name="submit" value="submit">
              Submit
            </button>
            <a href="<?php echo e(url('admin/mobile_app_version')); ?>" class="btn btn-default" name="cancel" value="Cancel">
            Cancel
            </a>            
          </div>
          <!-- /.box-footer -->
          <?php echo Form::close(); ?>

        </div>
        <!-- /.box -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/seentec3/newtaxi.seentechs.com/resources/views/admin/app_version/add.blade.php ENDPATH**/ ?>