<?php
namespace App;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class Math extends Model
{
    protected $table = 'maths';
    protected $primaryKey = 'math_id';
    protected $fillable = ['params'];

    public function add(){
        return collect($this->params)
            ->map(function ($item, $key) {return floatval($item);})
            ->sum();
    }

    public function sub() {
        $sub_arr = collect($this->params)->map(function($item, $key){return floatval($item);});
        $sub_val = $sub_arr[0];
        for ($i = 1 ; $i < count($sub_arr) ; $i++) {
            $sub_val -= $sub_arr[$i];
        }
        return $sub_val;
    }

    public function mul(){
          $mul_arr = collect($this->params)->map(function($item, $key){return floatval($item);});
          $ans = 1;
          foreach ($mul_arr as $key => $value) {
              $ans *= $value;
          }
          return $ans;
      }
    public function div() {
        $div_arr = collect($this->params)->map(function($item, $key){return floatval($item);});
        $total = $div_arr[0];
        for ($i = 1 ; $i < count($div_arr) ; $i++) {
            $total /= $div_arr[$i];
        }
        return $total;
    }

}
