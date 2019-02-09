<?php
/**
 * Class PostController
 *
 * @author    Naufal Dinta Azmi (naufal@qasico.com)
 * @package   App\Http\Controllers\Calculation
 * @since     File available since Release 2.1
 * @copyright Copyright (c) 2018 Qasico.
 */

namespace App\Http\Controllers\Siswa;

use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\Calculation\CreateService;


class PostController extends Controller
{
    use CreateService;
    
    public function PostSiswa(Request $request)
    {
        $session_key = "EEPWHS2Kzl";
        $this->sessionGet($session_key);
        
        $total_peserta = count($this->session_data['items']);
        
        $data = [
            'title'           => 'Menu Kalkulasi',
            'calculation_tab' => 'active',
            'home_tab'        => '',
            'total_peserta'   => $total_peserta,
            'jumlah_siswa'    => $request->input('jumlah_siswa')
        ];
        
        
        return view('calculation.rangking', $data);
    }
}