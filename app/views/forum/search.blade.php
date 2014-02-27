@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar', ['query' => $query])
@stop

@section('content')
    <section class="forum">
        <div class="header">
            @if($query)
                <h1>Resultados da busca por "{{ $query }}"</h1>
            @else
                <h1>Busca no Forum</h1>
            @endif
        </div>

        @if($query)
            <div class="threads">
                @if($results->count() > 0)
                    {{-- Loop over the threads and display the thread summary partial --}}
                    @foreach($results as $result)
                        @if($result->parent)
                            @include('forum.threads._index_summary', ['thread' => $result->parent])
                        @else
                            @include('forum.threads._index_summary', ['thread' => $result])
                        @endif
                    @endforeach
                @else
                    {{-- If no comments are found display a message --}}
                    <div class="empty-state">
                        <h3>Nenhum resultado encontrado para "{{ $query }}"</h3>
                    </div>
                @endif
            </div>

            <div class="pagination">
                {{ $results->links() }}
            </div>
        @else
            <div class="padding">
                {{ Form::open(['action' => 'ForumThreadsController@getSearch', 'method' => 'GET']) }}
                    <div class="form-row">
                        {{ Form::label('query', 'pesquise no forum', ['class' => 'field-title']) }}
                        {{ Form::text('query', null, ['placeholder' => 'pesquise no forum'] )}}
                    </div>
                    <div class="form-row">
                    {{ Form::button('Pesquisar!', ['type' => 'submit', 'class' => 'button']) }}
                    </div>
                {{ Form::close() }}
            </div>
        @endif
    </section>
@stop