<x-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1 style="color: white">Note:: {{$note->created_at}}</h1>
            <div>
                <a href="{{ route('note.edit', $note) }}" 
                    style="background-color: #007bff; color: white; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 14px; margin-right: 8px; display: inline-block;">
                    Edit
                </a>
                <form action="{{ route('note.destroy', $note) }}" method="POST" onsubmit="return confirm('Delete this note?');" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="note-btn delete" style="padding: 10px 28px">Delete</button>
                </form>

            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{$note->note}}
            </div>
        </div>
    </div>
</x-layout>