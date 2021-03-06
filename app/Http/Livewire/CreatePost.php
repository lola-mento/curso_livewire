<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = false;
    public $title,$content;
    protected $rules = [
        'title' => 'required',
        'content' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $this->validate();
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
