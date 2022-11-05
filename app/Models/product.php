<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model {

    protected $table = 'sanphams';
    public $timestamps = false;
    public function category(){
        return $this->belongsTo(category::class, 'category_id' ,'id');
       }
       public function brand(){
        return $this->belongsTo(brand::class, 'brand_id' ,'id');
       }
    
    
}

?>