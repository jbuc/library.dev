<?php

class Photos_Controller extends Base_Controller {

    public function __construct() {   
        $this->filter('after', 'image')->only(array('index'));
    }

    public $restful = true;    

    public function get_index($width, $height)
    {
        if($width && $height) {
            return View::make('photo.index')
                        ->with('height', $height)
                        ->with('width', $width);
            
        }
    }    

}