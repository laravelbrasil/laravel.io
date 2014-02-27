<div class="contributor nonMember">
	<h2>{{ $contributor->name }}</h2>
	<p class="github-link">
		<a href="{{ $contributor->github_url }}">Perfil no GitHub</a>
	</p>
	<p class="avatar">
		<img src="{{ $contributor->avatar_url }}" alt="{{ $contributor->name }}">
	</p>
	<p class="count">
		Contribuições: {{ $contributor->contribution_count }}
	</p>
</div>