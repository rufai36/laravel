<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Carbon\Carbon;
class Comments extends Component
{
    public $newComment;

    public $comments = [
        [
            'body' => 'Smile, breathe and go slowly Thich Nhat Hanh',
            'create_at' => '2 min ago',
            'creator' => 'Rufux'

        ]
     ];

     public function addComment()
     {

         array_unshift($this->comments,[ 
        
            'body' => $this->newComment,
            'create_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Ruf'

         ]);
       
     }

    public function render()
    {
        return view('livewire.comments');
    }
}
