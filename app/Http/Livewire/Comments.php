<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [];
    public $newComment = '';

    public function create() {
        $this->comments[] = $this->newComment;
        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
