<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends MY_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
    $this->load->view('partials/header');
    $this->load->view('index');
    $this->load->view('partials/footer');
	}

  public function submit_contact(){
    $from    		 = "smtptech@techturf.com.ph";
    $to    	 		 = "sales@techturf.com.ph";//strtolower($this->input->post('email'));
    $title    	 = "Contact Us";
    $subject  	 = "Contact Us - ";
    $message     = "Name: " . strtoupper($this->input->post('last-name')) . ', ' . strtoupper($this->input->post('name')) . "<br>";
    $message     .= "Email: ".strtoupper($this->input->post('email'))." <br>";
    $message     .= "Message: ".strtoupper($this->input->post('message'))." <br><br>";
    $this->sendEmail($from, $to, $subject, $message, $title);
    echo json_encode(array('msg'=>'success'));
  }

  public function featuredEvents(){
    $this->load->view('partials/header');
    // Folder where you want to get all files names from
    $events = $this->uri->segment(2);
    $folder = $this->uri->segment(3);
    $desc = $this->uri->segment(4);

    if ($events == '') {
      $this->load->view('featured_events');
    } else {
      $dir = "assets/image/" . $events . "/" . $folder;
      $hideName = array('.','..','.DS_Store');    
      $files = scandir($dir);
      $d = [];
      foreach($files as $filename) {
          if(!in_array($filename, $hideName)){
            $d[] = $filename;
          }
      }
      $params['pics'] = $d;
      $params['events'] = $events;
      $params['folder'] = $folder;
      $params['desc']   = urldecode($desc);;
      $this->load->view('featured_events_per_event', $params);
    }

    $this->load->view('partials/footer');
    

  }

}
