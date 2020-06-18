<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Home extends BaseController
{
	/**
	 * Homepage
	 */
	public function index()
	{
		$this->loadHelpers();
		$categories = model(CategoryModel::class)->where('parent_id', NULL)->findAll();
		return view('welcome_message', ['categories' => $categories]);
	}
}
