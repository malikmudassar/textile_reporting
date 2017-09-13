<div class="login">
    <?php if(isset($success)) { ?>
        <div class="alert alert-success">
            <?php print_r($success); ?>
        </div>
    <?php } ?>
    <?php if(isset($errors)){?>
        <div class="alert alert-danger">
            <?php print_r($errors);?>
        </div>
    <?php }?>
    <div class="login-body">
        <a class="login-brand" href="<?php echo base_url(); ?>">
            <img class="img-responsive" src="<?php echo base_url(). 'assets/img/logo.png'; ?>" alt="Technologicx">
        </a>

        <div class="login-form">
            <form data-toggle="validator" method="POST">

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
                </div>

                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input id="password" class="form-control" type="password" name="c_password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
                </div>

                <button class="btn btn-primary btn-block" type="submit">Update Password</button>
            </form>
        </div>
    </div>

</div>

<div class="layout-footer" style="margin-left:-228px;">
    <div class="layout-footer-body">
        <small class="version">Version 1.0</small>
        <small class="copyright">2017 &copy; PM_ERP by <a href="#">Technologicx</a></small>
    </div>
</div>