<center>

    <br>
    <h2>Add post</h2>
    <form action="{{ url('posts/insert') }}" method="POST">
        @csrf
         {{-- عشان التوكنز --}}
         <label for=""> Enter Title: </label>
         <input type="text" name="t1" required placeholder="Title" id="">
         <br>
         <br>
         <label for=""> Enter Body: </label>
        <input type="text" name="t2" required placeholder="Body" id="">
        <br>
        <br>
        <button type="submit">Save</button>
    </form>
    <form action="{{ route('p') }}">
        <button type="submit">Back to View Posts</button>
        </form>
</center>
