<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return View('pages.index');
    }

    public function bovinos()
    {
    	return View('pages.cat.bovinos');
    }

	public function strepto_guard()
    {
    	return View('pages.prod.strepto_guard');
    }


}
