@extends('layouts.layout')
@section('content')
    <div class="container py-4">
        <div class="row">

            <div class="col-3">
                @include('shared.navigation-side')
            </div>

            <div class="col-6">
                @include('shared.success-message')
                @include('shared.user-card')<hr>
                @foreach ($ideas as $idea)
                <div class="mt-3">
                    @include('shared.idea-card')
                </div>
                @endforeach
            </div>


            <div class="col-3">
                @include('shared.search-box')
                @include('shared.follow-box')
            </div>

        </div>
    </div>
 @endsection
