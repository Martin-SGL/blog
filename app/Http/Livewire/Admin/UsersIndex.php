<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    public $search;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    //sirve para buscar en cualquier información en cualquier página
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name','like','%'.$this->search.'%')
            ->orWhere('email','like','%'.$this->search.'%')
            ->paginate(4);
        return view('livewire.admin.users-index', compact('users'));
    }
}
