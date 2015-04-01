<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller {

    public function index()
    {
        $this->load->view('hello_view');
    }

    function about ()
    {
        $data["name"] = "Yura";
        $data["surname"] = "Fras";
        $data["age"] = "22 years";

        $this->load->view('about_view', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */