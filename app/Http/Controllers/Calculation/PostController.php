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

class PostController extends Controller
{
    private function calculationNilai($data)
    {
        $datas = [];
        if (is_array($data)) {
            foreach ($data as $value) {
                $total = round(($value['nrr'] + $value['nun'] + $value['nuas'] + $value['nkh'] + $value['ntest']) / 5, 2);
                
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
        $datas = $request->input('items');
        $data  = [
            'title'           => 'Hasil',
            'page_title'      => 'Hasil',
            'hasil'           => $this->calculationNilai($datas),
            'calculation_tab' => 'active',
            'home_tab'        => ''
        ];
        
        return view('calculation.hasil', $data);
        
    }
}