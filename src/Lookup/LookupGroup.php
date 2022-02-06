<?php

namespace Wawans\SismiopDatabase\Lookup;

use Wawans\SismiopDatabase\Model;

class LookupGroup extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'kd_lookup_group';

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

    public function lookupItem()
    {
        return $this->hasMany(LookupGroup::class, 'kd_lookup_group', 'kd_lookup_group');
    }
}
