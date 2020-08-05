<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = \App\Store::paginate(10);

        return view('admin.stores.index', compact('stores'));
    }

    public function create()
    {
        $users = \App\User::all('id', 'name');
        return view('admin.stores.create', compact('users'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $user = \App\User::find($data['users']); //Pega e passa o id do usuario.
        $store = $user->store()->create($data); //cria a loja no banco.

        flash('Loja Criada Com Sucesso')->success();
        return redirect()->route('admin.stores.index');
    }


    public function edit($store)
    {
        $store = \App\Store::find($store);

        return view('admin.stores.edit', compact('store'));
    }

    public function update(Request $request, $store)
    {
        $data = $request->all();
        $store = \App\Store::find($store);
        $store->update($data);

        flash('Loja Atualizada Com Sucesso')->success();
        return redirect()->route('admin.stores.index');
    }

    public function destroy($store)
    {
        $store = \App\Store::find($store);
        $store->delete();
        
        flash('Loja Removida Com Sucesso')->success();
        return redirect()->route('admin.stores.index');
    }
}
