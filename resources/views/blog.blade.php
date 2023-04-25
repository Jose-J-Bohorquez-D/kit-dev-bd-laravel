<x-layouts.app 

	title="Blog" 
	meta-description="Blog meta description"

	>

	<h1 class="text-center">Pagina De Blog</h1>

	@dump($posts)

	@foreach($posts as $post)
		{{ $post['titulo'] }}
	@endforeach
</x-layouts.app>