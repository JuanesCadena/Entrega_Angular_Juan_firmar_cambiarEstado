<?php

namespace App\Http\Controllers;
use App\Models\User;
class UsersController extends Controller
{
    public function peticionesFirmadas(Request $request)
    {
        try {
            $id = Auth::id();
            $usuario = User::findOrFail($id);
            $peticiones = $usuario->firmas;
            return response()->json( $peticiones, 200);
}catch (\Exception $exception){
            return response()->json( ['error'=>$exception->getMessage()], 500);
}
    }

}
