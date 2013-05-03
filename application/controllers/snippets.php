<?php

class Snippets_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        return View::make('snippet.index');
    }    

	public function post_index()
    {

    }    

	public function get_show()
    {
        return View::make('snippet.show');
    }    

	public function get_edit()
    {

    }    

	public function get_new()
    {

    }    

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}