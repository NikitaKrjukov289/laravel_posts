<x-app-layout>
<h1>All posts</h1>
<ul>

@foreach($posts as $post)
<li>
    <h2>Title: {{ $post->title  }}</h2>
    <p>Content: {{ $post->content  }}</p>
    
</li>
@endforeach
</ul>
</x-app-layout>