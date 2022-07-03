<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Casts\StrFn;
use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

class Wewenang extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_wewenang';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['kd_wewenang', 'nm_wewenang'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'kd_wewenang' => StrPad::class . ':2',
        'nm_wewenang' => StrFn::class . ':strtoupper',
    ];

    public function getNamaAttribute()
    {
        return $this->nm_wewenang;
    }
}
