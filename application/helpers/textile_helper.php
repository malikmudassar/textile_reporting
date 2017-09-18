<?php
/**
 * Created by PhpStorm.
 * User: mudassar
 * Date: 9/17/2017
 * Time: 8:27 PM
 */

function getTextFieldValue($reportId,$catId, $typeId,$field){
    $CI =& get_instance();
    $CI->load->model('admin_model');
    return $CI->admin_model->getTextData($reportId,$catId,$typeId,$field);
}

?>