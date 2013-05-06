<?php

class Create_Snippet_Table {    

	public function up()
    {
		Schema::create('snippet', function($table) {
			$table->increments('id');
			$table->integer('base_id');
			$table->integer('title');
			$table->integer('tags');
			$table->string('url');
			$table->string('shopRecord');
			$table->text('code');
			$table->timestamps();
		});

    }    

	public function down()
    {
		Schema::drop('snippet');

    }

}