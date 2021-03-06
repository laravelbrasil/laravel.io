<div class="row">
    @if($tags->count() > 0)
        <h3>Descreva seu Post selecionando 3 tags</h3>
        {{ $errors->first('tags', '<small class="error">:message</small>') }}
        <ul class="tags _tag_list">
            @foreach($tags as $tag)
                <li>
                    <a href="#" class="tag _tag" title="{{ $tag->name }}">{{ $tag->name }}</a>
                </li>
            @endforeach
        </ul>
        <div class="_tag_description_container">
            <strong>as tags selecionadas irão relacionar o tópico com...</strong>
            <ul class="_tag_descriptions">
            </ul>
        </div>
        <div style="display:none;" class="_tags">
            @foreach($tags as $tag)
                <div class="_tag" title="{{ $tag->name }}">
                    {{ Form::checkbox("tags[{$tag->id}]", $tag->id, isset($comment) ? $comment->hasTag($tag->id) : null, ['title' => $tag->name]) }}
                    <span class="_name">{{ $tag->name }}</span>
                    <span class="_description">{{ $tag->description }}</span>
                </div>
            @endforeach
        </div>
    @endif
</div>