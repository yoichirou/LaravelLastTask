@extends('layouts.fo')

@section('title', 'Add Series')

@section('content')

    <h1>Add Serie</h1>

    <form method="POST" action="{{route('series.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name of Serie</label>
            <input required type="text" name="name" class="form-control">
        </div>
        @error('name')
            <p>Nome Inválido</p>
        @enderror
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Status</label>
            <select class="form-select" name="status" required>
                <option value="">---Select One---</option>
                <option value="ongoing">Ongoing</option>
                <option value="ended">Ended</option>
                <option value="hiatus">Hiatus</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Synopsis</label>
            <input required type="text" name="synopsis" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Release year</label>
            <input required type="number" name="releaseyear" class="form-control">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" accept="image/*" name="photo" class="form-control" id="photo">
        </div>
        <button type="submit" class="btn btn-primary">Add Serie</button>
        <a class="btn btn-primary" href="{{route('home')}}">Back</a>
    </form>
@endsection
