<?php

namespace App\Entities\Cast;

use CodeIgniter\Entity\Cast\BaseCast;

class CastJenisKelas extends BaseCast
{
    public static function get($value, array $params = [])
    {
        $model = model('JeniskelasModel');
        return $model->find($value);
    }
}
