<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;
use App\Mail\OrderUpdated;

class Order extends Model
{
  protected $fillable = [
    'recipient_name',
    'line1',
     'line2',
     'city',
     'country_code',
     'state',
     'postal_code',
     'email',
     'shopping_cart_id',
     'status',
     'total',
     'guide_number'
  ];

  public function sendMail($value='')
  {
      Mail::to("zaraterick@outlook.com")->send(new OrderCreated($this));
  }

  public function sendUpdateMail()
  {
      Mail::to("zaraterick@outlook.com")->send(new OrderUpdated($this));
  }

  public function shoppingCartID()
  {
      return $this->shopping_cart->customid;
  }

  public function shopping_cart()
  {
      return $this->belongsTo('App\ShoppingCart');
  }

  public static function createFormPayPalResponse($response, $shopping_cart)
  {
    $payer = $response->payer;

    $orderData = (array) $payer->payer_info->shipping_address;

    $orderData = $orderData[key($orderData)];

    $orderData["email"] = $payer->payer_info->email;
    $orderData["total"] = $shopping_cart->total();
    $orderData["shopping_cart_id"] = $shopping_cart->id;

    return Order::create($orderData);

  }

  public function address()
  {
    return "$this->line1 $this->line2";
  }

  public function scopeLatest($query)
  {
    return $query->OrderID()->monthly();
  }

  public function scopeOrderID($query)
  {
    return $query->orderBy('id','desc');
  }

  public function scopeMonthly($query)
  {
    return $query->whereMonth('created_at','=',date('m'));
  }

  public static function totalMonth()
  {
    return Order::monthly()->sum('total') / 100;
  }

  public static function totalMonthCount()
  {
    return Order::monthly()->count();
  }
}
