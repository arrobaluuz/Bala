<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $codigo
 * @property string $familia
 * @property string $personas
 * @property string $mesa
 * @property string $Active
 */
class mesasModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mesas';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = ['codigo', 'familia', 'personas', 'mesa', 'Active'];

}
