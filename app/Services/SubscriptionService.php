<?php

namespace App\Services;


use App\Repositories\BankRepository;
use App\Repositories\SubscriptionRepository;

class SubscriptionService
{

    protected $subscriptionRepository;
    protected $bankRepository;

    public function __construct(SubscriptionRepository $subscriptionRepository, BankRepository $bankRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
        $this->bankRepository = $bankRepository;
    }

    public function getBanks(array $request)
    {
        if (isset($request['q'])) {
            $search = $request['q'];
        }

        $banks = $this->bankRepository->findBy($search ?? null);

        $banks->each(function ($item, $key) {
            return $item['text'] = $item['nome'];
        });

        return [
            'results' => $banks
        ];
    }

    public function getBank(int $id)
    {
        return $this->bankRepository->findById($id);
    }
}
