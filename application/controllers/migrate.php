<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migrate extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('migration');
	}

	/* index()
	 *
	 * fungsi default untuk menjalankan migrate
	 *
	 */
	public function index()
	{
		if ( ! $this->migration->current())
		{
			show_error($this->migration->error_string());
		} 
		else
			redirect('/');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */