<?php

namespace App\Repositories;
use App\Models\DemandeP004;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP004Repository.
 */
class DemandeP004Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP004::class;
    }
}
