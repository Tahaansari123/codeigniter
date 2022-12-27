<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
    }


    public function register()
    {
        if ($this->input->post()) {
            $formdata = [
                'name'=> $this->input->post('name'),
                'email'=> $this->input->post('email'),
                'cnic'=> $this->input->post('cnic'),
                'phone'=> $this->input->post('phone'),
                'password'=> $this->input->post('password'),

            ];
            $this->User_model->create($formdata);
            $this->session->set_flashdata('msg', "Registeration created successfully");
            redirect(base_url('user/register'));
        } 
        $this->load->view('register');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $user = $this->User_model->UserLogin($email,$password);

        if(!empty($user))
        {
            if(password_verify($password, $user['password'] === true))
            {
                $sessArr['email'] = $user['email'];
                $sessArr['password'] = $password;

                $this->session->set_userdata('user',$sessArr);

                $this->session->set_flashdata('msg', "Login successful");
                redirect(base_url('user/login'));

            }
            else
            {    
                $this->session->set_flashdata('msg', "Something went wrong");

                redirect(base_url('user/login'));
            }
        }


        $this->load->view('login');
    }

    public function home()
    {
        $this->load->view('layout/header');
        $result['data'] = $this->User_model->getUser();
        $this->load->view('home', $result);
    }

    public function edit($id)
    {
        $data['users'] = $this->User_model->editUser($id);

        $this->load->view('editUser', $data);
    }

    public function update($id)
    {
        if ($this->input->post()) {
            $editdata = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'cnic' => $this->input->post('cnic'),
                'phone' => $this->input->post('phone'),
            ];
            print_r($editdata);
            $this->User_model->updateUser($id, $editdata);
            redirect(base_url('user/home'));
        } else {
            $this->edit($id);
        }
    }

    public function delete($id)
    {
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('msg', 'User deleted successfully');
        redirect('user/home');
    }
}
