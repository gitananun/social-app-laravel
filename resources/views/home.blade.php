@extends('layouts.app')

@section('content')

    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            @include('_publish-tweet-panel')

            @if(count($tweets) > 0)
                <div class="border border-gray-300 rounded-lg">
                        @foreach($tweets as $tweet)
                            @include('_tweet')
                        @endforeach
                </div>
            @endif
        </div>

        <div class="lg:w-1/6">
            @include('_search')
            <div class="bg-blue-100 rounded-lg p-4 pb-12">
                @include('_friends-list')
            </div>
        </div>
    </div>
@endsection
