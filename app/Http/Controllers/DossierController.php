<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class DossierController extends Controller
{
    // créer un nouveau dossier 

    public function insert(Request $request) {

    	$rules = [
			'name' => 'required|string|max:255',
			'user_id' =>  'required|integer|exists:users,id',
		];

		$validator = Validator::make($request->all(),$rules);

		if ($validator->fails()) {
			return response()->json($validator->messages(), 200);
		}

		else{
            $data = $request->input();
			try{
				$dossier = new  dossier;
                $dossier->name = $data['name'];
                $dossier>user_id = $data['user_id'];
				$dossier->save();
				return response()->json(['message' => 'Insert successfully']);
			}
			catch(Exception $e){
				return Response::json(['error' => 'operation failed']); 
			}
		}

    }

    public function delete($id){

    $item = Item::findOrFail($id);
    $item->delete();

    return response()->json(['message' => 'Folfer deleted successfully']);

    }
}
