@extends('layouts.fo')

@section('title', 'Edit Episodes')

@section('content')
    <h6 class="form-label">Details of Episode -> {{ $seasonName}}</h6>

    <form method="POST" action="{{ route('episodes.update') }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" value="{{ $episodesInfo->id }}">
        <input type="hidden" name="serie_id" value="{{ $episodesInfo->series_id}}">
        <div class="mb-3">
            <label class="form-label">Episode</label>
            <input readonly type="number" name="episode" class="form-control" value="{{ $episodesInfo->episode_number }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input required type="text" name="title" class="form-control" value="{{ $episodesInfo->title }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Duration</label>
            <input required type="number" name="duration" class="form-control" value="{{ $episodesInfo->duration_minutes }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Air Date</label>
            <input required type="date" name="air_date" class="form-control" value="{{ $episodesInfo->air_date }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Synopsis</label>
            <input required type="text" name="synopsis" class="form-control" value="{{ $episodesInfo->synopsis }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{ route('series.show', $episodesInfo->series_id ) }}" class="btn btn-primary">Back</a>
    </form>

@endsection
