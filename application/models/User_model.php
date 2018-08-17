<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    public function save_details($data){
        $this->db->insert('billing_info',$data);
    }

    public function phone_exist_or_not($number){
        return  $this->db->where('phone',$number)->from("billing_info")->count_all_results();
    }

    public function get_all_billing_info(){
        $last_time = now() - 86400*30;
        $this->db->select('*');
        $this->db->from('billing_info');
        $this->db->where('inserted_date >',$last_time);

        $query = $this->db->get();
         if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function get_document_detail(){
        $this->db->select('document.doc_name');
        $this->db->from('billing_info');
        $this->db->join('document','document.id = billing_info.id','left');
        $this->db->group_by('document.id'); 
        $query = $this->db->get();
         if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function delete_record($id){
    $this->db->where('id', $id);
    $this->db->delete('billing_info');
    return $this->db->affected_rows();
    }


}?>