<div class="container">
    <div>
        <img src="http://www.empire-computers.co.uk/gfx/websites_banner.jpg" />
    </div>
    <div >
        <p>
        <h2>Hi! <?php echo $user['name']?>;  </h2>
        </p>
    </div>
    <div class="col-lg-12" style="border-radius: 10px; background-color: #f5f5f5; padding: 15px;">

        <p style="color: #000">
        <h3>Your Project has been added</h3>
        <hr>
        <table style="padding: 10px;">
            <tr>
                <td><strong>Project Name</strong></td>
                <td><?php echo $project['title']?></td>
            </tr>
            <tr>
                <td><strong>Category</strong></td>
                <td><?php echo $project['category']?></td>
            </tr>
            <tr>
                <td><strong>Date Added</strong></td>
                <td><?php echo date('mm/dd/YY',strtotime($project['date_added']))?></td>
            </tr>
        </table>

        <h4>Regards</h4>
        <p><strong>Webmaster</strong><br>Smart BABA</p>
    </div>
</div>