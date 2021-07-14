<?php 

function pengunjung()
{
	$ci=get_instance();
	$data=[
		'time'=>time()
	];
	if (!$ci->session->tempdata('time')) {
		$ci->session->set_userdata($data);
		$ci->session->mark_as_temp('time',900);
		$ci->db->insert('pengunjung',$data);
	}	
}


?>