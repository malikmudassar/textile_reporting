<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">
            <h1 class="title-bar-title" align="center">
                <span class="d-ib"> Add Department</span>

                </a>

            </h1>
        </div>
        <hr style="border-color:#2f4050 ">
        <center>
            <a href="<?php echo base_url().'admin/'?>" class="btn btn-primary">Back To Dashboard</a>
        </center>
        <br />
        <div style="margin-left: 150px" class="col-md-8">

            <div class="card">
                <div class="card-body">

                    <?php if(isset($errors)){?>
                        <div class="alert alert-danger">
                            <?php print_r($errors);?>
                        </div>
                    <?php }?>
                    <?php if(isset($success)){?>
                        <div class="alert alert-success">
                            <?php print_r($success);?>
                        </div>
                    <?php }?>

                    <form class="form form-horizontal" style="margin-top: 30px" method="POST">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="width: 20%;" for="name">Name</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                      <span class="icon icon-th-large"></span>
                                    </span>
                                    <input class="form-control" type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-3">
                            <div class="panel panel-body text-center" data-toggle="match-height">
                                <button class="btn btn-primary" style="margin-left: 250px;padding: 6px 25px;!important;" type="submit"> - Add - </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>


        </div>




    </div>
</div>