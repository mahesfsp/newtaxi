<?php $__env->startSection('main'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Wallet 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/wallet')); ?>">Wallet Code</a></li>
        <li class="active">Edit</li>
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
              <h3 class="box-title">Edit Wallet Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <?php echo Form::open(['url' => route('edit_wallet',['id' => $result->user_id, 'user_type' => $user_type]), 'class' => 'form-horizontal']); ?>

              <div class="box-body">
              <span class="text-danger">(*)Fields are Mandatory</span>
               <div class="form-group">
                  <label for="user_id" class="col-sm-3 control-label">Username<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::select('user_id', $users_list, $result->user_id, ['disabled' => true,'class' => 'form-control', 'id' => 'user_id', 'placeholder' => 'Select...']); ?>

                    <span class="text-danger"><?php echo e($errors->first('user_id')); ?></span>
                  </div>
                  <input type='hidden' name='prev_user_id' value='<?php echo e($result->user_id); ?>'>
               </div>
                
                <div class="form-group">
                  <label for="input_amount" class="col-sm-3 control-label">Amount<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::text('amount',$result->original_amount, ['class' => 'form-control', 'id' => 'input_amount', 'placeholder' => 'Amount']); ?>

                    <span class="text-danger"><?php echo e($errors->first('amount')); ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_currency_code" class="col-sm-3 control-label">Currency code<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::select('currency_code', $currency, $result->currency_code, ['class' => 'form-control', 'id' => 'input_currency_code', 'placeholder' => 'Select']); ?>

                    <span class="text-danger"><?php echo e($errors->first('currency_code')); ?></span>
                  </div>
                </div>
              
                </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-info" name="submit" value="submit">Submit</button>
                 <button type="submit" class="btn btn-default" name="cancel" value="cancel">Cancel</button>
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


<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\newtaxi\resources\views/admin/wallet/edit.blade.php ENDPATH**/ ?>