<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $fillable = ['slug','Cliente','Celular','Cantidad','Total','id_p'];
    public function getRouteKeyName(){
    return 'slug';
     }
    
    public function productos(){
     return $this->belonsTo(producto::class , 'id');
      }
  //tiene muchos
    // }
   /*public function producto(){  
        return $this->belonsTo('app\models\producto');
   }*/

   /* public function cliente(){
        return $this->belonsTo('app\models\cliente');
    }*/
}
