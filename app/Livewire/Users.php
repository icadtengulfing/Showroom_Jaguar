<?php

namespace App\Livewire;

use App\Models\User as ModelsUsers;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $full_name;
    public $email;
    public $password;
    public $phone;
    public $user_id; // Nyimpan id buat url edit
    public $keyword; //buat search

    protected $paginationTheme = 'bootstrap';

    public function store()
    {
        $validated = $this->validate([
            'full_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phone' => 'required',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        $this->reset(['full_name', 'email', 'password', 'phone']);
        session()->flash('message', 'User berhasil dibuat!');
        // Dispatch event untuk menutup modal
        $this->dispatch('close-modal');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->user_id = $user->id;
        $this->full_name = $user->full_name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->dispatch('open-edit-modal');
    }

    public function update()
    {
        $validated = $this->validate([
            'full_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'phone' => 'required',
        ]);

        $user = User::findOrFail($this->user_id);
        // Update password hanya jika diisi
        if (!empty($this->password)) {
            $validated['password'] = bcrypt($this->password);
        }
        $user->update($validated);
        $this->reset(['full_name', 'email', 'password', 'phone', 'user_id']);
        session()->flash('message', 'User berhasil diupdate!');
        $this->dispatch('close-edit-modal');
    }

    public function resetForm()
    {
        $this->reset(['full_name', 'email', 'password', 'phone', 'user_id']);
        $this->resetValidation();
    }

    public function delete_confirm($id)
    {
        $this->user_id = $id;
        $this->dispatch('open-delete-modal');
    }

    public function delete()
    {
        User::find($this->user_id)->delete();
        session()->flash('message', 'User berhasil di-delete!');
        $this->reset(['user_id']);
        $this->dispatch('close-delete-modal');
    }

    public function render()
    {
        $users = User::latest();

        if ($this->keyword != null) {
            $users = $users->where('full_name', 'like', '%' . $this->keyword . '%')
                ->orWhere('email', 'like', '%' . $this->keyword . '%')
                ->orWhere('phone', 'like', '%' . $this->keyword . '%');
        }

        return view('livewire.users', ['users' => $users->paginate(5)]);
    }
}
