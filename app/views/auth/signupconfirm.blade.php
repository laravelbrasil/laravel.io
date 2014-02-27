@extends('layouts._one_column')

@section('content')
    <section class="auth">
        <h1>Iremos criar sua conta com essas informações.</h1>

        <div class="user">
            {{ Form::open() }}
            <img src="{{ $githubUser['image_url'] }}"/>
            <div class="bio">
                @if(isset($githubUser['name']))
                    <h2>{{ $githubUser['name'] }}</h2>
                @endif
                @if(isset($githubUser['email']))
                    <h3>{{ $githubUser['email'] }}</h3>
                @endif
                {{ Form::submit('Criar minha conta no Forum Laravel Brasil', ['class' => 'button']) }}
            </div>
            {{ Form::close() }}
        </div>

    </section>
@stop