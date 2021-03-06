<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

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
    protected $fillable = ['id', 'adresse', 'raison_social', 'code_tva', 'email', 'list_tel', 'type', 'data_fact', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
}
