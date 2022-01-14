<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = false;
    public $title,$content;

    public function save()
    {
        Post::create
        ([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['open','title','content']);
        $this->emit('render');
        /* $this->emitTo('show-posts','render'); */ //! Para emitir solo a un componente.
        $this->emit('alert','El post se creó satisfactoriamente');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
