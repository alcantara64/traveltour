<?php
defined('BASEPATH') OR exit('No direct script access allowed');

		header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, OPTIONS");


class Home extends CI_Controller {

	function __construct()
	    {
	        parent::__construct();
					$cache_time = 300;


}
	public function index()
	{
		$page_data['page_name'] = 'Home||Traveltour';
		$this->load->view('front/home/index',$page_data);
	}

	 function pages($para,$para2=""){
		 if($para == "about_us"){

			$page_data['page_name'] = 'about';
	 		$this->load->view('front/home/about_us',$page_data);
		 }
		 else if($para == 'our_travels'){
			 $page_data['page_name'] = 'Our Travels';
			 $this->load->view('front/home/our_travels',$page_data);
		 }
		 else if($para == 'our_services'){
			 $page_data['page_name'] = 'Ourservices';
			 $this->load->view('front/home/our_services',$page_data);
		 }
		 else if($para == 'join_us'){
			 $page_data['page_name'] = 'Register';
			 $this->load->view('front/home/join_us',$page_data);
		 }
		  else if($para == 'contact-us'){
			 $page_data['page_name'] = 'Contact us';
			 $this->load->view('front/home/contact_us',$page_data);
		 }
		 else if($para == 'login'){
			 $page_data['page_name'] = 'Login';
			 $this->load->view('front/home/login',$page_data);
		 }
	 }
	 function vendor_logup($para1 = "", $para2 = "")
    {
		if($this->crud_model->get_settings_value('general_settings','captcha_status','value') == 'ok'){
			$this->load->library('recaptcha');
		}
        $this->load->library('form_validation');
        if ($para1 == "add_info") {
        	$msg = '';
            $this->load->library('form_validation');
            $safe = 'yes';
            $char = '';
            foreach($_POST as $k=>$row){
                if (preg_match('/[\'^":()}{#~><>|=¬]/', $row,$match))
                {
                    if($k !== 'password1' && $k !== 'password2')
                    {
                        $safe = 'no';
                        $char = $match[0];
                    }
                }
            }

            $this->form_validation->set_rules('name', 'Your First Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|required|is_unique[vendor.email]',array('required' => 'You have not provided %s.', 'is_unique' => 'This %s already exists.'));
            $this->form_validation->set_rules('password1', 'Password', 'required|matches[password2]');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'required');
            $this->form_validation->set_rules('address1', 'Address Line 1', 'required');
            $this->form_validation->set_rules('address2', 'Address Line 2', 'required');
            $this->form_validation->set_rules('display_name', 'Your Display Name', 'required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('country', 'Country', 'required');
			$this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('zip', 'Zip', 'required');
			$this->form_validation->set_rules('terms_check', 'Terms & Conditions', 'required', array('required' => translate('you_must_agree_with_terms_&_conditions')));
            if ($this->form_validation->run() == FALSE)
            {
                echo validation_errors();
            }
            else
            {
                if($safe == 'yes'){
					if($this->crud_model->get_settings_value('general_settings','captcha_status','value') == 'ok'){
						$captcha_answer = $this->input->post('g-recaptcha-response');
						$response = $this->recaptcha->verifyResponse($captcha_answer);
						if ($response['success']) {
							$data['name']               = $this->input->post('name');
							$data['email']              = $this->input->post('email');
							$data['address1']           = $this->input->post('address1');
							$data['address2']           = $this->input->post('address2');
							$data['company']            = $this->input->post('company');
							$data['display_name']       = $this->input->post('display_name');
							$data['state']       		= $this->input->post('state');
							$data['country']       		= $this->input->post('country');
							$data['city']       		= $this->input->post('city');
							$data['zip']       			= $this->input->post('zip');
							$data['create_timestamp']   = time();
							$data['approve_timestamp']  = 0;
							$data['approve_timestamp']  = 0;
							$data['membership']         = 0;
							$data['status']             = 'pending';
							
							if ($this->input->post('password1') == $this->input->post('password2')) {
								$password         = $this->input->post('password1');
								$data['password'] = sha1($password);
								$this->db->insert('vendor', $data);
								$msg = 'done';
								if($this->email_model->account_opening('vendor', $data['email'], $password) == false){
									$msg = 'done_but_not_sent';
								}else{
									$msg = 'done_and_sent';
								}
							}
							echo $msg;
						} else {
							echo translate('please_fill_the_captcha');
						}
					}else{
						$data['name']               = $this->input->post('name');
						$data['email']              = $this->input->post('email');
						$data['address1']           = $this->input->post('address1');
						$data['address2']           = $this->input->post('address2');
						$data['company']            = $this->input->post('company');
						$data['display_name']       = $this->input->post('display_name');
						$data['state']       		= $this->input->post('state');
						$data['country']       		= $this->input->post('country');
						$data['city']       		= $this->input->post('city');
						$data['zip']       			= $this->input->post('zip');
						$data['create_timestamp']   = time();
						$data['approve_timestamp']  = 0;
						$data['approve_timestamp']  = 0;
						$data['membership']         = 0;
						$data['status']             = 'pending';
						
						if ($this->input->post('password1') == $this->input->post('password2')) {
							$password         = $this->input->post('password1');
							$data['password'] = sha1($password);
							$this->db->insert('vendor', $data);
							$msg = 'done';
							if($this->email_model->account_opening('vendor', $data['email'], $password) == false){
								$msg = 'done_but_not_sent';
							}else{
								$msg = 'done_and_sent';
							}
						}
						echo $msg;
					}
                } else {
                    echo 'Disallowed charecter : " '.$char.' " in the POST';
                }
            }
        } else if($para1 == 'registration') {
			if ($this->crud_model->get_settings_value('general_settings','vendor_system') !== 'ok') {
				redirect(base_url());
			}
			if($this->crud_model->get_settings_value('general_settings','captcha_status','value') == 'ok'){
				$page_data['recaptcha_html'] = $this->recaptcha->render();
			}
			$page_data['page_name'] = "vendor/register";
			$page_data['asset_page'] = "register";
        	$page_data['page_title'] = translate('registration');
            $this->load->view('front/index', $page_data);
        }

    }
function login($para1 = "", $para2 = "")
    {


        $page_data['page_name'] = "login";
		
        $this->load->library('form_validation');
        if ($para1 == "do_login") {
			$this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                echo validation_errors();
            }
            else
            {
				$signin_data = $this->db->get_where('user', array(
					'email' => $this->input->post('email'),
					'password' => sha1($this->input->post('password'))
				));
				if ($signin_data->num_rows() > 0) {
					foreach ($signin_data->result_array() as $row) {
						$this->session->set_userdata('user_login', 'yes');
						$this->session->set_userdata('user_id', $row['user_id']);
						$this->session->set_userdata('user_name', $row['username']);
						$this->session->set_flashdata('alert', 'successful_signin');
						$this->db->where('user_id', $row['user_id']);
						$this->db->update('user', array(
							'last_login' => time()
						));
						echo 'done';
					}
				} else {
					echo 'failed';
				}
			}
        } else if ($para1 == 'forget') {
        	$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'required');
			
            if ($this->form_validation->run() == FALSE)
            {
                echo validation_errors();
            }
            else
            {
				$query = $this->db->get_where('user', array(
					'email' => $this->input->post('email')
				));
				if ($query->num_rows() > 0) {
					$user_id          = $query->row()->user_id;
					$password         = substr(hash('sha512', rand()), 0, 12);
					$data['password'] = sha1($password);
					$this->db->where('user_id', $user_id);
					$this->db->update('user', $data);
					if ($this->email_model->password_reset_email('user', $user_id, $password)) {
						echo 'email_sent';
					} else {
						echo 'email_not_sent';
					}
				} else {
					echo 'email_nay';
				}
			}
        }
		//$this->load->view('front/index', $page_data);
    }
	}
