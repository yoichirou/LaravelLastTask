@extends('layouts.fo')

@section('title', 'Information on a Serie')

@section('content')

    @if (@session('message'))
        <div class="alert alert-success mt-2">
            {{ session('message') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-1">{{ $seriesInfo->first()?->first()?->serie ?? 'Série' }}</h1>
        <div class="d-flex gap-2">
            @auth
            @if (Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
            <a class="btn btn-primary" href="{{route('episodes.add', $seriesInfo->first()?->first()?->series_id)}}">Add Episode</a>
            @endif
            @endauth
            <a class="btn btn-primary" href="{{ route('home') }}">Back</a>
        </div>

    </div>

    @foreach ($seriesInfo as $seasonName => $episodes)
        <div class="d-flex gap-2">
        <h3>{{ $seasonName }}</h3>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Episode</th>
                    <th scope="col">Title</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Air Date</th>
                    <th scope="col">Synopsis</th>
                    @auth
                    @if (Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
                    <th scope="col"></th>
                    @endif
                    <th scope="col"></th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($episodes as $item)
                    <tr>
                        <td>{{ $item->episode_number }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->duration_minutes }}m</td>
                        <td>{{ $item->air_date }}</td>
                        <td class="fs-15">{{ $item->synopsis }}</td>
                        @auth
                        <td><a class="btn btn-warning" href="{{route('episodes.edit', $item->id)}}">Edit</a></td>
                        @if (Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
                        <td><a class="btn btn-danger" href="{{route('episodes.delete', $item->id)}}">Delete</a></td>
                        @endif
                        @endauth


                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach

@endsection
