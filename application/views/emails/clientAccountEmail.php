<div class="container">
    <div>
        <img src="http://www.iwmintranet.com/wp-content/uploads/2015/12/erp_banner_train.jpg" />
    </div>
    <div >
        <p>
        <h2>Hi! <?php echo $user['name']?>; Welcome in technologicx Client portal </h2>
        </p>
    </div>
    <div class="col-lg-12" style="border-radius: 10px; background-color: #f5f5f5; padding: 15px;">

        <p style="color: #000">
        <h3>Your Account has been Created</h3>
        <br />
        <h4>Your Login Credentials</h4>
        <p><b>Email : </b><?php echo $user['email']; ?></p>
        <p><b>Email : </b><?php echo $user['password']; ?></p>

        Please <a href="<?php echo base_url()?>">Click here</a> to Login to your Dashboard to start managing your projects

        <h4>Regards</h4>
        <p><strong>Webmaster</strong><br>Technologicx</p>
    </div>
</div>