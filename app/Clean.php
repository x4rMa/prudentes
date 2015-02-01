<?php namespace prudentes;

use Illuminate\Database\Eloquent\Model;

class Clean extends Model {

	public static function string($data) {
		$data = str_replace("-"," ",$data);
		$data = ucfirst($data);
		return $data;
	}
	public static function url($data) {
		$data = str_replace(" ","-",$data);
		$data = lcfirst($data);
		return $data;
	}

}