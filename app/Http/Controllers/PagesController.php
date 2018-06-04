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

    public function caninos()
    {
        return View('pages.cat.caninos');
    }

    public function caprinos()
    {
        return View('pages.cat.caprinos');
    }

    public function equinos()
    {
        return View('pages.cat.equinos');
    }

    public function ovinos()
    {
        return View('pages.cat.ovinos');
    }

    public function felinos()
    {
        return View('pages.cat.felinos');
    }

    public function aves()
    {
        return View('pages.cat.aves');
    }

    public function porcinos()
    {
        return View('pages.cat.porcinos');
    }

    public function bacteriologicos()
    {
        return View('pages.cat.bacteriologicos');
    }

    public function virologicos()
    {
        return View('pages.cat.virologicos');
    }

    public function desparacitantes()
    {
        return View('pages.cat.desparacitantes');
    }

    public function anti_microbianos()
    {
        return View('pages.cat.anti_microbianos');
    }

    public function vitaminicos()
    {
        return View('pages.cat.vitaminicos');
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

    public function dectomaster_1_prolong()
    {
        return View('pages.prod.dectomaster_1_prolong');
    }

    public function dectomaster_3_15()
    {
        return View('pages.prod.dectomaster_3_15');
    }

    public function dectomaster_ad3e_la()
    {
        return View('pages.prod.dectomaster_ad3e_la');
    }

    public function dectomaster_eqpasta()
    {
        return View('pages.prod.dectomaster_eqpasta');
    }

    public function derrienlytic()
    {
        return View('pages.prod.derrienlytic');
    }

    public function vaccine_antrax()
    {
        return View('pages.prod.vaccine_antrax');
    }

    public function vaccine_triple_aviar()
    {
        return View('pages.prod.vaccine_triple_aviar');
    }

    public function vaccine_triple_aviar_curativa()
    {
        return View('pages.prod.vaccine_triple_aviar_curativa');
    }




}
