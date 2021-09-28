<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class PurchaseController extends Controller
{
    public function index(Request $request, $id, $purchase){
        $item = Test::find($id);
        
        if(!$item){
            return "Data tidak ditemukan";
        }else{
            $item->stok += $purchase;
            $item->save();
            
            return "Data Berhasil Diupdate";
        }
    }
}
