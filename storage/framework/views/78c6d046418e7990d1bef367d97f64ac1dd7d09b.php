<?php $lang = app('App\Lang'); ?>

<div class="col-md-4 foodm">
    <div align="right">
        <label><h4><?php echo e($lang->get(70)); ?> </h4></label>
        <br>
        <button type="button" onclick="fromLibrary()" class="q-btn-all q-color-second-bkg waves-effect"><h5><?php echo e($lang->get(77)); ?></h5></button>
    </div>
</div>
<div class="col-md-8 foodm">
    <div id="dropzone2" class="fallback dropzone">
        <div class="dz-message">
            <div class="drag-icon-cph">
                <i class="material-icons">touch_app</i>
            </div>
            <h3><?php echo e($lang->get(78)); ?></h3>
        </div>
        <div class="fallback">
            <input name="file" type="file" multiple />
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\restaurants\resources\views/elements/form/image.blade.php ENDPATH**/ ?>