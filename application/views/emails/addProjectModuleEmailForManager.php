<div class="container">
    <div>
        <img src="http://www.webcape.co.za/images/website-design-development/banner-custom-web-development.jpg" />
    </div>
    <div >
        <p>
        <h2>Hi! <?php echo $manager['name']?>;  </h2>
        </p>
    </div>
    <div class="col-lg-12" style="border-radius: 10px; background-color: #f5f5f5; padding: 15px;">

        <p style="color: #000">
        <h3>A new Module has been added</h3>
        <hr>
        <table style="padding: 10px;">
            <tr>
                <td><strong>Project Name</strong></td>
                <td><?php echo $project['title']?></td>
            </tr>
            <tr>
                <td><strong>Client</strong></td>
                <td><?php echo $user['name']?></td>
            </tr>
            <tr>
                <td><strong>Category</strong></td>
                <td><?php echo $project['category']?></td>
            </tr>
            <tr style="color: red;">
                <td><strong>Module Name</strong></td>
                <td><?php echo $module['title']?></td>
            </tr>
            <tr>
                <td><strong>Date Added</strong></td>
                <td><?php echo date('m/d/Y',strtotime($project['date_added']))?></td>
            </tr>
        </table>

        <h4>Regards</h4>
        <p><strong>Webmaster</strong><br>Smart BABA</p>
    </div>
</div>