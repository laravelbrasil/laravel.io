@include('bin._scripts')
@include('bin._styles')

{{ Form::model($paste, [
    'class' => 'editor-form'
]) }}
    <div class="sidebar create">
        @include('bin._logo')
        <div class="options">
            <ul>
                <li><input type="submit" value="Salvar" class="button"></li>
                <li><input type="reset" value="Limpar" class="button"></li>
                <li><a href="{{ $paste->showUrl }}" class="button back"><i class="fa fa-arrow-circle-o-left"></i> Voltar</a></li>
            </ul>
        </div>
    </div>

    @include('bin._editor')
{{ Form::close() }}