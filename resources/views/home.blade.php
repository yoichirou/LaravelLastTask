@extends('layouts.fo')

@section('title', 'Series')

@section('content')



    @if (@session('message'))
        <div class="alert alert-success mt-2">
            {{ session('message') }}
        </div>
    @endif

    <h5 class="py-3">All Series</h5>

    <div class="d-flex justify-content-between align-items-center">
    <form>
        <input type="text" name="search" value="{{ request()->query('search')}}" placeholder="Search">
        <button class="btn btn-primary">Search</button>
    </form>
    @if(Auth::user() && Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
    <div class="d-flex gap-2">
        <a class="btn btn-primary" href="{{route('series.add')}}">Add Serie</a>
    </div>
    @endif
    </div>

    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Release year</th>
                <th scope="col">Seasons</th>
                <th scope="col">Episodes</th>
                @auth
                @if (Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
                <th></th>
                @endif
                <th></th>
                @endauth
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($seriesDB as $item)
                <tr>
                    <td><img class="photo-table border border-4 shadow-sm" src="{{ $item->photo ? asset('storage/' . $item->photo) : asset('images/nophoto.jpg') }}" alt="" id="photo-table"></td>
                    <th scope="row">{{ $item->title }}</th>
                    @if ($item->status == 'ongoing')
                        <td class="bg-success-subtle">{{ ucfirst($item->status) }}</td>
                    @elseif ($item->status == 'hiatus')
                        <td class="bg-warning">{{ ucfirst($item->status) }}</td>
                    @elseif ($item->status == 'cancelled')
                        <td class="bg-danger">{{ ucfirst($item->status) }}</td>
                    @else
                        <td class="bg-danger-subtle">{{ ucfirst($item->status) }}</td>
                    @endif
                    <td>{{ $item->release_year}}</td>
                    <td class="text-center">{{ $item->seasons_count }}</td>
                    <td>{{ $item->episodes_count }}</td>
                    @auth
                    @if (Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
                    <td><a href="{{route('series.delete', $item->id)}}" class="btn btn-danger">Delete</a></td>
                    @endif
                    <td><a class="btn btn-warning" href="{{route('series.edit', $item->id)}}">Edit Serie</a></td>
                    @endauth
                    <td><a href="{{route('series.show', $item->id)}}" class="btn btn-primary">Show More</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
