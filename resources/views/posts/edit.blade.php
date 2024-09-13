<x-app-layout>
    <h1>create post</h1>


    <form action="{{ route('posts.update'), $post }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">

        <label for="content">Content:</label>
        <textarea type ="text" name="content" id="content">{{ $post->content }}</textarea>
        <input type="submit" value="Update">
    </form>
</x-app-layout>