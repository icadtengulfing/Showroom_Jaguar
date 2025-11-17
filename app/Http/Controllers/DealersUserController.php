<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealersUserController extends Controller
{
  /**
   * Show list of dealers with search + pagination.
   * Query param: q
   */
  public function index(Request $request)
  {
    $q = $request->query('q', '');

    $dealers = Dealer::query()
      ->when($q, function ($query, $q) {
        $query->where('name', 'like', "%{$q}%")
          ->orWhere('email', 'like', "%{$q}%")
          ->orWhere('phone', 'like', "%{$q}%")
          ->orWhere('address', 'like', "%{$q}%")
          ->orWhere('country', 'like', "%{$q}%");
      })
      ->latest()
      ->paginate(6)        // ubah angka kalau mau jumlah per page lain
      ->withQueryString(); // supaya ?q=xxx tetap muncul di pagination links

    return view('users.dealers', [
      'dealers' => $dealers,
      'q'       => $q,
    ]);
  }
}
