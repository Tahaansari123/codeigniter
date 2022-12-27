<?php

class Product extends CI_Controller
{
    public function Product(){
        $this->load->view('home');
    }

    public function addProduct()
    {
        $this->load->view('addProduct');
    }

    public function editProduct()
    {
        $this->load->view('editProduct');
    }

    public function deleteUser()
    {
    }
}
