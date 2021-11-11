<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;
use View;
use Auth;


class FaqsController extends Controller
{
    public function index()
    {
        $faqsList = Faqs::orderby('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/faqs_index', compact('faqsList'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function create()
    {
        $view = View::make('adminpanel/pages/faqs_create');
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function store(Request $request)
    {
        if(Auth::guard('admin')->check()){
            $inputs = $request->all();
            $inputs['created_by'] = $inputs['updated_by'] = Auth::id();
            $faqs = Faqs::create($inputs);
            return redirect()->route('admin.faqs.index');
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function destroy($id)
    {
        $faqs = Faqs::find($id);
        if($faqs)
        {
            $faqs->delete();
            return response()->json([
                'Status' => "Success",
                "Message" => "Deleted Successfully!"
            ]);
        }
        else{
            return response()->json([
                'Status' => "Fail",
                "Message" => "Faqs Not Found!"
            ]);
        }
    }

    public function edit($id)
    {
        $faqs = Faqs::find($id);

        $view = View::make('adminpanel/pages/faqs_edit', compact('faqs'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function update(Request $request, $id)
    {
        $faqs = Faqs::find($id);

        $inputs = $request->all();

        $inputs['updated_by'] = Auth::id();

        $faqs->update($inputs);
        return redirect()->route('admin.faqs.index');
    }
}
