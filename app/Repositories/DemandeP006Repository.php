<?php

namespace App\Repositories;
use App\Models\DemandeP006;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP006Repository.
 */
class DemandeP006Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP006::class;
    }
}
