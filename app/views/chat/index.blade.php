<h2>Canal #laravel-br no IRC</h2>

@if(Auth::check() or Session::has('userLazilyOptsOutOfAuthOnChat'))
	<iframe src="https://kiwiirc.com/client/irc.freenode.net/?&nick={{ Auth::check() ? $currentUser->name : 'laravelnewbie'}}#laravel-br" style="border:0; width:100%; height:450px;"></iframe>
	<?php
    /*
    <a href="http://irclogs.laravel.io" target="_NEW">Search the chat logs</a> to see if your question has already been answered. You can use your own IRC client at Freenode.net in #Laravel.<br>
	Channel Moderators are: TaylorOtwell, ShawnMcCool, PhillSparks, daylerees, JasonLewis, machuga and JesseOBrien.
    */
    ?>
@else
	{{-- look at how much I don't give a crap --}}
	<?Session::put('userLazilyOptsOutOfAuthOnChat', 1)?>

    <section class="empty-state">
        <h1>Por favor, faça login</h1>
        <p>Para melhor experiênca, faça login com GitHub para conversar.</p>
        <a class="button full" href="{{ action('AuthController@getLogin') }}">Login com GitHub</a>
    </section>


@endif
