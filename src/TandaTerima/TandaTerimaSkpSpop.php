<?php

namespace Wawans\SismiopDatabase\TandaTerima;

use Wawans\SismiopDatabase\Model;

class TandaTerimaSkpSpop extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ttr_skp_spop';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [];

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
