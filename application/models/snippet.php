<?php

class Snippet extends Eloquent 
{
	public static $table = 'snippet';

	public static $rules = array(
		'title' => 'required',
		'code' => 'required',
		'url' => 'required|url',
		'shoprecord' => 'required',
	);

	public static function validate($input) {
		$v = Validator::make($input, static::$rules);
		$v->valid();

		return $v->errors->all();
	}
}
