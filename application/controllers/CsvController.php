<?php


class CsvController extends CI_Controller {

    public function index() {
            $this->load->view('csv/index');
            $data[] = array('xx'=> "Company Name :", 'y'=> "John Ro Jar");
            $data[] = array('xx'=> "DATE :", 'y'=> "January 2017");
            $data[] = array('xx'=> "DATE :", 'yy'=> "January 2017");
            $data[] = array('xx'=> "this is x", 'y'=> "this is y", 'z'=> "this is z", 'a'=> "this is a");
            $data[] = array('xx'=> "this is xx", 'y'=> "this is yy", 'z'=> "this is zz", 'a'=> "this is aa");
             header("Content-type: application/csv");
            header("Content-Disposition: attachment; filename=\"test".".csv\"");
            header("Pragma: no-cache");
            header("Expires: 0");

            $handle = fopen('php://output', 'w');
            fputcsv($handle, array_keys($data[0]));
            foreach ($data as $data) {
                fputcsv($handle, $data);
            }
                fclose($handle);
            exit;

    }

    public function arrayToCsv() {
        $array = array(
            array('Last Name', 'First Name', 'Gender'),
            array('Furtado', 'Nelly', 'female'),
            array('Twain', 'Shania', 'female'),
            array('Farmer', 'Mylene', 'female')
        );

        $this->load->helper('csv');
        // display the formated csv array
        echo array_to_csv($array);

        // direct download
        array_to_csv($array, 'mycsv.csv');
    }

    public function queryToCsv() {
        $this->load->database();
        $query = $this->db->get('my_table');

        $this->load->helper('csv');

        // display the formated csv array
        echo query_to_csv($query);

        // direct download
        query_to_csv($query, TRUE, 'mycsv.csv');

    }


}
