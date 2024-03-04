

<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1><?php echo e(__(@$pageTitle)); ?></h1>
                <a href="<?php echo e(route('admin.ticket.index')); ?>"><button class="btn btn-primary"><i class="fas fa-arrow-left">
                <?php echo e(__('Back to list')); ?></i></button></a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-wrapper">
                        <div class="card-header">
                            <div class="project-status-top">
                                <h6 class="project-status-heading"> <?php echo e(__('Customer')); ?>: <?php echo e(@$ticket->user->fullname); ?>

                                </h6>
                                <h6 class="project-status-heading"> <?php echo e(__('Ticket')); ?><?php echo e(@$ticket->support_id); ?></h6>
                                <h6 class="project-status-heading"> <?php echo e(__('Subject')); ?>: <?php echo e(@$ticket->subject); ?></h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.ticket.reply', $ticket->id)); ?>" enctype="multipart/form-data"
                                method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row justify-content-md-between">
                                    <div class="col-md-4">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label"><?php echo e(__('Choose File')); ?></label>
                                            <input type="file" name="image" id="image-upload" />
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <div class="form-group ticket-comment-box">
                                            <input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
                                            <label for="exampleFormControlTextarea1"><?php echo e(__('Message')); ?></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                name="message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <button type="submit" class="btn cms-submit ticket-reply btn btn-primary"><i
                                                    class="fas fa-reply"> </i> <?php echo e(__('Reply')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="list-group">
                <?php $__currentLoopData = @$ticket_reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <div class="card-header <?php if($reply->admin_id): ?> bg-primary <?php else: ?> bg-success <?php endif; ?>">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="text-white"><?php echo e(__('Reply From - ')); ?>

                                    <?php if(!$reply->admin_id): ?>
                                        <?php echo e(@$reply->ticket->user->fullname); ?>

                                    <?php endif; ?>
                                    <?php if($reply->admin_id): ?>
                                        <?php echo e(@$reply->admin->name ?? 'Admin'); ?>

                                    <?php endif; ?>
                                </h6>
                                <small class="text-white"><?php echo e($reply->created_at->diffforhumans()); ?></small>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-1">
                                <?php echo e($reply->message); ?>

                            </p>
                            <div class="gallery">
                                <div class="gallery-item" data-image="<?php echo e(getFile('Ticket', $reply->file)); ?>"
                                    data-title="Image 1">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style-plugin'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('asset/admin/css/chocolate.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-plugin'); ?>
    <script src="<?php echo e(asset('asset/admin/js/chocolate.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>
    <script>
        $(function() {
            'use strict'
            $.uploadPreview({
                input_field: "#image-upload", // Default: .image-upload
                preview_box: "#image-preview", // Default: .image-preview
                label_field: "#image-label", // Default: .image-label
                label_default: "<?php echo e(__('Choose File')); ?>", // Default: Choose File
                label_selected: "<?php echo e(__('Update Image')); ?>", // Default: Change File
                no_label: false, // Default: false
                success_callback: null // Default: null
            });
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/code/php/core/resources/views/backend/ticket/show.blade.php ENDPATH**/ ?>