<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function listLabelNotes(){
        $labels = array('null' => null,
            'Important' => 'Importante',
            'Personal' => 'Personal',
            'Social' => 'Social',
            'Work' => 'Trabajo'
        );
        return $labels;
    }
}
