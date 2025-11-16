<?php

namespace App\Http\Livewire;


use App\Models\Dealer; // Import model Dealer
use Livewire\Component;
use Livewire\WithPagination;

class Dealers extends Component
{
  use WithPagination;

  public $name; // Ganti full_name jadi name
  public $email;
  public $phone;
  public $address;
  public $country;
  public $dealer_id; // Ganti user_id jadi dealer_id
  public $keyword;

  protected $paginationTheme = 'bootstrap';

  public function store()
  {
    $validated = $this->validate([
      'name' => 'required|min:3',
      'email' => 'required|email|unique:dealers,email',
      'phone' => 'required',
      'address' => 'required',
      'country' => 'required',
    ]);

    Dealer::create($validated);

    $this->reset(['name', 'email', 'phone', 'address', 'country']);
    session()->flash('message', 'Dealer berhasil dibuat!');
    $this->dispatch('close-modal');
  }

  public function edit($id)
  {
    $dealer = Dealer::findOrFail($id);

    $this->dealer_id = $dealer->id;
    $this->name = $dealer->name;
    $this->email = $dealer->email;
    $this->phone = $dealer->phone;
    $this->address = $dealer->address;
    $this->country = $dealer->country;
    $this->dispatch('open-edit-modal');
  }

  public function update()
  {
    $validated = $this->validate([
      'name' => 'required|min:3',
      'email' => 'required|email|unique:dealers,email,' . $this->dealer_id,
      'phone' => 'required',
      'address' => 'required',
      'country' => 'required',
    ]);

    $dealer = Dealer::findOrFail($this->dealer_id);
    $dealer->update($validated);

    $this->reset(['name', 'email', 'phone', 'address', 'country', 'dealer_id']);
    session()->flash('message', 'Dealer berhasil diupdate!');
    $this->dispatch('close-edit-modal');
  }

  public function resetForm()
  {
    $this->reset(['name', 'email', 'phone', 'address', 'country', 'dealer_id']);
    $this->resetValidation();
  }

  public function delete_confirm($id)
  {
    $this->dealer_id = $id;
    $this->dispatch('open-delete-modal');
  }

  public function delete()
  {
    Dealer::find($this->dealer_id)->delete();
    session()->flash('message', 'Dealer berhasil di-delete!');
    $this->reset(['dealer_id']);
    $this->dispatch('close-delete-modal');
  }

  public function render()
  {
    $dealers = Dealer::latest();

    if ($this->keyword != null) {
      $dealers = $dealers->where('name', 'like', '%' . $this->keyword . '%')
        ->orWhere('email', 'like', '%' . $this->keyword . '%')
        ->orWhere('phone', 'like', '%' . $this->keyword . '%')
        ->orWhere('address', 'like', '%' . $this->keyword . '%')
        ->orWhere('country', 'like', '%' . $this->keyword . '%');
    }

    return view('livewire.dealers', ['dealers' => $dealers->paginate(10)]);
  }
}
