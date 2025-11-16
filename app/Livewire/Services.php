<?php

namespace App\Livewire;


use App\Models\Dealer;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
{
  use WithPagination;

  public $name;
  public $email;
  public $phone;
  public $address;
  public $country;
  public $message;
  public $model;
  public $dealer_id;
  public $keyword;

  public function updatingKeyword()
  {
    $this->resetPage();
  }

  public function resetForm()
  {
    $this->reset(['name', 'email', 'phone', 'address', 'country', 'dealer_id']);
    $this->resetValidation();
  }

  public $dealer;

  public function mount($id = null)
  {
    $this->dealer = Dealer::find($id); // Single object, bukan collection
  }

  protected $rules = [
    'name' => 'required',
    'email' => 'required|email',
    'phone' => 'required',
    'address' => 'required',
    'country' => 'required',
    'message' => 'required|min:5',
    'model' => 'required',
  ];


  public function openContact($id)
  {
    $this->dealer_id = $id;
    $this->dispatch('open-contact-modal');
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

    return view('livewire.services-user', [
      'dealers' => $dealers,
    ]);
  }
}
