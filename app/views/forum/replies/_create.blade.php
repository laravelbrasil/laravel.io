<div class="reply-form">
    <a name="reply_form"></a>
    {{ Form::open(['data-persist' => 'garlic', 'data-expires' => '300']) }}
        <div class="form-row">
            <label class="field-title">Responder</label>
            {{ Form::textarea("body", null, ['class' => '_tab_indent _reply_form']) }}
            {{ $errors->first('body', '<small class="error">:message</small>') }}
            <small><a href="http://duvidas.laravel.com.br/forum/02-27-2014-como-usar-marcacoes-formatando-seu-post" target="_BLANK">Aprenda a usar as marcações.</a></small>
        </div>

        <div class="form-row">
            {{ Form::button('Responder', ['type' => 'submit', 'class' => 'button']) }}
        </div>
    {{ Form::close() }}
</div>
