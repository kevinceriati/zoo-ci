<?php

class Migration_Add_products extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(
			array(
				'id' => array(
					'type' => 'INT',
					'unsigned' => true,
					'auto_increment' => true
				),
				'name' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',
				),
				'description' => array(
					'type' => 'TEXT',
					'null' => true,
				),
				'image' => array(
					'type' => 'TEXT',
					'null' => true,
				),
				'user_id' => array(
					'type' => 'INT',
					'unsigned' => true,
					'auto_increment' => true,
				),
			)
		);

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('products');
	}

	public function down()
	{
		$this->dbforge->drop_table('products');
	}
}
