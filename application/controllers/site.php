<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 01/02/2016
 * Time: 19:04
 */
class Site extends CI_Controller {

   function index() {
       $this->load->model('data_model');
       $data['rows'] = $this->data_model->getAll();

       $this->load->view('home' , $data);
   }
}