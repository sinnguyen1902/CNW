<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cus_cart extends Model {

    protected $table = 'cus_cart';
    public $timestamps = false;
    public function customer(){
        return $this->belongsTo(customer::class, 'customer_id' ,'id');
       }
    public function product(){
        return $this->belongsTo(product::class, 'product_id' ,'id');
       }
    
    
}

?>