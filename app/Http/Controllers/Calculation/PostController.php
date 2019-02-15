<?php
/**
 * Class PostController
 *
 * @author    Naufal Dinta Azmi (naufal@qasico.com)
 * @package   App\Http\Controllers\Calculation
 * @since     File available since Release 2.1
 * @copyright Copyright (c) 2018 Qasico.
 */

namespace App\Http\Controllers\Calculation;

use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\Calculation\CreateService;


class PostController extends Controller
{
    use CreateService;
    
    private function calculationNilai($data)
    {
        $datas = [];
        if (is_array($data)) {
            foreach ($data as $value) {
                
                $un = round($value['nun'] * 3.33);
                
                
                $total = round(($value['nrr'] + $un + $value['nuas'] + $value['nkh'] + $value['ntest']) / 5, 2);
                
                if ($total > 90 && $total <= 100) {
                    $nilai = "A";
                } elseif ($total > 80 && $total <= 90) {
                    $nilai = "B";
                } elseif ($total > 70 && $total <= 80) {
                    $nilai = "C";
                } elseif ($total > 60 && $total <= 70) {
                    $nilai = "D";
                } else {
                    $nilai = "E";
                }
                
                $keterangan = "Tidak Lolos";
                
                // jika 88 - 100 maka A
                if ($total > 70) {
                    $keterangan = "Lolos";
                }
                
                $d = [
                    'no_peserta' => $value['no_peserta'],
                    'nama'       => $value['nama'],
                    'nilai'      => $nilai,
                    'total'      => $total,
                    'keterangan' => $keterangan
                ];
                if ($value['nama'] != "") {
                    $datas[] = array_to_object($d);
                }
                
            }
        }
        $datas = collect($datas);
        
        return $datas->sortBy("nilai");
    }
    
    public function PostCalculation(Request $request)
    {
        $session_key        = "EEPWHS2Kzl";
        $datas              = $request->input('items');
        $session_get        = $this->sessionGet($session_key);
        $session_collection = collect();
        $session_collection->push($session_get['items']);
        
        $data = [
            'title'           => 'Hasil',
            'page_title'      => 'Hasil',
            'hasil'           => $this->calculationNilai($datas),
            'calculation_tab' => 'active',
            'home_tab'        => ''
        ];
        if (count($data['hasil']) != 0) {
            $session_collection->push($data['hasil']);
            
            $this->session_data['session_key'] = $session_key;
            $this->session_data['items']       = $session_collection;
            
            $this->sessionSave($request, $session_key);
        }
        
        
        return view('calculation.hasil', $data);
    }
}