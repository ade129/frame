<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $contents = [

        ];
        $pagecontent = view('Frontend.home.index');

        // masterpage
        $pagemain = array(
            'title' => 'Home',
            // 'menu' => 'master',
            // 'submenu' => 'categories',
            'pagecontent' => $pagecontent
        );
        
        return view('Frontend.masterpage_frontend', $pagemain);
    }
}
