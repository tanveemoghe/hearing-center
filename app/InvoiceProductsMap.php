<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceProductsMap extends Model
{
    protected $table = 'invoice_products_map';
    
    public function invoices() {
        return $this->belongsTo('App\Invoice', 'invoice_id');
    }
    
    public function products() {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
