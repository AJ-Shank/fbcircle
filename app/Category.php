<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    var $parent, $children;
  //   function __construct() {
  //           if(!empty($this->parent_id)) {
  //               $this->parent->with('App\Category');
  //           }
  //   }
  //   public static $rules = array(
  //       'name' => 'required',
  //   );
  //
  //   public function parent(){
  //     $parents= $this->belongsTo('App\Category', 'parent_id');
  //     if(isset($parents->kids)) {
  //       $parents->kids->merge($parents);
  //     }
  //     return $parents;
  //   }
  //   public function children() {
  //    $children = $this->hasMany('App\Category','parent_id');
  //    foreach($children as $child) {
  //      $child->parent  = $this;
  //    }
  //    return $children;
  // }
}
