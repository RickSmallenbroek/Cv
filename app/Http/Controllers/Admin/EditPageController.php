<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditPageController extends Controller
{
    public function showEditAbout()
    {
        $about = About::all();
        return view('admin/editpages/about')->with(compact('about'));
    }

    /**
     * Sets all the info that is displayed on the about page
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Rick Smallenbroek <rick.smallenbroek@nugtr.nl>
     */
    public function editAboutPage(Request $request)
    {
        $this->personContent($request);
        $this->personLinks($request);
        return back();
    }

    /**
     * Set / edit content of person
     * Get called by editAboutPage
     * @param $request
     * @author Rick Smallenbroek <rick.smallenbroek@nugtr.nl>
     */
    private function personContent($request)
    {
        if ($request->get('personName')){
            About::where('for' , 'personName')->update([
                'content' => $request->personName,
            ]);
        }
        if ($request->get('personMail')){
            About::where('for' , 'personMail')->update([
                'content' => $request->personMail,
            ]);
        }
        if ($request->get('personAbout')){
            About::where('for' , 'personAbout')->update([
                'content' => $request->personAbout,
            ]);
        }
    }

    /**
     * Set Links of person
     * Get called by editAboutPage
     * @param $request
     * @author Rick Smallenbroek <rick.smallenbroek@nugtr.nl>
     */
    private function personLinks($request)
    {
        if ($request->get('personGithub')){
            About::where('for' , 'personGithub')->update([
                'content' => $request->personGithub,
            ]);
        }
        if ($request->get('personStack')){
            About::where('for' , 'personStack')->update([
                'content' => $request->personStack,
            ]);
        }
        if ($request->get('personFacebook')){
            About::where('for' , 'personFacebook')->update([
                'content' => $request->personFacebook,
            ]);
        }
    }
    public function editExperiencePage()
    {

    }

    public function editEducationPage()
    {

    }

    public function editSkillsPage()
    {

    }

    public function editInterestsPage()
    {

    }

    public function editAwardsPage()
    {

    }


}
