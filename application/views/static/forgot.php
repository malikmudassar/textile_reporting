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
                    <label for="username">Email</label>
                    <input id="username" class="form-control" type="email" name="email" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Send</button>
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