<x-app-layout>
    <h1>create post</h1>


    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">

        <label for="content">Content:</label>
        <textarea type ="text" name="content" id="content"></textarea>
        <input type="submit" value="Create">
    </form>
</x-app-layout>