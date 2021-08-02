<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        $id  = Auth::id();

      
        if (!empty($keyword)) {
            $produit = Produit::where("user_id", "=",$id)
            ->where(function($q) use ($keyword) {
                $q->where('prix', 'LIKE', "%$keyword%")
                ->orWhere('nom', 'LIKE', "%$keyword%");
                
            
            })
                ->latest()->paginate($perPage);
        } else {
            $produit = Produit::where("user_id", "=",$id)
            ->latest()
            ->paginate($perPage);
        }

        return view('admin.produit.index', compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.produit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'nom' => 'required',
		]);
        $requestData = $request->all();
        $id  = Auth::id();

        $requestData["user_id"]=$id;
        
    
        Produit::create($requestData);

        return redirect('admin/produit')->with('flash_message', 'Produit added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $produit = Produit::findOrFail($id);

        return view('admin.produit.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $produit = Produit::findOrFail($id);

        return view('admin.produit.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'nom' => 'required',

		]);
        $requestData = $request->all();
        
        $produit = Produit::findOrFail($id);
        $produit->update($requestData);

        return redirect('admin/produit')->with('flash_message', 'Produit updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Produit::destroy($id);

        return redirect('admin/produit')->with('flash_message', 'Produit deleted!');
    }
}
