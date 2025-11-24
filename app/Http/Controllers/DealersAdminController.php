<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealersAdminController extends Controller
{
  public function index(Request $request)
  {
    $q = $request->q;

    $dealers = Dealer::query()
      ->when($q, function ($query) use ($q) {
        $query->where('name', 'like', "%$q%")
          ->orWhere('email', 'like', "%$q%")
          ->orWhere('phone', 'like', "%$q%")
          ->orWhere('address', 'like', "%$q%")
          ->orWhere('country', 'like', "%$q%");
      })
      ->latest()
      ->paginate(5)
      ->withQueryString();

    return view('admin.dealers', [
      'dealers' => $dealers,
      'q' => $q
    ]);
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|min:3',
      'email' => 'required|email|unique:dealers,email',
      'phone' => 'required',
      'address' => 'required',
      'country' => 'required',
      'maps_link' => 'required',
    ]);

    Dealer::create($validated);

    return back()->with('message', 'Dealer berhasil dibuat!');
  }

  public function update(Request $request, $id)
  {
    $dealer = Dealer::findOrFail($id);

    $validated = $request->validate([
      'name'   => 'required|min:3',
      'email'  => 'required|email|unique:dealers,email,' . $dealer->id,
      'phone'  => 'required',
      'address' => 'required',
      'country' => 'required',
      'maps_link' => 'required',
    ]);

    $dealer->update($validated);

    return back()->with('message', 'Dealer berhasil diupdate!');
  }

  public function destroy($id)
  {
    Dealer::findOrFail($id)->delete();

    return back()->with('message', 'Dealer berhasil dihapus!');
  }
}
