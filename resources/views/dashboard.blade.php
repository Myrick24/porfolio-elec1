@extends('layouts.layout')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('shared.navigation-side')
            </div>
            <div class="col-6">
                @include('shared.success-message')
                @include('shared.submit_idea')
                <hr>
                @if ($ideas->isEmpty())
                    <div class="alert alert-warning text-center" role="alert">
                        No ideas found.
                    </div>
                @endif
                @foreach ($ideas as $idea)
                <div class="mt-3">
                    @include('shared.idea-card')
                </div>
                @endforeach
                <div class="mt-3">
                    {{$ideas->withQueryString() ->links()}}
                </div>

            </div>
            <div class="col-3">
                @include('shared.search-box')
                @include('shared.follow-box')
            </div>
        </div>
    </div>
 @endsection
