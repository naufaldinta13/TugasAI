<?php
/**
 * Class Service
 *
 * @author    Naufal Dinta Azmi (naufal@qasico.com)
 * @package   App\Http\Controllers\Calculation
 * @since     File available since Release 2.1
 * @copyright Copyright (c) 2019 Qasico.
 */


namespace App\Http\Controllers\Calculation;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

trait CreateService
{
    /**
     * Session Data
     * @var array
     */
    protected $session_data = [
        'session_key' => null,
        'items'       => [],
    ];
    
    protected function get($session_key)
    {
        $session = $this->sessionGet($session_key);
        
    }
    
    /**
     * Get current session data.
     *
     * @param $session_key
     * @return Collection
     */
    protected function sessionGet($session_key)
    {
        $this->session_data = session($session_key, $this->session_data);
        
        return collect($this->session_data);
    }
    
    /**
     * Trigger to save session data.
     *
     * @param Request $request
     * @param         $session_key
     * @return mixed
     */
    protected function sessionSave(Request $request, $session_key)
    {
        $session = $request->session();
        $session->put($session_key, $this->session_data);
    }
    
    protected function getSessionData($data)
    {
        $datas = [];
        $data['items']->each(function ($value, $key) use (&$datas, $data) {
            foreach ($value as $d) {
                $datas[] = $d;
            }
        });
        
        return collect($datas);
        
    }
}