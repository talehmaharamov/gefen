<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Director;
use App\Models\Forigner;
use App\Models\MetaTag;
use App\Models\Paylasim;
use App\Models\Slider;
use App\Models\View;
use http\Env;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $counts = [
            'newsViews' => convert_number(Paylasim::where('category_id', Category::where('slug', 'news')->value('id'))->get()->sum('view_count')),
            'allViews' => convert_number(Paylasim::where('category_id', '!=', Category::where('slug', 'news')->value('id'))->get()->sum('view_count')),
            'generalViews' => convert_number(Paylasim::all()->sum('view_count')),
            'forigners' => convert_number(Forigner::count()),
            'news' => convert_number(Paylasim::where('category_id', Category::where('slug', 'news')->value('id'))->count()),
            'contactUs' => convert_number(Contact::count()),
            'posts' => convert_number(Paylasim::where('category_id', '!=', Category::where('slug', 'news')->value('id'))->count()),
            'directors' => convert_number(Director::count()),
            'sliderCount' => convert_number(Slider::count()),
            'tagCount' => convert_number(MetaTag::count()),
            'sharedPostCount' => convert_number(Paylasim::where('user_id', Auth::user()->id)->count()),
        ];
        return view('backend.dashboard', get_defined_vars());
    }
}
