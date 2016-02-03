<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 03/02/2016
 * Time: 22:19
 */

/**
 * SENDS EMAIL WITH GMAIL
 */
class Email extends CI_Controller
{
    function __construct()
    {
        parent::Controller();
    }

    function index()
    {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'benoats@gmail.com',
            'smtp_pass' => 'Plymouth.09'

        );

        $this->load->library('email', $config);
        
    }
}