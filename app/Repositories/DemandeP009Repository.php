<?php

namespace App\Repositories;
use App\Models\DemandeP009;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP009Repository.
 */
class DemandeP009Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP009::class;
    }
}
