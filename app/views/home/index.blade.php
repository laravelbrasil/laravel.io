<secion class="hero-section">
    <div class="description">
        <h1>Articles</h1>
        <p class="lead">
            Descubra artigos que cobrem uma vasta gama de tópicos relacionados ao Laravel e Desenvolvimento WEB, escritos pela comunidade.<a href="{{ action('ArticlesController@getCompose') }}">Escreva um artigo</a> e ajude a melhorar nossa base de conhecimento.
        </p>
    </div>
    <div class="posts">
        @foreach($articles as $article)
            @include('articles._small_summary')
        @endforeach
        <p>
            <a href="{{ action('ArticlesController@getIndex') }}">Ver todos os artigos</a>
        </p>
    </div>
</section>

<secion class="hero-section dark">
    <div class="description">
        <h1>Forum Threads</h1>
        <p class="lead">
            Discutir tópicos relacionados a Desenvolvimento WEB, fazer uma pergunta ou ajudar a comunidade.
        </p>
    </div>
    <div class="posts">
        @foreach($threads as $thread)
            @include('forum.threads._index_summary')
        @endforeach
    </div>
</section>

<section class="hero-section darker">
    <div class="description">
        <h1>Help Cases</h1>
        <p class="lead">
            Nós não temos ideia do que colocar aqui.
        </p>
    </div>
    <div class="posts">

    </div>
</section>