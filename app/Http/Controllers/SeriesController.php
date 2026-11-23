<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeriesRequest;
use App\Http\Requests\UpdateSeriesRequest;
use App\Models\Series;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $seriesDB = Series::query()
            ->withCount(['seasons', 'episodes'])
            ->orderBy('title')
            ->get();

        $searchPar = request()->query('search') ? request()->query('search'): null;

        $query = Series::query()
                ->withCount(['seasons', 'episodes'])
                ->orderBy('title');
        if($searchPar){
            $query->where('title', 'LIKE' ,"%{$searchPar}%");
        }

        $searchResult = $query->get();

        if($searchPar){
            $seriesDB = $searchResult;
        }

        // dd($seriesDB);

        return view('home', compact('seriesDB','searchResult','searchPar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('series.addseries');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSeriesRequest $request)
    {

        //validar os dados no servidor
        $request->validate([
            'name' => 'required|max:50',
            'status' => ['required', Rule::in(['ongoing', 'ended', 'hiatus', 'cancelled'])],
            'synopsis' => 'required|string',
            'releaseyear' => 'required|integer|digits:4',
            'photo' => 'image',
        ]);

        //depois de validados, inserir na bd
        Series::insert([
            'title' => $request->name,
            'status' => $request->status,
            'synopsis' => $reqeust->synopsis,
            'release_year' => $request->releaseyear,
            'photo' => $request->photo,
        ]);

        return redirect()->route('home')->with('message','Series successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Series $series)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Series $series)
    {

        $serieInfo = $series;

        // dd($serieInfo);
        return view('series.editseries', compact('serieInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeriesRequest $request)
    {
        // dd($request);

        //validar os dados no servidor
        $request->validate([
            'title' => 'required|max:50',
            'status' => ['required', Rule::in(['ongoing', 'ended', 'hiatus', 'cancelled'])],
            'synopsis' => 'required|string',
            'release_year' => 'required|integer|digits:4',
            'photo' => 'image',
        ]);

        if($request->hasFile('photo')){
            $photo = Storage::putFile('uploadedImages', $request->photo);
        }

        //depois de validados, inserir na bd
        Series::where('id', $request->id)->update([
            'title' => $request->title,
            'status' => $request->status,
            'synopsis' => $request->synopsis,
            'release_year' => $request->release_year,
            'photo' => isset($photo) ? $photo : null,
        ]);

         return redirect()->route('home')->with('message','Series successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Series $series)
    {
        // dd($series);
        $series->delete();

        return redirect()->route('home')->with('message', 'Series successfully deleted!');
    }
}
