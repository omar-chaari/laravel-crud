<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'factures';

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
    protected $fillable = ['id', 'numero', 'timbre', 'somme_lettre', 'footer_text', 'date', 'header_text', 'type_facture', 'list_prod', 'index_last_prod', 'recu_comptable', 'recu_client', 'user_id', 'client_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
    
}
