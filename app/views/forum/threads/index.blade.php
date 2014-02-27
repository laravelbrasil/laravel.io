@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
    <section class="forum">
        <div class="header">
            <h1>Forum</h1>
                {{-- Display select tags --}}
                @if(Input::get('tags', null))
                    <div class="tags">
                        {{ Input::get('tags') }}
                    </div>
                @endif
            <a class="button" href="{{ action('ForumThreadsController@getCreateThread') }}">Novo Tópico</a>
        </div>

        <div class="filter">
            <p>Mostrar:</p>
            <ul>
                <li><a href="{{ action('ForumThreadsController@getIndex', '') . $queryString }}" class="{{ Request::path() == 'forum' ? 'current' : '' }}">Todos</a></li>
                <li><a href="{{ action('ForumThreadsController@getIndex', 'open') . $queryString }}" class="{{ Request::is('forum/open') ? 'current' : '' }}">Aberto</a></li>
                <li><a href="{{ action('ForumThreadsController@getIndex', 'solved') . $queryString }}" class="{{ Request::is('forum/solved') ? 'current' : '' }}">Resolvido</a></li>
            </ul>
        </div>

        <div class="threads">
            {{-- Loop over the threads and display the thread summary partial --}}
            @each('forum.threads._index_summary', $threads, 'thread')

            {{-- If no comments are found display a message --}}
            @if( ! $threads->count())
                <div class="empty-state">
                    @if(Input::get('tags'))
                        <h3>Nenhum tópico encontrado com a(s) tag(s) {{ Input::get('tags') }}</h3>
                    @else
                        <h3>Nenhum tópico encontrado.</h3>
                    @endif
                    <a class="button" href="{{ action('ForumThreadsController@getCreateThread') }}">Criar um novo tópico</a>
                </div>
            @endif
        </div>

        <div class="pagination">
            {{ $threads->links() }}
        </div>
    </section>
@stop
