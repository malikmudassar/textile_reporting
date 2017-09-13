<div class="layout-content">
    <div class="layout-content-body">

        <div class="title-bar">
            <h1 class="title-bar-title" align="center">
                <span class="d-ib"><li class="icon icon-code"></li> Department Wise Defects</span>
            </h1>
        </div>
        <hr style="border-color:#2f4050 ">
        <div class="row gutter-xs">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Cropping</strong>
                    </div>
                    <div class="card-body">
                        <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Sr. #</th>
                                <th>Defects Name</th>
                                <th>Major Type</th>
                                <th>Minor Type</th>
                                <th>As Per Band/Approval</th>
                                <th>Remarks</th>
                                <th>Area of Defects</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php /*for($i=0;$i<count($menu_items);$i++){*/?>
                                <tr>
                                    <td data-order="Jessica Brown"><strong>1<?php /*echo $i+1;*/?></strong></td>
                                    <td><?php /*echo $menu_items[$i]['name']*/?>Fly frey</td>
                                    <td><?php /*echo $menu_items[$i]['parent']*/?>12</td>
                                    <td><?php /*echo $menu_items[$i]['class']*/?>12</td>
                                    <td><?php /*echo $menu_items[$i]['url']*/?>12121</td>
                                    <td>xyz</td>
                                    <td>0.10%</td>
                                    <td>
                                        <a href="<?php /*echo base_url().'admin/edit_admin_menu/'.$menu_items[$i]['id'];*/?>" class="btn btn-success"><i class="icon icon-pencil"></i></a>
                                        <button class="btn btn-danger" onclick="validate(this)" value="<?php /*echo $menu_items[$i]['id']*/?>"><i class="icon icon-times"></i></button>
                                    </td>

                                </tr>

                            <?php /*} */?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
<script>
    $(function(){ TablesDatatables.init(); });
    function validate(a)
    {
        var id= a.value;

        swal({
                title: "Are you sure?",
                text: "You want to delete this Menu Item!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, Delete it!",
                closeOnConfirm: false }, function()
            {
                swal("Deleted!", "Menu Item has been Deleted.", "success");
                $(location).attr('href','<?php echo base_url()?>admin/del_admin_menu/'+id);
            }
        );
    }
</script>