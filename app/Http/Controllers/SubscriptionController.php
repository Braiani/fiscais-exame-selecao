<?php

namespace App\Http\Controllers;

use App\Services\SubscriptionService;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    protected $subscriptionService;

    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
    }

    public function index()
    {
        return $this->subscriptionService->index();
    }

    public function banks(Request $request)
    {
        return $this->subscriptionService->getBanks($request->all());
    }

    public function getBank($id)
    {
        return $this->subscriptionService->getBank($id);
    }
}
