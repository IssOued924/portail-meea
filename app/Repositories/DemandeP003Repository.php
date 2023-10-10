<?php

namespace App\Repositories;
use App\Models\DemandeP003;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP003Repository.
 */
class DemandeP003Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP003::class;
    }
}
