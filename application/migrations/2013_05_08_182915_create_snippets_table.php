<?php

class Create_Snippets_Table {    

	public function up()
    {
		Schema::create('snippets', function($table) {
			$table->increments('id');
			$table->integer('base_id');
			$table->string('title');
			$table->string('tags');
			$table->string('url');
			$table->string('shoprecord');
			$table->text('code');
			$table->boolean('active');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('snippets');

    }

}