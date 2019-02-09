<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Routing\Controller;

/**
 * Class GetController
 *
 * @author    Naufal Dinta Azmi (naufal@qasico.com)
 * @copyright Copyright (c) 2018 Qasico.
 */
class GetController extends Controller
{
    
    public function GetSiswa()
    {
        $data = [
            'title'           => 'Menu Siswa',
            'calculation_tab' => 'active',
            'home_tab'        => '',
        ];
        
        
        return view('siswa.index', $data);
    }
}