<?php

namespace App\Http\Controllers;

use App\Models\gandusari;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = gandusari::all();
        return view('datatanaman', compact('data'));
    }

    public function about(){
        return view('about');
    } 

    public function create(){
        return view('tambah');
    } 
    public function home(){
        $datas = gandusari::paginate(10);
        return view('index', compact('datas'));
    } 
    public function detail(){
        $datas = gandusari::paginate(10);
        return view('details', compact('datas'));
    } 

    public function insertdata(Request $request){
        //dd($request->all());
        $data = gandusari::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fototanaman/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('datatanaman')->with('success', 'Data Berhasil Di Simpan');
    }

    public function editdata($id){
        $data = gandusari::find($id);
        //dd($data);
        return view('editdata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = gandusari::find($id);
        $data->update($request->all());
        return redirect()->route('datatanaman')->with('success', 'Data Berhasil Di Update');
    }
    public function delete($id){
        $data = gandusari::find($id);
        $data->delete(); 
        return redirect()->route('datatanaman')->with('success', 'Data Berhasil Di Hapus');
    }
}