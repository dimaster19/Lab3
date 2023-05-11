<?php

namespace Lab3\Controllers;
use App\Models\Storage;
use App\Http\Requests\StoreStorageRequest;
use App\Http\Requests\UpdateStorageRequest;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index()
    {
        $storages = Storage::all();
        return $storages;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'count' => 'required',
            'desc' => 'required',
            'category_id'=> 'required',
            'delivery_id' => 'required',
        ]);

        Storage::create($request->all());

        return true;
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'count' => 'required',
            'desc' => 'required',
            'category_id'=> 'required',
            'delivery_id' => 'required',

        ]);
        $storage = Storage::find($request->id);
        $storage->update($request->all());
        return true;

    }


    public function destroy(Request $request)
    {
       $storage = Storage::find($request->id);
       $storage->delete();
       return true;

    }
}
