<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;

use App\Http\Managers\MathManager;

class MathController extends Controller
{

    private $mathManager;
    public function __construct(MathManager $mathManager)
    {
        $this->mathManager = $mathManager;
    }

    public function add(Request $request) {
      $arr_params = $request->get('params');
      Log::info($arr_params);
      return view('math', ['data' => $this->mathManager->add($arr_params)]);
    }

    public function sub(Request $request) {
      $arr_params = $request->get('params');
      Log::info($arr_params);
      return view('math', ['data' => $this->mathManager->sub($arr_params)]);
    }

    public function mul(Request $request) {
      $arr_params = $request->get('params');
      Log::info($arr_params);
      return view('math', ['data' => $this->mathManager->mul($arr_params)]);
    }

    public function divide(Request $request) {
      $arr_params = $request->get('params');
      Log::info($arr_params);
      return view('math', ['data' => $this->mathManager->mul($arr_params)]);
    }

}
