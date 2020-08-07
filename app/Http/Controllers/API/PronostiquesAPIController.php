<?php

namespace App\Http\Controllers\API;

use App\Pronostiques;
use App\Http\Resources\PronostiquesCollection;
use App\Http\Resources\PronostiquesResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PronostiquesAPIController extends Controller
{
    public function index()
    {



        return new PronostiquesCollection(Pronostiques::paginate(10));
    }

    public function show(Pronostiques $pronostiques)
    {
        return new PronostiquesResource($pronostiques->load([]));
    }

    public function store(Request $request)
    {

        $date = $request->input('date');
        $time  = $request->input('time');

        $final_date = $date . ' ' . $time;

        $request->input()["date_debut"] = $final_date;
        $data = $request->all();
         $data['date_debut'] = $final_date;
         $data['date_fin'] = null;
         $data['status'] = "not_started";
        Pronostiques::create($data);
        return redirect()->back();
    }

    public function update(Request $request, Pronostiques $pronostiques)
    {
        $pronostiques->update($request->all());

        return new PronostiquesResource($pronostiques);
    }

    public function changeStatus(Pronostiques $pronostique, string $status){
        $pronostique->status = $status;
        $pronostique->save();
        return redirect()->back();
    }

    public function destroy(Pronostiques $pronostique)
    {
        try {
            $pronostique->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            var_dump($e);
        }

    }
}
