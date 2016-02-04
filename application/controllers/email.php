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
        parent::__construct();
    }

    function index()
    {
        $this->load->library('email');
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'benoats@gmail.com',
            'smtp_pass' => 'Plymouth.09'
        );
        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        $this->email->from('benoats@gmail.com' , 'ben oats');
        $this->email->to('benoats@gmail.com');
        $this->email->subject('this is a test');
        $this->email->message('it is working .... great!');

        $path = $this->config->item('server_root');
        $file = $path . 'advancedsystem/attachments/yourinfo.txt';

        $this->email->attach($file);

        if($this->email->send())
        {
            echo 'your email was sent';
        }

        else
        {
            show_error($this->email->print_debugger());
        }
    }
}