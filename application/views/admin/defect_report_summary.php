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
                        <strong>Report</strong>
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
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-2"><label>Style #</label></div>
                            <div class="col-md-4"><?php echo $report['style']?> </div>
                            <div class="col-md-2"><label>Order Qty</label></div>
                            <div class="col-md-4"><?php echo $report['order_qty']?> </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-2"><label>Job #</label></div>
                            <div class="col-md-4"><?php echo $report['job_no']?> </div>
                            <div class="col-md-2"><label>Total Audits</label></div>
                            <div class="col-md-4"><?php echo $report['total_audits']?> </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-2"><label>Finish Name</label></div>
                            <div class="col-md-4"><?php echo $report['finish_name']?> </div>
                            <div class="col-md-2"><label>Check Qty</label></div>
                            <div class="col-md-4"><?php echo $report['check_qty']?> </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-2"><label>Fabric</label></div>
                            <div class="col-md-4"><?php echo $report['fabric']?> </div>
                            <div class="col-md-2"><label>Report Date</label></div>
                            <div class="col-md-4"><?php echo $report['created_at']?> </div>
                        </div>
                        <hr>
                        <strong>Short Summary</strong>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>Department</th>
                                        <th>OK PCS</th>
                                        <th>OK %</th>
                                        <th>OUT PCS</th>
                                        <th>OUT %</th>
                                    </tr>
                                    <?php foreach($result['result'] as $row){?>
                                    <tr>
                                        <td><?php echo $row['category']?></td>
                                        <td><?php echo $row['ok_pcs']?></td>
                                        <td><?php echo $row['ok_per']?></td>
                                        <td><?php echo $row['out_pcs']?></td>
                                        <td><?php echo $row['out_per']?></td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <?php
                        foreach($result['result'] as $row)
                        {
                            ?>
                            <div class="row" style="padding-bottom: 10px;">
                                <div  class="col-md-12" style="text-align: center; padding: 10px; background: #9defde"><strong><?php echo $row['category']?></strong></div>
                                <div class="col-md-2"><label>Total Major</label></div>
                                <div class="col-md-2"><?php echo $row['major']?> </div>
                                <div class="col-md-2"><label>Total Minor</label></div>
                                <div class="col-md-2"><?php echo $row['minor']?> </div>
                                <div class="col-md-2"><label>Total </label></div>
                                <div class="col-md-2"><?php echo $row['total']?> </div>
                                <div class="clearfix"></div>
                                <div class="col-md-2"><label>Major %</label></div>
                                <div class="col-md-2"><?php echo $row['majorpercent']?> </div>
                                <div class="col-md-2"><label>Minor %</label></div>
                                <div class="col-md-2"><?php echo $row['minorpercent']?> </div>
                                <div class="col-md-2"><label>Total % </label></div>
                                <div class="col-md-2"><?php echo $row['totalpercent']?> </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
