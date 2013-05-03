<?php

class Bookmarks_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        // authenticate user

        return 'show all bookmarks';
    }    

	public function post_index()
    {
        // authenticate user
        
        // add create bookmark

        Redirect::to_route('bookmarks');
    }    

	public function get_new()
    {
        
    }    

	public function put_update()
    {
        // authenticate user

        // update fields
    }    

	public function delete_destroy()
    {
        // authenticate user

        // delete bookmark
    }

}