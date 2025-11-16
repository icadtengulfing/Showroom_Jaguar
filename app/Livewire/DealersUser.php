<?php

namespace App\Livewire;


use App\Models\Dealer;
use Livewire\Component;
use Livewire\WithPagination;

class DealersUser extends Component
{
  use WithPagination;

  public $name;
  public $email;
  public $phone;
  public $address;
  public $country;
  public $dealer_id;
  public $keyword;

  protected $paginationTheme = 'bootstrap';

  protected $rules = [
    'name' => 'required|min:3',
    'email' => 'required|email|unique:dealers,email',
    'phone' => 'required',
    'address' => 'required',
    'country' => 'required',
  ];

  public function store()
  {
    $validated = $this->validate();

    Dealer::create($validated);

    $this->resetForm();
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

    $this->dispatch('open-default-modal');
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

    $this->resetForm();
    session()->flash('message', 'Dealer berhasil diupdate!');
    $this->dispatch('close-default-modal');
  }

  public function delete_confirm($id)
  {
    $this->dealer_id = $id;
    $this->dispatch('open-delete-modal');
  }

  public function delete()
  {
    Dealer::find($this->dealer_id)->delete();
    session()->flash('message', 'Dealer berhasil dihapus!');
    $this->reset(['dealer_id']);
    $this->dispatch('close-delete-modal');
  }

  public function resetForm()
  {
    $this->reset(['name', 'email', 'phone', 'address', 'country', 'dealer_id']);
    $this->resetValidation();
  }

  public function updatingKeyword()
  {
    $this->resetPage();
  }

  public $dealer;

  public function mount($id = null)
  {
    $this->dealer = Dealer::find($id);
  }

  public function render()
  {
    $dealers = Dealer::query()
      ->when($this->keyword, function ($query) {
        $query->where('name', 'like', '%' . $this->keyword . '%')
          ->orWhere('email', 'like', '%' . $this->keyword . '%')
          ->orWhere('phone', 'like', '%' . $this->keyword . '%')
          ->orWhere('address', 'like', '%' . $this->keyword . '%')
          ->orWhere('country', 'like', '%' . $this->keyword . '%');
      })
      ->latest()
      ->paginate(6); // biar grid-nya rapih, kelipatan 3

    return view('livewire.dealers-user', [
      'dealers' => $dealers,
    ]);
  }
}
