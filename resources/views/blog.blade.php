<x-layouts.app 
	title="Blog" 
	meta-description="Blog meta description"
	>
	<h1 class="text-center">Pagina De Blog</h1>
	@foreach($posts as $post)
		<h1>@dump($post->titulo)</h1>
	@endforeach
</x-layouts.app>