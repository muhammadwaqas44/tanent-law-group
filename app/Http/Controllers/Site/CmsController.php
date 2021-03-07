<?php

namespace App\Http\Controllers\Site;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CmsController extends Controller
{
    //

    public function home()
    {
        return view('site.static-page.home.home');
    }

    public function aboutUs()
    {
        return view('site.static-page.about-us.about-us');
    }

    public function contactUs()
    {
        return view('site.static-page.contact-us.contact-us');
    }

    public function buyNow()
    {
        return view('site.static-page.buy-now.buy-now');
    }

    public function disclaimer()
    {
        return view('site.static-page.disclaimer.disclaimer');
    }

    public function faq()
    {
        return view('site.static-page.faq.faq');
    }

    public function freeVideo()
    {
        return view('site.static-page.video.video');
    }

    public function landingPage1()
    {
        return view('site.static-page.landing-page.landing-page1');
    }

    public function landingPage2()
    {
        return view('site.static-page.landing-page.landing-page2');
    }

    public function needMoreHelp()
    {
        return view('site.static-page.need-more-help.need-help');
    }

    public function termsOfUse()
    {
        return view('site.static-page.terms-of-use.terms-of-use');
    }

    public function blogTitle(Request $request)
    {
        $blogs = Blog::orderBy('id','asc');
        if ($request->search) {
            $title = $request->search;
            $blogs = $blogs->where('title', 'like', '%' . $title . '%')->get();
        }
        else{
            $blogs = $blogs->get();
        }

        return view('site.static-page.blog.blog', compact('blogs'));
    }

    public function blogView($blogId)
    {
        $blog = Blog::find($blogId);

        return view('site.static-page.blog.blog-view', compact('blog'));
    }

}
