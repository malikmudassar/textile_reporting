<div class="container">
    <div>
        <img src="https://s-media-cache-ak0.pinimg.com/originals/9e/18/f6/9e18f667f7c5715c2755e2edd442ecbc.jpg" />
    </div>
    <div >
        <p>
        <h2>Hi! <?php echo $user['name']?>;  </h2>
        </p>
    </div>
    <div class="col-lg-12" style="border-radius: 10px; background-color: #f5f5f5; padding: 15px;">

        <p style="color: #000">
        <h3>A New Task has been added</h3>
        <hr>
        <table style="padding: 10px;" class="table table-hover">
            <tr>
                <td><strong>Task Name</strong></td>
                <td style="color:red;"><?php echo $task['title']?></td>
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
                <td><strong>Module</strong></td>
                <td><?php echo $module['title']?></td>
            </tr>

        </table>

        <h4>Regards</h4>
        <p><strong>Webmaster</strong><br>Smart BABA</p>
    </div>
</div>