<?php

class Training_model extends CI_Model {
    public function __construct(){
        $this->load->database();
        
    }

    public function get_emps(){
        $this->db->select('*');
        $this->db->from('alldetails');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_city(){
        $this->db->select('city_name,city_id');
        $this->db->from('city_master');
        $cities = $this->db->get();
        return $cities->result_array();
        }

    public function get_department(){
        $this->db->select('dept_name,dept_id');
        $this->db->from('department_master');
        $departments = $this->db->get();
        return $departments->result_array();
        }

    public function set_emp($ename,$eage,$ecity,$edep,$esex){
        $data=array(
            'emp_name' => $ename,
            'emp_age' => $eage,
            'emp_city_id' => $ecity,
            'emp_dept_id' => $edep,       
            'emp_sex' => $esex,   
            'emp_doj' => date("Y.m.d")
        );
        $this->db->insert('employee_master',$data);

    }
}