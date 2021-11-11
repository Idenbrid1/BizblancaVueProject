<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Notifications\NewNewsNotification;
use View;
use Illuminate\Support\Facades\Auth;
use Notification;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::orderby('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/news_index', compact('newsList'));
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
        $view = View::make('adminpanel/pages/news_create');
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::guard('admin')->check()){
            $inputs = $request->all();
            if($request->hasfile('image'))
            {
                $image = $request->image;
                $name=time() . '_'. $request->name . '.'. $image->getClientOriginalExtension();
                $image->move(public_path().'/storage/images/news/', $name);
                $inputs['image'] = $name;
            }
            else{
                $inputs['image'] = 'news_profile.png';
            }

            $inputs['created_by'] = $inputs['updated_by'] = Auth::id();

            $news = News::create($inputs);
            Notification::send(Auth::guard('admin')->user(), new NewNewsNotification("NEWS Created"));
            return redirect()->route('admin.news.index');
        }else{
            return redirect()->route('admin.login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = news::find($id);

        $view = View::make('adminpanel/pages/news_edit', compact('news'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = news::find($id);

        $inputs = $request->all();
        if($request->hasfile('image'))
        {
            $image = $request->image;
            $name=time() . '_'. $request->name . '.'. $image->getClientOriginalExtension();
            $image->move(public_path().'/storage/images/news/', $name);
            $inputs['image'] = $name;
        }

        $inputs['updated_by'] = Auth::id();

        $news->update($inputs);
        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        if($news)
        {
            $news->delete();
            return response()->json([
                'Status' => "Success",
                "Message" => "Deleted Successfully!"
            ]);
        }
        else{
            return response()->json([
                'Status' => "Fail",
                "Message" => "News Not Found!"
            ]);
        }
    }
}
