@include('bin._scripts')
@include('bin._styles')

<div class="sidebar show">
    @include('bin._logo')
    <div class="options">
        <ul>
            <li><a href="{{ $paste->createUrl }}" class="button new">Novo (n)</a></li>
            <li><a href="{{ $paste->forkUrl }}" class="button fork">Fork (f)</a></li>
            <li><a target="_blank" href="{{ $paste->rawUrl }}" class="button raw">Raw (r)</a></li>
            <li><div class="button copy" id="copy-button">Copiar URL (cmd+c)</button></li>
            <input type="text" id="copy-data" class="hidden" value="{{ $paste->showUrl }}" readonly="readonly">
        </ul>
    </div>
    <p>Atenção: Todo o código postado aqui será publico.</p>
</div>

<div class="show-container">
    <pre class="prettyprint linenums selectable">
{{{ $paste->code }}}
    </pre>
</div>