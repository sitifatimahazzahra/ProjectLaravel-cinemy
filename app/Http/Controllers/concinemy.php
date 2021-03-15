<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class concinemy extends Controller
{

        public function index()
    {
        return view('index');
    }

        public function menu()
    {
        return view('menu');
    }

        public function soon()
    {
        return view('soon');
    }

        public function top()
    {
        return view('top');
    }

    //Function untuk detai movie
            public function dmr3()
        {
            return view('dmr3');
        }

            public function dmr2()
        {
            return view('dmr2');
        }

            public function dmr1()
        {
            return view('dmr1');
        }    

            public function dr()
        {
            return view('dr');
        }

            public function dnysm1()
        {
            return view('dnysm1');
        }

            public function dnysm2()
        {
            return view('dnysm2');
        }

            public function dgm()
        {
            return view('dgm');
        }    

            public function dudw()
        {
            return view('dudw');
        }

}
