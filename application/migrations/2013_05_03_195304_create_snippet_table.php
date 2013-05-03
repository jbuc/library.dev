<?php

class Create_Snippet_Table {    

	public function up()
    {
		Schema::create('snippet', function($table) {
			$table->increments('id');
			$table->integer('base_id');
			$table->text('code');
			$table->string('url');
			$table->string('shopRecord');
			$table->timestamps();
		});

    }    

	public function down()
    {
		Schema::drop('snippet');

    }

}