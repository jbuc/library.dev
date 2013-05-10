<?php


class Snippets_Controller extends Base_Controller {

    public $restful = true;    


    // HOME PAGE
    public function get_index() {
        $b_snippets = DB::table('snippets')
                        ->order_by('id', 'desc')
                        // ->group_by('base_id')
                        ->order_by('title', 'asc')
                        ->get();
        
        $snippets = array();
        $base_id  = 0;

        foreach($b_snippets as $snippet)
        {
            if ($base_id !== $snippet->base_id)
            {
                $snippets[] = $snippet;
                $base_id = $snippet->base_id;
            }
        }

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
        return View::make('snippet.preview')
                    ->with('snippet', $snippet);
    }

    // EDIT A SNIPPET
    public function get_edit($base_id) {

        $snippet = Snippet::order_by('id', 'desc')->where_base_id($base_id)->first();

        return View::make('snippet.edit')
                    ->with('snippet', $snippet);
    }


    public function post_update($base_id) {
        $inputs = Input::all();
        $inputs['base_id'] = $base_id;
        $new_snippet = Snippet::create($inputs);

        if($new_snippet) {
            return Redirect::to_route('snippets');
        }
    }

    // ADD THE SNIPPET
    public function get_new() {
        return View::make('snippet.new');
    }
    public function post_index() {

        $validation_errors = Snippet::validate(Input::get());
        if($validation_errors) {
            echo "<pre>";
                print_r($validation_errors);
            echo "</pre>";
            return '<br>there were errors on the form';
        }

        $new_snippet = Snippet::create(Input::all());
        $new_snippet->base_id = $new_snippet->id;
        $new_snippet->save(); 

        if($new_snippet) {
            return Redirect::to_route('snippets');
        }
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