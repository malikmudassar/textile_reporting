<div class="container">
    <div>
        <img src="http://www.soget.it/wp-content/uploads/2013/07/BANNER_WEBSITES_EN.jpg" />
    </div>
    <div >
        <p>
        <h2>Hi! <?php echo $member['name']?>;  </h2>
        </p>
    </div>
    <div class="col-lg-12" style="border-radius: 10px; background-color: #f5f5f5; padding: 15px;">

        <p style="color: #000">
        <h3>The Following Task has been Assigned to you</h3>
        <hr>
        <table style="padding: 10px;">
            <tr>
                <td><strong>Task Name</strong></td>
                <td><?php echo $task['title']?></td>
            </tr>
            <tr>
                <td><strong>Project Name</strong></td>
                <td><?php echo $project['title']?></td>
            </tr>
            <tr>
                <td><strong>Category</strong></td>
                <td><?php echo $project['category']?></td>
            </tr>
            <tr>
                <td><strong>Module Name</strong></td>
                <td><?php echo $module['title']?></td>
            </tr>

        </table>

        <h4>Regards</h4>
        <p><strong>Webmaster</strong><br>Smart BABA</p>
    </div>
</div>