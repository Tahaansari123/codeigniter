<?php 
class Demo extends CI_Controller{
    public function index(){

        // $this->load->model('Demo_model');
        // $this->load->helper('user');
        user();
        echo "<br><br>";
        $data['users'] = $this->Demo_model->demo2();
        // print_r($data);
        $this->load->view('demoView',$data);
    }
}

?>