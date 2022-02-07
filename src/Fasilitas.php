<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class Fasilitas extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_fasilitas';

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
    protected $fillable = [
        'kd_fasilitas',
        'nm_fasilitas',
        'satuan_fasilitas',
        'status_fasilitas',
        'ketergantungan',
    ];

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
    protected $casts = [];
}
