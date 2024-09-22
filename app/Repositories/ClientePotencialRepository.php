<?php

namespace App\Repositories;

use App\Models\ClientePotencial;
use App\Repositories\BaseRepository;

class ClientePotencialRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'email',
        'telefono',
        'negociacion'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ClientePotencial::class;
    }
}
