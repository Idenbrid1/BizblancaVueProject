<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::orderby('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/package_index', compact('packages'));
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
        $view = View::make('adminpanel/pages/packages_create');
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
                $image->move(public_path().'/storage/images/package/', $name);
                $inputs['image'] = $name;
            }
            else{
                $inputs['image'] = 'news_profile.png';
            }

            $inputs['created_by'] = $inputs['updated_by'] = Auth::id();

            $package = Package::create($inputs);
            // Notification::send(Auth::guard('admin')->user(), new NewNewsNotification("NEWS Created"));
            return redirect()->route('admin.packages.index');
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function edit($id)
    {
        $package = Package::find($id);

        $view = View::make('adminpanel/pages/package_edit', compact('package'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function update(Request $request, $id)
    {
        $package = Package::find($id);

        $inputs = $request->all();
        if($request->hasfile('image'))
        {
            $image = $request->image;
            $name=time() . '_'. $request->name . '.'. $image->getClientOriginalExtension();
            $image->move(public_path().'/storage/images/package/', $name);
            $inputs['image'] = $name;
        }

        $inputs['updated_by'] = Auth::id();
        $package->update($inputs);
        return redirect()->route('admin.packages.index');
    }
}
