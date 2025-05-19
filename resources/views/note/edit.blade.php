<x-layout>
    <div class="note-container">
        <h1 style="color: aliceblue">Edit you note</h1>
        
        <form action="{{route('note.update', $note)}}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" id="10" cols="30" rows="10" class="note-body" placeholder="Enter your note here">{{$note->note}}</textarea>
            <div class="note-buttons"> 
                <a href="{{ route('note.index')}}" style="background-color: red; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none;">Cancel</a>
                <button style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>
            </div>
        </form>
    </div>
</x-layout>

