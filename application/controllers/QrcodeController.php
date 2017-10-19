<?php

// SOURCE : https://github.com/dwisetiyadi/CodeIgniter-PHP-QR-Code
class QrcodeController extends CI_Controller {

    public function index() {
        $this->load->library('ciqrcode');

        $params['data'] = 'This is a text to encode become QR Code';
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = 'http://192.168.0.117:3333/images/tes.png';
        $this->ciqrcode->generate($params);

        echo '<img src="tes.png" />s';
    }
}

 ?>
