@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('users._sidebar')
@stop

@section('content')
<section class="user-content">
@if($threads->count() > 0)
    <div class="header">
        <h1>Últimas Interações de {{ $user->name }}</h1>
    </div>
    <div class="threads">
        @foreach($threads as $thread)
            <div class="thread-summary">
                {{ $thread->author->thumbnail }}
                <div class="info">
                    <h3><a href="{{ $thread->url }}">{{ $thread->subject }}</a></h3>
                    <ul class="meta">
                        <li>postado {{ $thread->created_ago }}</li>
                        <li>por <a href="{{ $thread->author->profileUrl }}">{{ $thread->author->name }}</a></li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endif



@if($replies->count())
    <div class="header double">
        <h1>Últimas Interações de {{ $user->name }}</h1>
    </div>
    <div class="threads">
        @foreach($replies as $reply)
            <div class="thread-summary">
                {{ $reply->author->thumbnail }}
                <div class="info">
                    <h3><a href="{{ $reply->url }}">Em resposta a: {{ $reply->thread->subject }}</a></h3>
                    <ul class="meta">
                        <li>postado {{ $reply->created_ago }}</li>
                        <li>por <a href="{{ $reply->author->profileUrl }}">{{ $reply->author->name }}</a></li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endif


</section>
@stop
