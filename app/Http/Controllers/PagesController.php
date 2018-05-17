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

    public function bacterin_2_doble_bovina()
    {
        return View('pages.prod.bacterin-2-doble-bovina');
    }
    
    public function bacterin_7_vias_clostri()
    {
        return View('pages.prod.bacterin-7-vias-clostri');
    }
    
    public function bacterin_pasteurelosis()
    {
        return View('pages.prod.bacterin-pasteurelosis');
    }
    
    public function bacterin_3_triple_bovina()
    {
        return View('pages.prod.bacterin-3-triple-bovina');
    }
    
    public function bacterin_11()
    {
        return View('pages.prod.bacterin-11');
    }
    
    public function bacterin_8()
    {
        return View('pages.prod.bacterin_8');
    }





}
