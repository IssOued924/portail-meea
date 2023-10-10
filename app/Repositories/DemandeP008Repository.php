<?php

namespace App\Repositories;
use App\Models\DemandeP008;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP008Repository.
 */
class DemandeP008Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP008::class;
    }
}
