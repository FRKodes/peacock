<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return View('pages.index');
    }
    
    public function contacto()
    {
        return View('pages.contacto');
    }

    public function distribuidor()
    {
        return View('pages.distribuidor');
    }

    public function quienes_somos()
    {
        return View('pages.quienes_somos');
    }

    public function puntos_dist()
    {
    	return View('pages.puntos-distribucion');
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
