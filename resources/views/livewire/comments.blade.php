<div>
    <div class="search">
        <form action="" method="post" wire:submit.prevent="create" class="form-inline">
            <div class="form-group d-flex">
                <input type="text" name="search" wire:model="newComment" class="form-control">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>

    <div class="comments">
        @foreach ($comments as $comment)
            <div class="comment">
                <p>{{$comment}}</p>
            </div>
        @endforeach
    </div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
