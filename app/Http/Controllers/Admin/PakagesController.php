<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pakage;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PakagesController extends Controller
{
    public function index()
    {
        $pakages = Pakage::orderby('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/pakage_index', compact('pakages'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = View::make('adminpanel/pages/pakages_create');
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function store(Request $request)
    {
        if(Auth::guard('admin')->check()){
            $inputs = $request->all();
            if($request->hasfile('image'))
            {
                $image = $request->image;
                $name=time() . '_'. $request->title . '.'. $image->getClientOriginalExtension();
                $image->move(public_path().'/storage/images/pakage/', $name);
                $inputs['image'] = $name;
            }
            else{
                $inputs['image'] = 'news_profile.png';
            }

            $inputs['created_by'] = $inputs['updated_by'] = Auth::id();

            $pakage = Pakage::create($inputs);
            // Notification::send(Auth::guard('admin')->user(), new NewNewsNotification("NEWS Created"));
            return redirect()->route('admin.pakages.index');
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function edit($id)
    {
        $pakage = Pakage::find($id);

        $view = View::make('adminpanel/pages/pakage_edit', compact('pakage'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function update(Request $request, $id)
    {
        $pakage = Pakage::find($id);

        $inputs = $request->all();
        if($request->hasfile('image'))
        {
            $image = $request->image;
            $name=time() . '_'. $request->name . '.'. $image->getClientOriginalExtension();
            $image->move(public_path().'/storage/images/pakage/', $name);
            $inputs['image'] = $name;
        }

        $inputs['updated_by'] = Auth::id();
        $pakage->update($inputs);
        return redirect()->route('admin.pakages.index');
    }
}
