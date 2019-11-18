<?php

namespace App\Services;


use App\Repositories\BankRepository;
use App\Repositories\ExameRepository;
use App\Repositories\SubscriptionRepository;

class SubscriptionService
{

    protected $subscriptionRepository;
    protected $bankRepository;
    protected $exameRepository;

    public function __construct(
        SubscriptionRepository $subscriptionRepository,
        BankRepository $bankRepository,
        ExameRepository $exameRepository
    )
    {
        $this->subscriptionRepository = $subscriptionRepository;
        $this->bankRepository = $bankRepository;
        $this->exameRepository = $exameRepository;
    }

    public function index()
    {
        return view('welcome')->with([
            'exame' => $this->exameRepository->activeForm()
        ]);
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
