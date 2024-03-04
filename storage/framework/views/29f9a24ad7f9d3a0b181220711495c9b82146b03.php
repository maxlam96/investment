<?php $__env->startSection('content2'); ?>



    <div class="dashboard-body-part">

      


        <div class="row gy-4">


            <div class="col-xxl-5">
                <div class="d-box-one h-100">
                    <div class="icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="content">
                        <span class="caption-title"><?php echo e(__('Account Balance')); ?></span>
                        <h3 class="d-box-one-amount">
                            <?php echo e(number_format(auth()->user()->balance, 2) . ' ' . $general->site_currency); ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-xxl-7">
                <div class="row gy-4">
                    <div class="col-sm-6">
                        <div class="d-box-three">
                            <div class="icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <div class="content">
                                <span class="caption-title"><?php echo e(__('Total Withdraw')); ?></span>
                                <h3 class="d-box-three-amount">
                                    <?php echo e(number_format($withdraw, 2) . ' ' . $general->site_currency); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-box-three">
                            <div class="icon">
                                <i class="fas fa-funnel-dollar"></i>
                            </div>
                            <div class="content">
                                <span class="caption-title"><?php echo e(__('Total Deposit')); ?></span>
                                <h3 class="d-box-three-amount">
                                    <?php echo e(number_format($totalDeposit, 2) . ' ' . $general->site_currency); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-box-three">
                            <div class="icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="content">
                                <span class="caption-title"><?php echo e(__('Current Invest')); ?></span>
                                <h3 class="d-box-three-amount">
                                    <?php echo e(isset($currentInvest->amount) ? number_format($currentInvest->amount, 2) : 0); ?>

                                    <?php echo e(@$general->site_currency); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-box-three">
                            <div class="icon">
                                <i class="far fa-calendar-check"></i>
                            </div>
                            <div class="content">
                                <span class="caption-title"><?php echo e(__('Current Plan')); ?></span>
                                <h3 class="d-box-three-amount">
                                    <?php echo e(isset($currentPlan->plan->plan_name) ? $currentPlan->plan->plan_name : 'N/A'); ?>

                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-4 mt-2 d-box-four-wrapper">
            <div class="col-xxl-3 col-sm-6">
                <div class="d-box-four">
                    <a href="<?php echo e(route('user.invest.all')); ?>" class="link-btn"><i class="bi bi-arrow-up-right"></i></a>
                    <div class="icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="content">
                        <span class="caption-title"><?php echo e(__('Total Invest')); ?></span>
                        <h3 class="d-box-four-amount">
                            <?php echo e(number_format($totalInvest, 2) . ' ' . $general->site_currency); ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="d-box-four">
                    <a href="<?php echo e(route('user.invest.pending')); ?>" class="link-btn"><i class="bi bi-arrow-up-right"></i></a>
                    <div class="icon">
                        <i class="fas fa-hourglass-start"></i>
                    </div>
                    <div class="content">
                        <span class="caption-title"><?php echo e(__('Pending Invest')); ?></span>
                        <h3 class="d-box-four-amount">
                            <?php echo e(number_format($pendingInvest, 2) . ' ' . $general->site_currency); ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="d-box-four">
                    <a href="<?php echo e(route('user.withdraw.pending')); ?>" class="link-btn"><i
                            class="bi bi-arrow-up-right"></i></a>
                    <div class="icon">
                        <i class="fas fa-hourglass-end"></i>
                    </div>
                    <div class="content">
                        <span class="caption-title"><?php echo e(__('Pending Withdraw')); ?></span>
                        <h3 class="d-box-four-amount">
                            <?php echo e(number_format($pendingWithdraw, 2) . ' ' . $general->site_currency); ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="d-box-four">
                    <a href="<?php echo e(route('user.commision')); ?>" class="link-btn"><i class="bi bi-arrow-up-right"></i></a>
                    <div class="icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <div class="content">
                        <span class="caption-title"><?php echo e(__('Refferal Earn')); ?></span>
                        <h3 class="d-box-four-amount"><?php echo e(number_format($commison, 2)); ?>

                            <?php echo e(@$general->site_currency); ?></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <label><?php echo e(__('Your refferal link')); ?></label>
            <div class="input-group mb-3">
                <input type="text" id="refer-link" class="form-control copy-text"
                    value="<?php echo e(route('user.register', @Auth::user()->username)); ?>" placeholder="referallink.com/refer"
                    aria-label="Recipient's username" aria-describedby="basic-addon2" readonly>
                <button type="button" class="input-group-text copy sp_theme_btn" id="basic-addon2"><?php echo e(__('Copy')); ?></button>
            </div>
        </div>


        <?php
            $reference = auth()->user()->refferals;
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><?php echo e(__('Reference Tree')); ?></h5>
                    </div>
                    <div class="card-body">
                        <?php if($reference->count() > 0): ?>
                            <ul class="sp-referral">
                                <li class="single-child root-child">
                                    <p>
                                        <img src="<?php echo e(getFile('user', auth()->user()->image)); ?>">
                                        <span class="mb-0"><?php echo e(auth()->user()->full_name .' - '. currentPlan(auth()->user())); ?></span>
                                    </p>
                                    <ul class="sub-child-list step-2">
                                        <?php $__currentLoopData = $reference; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="single-child">
                                                <p>
                                                    <img src="<?php echo e(getFile('user', $user->image)); ?>">
                                                    <span class="mb-0"><?php echo e($user->full_name.' - '. currentPlan($user)); ?></span>
                                                </p>

                                                <ul class="sub-child-list step-3">
                                                    <?php $__currentLoopData = $user->refferals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="single-child">
                                                            <p>
                                                                <img src="<?php echo e(getFile('user', $ref->image)); ?>">
                                                                <span class="mb-0"><?php echo e($ref->full_name.' - '. currentPlan($ref)); ?></span>
                                                            </p>

                                                            <ul class="sub-child-list step-4">
                                                                <?php $__currentLoopData = $ref->refferals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li class="single-child">
                                                                        <p>
                                                                            <img src="<?php echo e(getFile('user', $ref2->image)); ?>">
                                                                            <span
                                                                                class="mb-0"><?php echo e($ref2->full_name.' - '. currentPlan($ref2)); ?></span>
                                                                        </p>
                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>

                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </li>
                            </ul>
                        <?php else: ?>
                            <div class="col-md-12 text-center mt-5">
                                <i class="far fa-sad-tear display-1"></i>
                                <p class="mt-2">
                                    <?php echo e(__('No Reference User Found')); ?>

                                </p>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="modal fade" id="planDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Plan</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php $__currentLoopData = auth()->user()->payments()->where('payment_status', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group site-radio">

                                <input type="radio" name="plan" value="<?php echo e($pay->plan->id); ?>"
                                    id="planDeletelabel-<?php echo e($loop->iteration); ?>">

                                <label for="planDeletelabel-<?php echo e($loop->iteration); ?>">
                                    <?php echo e($pay->plan->plan_name); ?>

                                </label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>

.modal-backdrop.fade.show {
            display: none;
        }

        .sp-referral .single-child {
            padding: 6px 10px;
            border-radius: 5px;
        }

        .sp-referral .single-child+.single-child {
            margin-top: 15px;
        }

        .sp-referral .single-child p {
            display: flex;
            align-items: center;
            margin-bottom: 0;
        }

        .sp-referral .single-child p img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            -o-object-fit: cover;
        }

        

        .sp-referral .single-child p span {
            width: calc(100% - 35px);
            font-size: 14px;
            padding-left: 10px;
        }

        .sub-child-list {
            position: relative;
            padding-left: 35px;
        }

        .sub-child-list::before {
            position: absolute;
            content: '';
            top: 0;
            left: 17px;
            width: 1px;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sp-referral>.single-child.root-child>.sub-child-list::before {
            background-color: var(--main-color);
        }

        .sub-child-list>.single-child {
            position: relative;
        }

        .sub-child-list>.single-child::before {
            position: absolute;
            content: '';
            left: -18px;
            top: 21px;
            width: 30px;
            height: 5px;
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0 0 0 5px;
        }

        .sp-referral>.single-child.root-child > p img  {
            border: 2px solid #5463ff;
        }

        .sub-child-list.step-2 > .single-child > p img {
            border: 2px solid #0aa27c;
        }
        .sub-child-list.step-3 > .single-child > p img {
            border: 2px solid #a20a0a;
        }
        .sub-child-list.step-4 > .single-child > p img {
            border: 2px solid #f562e6;
        }
        .sub-child-list.step-5 > .single-child > p img {
            border: 2px solid #a20a0a;
        }



    </style>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>
    <script>
        'use strict';

        $('.planDelete').on('click', function() {
            const modal = $('#planDelete');

            modal.find('form').attr('action', $(this).data('href'))

            modal.modal('show')


        })


        var copyButton = document.querySelector('.copy');
        var copyInput = document.querySelector('.copy-text');
        copyButton.addEventListener('click', function(e) {
            e.preventDefault();
            var text = copyInput.select();
            document.execCommand('copy');
        });
        copyInput.addEventListener('click', function() {
            this.select();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/code/php/core/resources/views/theme2/user/dashboard.blade.php ENDPATH**/ ?>