@extends('layouts.layout')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('shared.navigation-side')
            </div>
            <div class="col-6">
                @include('shared.success-message')
                <div class="mt-3">
                    @include('shared.idea-card')
                </div>
            </div>
            <div class="col-3">
                @include('shared.search-box')
                @include('shared.follow-box')
            </div>
        </div>
    </div>
 @endsection
