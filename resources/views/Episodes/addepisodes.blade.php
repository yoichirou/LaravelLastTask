@extends('layouts.fo')

@section('title', 'Add Episodes')

@section('content')

    <h1>Add Episodes</h1>

    <form method="POST" action="{{ route('episodes.store') }}">
        @csrf
        <input hidden type="text" name="serie" value="{{ $lastEpisodesBySeason->first()?->series_id }}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Season</label>
            <select name="season" id="seasonSelect" class="form-select">
                @foreach ($lastEpisodesBySeason as $item)
                    <option value="{{ $item->season_id }}" data-last-episode="{{ $item->last_episode_number }}">
                        {{ $item->title }}</option>
                @endforeach
                <option value="no_season">Create New Season</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Episode</label>
            <input readonly type="number" name="episode" id="episodeInput" class="form-control"
                value="{{ isset($lastEpisodesBySeason->first()->last_episode_number) ? $lastEpisodesBySeason->first()->last_episode_number + 1 : '1' }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Title</label>
            <input required type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Duration</label>
            <input required type="number" name="duration" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Air Date</label>
            <input required type="date" name="air_date" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Synopsis</label>
            <input required type="text" name="synopsis" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Episode</button>
        <a class="btn btn-primary" href="{{route('series.show', $lastEpisodesBySeason->first()?->series_id)}}">Back</a>
    </form>
@endsection
