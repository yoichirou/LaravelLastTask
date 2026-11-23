<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEpisodesRequest;
use App\Http\Requests\UpdateEpisodesRequest;
use App\Models\Episodes;
use App\Models\Seasons;
use App\Models\Series;

class EpisodesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($episodes)
    {
        $lastEpisodesBySeason = Seasons::leftJoin('episodes', 'seasons.id', '=', 'episodes.season_id')
            ->where('seasons.series_id', $episodes)
            ->selectRaw('seasons.series_id, seasons.id as season_id, seasons.title, MAX(episodes.episode_number) as last_episode_number')
            ->groupBy('seasons.series_id', 'seasons.id', 'seasons.title')
            ->orderBy('seasons.id')
            ->get();

        // dd($lastEpisodesBySeason);

        return view('Episodes.addepisodes', compact('lastEpisodesBySeason'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEpisodesRequest $request)
    {

        //validar os dados no servidor
        $request->validate([
            'season' => 'required|',
            'serie' => 'required|integer',
            'episode' => 'required|integer',
            'title' => 'required|string',
            'duration' => 'required|integer',
            'air_date' => 'nullable|date',
            'synopsis' => 'nullable|string',

        ]);

        if($request->season == 'no_season')
        {
            $seasonInfo = Seasons::where('series_id', $request->serie)
            ->orderBy('season_number', 'desc')
            ->first();

            // dd($seasonInfo);
            $seasonID = Seasons::create([
                'series_id' => $request->serie,
                'season_number' => $seasonInfo->season_number + 1,
                'title' => 'Season' . ' ' . $seasonInfo->season_number + 1,
                'air_date' => $request->air_date,
            ]);

            // dd($seasonID);
        }

        //depois de validados, inserir na bd
        Episodes::create([
            'season_id' => isset($seasonID)? $seasonID->id : $request->season,
            'series_id' => $request->serie,
            'episode_number' => $request->episode,
            'title' => $request->title,
            'duration_minutes' => $request->duration,
            'air_date' => $request->air_date,
            'synopsis' => $request->synopsis,
        ]);

        return redirect()->route('series.show', $request->serie)->with('message','Episode added with success!');
    }

    /**
     * Display the specified resource.
     */
    public function show( $episodes)
    {

        $seriesInfo = Episodes::where('episodes.series_id', $episodes)
        ->join('seasons','episodes.season_id','=','seasons.id')
        ->join('series','episodes.series_id', '=','series.id')
        ->select('episodes.id','episodes.series_id','episodes.episode_number','episodes.title','episodes.duration_minutes','episodes.air_date','seasons.title as season','series.title as serie','episodes.synopsis')
        ->orderBy('seasons.season_number')
        ->get()
        ->groupBy('season');

        // dd($seriesInfo);

        return view('series.seriesall',compact('seriesInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Episodes $episodes)
    {
        $episodesInfo = $episodes;

        $seasonName = $episodes->series->title;


        // dd($episodesInfo);
        return view('Episodes.editepisodes', compact('episodesInfo','seasonName'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEpisodesRequest $request)
    {

        // dd($request);

        //validar os dados no servidor
        $request->validate([
            'title' => 'required|string',
            'duration' => 'required|integer',
            'air_date' => 'required|date',
            'synopsis' => 'required|string'
        ]);

        //depois de validados, inserir na bd
        Episodes::where('id', $request->id)->update([
            'title' => $request->title,
            'duration_minutes' => $request->duration,
            'synopsis' => $request->synopsis,
            'air_date' => $request->air_date,
        ]);

         return redirect()->route('series.show', $request->serie_id)->with('message','Episode successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episodes $episodes)
    {
        $episodes->delete();

        return redirect()->route('series.show', $episodes->series_id )->with('message', 'Episode deleted with success!');
    }

}
