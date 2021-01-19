<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
  public function store(Request $request)
  {
      $data = $request->toArray();

      Offer::create($data);

      return redirect()->route('pages.home')->with(['messageSuccess' => '']);
  }
}
