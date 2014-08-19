<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_deck_area_booking extends CI_Controller {

	
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
		$this->load->model('Model_Login');
		

		if($this->Model_Login->is_logged_in())
		{
			if($this->session->userdata('type')=='normal'){
				
				   $this->load->view('user_profile');
			}
			else{
				   
			   $this->load->view('admin_profile_interface');
			    
			}
		}
		else
		{			
			$this->load->view('login');			
		}
	}

  function deck_admin_profile(){
  
        //$this->load->view('admin_profile');
		
		$this->price_manager();
		
        $month = date('m');
								  
	    $yr = date('Y'); 

		
		redirect('admin_deck_area_booking/show/'.$yr.'/'.$month); // to redirect to the booking calender landing page
  
  }
  
  function price_manager(){
    
	$this->load->model('Model_Login');
	$data['users']=$this->Model_Login->get_all();
  
	$this->load->view('price_manager',$data);
  
  
  }
  

  function add_price($booking_id){
  
   $this->load->model('Model_Login');
   
   $data['day_details']=$this->Model_Login->get_all_the_day_details($booking_id);
     
   $this->load->view('add_price_form',$data);
  
  }
  
  function save_edit_price(){
  
   $this->load->model('Model_Login');
   
   $this->Model_Login->save_edit_price_details();
   
   $data['users']=$this->Model_Login->get_all();
  
	$this->load->view('price_manager',$data);
  
  }

function payments_orders(){

   $this->load->model('Model_Login');
	
	$this->load->library('pagination');
	$config['base_url'] = base_url().'index.php/admin_deck_area_booking/payments_orders/';
	$config['total_rows'] = 200;
	$config['per_page'] = 5;
	$config['num_links'] = 2;
	$config['full_tag_open'] = '<p>';
	$config['full_tag_close'] = '</p>';
   
	$this->pagination->initialize($config);
	
	$offset = $this->uri->segment(3);
	
	$data['payment_order']=$this->Model_Login->get_pay_order_details($config['per_page'], $offset); 

    $data ['pagi_links'] =  $this->pagination->create_links();
  
    $this->load->view('payment_orders',$data);
}


function payments_orders_P(){

   $this->load->model('Model_Login');

   $this->load->library('pagination');
	
	$config['base_url'] = base_url().'index.php/admin_deck_area_booking/payments_orders_p/';
	$config['total_rows'] = 100;
	$config['per_page'] = 10;
	$config['num_links'] = 2;
	$config['full_tag_open'] = '<p>';
	$config['full_tag_close'] = '</p>';
	
	$this->pagination->initialize($config);
	
	$offset = $this->uri->segment(3);
	
	$data['payment_order']=$this->Model_Login->get_pay_order_details_p($config['per_page'], $offset); 

    $data ['pagi_links'] =  $this->pagination->create_links();
  
    $this->load->view('payment_orders',$data);
}




 function check_available_dates(){  //implementing the functionaltuy for restrictigng booking slot restriction
 
   $this->load->model('Model_Login');
 
   $date = $this->input->post('booking_date');
   
   $year_month_day = explode("-", $date);
					   
					   $year = $year_month_day[2];
					   
					   $month = $year_month_day[1];
					   
					   $day = $year_month_day[0];				   
					   
					   $new_date = $year.'-'.$month.'-'.$day;
					   
					   
   $data['day_amount'] = $this->Model_Login->get_amount_day($year, $month, $day);   
   
   $data['cust_date'] = $date;
 
   $data['book_slot_options'] = $this->Model_Login->book_slot_options($date); 
 
  $this->load->view('add_customer', $data);
 }
 
 function insert_cust(){
 
       $this->load->model('Model_Login');
	   
	   $this->Model_Login->insert_cust();
	   
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/index.php/admin_deck_area_booking/payments_orders/';
		$config['total_rows'] = 200;
		$config['per_page'] = 20;

    $this->pagination->initialize($config);

    $data ['pagi_links'] =  $this->pagination->create_links();
	   $offset = $this->uri->segment(3);
	   
	   $data['payment_order']=$this->Model_Login->get_pay_order_details($config['per_page'],$offset);
	
       $this->load->view('payment_orders',$data);
	   
 
  }
  
  public function nobookingslot(){
                     
                     $this->load->view("nobookingslot");
                 }
     
    function view_booking_calender($year=-1, $month=-1){
	
	$url = base_url().'index.php/admin_deck_area_booking/show';
	$prefs['template'] = '
    {table_open}<table class="calendar">{/table_open}
    {week_day_cell}<th class="day_header">{week_day}</th>{/week_day_cell}
    {cal_cell_content}<span class="day_listing">{day}</span>&nbsp;&bull; {content}&nbsp;{/cal_cell_content}
    {cal_cell_content_today}<div class="today"><span class="day_listing">{day}</span>&bull; {content}</div>{/cal_cell_content_today}
    {cal_cell_no_content}<span class="day_listing">{day}</span>&nbsp;{/cal_cell_no_content}
    {cal_cell_no_content_today}<div class="today"><span class="day_listing">{day}</span></div>{/cal_cell_no_content_today}
'; 
	 $prefs = array (
               'show_next_prev'  => TRUE,
               'next_prev_url'   => $url,
			   'day_type' => 'long'
             );
			 
	  $this->load->library('calendar', $prefs);

	 
	 $this->load->model('Model_Login');
	 
	  if($this->uri->segment(3)!= date('Y')-1 && $this->uri->segment(4)!= date('m')-1 )
     {
	        $month = $this->uri->segment(4); 
		   
		    $year = $this->uri->segment(3);
   
			$date = mktime(0,0,0,$month,1,$year); 
			$data =array();
			
			for($n=0;$n <= date('t',$date);++$n){	
	 
            /*	0=>booked
				3=>lunch
				4=>dinner
				1=>available*/
				
				
				
				  $val = $this->Model_Login->room_available_logic_admin($year, $month, $n );
				
				  if($val =='1'){		

								  $current_month = date('m');
								  
								  $date = date('d'); 
								
								 if($current_month == $month )
								   {
									    if( $n < $date ) {
												 $url = '#tab5?id=INVALID DATE'; // show white
										   }
											   else{
												 $url = '#tab17?id=AVAILABLE'; //show green  		 
										   }
									}
									else{
									
									             $url = '#tab17?id=AVAILABLE'; //show green
									  }
					
					    }
				
			         else if($val =='3'){		  
					
	                    $url = '#tab10?id=LUNCH BOOKED';  // show yellow
					 
					  //$url = base_url().'index.php/admin_deck_area_booking/change_status/'.$year.'/'.$month.'/'.$n;
					
					  }	
					  
			         else if($val =='4'){		  
					
	                   $url = '#tab11?id=DINNER BOOKED';  // show purple
					  //$url = base_url().'index.php/admin_deck_area_booking/change_status/'.$year.'/'.$month.'/'.$n;	
					  }	
			   
			          else {		  
					
	                   $url = '#tab12?id=BOOKED'; //show red
					  //$url = base_url().'index.php/admin_deck_area_booking/change_status/'.$year.'/'.$month.'/'.$n;

					  }	   
		  
				   $data[] =   $url; 

			  
			     if($data)
			   {
			      $details['calender'] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4), $data);
			   }
			   else{
			 
				 
				  $details['calender'] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4), $data);
				 
			
			      }
				
				} 
		  }
	  
	  else{
			$month = date('m'); 
		   
		    $year = date('Y');
   
			$date = mktime(0,0,0,$month,1,$year); 
			$data =array();
			for($n=1;$n <= date('t',$date);$n++){	
					
	          $url = base_url().'index.php/admin_deck_area_booking/change_status/'.$year.'/'.$month.'/'.$n;
				
				    $data[] = $url; 
			}
	         
			 
			 
			  $details['calender'] = $this->calendar->generate($year, $month, $data);
	  
	  }
	  
	  $this->load->view('booking_calender',$details);	
	
	}

   
   public function booking_form($year=0, $month=0, $date=0){
   
	  
	  if($year=="0" && $month=="0")
	  {
			  
		    
			  
			  $this->load->model('Model_Login'); 
			  
			  $book_date['day_amount'] = $this->Model_Login->get_amount_day($year, $month, $date);
			   
			  $book_date['logged_in_user_details'] = $this->Model_Login->get_logged_in_user_details();     
					 
					$year = date('Y');
					$month = date('m');
					$date = date('d');
			 
			  $book_date['booking_date'] = array($year,$month,$date);
					
			 // $book_date['booking_date'] = array($year,$month,$date);
			  
			  $this->load->view('booking_form',$book_date);
	  }
	    else{
	  
			 $this->load->model('Model_Login'); 
			  
			  $book_date['day_amount'] = $this->Model_Login->get_amount_day($year, $month, $date);
			   
			  $book_date['logged_in_user_details'] = $this->Model_Login->get_logged_in_user_details();     
					 
			  $book_date['booking_date'] = array($year,$month,$date);
					
			 // $book_date['booking_date'] = array($year,$month,$date);
			  
			  $this->load->view('booking_form',$book_date);
	  
	  }
	  
   
   }
   
   
   public function show($year=-1, $month=-1)
	{		
		if($year == -1 && $month == -1){
			
			$year = date('Y');
			$month = date('m');
			
			if($year){
			
			    $this->view_booking_calender($year, $month);
			
			}
		}
		else{
		      if($year){
			  
			     $this->view_booking_calender($year, $month);
			  
			  }
		 }
	}

function change_status($year, $month, $date){

     $this->load->model('Model_Login'); 
			  
			 $day = $year.'-'.$month.'-'.$date;
			  
			  $checkout_cust['checkout_cust'] = $this->Model_Login->get_checkout_customer($day);
			  
			 // echo '<pre>'; print_r($checkout_cust);
	
	          $this->load->view('change_status',$checkout_cust);
} 

function check_out_customer(){

    $this->load->model('Model_Login'); 
	
	$this->Model_Login->check_out_cust();
	
	$pass_date = $this->input->post('new_date');
	
	$pieces = explode("-", $pass_date);
	
	$this->payments_orders();

}

 
 function admin_adds_customer(){
 
   $this->load->view('add_custdate');
 
  }
  
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */