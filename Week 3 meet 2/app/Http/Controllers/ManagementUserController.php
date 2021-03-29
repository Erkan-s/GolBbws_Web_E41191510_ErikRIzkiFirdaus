<?php 

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
        //return "Halo ini adalah method index, dalam controller ManagementUser.";
        return "Method ini nantinya akan digunakan untuk mengambil semua data user";
    }
    public function create(){
        return "Method ini nantinya akan digunakan untuk menampilkan form unutk menambah data user";
    }
    public function store(){
        return "method ini nantinya akan digunakan untuk mengambil satu data user dengan id=".$id;
    }
    public function edit($id){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=".$id;
    }
    public function update(Request $request, $id){
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=".$id;
    }
    public function destroy($id){
        return "Method ini nantinya akan digunakan untuk mengahapus data user dengan id=".$id;
    }
}