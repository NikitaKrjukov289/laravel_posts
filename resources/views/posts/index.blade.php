<x-app-layout>
<h1>All posts</h1>
<ul>

@foreach($posts as $post)
<li>
    <h2>Title: {{ $post->title  }}</h2>
    <p>Content: {{ $post->content  }}</p>
    <div>
        <a href="{{ route('posts.show', $post) }}"></a>
        <a href="{{ route('posts.edit', $post) }}"></a>
        <form action="{{ route('posts.destroy'), $post }}" method="post"></form>
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </div>
    
</li>
@endforeach
</ul>
</x-app-layout>