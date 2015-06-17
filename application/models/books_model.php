<?php
class Books_model extends CI_Model{
	
 	function __construct(){
  		parent::__construct();
  		$this->load->helper('url');				
 	}
 	
	function entry_insert(){
		$this->load->database();
		$data = array(
				  'title'=>$this->input->post('title'),
				  'author'=>$this->input->post('author'),
				  'publisher'=>$this->input->post('publisher'),
				  'year'=>$this->input->post('year'),
				  'available'=>$this->input->post('available'),
				  'summary'=>$this->input->post('summary'),
				);
		$this->db->insert('books',$data);
	}
	
	function getall(){
		$this->load->database();
		$this->load->library('table');
		
		$query = $this->db->query('SELECT * FROM books');	
		$table = $this->table->generate($query);
		return $table;  
	}
	
	function books_getall()
	{
		$this->load->database();
		$query = $this->db->get('books');
		return $query->result();
	} 
	
	 function get($id){
		$this->load->database();
		$query = $this->db->get_where('books',array('id'=>$id));
		return $query->row_array();		  
	}

	 function entry_update(){
		$this->load->database();
		$data = array(
			  'title'=>$this->input->post('title'),
			  'author'=>$this->input->post('author'),
			  'publisher'=>$this->input->post('publisher'),
			  'year'=>$this->input->post('year'),
			  'available'=>$this->input->post('available'),
			  'summary'=>$this->input->post('summary'),
			);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('books',$data);  
	 }

	 function delete($id){
		$this->load->database();
		$this->db->delete('books', array('id' => $id)); 
	}

	
	function general(){
		$this->load->library('MyMenu');
		$menu = new MyMenu;
		$data['base']		= $this->config->item('base_url');
		$data['css']		= $this->config->item('css');		
		$data['menu'] 		= $menu->show_menu();
		$data['webtitle']	= 'Book Collection';
		$data['websubtitle']= 'We collect all title of books on the world';
		$data['webfooter']	= '© copyright by step by step php tutorial';
		$data['tes']        = 'text test';
		
		$data['fid']['value'] = 0;
		$data['fyear']['value'] = 0;
		
		$data['title']	 	= 'Title';
		$data['author']	 	= 'Author';
		$data['publisher']	= 'Publisher';				
		$data['year']	 	= 'Year';
		$data['years']	 	= array('2006'=>'2006','2007'=>'2007','2008'=>'2008','2009'=>'2009');
		$data['available']	= 'Available';	
		$data['summary']	= 'Summary';	
		$data['forminput']  = 'Form Input';

		$data['ftitle']		= array('name'=>'title','size'=>30);
		$data['fauthor']	= array('name'=>'author','size'=>30);
		$data['fpublisher']	= array('name'=>'publisher','size'=>30);
        $data['favailable']	= array('name'=>'available','value'=>'yes','checked'=>TRUE);
		$data['fsummary']	= array('name'=>'summary','rows'=>5,'cols'=>30);
			
		return $data;	
	}
}
?>
