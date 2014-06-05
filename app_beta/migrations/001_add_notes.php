<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class migration_add_notes extends CI_Migration {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function up()
	{

		$this->dbforge->add_field(array(

			'uid' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => FALSE
			),
			'note_subject' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'note_body' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),

		));

		$this->dbforge->create_table('user_notes');

	}

	public function down()
	{
		$this->dbforge->drop_table('user_notes');
	}

}

// end if admin.php