<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Routing\Controller;

/**
 * Class GetController
 *
 * @author    Naufal Dinta Azmi (naufal@qasico.com)
 * @copyright Copyright (c) 2018 Qasico.
 */
class GetController extends Controller
{
    public function GetMenu()
    {
        $data = [
            'title'           => 'Home SMK',
            'page_title'      => 'Home SMK',
            'calculation_tab' => '',
            'home_tab'        => 'active'
        ];
        
        return view('home.home', $data);
    }
}