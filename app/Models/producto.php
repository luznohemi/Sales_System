<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
   
        protected $fillable = ['descripcion','slug','precio','cantidad'];
        public function getRouteKeyName(){
        return 'slug';
         }
        
       //  public function productos(){
       //  return $this->hasMany(productos::class);
      //tiene muchos
        // }
        public function venta()
        {
            return $this->hasMany('app\models\venta');
        }
    
    
}
