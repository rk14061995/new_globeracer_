<?php
	/**
	 * 
	 */
	class Profile extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('API_Model','API');
			if(!$this->session->userdata('adminData')){
				redirect('userLogin');
			}
		}
		public function index($user_id=""){
// 			$data['category']=$this->db->get('event_category')->result();
			
			if($user_id!=""){
			    $userData=$this->db->where('id_table',$user_id)->get('user_details')->row();
			    $data['Ngo']=$this->db->where('user_type','Ngo')->get('users_')->result();
			    $condition=array("athlete_id"=>$userData->user_id,"start_date >="=>'2020-11-14');
			    $data['userEvents']=$this->db->where($condition)->order_by('start_date','desc')->get('event_details')->result();
			    $data['team_details']=$this->db->where('user_id',$user_id)
			                                    ->join('team_details','team_details.team_id=race_registeration.team_id')
			                                    ->get('race_registeration')
			                                    ->row();
    			$data['userSessionData']=unserialize($this->session->userdata('adminData'));
    			$data['Coaches_Nutritionist']=$this->db->where('user_type','Coaches_Nutritionist')->get('users_')->result();
    			$data['userData']=$this->db->where('id_Table',$user_id)->get('user_details')->row();
    			$this->load->view('layout/header',$data);
    			$this->load->view('pages/userProfile');
    			$this->load->view('layout/footer');
			}else{
			    redirect('Events');
			}
			
		}
		
	}
?>