@include('bin._scripts')
@include('bin._styles')


{{ Form::open(['class' => 'editor-form']) }}
    <div class="sidebar create">
        @include('bin._logo')
        <div class="options">
            <ul>
                <li><input type="submit" value="Salvar (cmd+s)" class="button"></li>
                <li><input type="reset" value="Limpar" class="button"></li>
            </ul>
        </div>
        <p>Atenção: Todo o código postado aqui será publico.</p>
    </div>

    @include('bin._editor')
{{ Form::close() }}