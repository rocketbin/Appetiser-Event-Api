<?php
namespace App\Modules\CharTypeAdapter;
use App\Modules\CharTypeAdapter\ConverterInterface;

class StringConverter implements ConverterInterface
{
	public function objectConversion($obj) {
		return json_encode($obj);
	}
}