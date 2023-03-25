<center>

    <br>
    <h2>Update post  "{{ $Post -> title }}"</h2>
    <form action="{{ route('uu',$Post->id) }}" method="POST">
        @csrf
         {{-- عشان التوكنز --}}
         <label for="">Enter New Title:</label>
         <input type="text" name="u1" value="{{ $Post -> title }}" placeholder="Title" id="">
         <br>
         <br>
         <label for="">Enter New body:</label>
        <input type="text" name="u2" value="{{ $Post -> body }}" placeholder="Body" id="">
        <br>
        <br>
        <button type="submit">Save</button>
    </form>

</center>
