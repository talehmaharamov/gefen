<?php

use App\Models\Paylasim;
use App\Models\SiteLanguage;
use Illuminate\Support\Optional;
use App\Models\Category;
use App\Models\Setting;
use Spatie\Activitylog\Models\Activity;

if (!function_exists('upload')) {
    function upload($path, $file)
    {
        try {
            $img = $file;
            $extension = $img->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $img->move('images/' . $path, $filename);
            $data['photo'] = 'images/' . $path . '/' . $filename;
            return $data['photo'];
        } catch (Exception $e) {
            return redirect()->back();
        }
    }
}

if (!function_exists('active_langs')) {
    function active_langs()
    {
        return SiteLanguage::where('status', 1)->get();
    }
}

if (!function_exists('optional')) {
    function optional($value = null, callable $callback = null)
    {
        if (is_null($callback)) {
            return new Optional($value);
        } elseif (!is_null($value)) {
            return $callback($value);
        }
    }
}
if (!function_exists('subjectid')) {
    function subjectid(Activity $model)
    {
        return $model;
    }
}

if (!function_exists('settings')) {
    function settings($name)
    {
        return Setting::where('name', $name)->value('link');
    }
}

if (!function_exists('category')) {
    function category($id)
    {
        return \App\Models\Category::where('id', $id)->get();
    }
}

if (!function_exists('check_category')) {
    function check_category($id)
    {
        return Paylasim::where('status', '=', 1)
            ->where('admin_status', '=', 1)
            ->where('category_id','=',$id)
            ->get();
    }
}



if (!function_exists('convert_number')) {
    function convert_number($value)
    {
        if ($value >= 1000 and $value < 1000000) {
            return round($value / 1000,0) . 'k';
        }
        if ($value >= 1000000) {
            return round($value / 1000000,0) . 'M';
        } else {
            return $value;
        }
    }
}
