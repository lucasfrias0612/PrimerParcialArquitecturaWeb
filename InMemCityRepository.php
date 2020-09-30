<?php
declare(strict_types=1);

class InMemCityRepository
{
    private $records;
    const FILE_PATH = __DIR__.'/cities.json';

    public function __construct()
    {
        $this->records = [];
        $this->records['moreno']=['ciudad'=>'moreno','temperatura'=>24.55,'hora de medición'=>
            date('Y-m-d h:i:s', time() + (7 * 24 * 32 * 60))];
        $this->records['josecpaz']=['ciudad'=>'josecpaz','temperatura'=>2.21,'hora de medición'=>
            date('Y-m-d h:i:s', time() + (5 * 24 * 56 * 23))];
    }

    public function findAll(): array
    {
        return array_values($this->records);
    }

    public function findOfId(string $id)
    {
        if (!isset($this->records[$id])) {
            return null;
        }
        return $this->records[$id];
    }
}