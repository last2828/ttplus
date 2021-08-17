<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\OfferStoreRequest;
use App\Http\Requests\SubscriptionRequest;
use App\Models\Offer;
use App\Models\Subscription;
use Illuminate\Http\JsonResponse;

class OfferController extends BaseController
{
    /**
     * Create new offer in database
     *
     * @param OfferStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OfferStoreRequest $request)
    {
        $data = $request->toArray();
        Offer::create($data);

//        return redirect()->route('pages.home')->with(['success' => 'Ваша заявка успешно принята']);
        return response()->json('ok', JsonResponse::HTTP_OK);
    }

    /**
     * Create new subscribe in database
     *
     * @param SubscriptionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function subscription(SubscriptionRequest $request)
    {
        $data = $request->toArray();
        Subscription::create($data);

//        return redirect()->route('pages.home')->with(['success' => 'Ваша подписка успешно оформлена']);
        return response()->json('ok', JsonResponse::HTTP_OK);
    }
}
