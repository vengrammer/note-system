<x-layout>
    <div class="note-container">
        <a href="{{route('note.create')}}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach($note as $note)
                <div class="note">   
                    <div class="note-body">
                        {{Str::words($note->note, 30)}}
                    </div>
                    <div class="note-buttons">
                        <a href="{{route('note.show', $note)}}" class="note-btn view">View</a>
                        <a href="{{route('note.edit', $note)}}" class="note-btn edit">Edit</a>
                        
                        <form action="{{ route('note.destroy', $note) }}" method="POST" onsubmit="return confirm('Delete this note?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="note-btn delete">Delete</button>
                        </form>

                    </div>  
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
