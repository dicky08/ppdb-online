<?php
class Validate
{
	public static function validasi()
	{
		$validate = [
			'required'   => '{field} Harus diisi!',
			'matches'	 => '{field} Tidak sama!',
			'min_length' => '{field} terlalu pendek'
		];
		return $validate;
	}
}
