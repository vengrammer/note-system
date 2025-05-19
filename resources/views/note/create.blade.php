<x-layout>
    <div class="note-container single-note">
        <h1 style="color: white">Create new note</h1>
        <form action="{{ route('note.store')}}" method="POST" class="note">
            @csrf
            <textarea name="note" id="10" cols="30" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons"> 
                <a href="{{ route('note.index') }}" 
                    style="background-color: #ed4c1b; color: white; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-size: 14px; margin-right: 10px; display: inline-block;">
                    Cancel
                </a>

                <button style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 6px; font-size: 14px; cursor: pointer;">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>
