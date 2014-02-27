@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
<div class="header">
    <h1>Deletar sua Resposta?</h1>
</div>

    <div class="reply-form">
        {{ Form::model($reply->resource) }}
            <div class="form-row">
                <label class="field-title">Tem certeza que deseja deletar sua resposta?</label>
            </div>

            <div class="form-row">
                {{ Form::button('Deletar', ['type' => 'submit', 'class' => 'button']) }}
            </div>
    </div>
@stop