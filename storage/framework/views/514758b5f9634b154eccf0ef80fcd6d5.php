<div>
     <?php $__env->slot('title', null, []); ?> 
        User/Admin Login
     <?php $__env->endSlot(); ?>

    <div class="background">
        <div class="wrap d-md-flex">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-11 col-lg-9">
                        <!-- Success Modal -->
                        <!--[if BLOCK]><![endif]--><?php if(session()->has('success')): ?>
                        <div class="modal fade show d-block custom-modal" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            <i class="fas fa-check-circle text-success"></i> Success
                                        </h5>
                                        <button type="button" class="close" aria-label="Close" wire:click="closeModal">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo e(session('success')); ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                        <!-- Error Modal -->
                        <!--[if BLOCK]><![endif]--><?php if(session()->has('error')): ?>
                        <div class="modal fade show d-block custom-modal" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            <i class="fas fa-exclamation-triangle text-danger"></i> Error
                                        </h5>
                                        <button type="button" class="close" aria-label="Close" wire:click="closeModal">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo e(session('error')); ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                        <!-- OTP Modal -->
                        <!--[if BLOCK]><![endif]--><?php if($isOtpSent): ?>
                        <div class="modal fade show d-block custom-modal" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Enter OTP</h5>
                                        <button type="button" class="close" aria-label="Close" wire:click="closeOtpModal">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form wire:submit.prevent="verifyOtp">
                                            <div class="form-group">
                                                <label for="userVerificationCode">Verification Code</label>
                                                <input type="text" id="userVerificationCode" class="form-control" wire:model="userInputOtp" autocomplete="off">
                                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['userInputOtp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Verify</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4" style="color: rgb(79, 111, 255); font-weight: bold;">Login</h3>
                                </div>
                            </div>

                            <form wire:submit.prevent="login">
                                <div class="form-group">
                                    <label for="loginCredential">Email or Username</label>
                                    <input class="form-control py-4" wire:model="loginCredential" id="loginCredential" type="text" placeholder="Enter email or username" />
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['loginCredential'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control py-4" wire:model="password" id="password" type="password" placeholder="Enter password" />
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                        <span wire:loading.remove wire:target="login">Login</span>
                                        <span wire:loading wire:target="login">Logging in...</span>
                                    </button>
                                </div>
                                <div class="d-md-flex">
                                    <div class="w-50 text-right">
                                        <a href="<?php echo e(route('user.register')); ?>" class="admin-login-link">Sign Up</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .background {
            background-image: url('<?php echo e(asset('images/NEW.png')); ?>');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
        }

        .custom-modal {
            z-index: 1050;
        }
    </style>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Prevent autofill on OTP input
        const otpInput = document.getElementById('userVerificationCode');
        if (otpInput) {
            otpInput.setAttribute('autocomplete', 'off');
            otpInput.setAttribute('name', 'otp_code_' + Math.random().toString(36).substr(2, 10)); // Use a random name to avoid autofill
        }

        // Clear the OTP field on page load
        if (otpInput) {
            otpInput.value = '';
        }
    });
</script>
<?php /**PATH C:\xampp\htdocs\REPORTING_SYSTEM_V4 - test_new\resources\views/livewire/user/login.blade.php ENDPATH**/ ?>