@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
    <section class="forum">
        <h1>Forum</h1>

        @if(Input::has('tags'))
            <div class="tags">Tópicos marcados com {{ Input::get('tags') }}.</div>
        @else
            <div class="tags">Todos os tópicos</div>
        @endif

        @if($threads->count() > 0)
            @foreach($threads as $thread)
                @include('forum._thread_summary')
            @endforeach

            {{ str_replace('%2C', ',', $threads->links()) }}
        @else
            <div>
                Atualmente, não existem tópicos para a categoria selecionada.
            </div>
        @endif
    </section>
@stop