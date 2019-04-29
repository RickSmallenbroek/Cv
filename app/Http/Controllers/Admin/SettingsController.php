<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * Shows the index of settings
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Rick Smallenbroek <rick.smallenbroek@nugtr.nl>
     */
    public function index()
    {
        $about = About::all();
        return view('admin/settings')->with(compact('about'));
    }

    public function editActiveLinks(Request $request)
    {
        About::where('for', $request->get('for'))->first()->update([
            'active' => $request->get('active') === 'true' ? 1 : 0,
        ]);

        return back();
    }

    public function changeProfileImage(Request $request)
    {
        if(!file_exists('images/avatar')){
            mkdir('images/avatar', 0777, true);
        }
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $request->file('image')->storeAs('public/images/avatar', 'avatar.jpg', 'local');
            return back()->with('success', 'Image Upload successfully');
        } else {
            return back();
        }
    }
}
