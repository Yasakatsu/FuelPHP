<?php

// 名前空間を使用
namespace Model;
// 
class Welcome extends \Model
{
  public static function get_results()
  {
    return 'DBレコードが返ってきております（※サンプル表記）';
  }
}
