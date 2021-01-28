<?php

namespace App\Http\Controllers\Front;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends BaseController
{
  public function store(Request $request)
  {
      $data = $request->toArray();

      Offer::create($data);

      return redirect()->route('pages.home')->with(['messageSuccess' => '']);
  }
}
