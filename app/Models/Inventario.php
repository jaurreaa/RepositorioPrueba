<?php

namespace Prueba\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $cantidad
 * @property string $lote
 * @property string $fecha_vence
 * @property string $precio
 * @property string $created_at
 * @property string $updated_at
 */
class Inventario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inventario';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'cantidad', 'lote', 'fecha_vence', 'precio', 'created_at', 'updated_at'];

}
