<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Calculation\CreateService;
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
    
    public function GetReport(Request $request)
    {
        $session_key = "EEPWHS2Kzl";
        $this->sessionGet($session_key);
        
        
        $data = [
            'title'           => 'Report',
            'calculation_tab' => '',
            'report_tab'      => 'active',
            'home_tab'        => '',
            'datas'           => $this->getSessionData($this->session_data)
        ];
        
        return view('report.report', $data);
    }
}