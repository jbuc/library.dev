<?php


class Snippets_Controller extends Base_Controller {

    public $restful = true;    

    public function get_index() {
        // Route::get('snippets', array('as' => 'snippets', 'uses' => 'snippets@index'));
        // View::make('snippet.index');
        return 'display a list of all snippets';
    }
    public function post_index() {
        // validate info
        $validation_errors = Snippet::validate(Input::get());

        if($validation_errors) {
            echo "<pre>";
                print_r($validation_errors);
            echo "</pre>";
            return '<br>there were errors on the form';
        }
        
        // $input_keys = array('title', 'code');
        // foreach(Input::all() as $k => $input)
        // {
        //     if (in_array($k, $input_keys)) {
        //         $inputs[$k] = $input;
        //     }
        // }

        // dd($inputs);

        // Route::post('snippets', 'snippets@create');
        $new_snippet = Snippet::create(Input::all());

        if($new_snippet) {
            return 'yay I made a new snippet!';
        }

        // $snippet = new Snippet();
        //     $snippet->title = 
        // $snippet->save();
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