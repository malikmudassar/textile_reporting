<div class="layout-content">
    <div class="layout-content-body">
        <div class="row gutter-xs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions">
                            <button type="button" class="card-action card-toggler" title="Collapse"></button>
                            <button type="button" class="card-action card-reload" title="Reload"></button>
                        </div>
                        <strong>Please Provide Report Details</strong>
                    </div>

                    <div class="card-body" data-toggle="match-height">
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
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-2"><label>Style #</label></div>
                                <div class="col-md-4"><input type="text" id="form-control-1" class="form-control"  value="<?php echo $report['style']?>"> </div>
                                <div class="col-md-2"><label>Order Qty</label></div>
                                <div class="col-md-4"><input type="text" id="form-control-1" class="form-control"  value="<?php echo $report['order_qty']?>"> </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-2"><label>Job #</label></div>
                                <div class="col-md-4"><input type="text" id="form-control-1" class="form-control"  value="<?php echo $report['job_no']?>"> </div>
                                <div class="col-md-2"><label>Total Audits</label></div>
                                <div class="col-md-4"><input type="text" id="form-control-1" class="form-control "  value="<?php echo $report['total_audits']?>"> </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-2"><label>Finish Name</label></div>
                                <div class="col-md-4"><input type="text" id="form-control-1" class="form-control"  value="<?php echo $report['finish_name']?>"> </div>
                                <div class="col-md-2"><label>Check Qty</label></div>
                                <div class="col-md-4"><input type="text" id="form-control-1" class="form-control"  disabled value="<?php echo $report['check_qty']?>"> </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-2"><label>Fabric</label></div>
                                <div class="col-md-4"><input type="text" id="form-control-1" class="form-control"  value="<?php echo $report['fabric']?>"> </div>
                                <div class="col-md-2"><label>Report Date</label></div>
                                <div class="col-md-4"><input type="text" id="form-control-1" class="form-control"  value="<?php echo date('Y-m-d',now())?>"> </div>
                            </div>
                            <hr>
                            <?php
                            for($i=0;$i<count($categories);$i++)
                            {?>
                            <div class="row">
                                <div style="text-align: center; padding: 10px;"><strong><?php echo $categories[$i]['name']?></strong></div>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-left">#</th>
                                        <th class="text-left">Defects Name</th>
                                        <th class="text-right">Major</th>
                                        <th class="text-right">Minor</th>
                                        <th class="text-center">Remarks</th>
                                        <th class="text-center">Area Of Defects</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <div class="form-group">
                                            <?php
                                            for($j=0;$j<count($categories[$i]['d_types']);$j++)
                                            {?>
                                            <tr>
                                                <td class="text-left"><?php echo $j+1;?></td>
                                                <td class="text-left"><?php echo $categories[$i]['d_types'][$j]['name']?></td>
                                                <td class="text-right"><input id="form-control-1" class="form-control" type="text" name="<?php echo $categories[$i]['d_types'][$j]['cat_id'].'-'.$categories[$i]['d_types'][$j]['id'].'-major'?>" value="<?php echo getTextFieldValue($reportId,$categories[$i]['d_types'][$j]['cat_id'],$categories[$i]['d_types'][$j]['id'],'major')?>"></td>
                                                <td class="text-right"><input id="form-control-1" class="form-control" type="text" name="<?php echo $categories[$i]['d_types'][$j]['cat_id'].'-'.$categories[$i]['d_types'][$j]['id'].'-minor'?>" value="<?php echo getTextFieldValue($reportId,$categories[$i]['d_types'][$j]['cat_id'],$categories[$i]['d_types'][$j]['id'],'minor')?>"></td>
                                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                                <td class="text-center"><input id="form-control-1" class="form-control" type="text"></td>
                                            </tr>
                                            <?php }?>
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                            <?php }?>
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary"> Update Report </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
