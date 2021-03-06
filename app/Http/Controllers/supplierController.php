<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Penjualan;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier=Supplier::all();
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        return view('supplier.index',compact('supplier','penjualan'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        return view('supplier.create-supplier',compact('penjualan'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Supplier::create($request->all());
        return redirect()->route('supplier.index')
        ->with('success','supplier created successfully.');
        //
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplierEdit = Supplier::where('id',$id)->get();
        $penjualan=Penjualan::orderBy('id', 'DESC')->get();
        // dd($supplierEdit);
        return view('supplier/edit-supplier', compact('supplierEdit','penjualan'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->nama_agen = $request->nama_agen;
        $supplier->alamat = $request->alamat;
        $supplier->save();
        return redirect()->route('supplier.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::where('id',$id)->delete();
        return redirect()->route('supplier.index');
        //
    }
}
