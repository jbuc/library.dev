<?php

class Bookmarks_Controller extends Base_Controller {

    public  = true;    

    public function get_index()
    {
        // Route::get('bookmarks', array('as' => 'bookmarks', 'uses' => 'bookmarks@index'));
        // View::make('bookmark.index');
        return 'display a list of all bookmarks';
    }
    public function post_index()
    {
        // Route::post('bookmarks', 'bookmarks@create');
        return 'create a new bookmark';
    }
    public function get_new()
    {
        // Route::get('bookmarks/new', array('as' => 'new_bookmark', 'uses' => 'bookmarks@new'));
        // View::make('bookmark.new');
        return 'return an HTML form for creating a new bookmark';
    }
    public function put_update()
    {
        // Route::put('bookmarks/(:any)', 'bookmarks@update');
        return 'update a specific bookmark.';
    }
    public function delete_destroy()
    {
        // Route::delete('bookmarks/(:any)', 'bookmarks@destroy');
        return 'delete a specific bookmark';
    }
}




