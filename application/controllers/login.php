<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	
		$this->load->view('login');
	}
	
	public function user_register()
	{	
		
			$vals = array(
					'img_path' => './captcha/',
                                        'font_path' => base_url().'fonts/mabella.ttf',
					'img_url' => base_url().'captcha/'
					);

			$cap = create_captcha($vals);	
				
			$data = array(
			'captcha_time' => $cap['time'],
			'ip_address' => $this->input->ip_address(),
			'word' => $cap['word']
			);

			$query = $this->db->insert_string('captcha', $data);
			$this->db->query($query); 
			
			$cap['test'] = 1;    
			
                        
                        $cap['data'] = array(
                                'email'         => '',
                                'name'          => '',
                                'phone'         => '',
                                'city'          => '',
                                'postcode'      => '',
                                'address'       => ''
                         );
			$this->load->view('register_form',$cap);
	}
	
	public function user_register1()
	{	
		
			$vals = array(
					'img_path' => './captcha/',
					'img_url' => base_url().'captcha/'
					);

			$cap = create_captcha($vals);	
				
			$data = array(
			'captcha_time'  => $cap['time'],
			'ip_address'    => $this->input->ip_address(),
			'word'          => $cap['word']
			);

			$query = $this->db->insert_string('captcha', $data);
			$this->db->query($query); 
			
			$cap['error'] = 'This Email-id is already registered with us.';
                        $cap['data'] = array(
                                'email'         => $this->session->userdata('email'),
                                'name'          => $this->session->userdata('name'),
                                'phone'         => $this->session->userdata('phone'),
                                'city'          => $this->session->userdata('email'),
                                'postcode'      => $this->session->userdata('pin_code'),
                                'address'       => $this->session->userdata('address')
                         );
			
			$this->load->view('register_form',$cap);
	}
	
	public function user_register2()
	{	
		
			$vals = array(
					'img_path' => './captcha/',
					'img_url' => base_url().'captcha/'
					);

			$cap = create_captcha($vals);	
				
			$data = array(
			'captcha_time' => $cap['time'],
			'ip_address' => $this->input->ip_address(),
			'word' => $cap['word']
			);

			$query = $this->db->insert_string('captcha', $data);
			$this->db->query($query); 
			
			$cap['error'] = 'Your account has been successfully created! You would have received an Email with a link to activate your account.';
			
                        $cap['data'] = array(
                                'email'         => '',
                                'name'          => '',
                                'phone'         => '',
                                'city'          => '',
                                'postcode'      => '',
                                'address'       => ''
                         );
                        
			$this->load->view('register_form',$cap);
	}
        
        public function user_register_refresh_captcha()
	{	
		
			$vals = array(
					'img_path' => './captcha/',
					'img_url' => base_url().'captcha/'
					);

			$cap = create_captcha($vals);	
				
			$data = array(
			'captcha_time'  => $cap['time'],
			'ip_address'    => $this->input->ip_address(),
			'word'          => $cap['word']
			);

			$query = $this->db->insert_string('captcha', $data);
			$this->db->query($query); 
			
			$cap['error'] = 'You refreshed the captcha.';
                        $cap['data'] = array(
                                'email'         => $this->session->userdata('email'),
                                'name'          => $this->session->userdata('name'),
                                'phone'         => $this->session->userdata('phone'),
                                'city'          => $this->session->userdata('email'),
                                'postcode'      => $this->session->userdata('pin_code'),
                                'address'       => $this->session->userdata('address')
                         );
			
			$this->load->view('register_form',$cap);
	}
	
	public function user_register3()
	{	
		
			$vals = array(
					'img_path' => './captcha/',
					'img_url' => base_url().'captcha/'
					);

			$cap = create_captcha($vals);	
				
			$data = array(
			'captcha_time' => $cap['time'],
			'ip_address' => $this->input->ip_address(),
			'word' => $cap['word']
			);

			$query = $this->db->insert_string('captcha', $data);
			$this->db->query($query); 
			
			 $cap['error'] = 'Incorrect Captcha! Please try again';
                         $cap['data'] = array(
                                'email'         => $this->session->userdata('email'),
                                'name'          => $this->session->userdata('name'),
                                'phone'         => $this->session->userdata('phone'),
                                'city'          => $this->session->userdata('email'),
                                'postcode'      => $this->session->userdata('pin_code'),
                                'address'       => $this->session->userdata('address')
                         );
			
			$this->load->view('register_form',$cap);
                        $this->session->unset_userdata($cap['data']);
	}
	
	
	
	public function add_user(){
		
	    $data_entry = $this->load->model('Model_Login');
            // form_validation code moved to model_login 
            $value = $this->Model_Login->insert_entry();
		
		   if($value == '1'){
		           
                    //$data['error'] = 'Your account has been made, login details are sent to your mail please check it';
				    //$this->load->view('login', $data);
					$this->user_register2(); 
                                        /*$sess_data = $this->session->userdata($register_data);
                                        var_dump($sess_data);*/
			}
			else if( $value == '8'){
			 
               $data['error'] = 'This Email-id Is Already Registered try With Another';
			   
			    //$this->load->view('register_form', $data);
				
				$this->user_register1(); 
			
			}
			else if( $value == '22'){
			   
			   $data['error'] = 'This Email-id Is Already Registered try With Another';
			   
			    //$this->load->view('register_form', $data);
				
				$this->user_register3(); 
			
			}
                        
			else{
			
			    $this->user_register(); 
			}
		  
		
	}
	
	function login_check()
	{
		$password = $this->input->post("password");	
		$email = $this->input->post("email");
		
		$this->load->model('Model_Login');
		
		if(!$this->Model_Login->login($email,$password))
		{
			        $data['error'] = 'Please check the Username & Password!';
				    $this->load->view('login', $data);
		}
		else{
			if($this->session->userdata('user_type')=='admin'){
				redirect('admin_deck_area_booking');
			}
			else{
				$this->session->set_flashdata('flashSuccess', 'This is a success message.');
				redirect('user_deck_area_booking');
			}
		}
	}
		
	
	function verify(){
	
	 $email = $_GET['email'];
	   
	 $password = $_GET['hash'];
	 
	 $activation = $_GET['activation'];
	 
	 
		$this->load->model('Model_Login');
		
		if($this->Model_Login->login_m($email,$password,$activation))
		{
                                    $data['flag'] = 0;
                                    $data['error'] = 'Your account has now been activated! Please login and proceed to book your function.';
				    $this->load->view('login', $data);
		}                
                else if(!$this->Model_Login->login_m($email,$password,$activation))
		{
                                    $data['flag'] = 1;
                                    $data['error'] = 'Verification failed!';
				    $this->load->view('login', $data);
		}
		else{
			if($this->session->userdata('user_type')=='admin'){
				redirect('admin_deck_area_booking');
			}
			else{
				$this->session->set_flashdata('flashSuccess', 'This is a success message.');
				redirect('user_deck_area_booking');
			}
		}
	
	}
	
	
	
	function forgot_your_password(){
	
	       $this->load->view('forget_password_form');
		   
	}	
     

	function get_password(){
	
	         $this->load->model('Model_Login');
			 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			 $email = $this->input->post("email");
			
			 if ($this->form_validation->run() == FALSE)
				{
				    $this->load->view('forget_password_form');
				}
				
				else
				{
				    $this->Model_Login->send_an_email($email);
					
				}
				
				 //$this->load->view('forget_password_form');
      	}
        
        public function email_vefication(){
            $email = $this->input->get('email', TRUE);
            $password = $this->input->get('hash', TRUE);
            $activation_key_db = $this->input->get('activation', TRUE);
            
            $sql = "SELECT name, email, password, activation_key_db FROM  user_registeration_table WHERE email = '".$email."' AND password = '".$password."' AND activation_key_db = '".$activation_key_db."' ";
            $query = $this->db->query($sql);
            
          if($query->num_rows() == 0){
		$data = array('flag' => 0);
                
                //$flag = 0;
                $this->load->view('email_verification', $data);
            }
            else{
                //$flag = 1;
                $data = array('flag' => 1);
                $this->load->view('email_verification', $data);
            }
        }
        
        public function sendemailagain(){
            $email = $this->input->post('email', TRUE);
            
            $sql = "SELECT email FROM user_registeration_table WHERE email = '".$email."'";
            $query = $this->db->query($sql);
            
            if($query->num_rows() == 0){
                $data = array(
                    'msg' => "Email address does not exist in our DB",
                    'flag' => 2
                );
                $this->load->view('email_verification', $data);
            }
            else{
                $this->load->model('model_login');
                $result = $this->model_login->send_email($email);
                if($result == 1){
                   $data = array(
                    'msg' => "Email has been sent again successfully",
                    'flag' => 3
                );
                $this->load->view('email_verification', $data); 
                }
            }
        }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */