<?php


class Snippets_Controller extends Base_Controller {

    public $restful = true;    

    public function get_index() {
        // Route::get('snippets', array('as' => 'snippets', 'uses' => 'snippets@index'));
        // View::make('snippet.index');
        return 'display a list of all snippets';
    }
    public function post_index() {
        // Route::post('snippets', 'snippets@create');
        return 'create a new snippet';
    }
    public function get_show() {
        // Route::get('snippets/(:any)', array('as' => 'snippet', 'uses' => 'snippets@show'));
        // View::make('snippet.show');
        return 'display a specific snippet';
    }
    public function get_edit() {
        // Route::get('snippets/(:any)/edit', array('as' => 'new_snippet', 'uses' => 'snippets@new'));
        // View::make('snippet.edit');
        return 'return an HTML form to edit a specific snippet';
    }
    public function get_new() {
        // Route::get('snippets/new', array('as' => 'new_snippet', 'uses' => 'snippets@new'));
        
        return View::make('snippet.new');
    }
    public function put_update() {
        // Route::put('snippets/(:any)', 'snippets@update');
        return 'update a specific snippet.';
    }
    public function delete_destroy() {
        // Route::delete('snippets/(:any)', 'snippets@destroy');
        return 'delete a specific snippet';
    }
}