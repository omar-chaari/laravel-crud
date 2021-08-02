<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'produits';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'code', 'reference', 'description', 'delais_jour', 'garantie_mois', 'serv_ap_vnt', 'prix', 'nom', 'qte', 'index_prod', 'fodec', 'tva', 'created_at', 'updated_at', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
}
