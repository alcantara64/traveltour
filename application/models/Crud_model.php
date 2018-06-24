<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	function add_message($message, $nickname, $guid)
	{
		$data = array(
			'message'	=> (string) $message,
			'nickname'	=> (string) $nickname,
			'guid'		=> (string)	$guid,
			'timestamp'	=> time(),
		);

		$this->db->insert('messages', $data);
	}

	function get_messages($timestamp)
	{
		$this->db->where('timestamp >', $timestamp);
		$this->db->order_by('timestamp', 'DESC');
		$this->db->limit(10);
		$query = $this->db->get('messages');

		return array_reverse($query->result_array());
	}
	function get_tour_by_id($para =""){

	}
	 function get_type_name_by_id($type, $type_id = '', $field = 'name')
    {
        if ($type_id != '') {
            $l = $this->db->get_where($type, array(
                $type . '_id' => $type_id
            ));
            $n = $l->num_rows();
            if ($n > 0) {
                return $l->row()->$field;
            }
        }
    }
    function count_all_by_id($type, $type_id = ''){

    if ($type != '') {
            $l = $this->db->where($type, array(
                $type . '_id' => $type_id
            ));
            $n = $l->num_rows();
            if ($n > 0) {
                return $l->row()->$field;
            }
    }
}

    function get_current_tour_id(){
    	$tour_id =$this->db->get_where('tour',array('status' => 1, ))->row()->tour_id;
    	return $tour_id;	
    }

}
