<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;

class RestCallValidation extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'mac_address' => 'required|unique:devices,mac_address'
		];
	}
}