<?php

namespace Lab3\Controllers;
use App\Models\Deliver;
use App\Http\Requests\StoreDeliverRequest;
use App\Http\Requests\UpdateDeliverRequest;
use Illuminate\Http\Request;

class DeliverController extends Controller
{
    public function index()
    {
        $delivers = Deliver::all();
        return $delivers;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);


        Deliver::create($request->all());

        return true;
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $deliver = Deliver::find($request->id);

        $deliver->update($request->all());
        return true;

    }


    public function destroy(Request $request)
    {
       $deliver = Deliver::find($request->id);
       $deliver->delete();
       return true;

    }
}
