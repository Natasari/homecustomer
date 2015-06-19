<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Subscriber extends CI_Controller {

    function index()
    {
        
        //$this->load->view('subscriber_view');
    }
    //function to handle callbacks
    function datatable()
    {
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
        
        $aColumns = array( 'engine', 'browser', 'platform', 'version', 'grade' );
        /* Indexed column (used for fast and accurate table cardinality) */   
        $sIndexColumn = "id";
        /* DB table to use */   
        $sTable = "ajax";
        $conn = oci_connect($gaSql['home'], $gaSql['home'], $connection_string);
        if (!$conn) {   
        $e = oci_error();   
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }  
        //set table id in table open tag
        /*$tmpl = array ( 'table_open'  => '<table id="big_table" border="1" cellpadding="2" cellspacing="1" class="mytable">' );
        
        $this->table->set_template($tmpl);
        $this->table->set_heading('First Name','Last Name','Email');

        /*$this->datatables->select('id,first,last,email')
        ->unset_column('id')
        ->from('SUBSCRIBER');
        echo $this->datatables->generate();*/
    }
}