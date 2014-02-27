@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
{{ Form::model($thread->resource) }}
    <div class="header">
        <h1>Editar tópico</h1>
    </div>

    <section class="padding">
        <div class="form-row">
            {{ Form::label('subject', 'Assunto', ['class' => 'field-title']) }}
            {{ Form::text('subject', null, ['placeholder' => 'Assunto']) }}
            {{ $errors->first('subject', '<small class="error">:message</small>') }}
        </div>

        <div class="form-row">
            {{ Form::label('body', 'Tópico', ['class' => 'field-title']) }}
            {{ Form::textarea("body", null) }}
            {{ $errors->first('body', '<small class="error">:message</small>') }}
            <small><a href="http://laravel.io/forum/01-31-2014-how-to-mark-up-forum-posts" target="_BLANK">Aprenda a usar as marcações.</a></small>
        </div>

        <div class="form-row">
            {{ Form::label('is_question', 'Que tipo de tópico é esse?', ['class' => 'field-title']) }}
            <ul class="version tags _question_tags">
                <li>
                    <label class="tag">
                        Pergunta
                        {{ Form::radio('is_question', 1, $thread->is_question) }}
                    </label>
                </li>
                <li>
                    <label class="tag">
                        Conversa
                        {{ Form::radio('is_question', 0, $thread->is_question) }}
                    </label>
                </li>
            </ul>
            {{ $errors->first('is_question', '<small class="error">:message</small>') }}
        </div>

        <div class="form-row">
            {{ Form::label('laravel_version', 'Versão do Laravel', ['class' => 'field-title']) }}
            <ul class="version tags _version_tags">
                @foreach($versions as $value => $version)
                    <li>
                        <label class="tag">
                            {{ $version }}
                            {{ Form::radio('laravel_version', $value) }}
                        </label>
                    </li>
                @endforeach
            </ul>
            {{ $errors->first('laravel_version', '<small class="error">:message</small>') }}
        </div>

        <div class="form-row tags">
            @include('forum._tag_chooser', ['comment' => $thread])
        </div>

        <div class="form-row">
            {{ Form::button('Salvar', ['type' => 'submit', 'class' => 'button']) }}
        </div>
    {{ Form::close() }}
@stop
