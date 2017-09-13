<!--Edit Admin Menus-->

<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">
            <h1 class="title-bar-title" align="center">
                <span class="d-ib"><li class="icon icon-edit"></li> Edit Admin Menu</span>

                </a>

            </h1>
        </div>
        <div style="margin-left: 150px" class="col-md-8">

            <div class="card">
                <div class="card-body">

                    <?php if(isset($errors)){?>
                        <div class="alert alert-danger">
                            <?php print_r($errors);?>
                        </div>
                    <?php }?>
                    <?php if(isset($success)){?>
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Success!</strong> <?php print_r($success); ?>!
                        </div>
                    <?php }?>

                    <form class="form form-horizontal" style="margin-top: 30px" action="" method="POST">

                        <div class="form-group">
                            <label for="location" class="col-sm-3 control-label" style="width: 20%;" for="form-control-17">Parent</label>
                            <div class="col-sm-9">

                                <select name="parent" class="form-control">
                                    <option value="0">Main</option>
                                    <?php
                                    if(count($parents)>0) {
                                        for($i=0;$i<count($parents);$i++)
                                        {?>
                                            <option value="<?php echo $parents[$i]['id']?>" <?php if($menu_item['parent']==$parents[$i]['id']){echo 'selected';}?> ><?php echo $parents[$i]['name']?></option>
                                            <?php
                                        }}
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="width: 20%;" for="name">Name</label>

                            <div class="col-sm-9">
                                <div class="input-group">

                               <span class="input-group-addon">
                                  <span class="icon icon-th-large"></span>
                               </span>

                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter Menu Name" value="<?php echo $menu_item['name']?>">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="width: 20%;" for="class">Font Class</label>

                            <div class="col-sm-9">
                                <div class="input-group">

                               <span class="input-group-addon">
                                  <span class="icon icon-th-large"></span>
                               </span>

                                    <input class="form-control" type="text" name="class" id="class" placeholder="Enter Font class" value="<?php echo $menu_item['class']?>">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="width: 20%;" for="url">Url</label>

                            <div class="col-sm-9">
                                <div class="input-group">

                               <span class="input-group-addon">
                                  <span class="icon icon-th-large"></span>
                               </span>

                                    <input class="form-control" type="text" name="url" id="url" placeholder="Enter menu url" value="<?php echo $menu_item['url']?>">

                                </div>
                            </div>
                        </div>



                        <div class="col-xs-6 col-md-3">
                            <div class="panel panel-body text-center" data-toggle="match-height">
                                <button class="btn btn-primary" style="margin-left: 250px;padding: 6px 25px;!important;" type="submit">Update Menu</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








