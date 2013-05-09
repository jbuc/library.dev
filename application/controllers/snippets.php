<?php


class Snippets_Controller extends Base_Controller {

    public $restful = true;    


    // HOME PAGE
    public function get_index() {
        $snippets = Snippet::all();

        return View::make('snippet.index')
                    ->with('snippets', $snippets);
    }
    
    // SHOW ONE SNIPPET (for DEVELOPERS)
    public function get_show($base_id) {
        $snippet = Snippet::order_by('id', 'desc')->where_base_id($base_id)->first();

        return View::make('snippet.show')
                    ->with('snippet', $snippet);
    }

    // SHOW ONE SNIPPET (for PREVIEW)
    public function get_preview($base_id) {
        $snippet = Snippet::order_by('id', 'desc')->where_base_id($base_id)->first();
        dd($snippet);
        return View::make('snippet.preview')
                    ->with('snippet', $snippet);
    }

    // EDIT A SNIPPET
    public function get_edit($base_id) {

        $snippet = Snippet::order_by('id', 'desc')->where_base_id($base_id)->first();

        return View::make('snippet.edit')
                    ->with('snippet', $snippet);
    }
    public function get_new() {
        return View::make('snippet.new');
    }



    // ADD THE SNIPPET
    public function post_index() {

        $validation_errors = Snippet::validate(Input::get());
        if($validation_errors) {
            echo "<pre>";
                print_r($validation_errors);
            echo "</pre>";
            return '<br>there were errors on the form';
        }

        $new_snippet = Snippet::create(Input::all());

        if($new_snippet) {
            return Redirect::to_route('snippets');
        }
    }

    public function put_update() {
        return 'update a specific snippet.';
    }
    public function delete_destroy() {
        return 'delete a specific snippet';
    }
}







//// research notes
        
        // $input_keys = array('title', 'code');
        // foreach(Input::all() as $k => $input)
        // {
        //     if (in_array($k, $input_keys)) {
        //         $inputs[$k] = $input;
        //     }
        // }

        // dd($inputs);

        // Route::post('snippets', 'snippets@create');