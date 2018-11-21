<?php defined('BASEPATH') OR exit ('Akses tidak diizinkan');

require APPPATH.'/libraries/REST_controller.php';

class Api extends REST_controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('my_api');
	}
	
	function users_get(){
		$id=$this->uri->segment(3);
		$this->load->model('Model_users');
		if (isset($id)) {
			$user =$this->Model_users->get_by(array('id'=>$id,));
			if(isset($user['id'])){
				$this->response(array('status'=>'sukses','data'=>$user));
			}
			else{
				$this->response(array('status'=>'gagal','data'=>'User Tidak Ditemukan'),REST_controller::HTTP_NOT_FOUND);
			}
		}
		else
			$user =$this->Model_users->get_all();
			if(isset($user)){
				$this->response(array('status'=>'sukses','data'=>$user));
			}
			else{
				$this->response(array('status'=>'gagal','data'=>'User Tidak Ditemukan'),REST_controller::HTTP_NOT_FOUND);
			}
	
	}
	
	function users_put(){
		$this->load->library('form_validation');
		$data=remove_unknown_fields($this->put(),$this->form_validation->get_field_names('users_put'));
		$this->form_validation->set_data($this->put());
			
		if($this->form_validation->run('users_put')!=false){
			$this->load->model('Model_users');
			$users=$this->put();
			$users_id=$this->Model_users->insert($users);
			if(!$users_id){	
				$this->response(array('status'=>'gagal','data'=>'Terjadi Kesalahan Pada Saat Pembuatan Data'),REST_controller::HTTP_INTERNAL_SERVER-ERROR);
			}
			else{
				$this->response(array('status'=>'sukses','pesan'=>'Data Berhasil Dibuat'));
			}
			
		}
		else{
			$this->response(array('status'=>'gagal','data'=>$this->form_validation->get_errors_as_array()),REST_controller::HTTP_BAD_REQUEST);
		}
	}
	
	function users_delete(){
		$id=$this->uri->segment(3);
		$this->load->model('Model_users');
		$user=$this->Model_users->get_by(array('id'=>$id,'status'=>'active'));
		if(isset($user['id'])){
			$data['status']='deleted';
			$deleted=$this->Model_users->update($id,$data);
			if(!$deleted){
				$this->response(array('status'=>'Gagal','pesan'=>'Terjadi Error ketika Menghapus Data'),REST_controller::HTTP_INTERNAL_SERVER_ERROR);
			}
			else{
				$this->response(array('status'=>'Sukses','pesan'=>'Data Berhasil Dihapus'));
			}
		}
		else{
			$this->response(array('status'=>'gagal','data'=>'Data Tidak Ditemukan'),REST_controller::HTTP_NOT_FOUND);
	}
	}
}
?>