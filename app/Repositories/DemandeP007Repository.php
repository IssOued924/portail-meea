<?php

namespace App\Repositories;
use App\Models\DemandeP007;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP007Repository.
 */
class DemandeP007Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP007::class;
    }
}
