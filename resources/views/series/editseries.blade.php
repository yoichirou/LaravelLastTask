@extends('layouts.fo')

@section('title', 'Edit Serie')

@section('content')
    <h6 class="form-label mt-2">Details of Serie -> {{ $serieInfo->title }}</h6>

    <form method="POST" action="{{ route('series.update') }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" value="{{ $serieInfo->id }}">
        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input required type="text" name="title" class="form-control" value="{{ $serieInfo->title }}">
        </div>
        @error('title')
            <p>Serie Inválida</p>
        @enderror
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select" name="status" id="">
                <option value="">---Select One---</option>
                <option value="ongoing" {{ $serieInfo->status == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="ended" {{ $serieInfo->status == 'ended' ? 'selected' : '' }}>Ended</option>
                <option value="hiatus" {{ $serieInfo->status == 'hiatus' ? 'selected' : '' }}>Hiatus</option>
                <option value="cancelled" {{ $serieInfo->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>
        @error('status')
            <p>Nome Inválido</p>
        @enderror
        <div class="mb-3">
            <label class="form-label">Synopsis</label>
            <input required type="text" name="synopsis" class="form-control" value="{{ $serieInfo->synopsis }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Release Year</label>
            <input required type="number" name="release_year" class="form-control" value="{{ $serieInfo->release_year }}">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" accept="image/*" name="photo" class="form-control" id="photo">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
    </form>

@endsection
