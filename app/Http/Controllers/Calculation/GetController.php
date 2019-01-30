<?php

namespace App\Http\Controllers\Calculation;

use Illuminate\Routing\Controller;

/**
 * Class GetController
 *
 * @author    Naufal Dinta Azmi (naufal@qasico.com)
 * @copyright Copyright (c) 2018 Qasico.
 */
class GetController extends Controller
{
    public function GetCalculation()
    {
        $data = [
            'title'           => 'Menu Kalkulasi',
            'calculation_tab' => 'active',
            'home_tab'        => ''
        ];
        
        return view('calculation.rangking', $data);
    }
}