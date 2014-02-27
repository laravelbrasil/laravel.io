@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
        <div class="header">
            <h1>Criar Tópico</h1>
        </div>
        {{ Form::open(['data-persist' => 'garlic', 'data-expires' => '600']) }}
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
                <small><a href="http://duvidas.laravel.com.br/forum/02-27-2014-como-usar-marcacoes-formatando-seu-post" target="_BLANK">Aprenda a usar as marcações.</a></small>
            </div>

            <div class="form-row">
                {{ Form::label('is_question', 'Que tipo de tópico é esse?', ['class' => 'field-title']) }}
                <ul class="version tags _question_tags">
                    <li>
                        <label class="tag">
                            Pergunta
                            {{ Form::radio('is_question', 1, true) }}
                        </label>
                    </li>
                    <li>
                        <label class="tag">
                            Conversa
                            {{ Form::radio('is_question', 0, false) }}
                        </label>
                    </li>
                </ul>
                {{ $errors->first('is_question', '<small class="error">:message</small>') }}
            </div>

            <div class="form-row">
                {{ Form::label('laravel_version', 'Versão do Laravel', ['class' => 'field-title']) }}
                <ul class="version tags _version_tags">
                    <li>
                        <label class="tag">
                            Laravel 4.x
                            {{ Form::radio('laravel_version', 4, true) }}
                        </label>
                    </li>
                    <li>
                        <label class="tag">
                            Laravel 3.x
                            {{ Form::radio('laravel_version', 3) }}
                        </label>
                    </li>
                    <li>
                        <label class="tag">
                            Não faz diferença
                            {{ Form::radio('laravel_version', 0) }}
                        </label>
                    </li>
                </ul>
                {{ $errors->first('laravel_version', '<small class="error">:message</small>') }}
            </div>

            <div class="form-row tags">
                @include('forum._tag_chooser')
            </div>

            <div class="form-row">
                {{ Form::button('Enviar', ['type' => 'submit', 'class' => 'button']) }}
            </div>
        </section>
        {{ Form::close() }}
@stop
