<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// SOURCE : https://github.com/dwisetiyadi/CodeIgniter-PHP-QR-Code
class QrcodeController extends CI_Controller {

    public function index() {
        $this->load->library('ciqrcode');

        $params['data'] = 'This is a text to encode become QR Code';
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH.'images/tes.png';
        $this->ciqrcode->generate($params);

        echo '<img src="'.base_url().'images/tes.png" />';
    }

    public function qrOptionalConfiguration() {
        $this->load->library('ciqrcode');
        $config['cacheable']	= true; //boolean, the default is true
        $config['cachedir']		= ''; //string, the default is application/cache/
        $config['errorlog']		= ''; //string, the default is application/logs/
        $config['quality']		= true; //boolean, the default is true
        $config['size']			= ''; //interger, the default is 1024
        $config['black']		= array(224,255,255); // array, default is array(255,255,255)
        $config['white']		= array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        $params['data'] = 'This is a text to encode become QR Code';
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH.'images/tes1.png';
        $this->ciqrcode->generate($params);

        echo '<img src="'.base_url().'images/tes1.png" />';
    }

}
