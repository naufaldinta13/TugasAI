<?php

namespace App\Http\Controllers\Calculation;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Class GetController
 *
 * @author    Naufal Dinta Azmi (naufal@qasico.com)
 * @copyright Copyright (c) 2018 Qasico.
 */
class GetController extends Controller
{
    use CreateService;
    
    public function GetCalculation(Request $request)
    {
        $session_key = "EEPWHS2Kzl";
        $this->sessionGet($session_key);
        
        $total_peserta = count($this->session_data['items']);
        
        $data = [
            'title'           => 'Menu Kalkulasi',
            'calculation_tab' => 'active',
            'home_tab'        => '',
            'total_peserta'   => $total_peserta
        ];
        
        
        return view('calculation.rangking', $data);
    }
}