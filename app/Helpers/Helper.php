<?php

namespace App\Helpers;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Helper{

    public static function getHomepageLoans($id){
        $value = DB::table('con_medicine')->where('id', $id)->get();
		return $value;
    }

    public static function get_category_title($id=null){
        $data = DB::table('category')->where('id', $id)->first();
		return $data->title;
    }

    public static function get_category($id=null){
        $data = DB::table('category')->where('parent_id', $id)->orderBy('priority', 'ASC')->get();
		return $data;
    }

    public static function get_limited_category($limit=null){
        $data = DB::table('category')->where('status', 1)->where('parent_id', '>', 0)
            ->where('footer', '!=', NULL)->limit($limit)->orderBy('footer')->get();
        return $data;
    }

    public static function get_post_Cat_name($id=null){
        $data = DB::table('tb_categories')->where('cid', $id)->first();
        return $data->name;
    }


    public static function get_gallery_type($id=null){
        $data = DB::table('gallery_type')->where('id', $id)->first();
        return $data->title;
    }

    public static function shorten_text($string=null, $limit=null){
        $data = Str::limit($string, $limit);
        return $data;
    }

}
