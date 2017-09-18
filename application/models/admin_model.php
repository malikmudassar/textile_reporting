<?php
/**
 * Created by PhpStorm.
 * User: saadi
 * Date: 9/7/2017
 * Time: 3:40 AM
 */
class Admin_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    ///////////////////////////////////////
    ///                                 ///
    ///     Admin Menu Section Starts   ///
    ///                                 ///
    ///////////////////////////////////////
    public function getMenuParents()
    {
        return $this->db->select('*')->from('admin_menu')->where('parent',0)->get()->result_array();
    }
    public function addMenuItem($data)
    {
        $item=array(
            'parent'=>$data['parent'],
            'name'=>$data['name'],
            'class'=>$data['class'],
            'url'=>$data['url']
        );

        $this->db->insert('admin_menu',$item);
    }
    public function updateMenuItem($data,$menuId)
    {
        $item=array(
            'parent'=>$data['parent'],
            'name'=>$data['name'],
            'class'=>$data['class'],
            'url'=>$data['url']
        );

        $this->db->WHERE('id',$menuId)->update('admin_menu',$item);
    }
    public function getMenuItems()
    {
        $st=$this->db->select('*')->from('admin_menu')->where('parent',0)->get()->result_array();
        if(count($st)>0)
        {
            for($i=0;$i<count($st);$i++)
            {
                $st[$i]['child']=$this->db->select('*')->from('admin_menu')->where('parent',$st[$i]['id'])->get()->result_array();
            }
        }
        else
        {
            return false;
        }

        return $st;
    }
    public function getAllMenuItems()
    {
        return $this->db->query('SELECT admin_menu.*, a.name as parent from admin_menu left join admin_menu a on a.id=admin_menu.parent')->result_array();
    }
    public function getMenuItemDetail($menuId)
    {
        $st=$this->db->select('*')->from('admin_menu')->WHERE('id',$menuId)->get()->result_array();
        return $st[0];
    }
    public function delAdminMenu($id)
    {
        $this->db->query('DELETE from admin_menu WHERE id='.$id);
    }
    ///////////////////////////////////////
    ///                                 ///
    ///     Admin Menu Section Ends     ///
    ///                                 ///
    ///////////////////////////////////////
    public function addCategory($data)
    {
        $item=array(
            'name'=>$data['name']
        );

        $this->db->insert('defect_categories',$item);
        return true;
    }
    public function getAll($table)
    {
        return $this->db->select('*')->from($table)->get()->result_array();
    }
    public function delCategory($id)
    {
        $this->db->query('DELETE from defect_categories WHERE id='.$id);
    }
    public function getById($id, $table)
    {
        $st= $this->db->select('*')->from($table)->where('id',$id)->get()->result_array();
        return $st[0];
    }
    public function addDefectType($data)
    {
        $item=array(
            'cat_id'=>$data['cat_id'],
            'name'=>$data['name']
        );

        $this->db->insert('defect_types',$item);
        return true;
    }
    public function getDefectTypes()
    {
        return $this->db->query('SELECT defect_types.*, defect_categories.name as category
                                from
                                defect_types
                                inner join
                                defect_categories on defect_categories.id=defect_types.cat_id')->result_array();
    }
    public function addDefectReport($data)
    {
        $item=array(
            'style'=>           $data['style_no'],
            'order_qty'=>       $data['order_qty'],
            'job_no'=>          $data['job_no'],
            'total_audits'=>    $data['total_audits'],
            'finish_name'=>     $data['finish_name'],
            'check_qty'=>       32*$data['total_audits'],
            'fabric'=>          $data['fabric']
        );

        $this->db->insert('defect_report',$item);
        $reportId=$this->db->insert_id();
        for($i=0;$i<count($data['categories']);$i++)
        {
            $cat=array(
                'report_id' => $reportId,
                'cat_id'    => $data['categories'][$i]
            );
            $this->db->insert('defect_report_categories',$cat);
        }
        $categories=$data['categories'];

        $category=array();
        for($i=0;$i<count($categories);$i++)
        {
            $st=$this->db->select('*')->from('defect_categories')->where('id',$categories[$i])->get()->result_array();
            $category[$i]=$st[0];
            $category[$i]['types']=$this->db->select('*')->from('defect_types')->where('cat_id',$categories[$i])->get()->result_array();
        }

        for($i=0;$i<count($category);$i++)
        {
            for($j=0;$j<count($category[$i]['types']);$j++)
            {
                $type=array(
                    'report_id' => $reportId,
                    'cat_id'    => $category[$i]['types'][$j]['cat_id'],
                    'defect_type_id'    => $category[$i]['types'][$j]['id']
                );
                $this->db->insert('defect_report_detail',$type);
            }
        }
        return $reportId;
    }

    public function getReportCategories($reportId)
    {
        $category=$this->db->query('select defect_report_categories.*, defect_categories.name as name from
                                    defect_report_categories
                                    inner join
                                    defect_categories on defect_categories.id=defect_report_categories.cat_id
                                    WHERE defect_report_categories.report_id='.$reportId)->result_array();
        for($i=0;$i<count($category);$i++)
        {
            $category[$i]['d_types']=$this->db->select('*')->from('defect_types')->where('cat_id',$category[$i]['cat_id'])->get()->result_array();
        }
        return $category;
    }

    public function updateReportDetail($data,$reportId)
    {
        $category=$this->db->query('select defect_report_categories.*, defect_categories.name as name from
                                    defect_report_categories
                                    inner join
                                    defect_categories on defect_categories.id=defect_report_categories.cat_id
                                    WHERE defect_report_categories.report_id='.$reportId)->result_array();
        for($i=0;$i<count($category);$i++)
        {
            $category[$i]['d_types']=$this->db->select('*')->from('defect_types')->where('cat_id',$category[$i]['cat_id'])->get()->result_array();
        }
        for($i=0;$i<count($category);$i++)
        {
            for($j=0;$j<count($category[$i]['d_types']);$j++)
            {
                $cat_id=$category[$i]['d_types'][$j]['cat_id'];
                $d_type_id=$category[$i]['d_types'][$j]['id'];
                $item=array(
                    'report_id'     => $reportId,
                    'cat_id'        => $cat_id,
                    'defect_type_id'=> $d_type_id,
                    'major'         => $data[$cat_id.'-'.$d_type_id.'-major'],
                    'minor'         => $data[$cat_id.'-'.$d_type_id.'-minor']
                );
                $this->db->WHERE('report_id',$reportId)->WHERE('cat_id',$cat_id)->WHERE('defect_type_id',$d_type_id)->update('defect_report_detail',$item);
            }
        }

    }
    public function getTextData($reportId,$catId,$typeId,$field)
    {
        $st=$this->db->select($field)
                    ->from('defect_report_detail')
                    ->WHERE('report_id',$reportId)
                    ->WHERE('cat_id',$catId)
                    ->WHERE('defect_type_id',$typeId)
                    ->get()->result_array();
        return $st[0][$field];
    }
}