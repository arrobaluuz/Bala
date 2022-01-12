<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\mesasModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function shearch(Request $request){
    	
			$consultar=mesasModel::all()->where('codigo','=',strtoupper($request->codigo))->first();
			if(isset($consultar))
			{
				return view('mesas',compact('consultar'));
			}else{
    		return redirect()->route('index');
			}
    }
}
