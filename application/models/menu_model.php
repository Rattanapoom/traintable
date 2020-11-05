<?php defined('BASEPATH') or exit('No direct script access allowed');
class menu_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model', 'Menu');
    }
    
    function newtrain($data){
		$this->db->insert('timetable',$data);
	}
function showtrain()
	{
        $this->db->select('*');
		$result = $this->db->get('timetable');
		return $result;
	} 



}