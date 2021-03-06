<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Pegawai;

/**
 * Wawans\SismiopDatabase\Dat\DatLogin
 *
 * @property string $NM_LOGIN
 * @property string $NIP
 * @property string $PASSWORD
 * @property StrPad $nip
 * @property-read Pegawai $pegawai
 * @method static \Illuminate\Database\Eloquent\Builder|DatLogin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatLogin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatLogin query()
 * @mixin \Eloquent
 */
class DatLogin extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'nip';

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
        'nip',
        'nm_login',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = ['password'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'nip' => StrPad::class . ':9',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, $this->primaryKey, $this->primaryKey);
    }
}
