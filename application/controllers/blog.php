<?php if (! defined('BASEPATH'))
		exit('No direct script acces allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->view("hello_codeIgniter");
	}
	function view()
	{
		$data['judul']= "Judul Blog";
		$data['isi']= "Isi Blog";
		$out = $this->load->view("blog_view",$data,true);
		echo $out;
	}
}
/*end of file Blog.php */
/* location :./aplication/controller/blog.php */
