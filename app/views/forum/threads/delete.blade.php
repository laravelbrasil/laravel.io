@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
<div class="header">
    <h1>Deletar seu tópico?</h1>
</div>

    <div class="reply-form">
        {{ Form::model($thread->resource) }}
            <div class="form-row">
                <label class="field-title">Tem certeza que deseja deletar seu tópico?</label>
            </div>

            <div class="form-row">
                {{ Form::button('Apagar', ['type' => 'submit', 'class' => 'button']) }}
            </div>
    </div>
@stop
