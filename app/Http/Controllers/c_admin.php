<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
use App\Models\gallery;
use App\Models\content;
use App\Models\advert;
use App\Models\blog;

class c_admin extends Controller
{
    //
    public function index()
    {
        return view('contentAdmin.dashboard');
    }

    public function advert()
    {
        $advert = advert::all();
        return view('contentAdmin.advert', compact('advert'));
    }

    public function addAdvert(Request $req)
    {
        $validated = $req->validate([
            'image' => 'required',
            'description' => 'nullable'
        ]);

        $name = $req->image->getClientOriginalName();
        $path = $req->image->move('storage/images/', $name);

        $advert = new advert();
        $advert->image = $name;
        $advert->description = $req->description;
        $advert->save();
        return redirect('/c_adverts')->with('status', 'successful uploaded');
    }

    public function deleteAdvert($id)
    {
        $image = advert::findOrFail($id);
        $image->delete();
        return redirect('/c_adverts')->with('status', 'successful deleted');
    }

    // pages

    public function pages()
    {
        $pages = page::orderBy('page', 'ASC')->get();
        return view('contentAdmin.pages', compact('pages'));
    }
    public function addpages(Request $req)
    {
        $page = new page();
        $page->page = $req->page;
        $page->save();
        return redirect('/c_pages')->with('status', 'successful added');
    }
    public function dpages($id)
    {
        $page = page::findOrFail($id);
        $page->delete();
        return redirect('/c_pages')->with('status', 'successful deleted');
    }
    // public function editpages($id)
    // {
    //     $page = page::find($id);
    //     return view('contentAdmin.editpage');
    // }

    // gallery
    public function gallery()
    {
        $images = gallery::all();
        return view('contentAdmin.gallery', compact('images'));
    }
    public function pgallery(Request $req)
    {
        $validated = $req->validate([
            'image' => 'required',
            'description' => 'nullable'
        ]);

        $name = $req->image->getClientOriginalName();
        $path = $req->image->move('storage/images/', $name);

        $gallery = new gallery();
        $gallery->image = $name;
        $gallery->description = $req->description;
        $gallery->save();
        return redirect('/c_gallery')->with('status', 'successful uploaded');
    }

    public function editgallery($id)
    {
        $image = gallery::findOrFail($id);
        $image->delete();
        return redirect('/c_gallery')->with('status', 'successful deleted');
    }


    public function content()
    {
        $pages = page::orderBy('page', 'ASC')->get();
        $contents = content::orderBy('page', 'ASC')->get();
        return view('contentAdmin.content', compact('pages', 'contents'));
    }
    public function storeContent(Request $req)
    {
        $content = new content();

        $content->page = $req->page;
        $content->section = $req->section;
        $content->title = $req->title;
        $content->content = $req->content;
        if ($req->file('image') == true) {
            $content->image = $req->image->getClientOriginalName();
            $name = $req->image->getClientOriginalName();
            $path = $req->image->move('storage/images/', $name);
        }
        $content->save();
        return redirect('/c_web_content')->with('status', 'successful published');
    }

    public function editContent($id)
    {
        $content = content::findOrFail($id);
        $pages = page::orderBy('page', 'ASC')->get();
        return view('contentAdmin.editcontent', compact('content', 'pages'));
    }

    public function deleteContent($id)
    {
        $content = content::findOrFail($id);
        $content->delete();
        return redirect('/c_web_content')->with('status', 'successful deleted');
    }
    public function updateContent(Request $req)
    {
        $content          = content::findOrFail($req->id);
        $content->page    = $req->page;
        $content->section = $req->section;
        $content->title   = $req->title;
        $content->content = $req->content;
        if ($req->file('image') == true) {
            $content->image   = $req->image->getClientOriginalName();
            $name = $req->image->getClientOriginalName();
            $path = $req->image->move('storage/images/', $name);
        }

        $content->save();
        return redirect('/c_web_content')->with('status', 'successful edited');
    }

    public function blogs()
    {
        $blogs = blog::orderBy('id', 'DESC')->get();
        return view('contentAdmin.blog', compact('blogs'));
    }
    public function addBlog(Request $req)
    {

        $blog = new blog();
        $blog->title = $req->title;
        $blog->introduction = $req->content;
        $blog->heading1 = $req->heading1;
        $blog->content1 = $req->content1;
        $blog->heading2 = $req->heading2;
        $blog->content2 = $req->content2;
        $blog->heading3 = $req->heading3;
        $blog->content3 = $req->content3;

        if ($req->file('image') == true) {
            $blog->image   = $req->image->getClientOriginalName();
            $name = $req->image->getClientOriginalName();
            $path = $req->image->move('storage/images/', $name);
        }
        $blog->save();
        return redirect('/c_blogs')->with('status', 'successful published');
    }

    public function editBlog($id)
    {
        $blog = blog::findOrFail($id);
        return view('contentAdmin.editblog', compact('blog'));
    }

    public function updateBlog(Request $req)
    {
        $blog = blog::findOrFail($req->id);
        $blog->title = $req->title;
        $blog->introduction = $req->content;
        $blog->heading1 = $req->heading1;
        $blog->content1 = $req->content1;
        $blog->heading2 = $req->heading2;
        $blog->content2 = $req->content2;
        $blog->heading3 = $req->heading3;
        $blog->content3 = $req->content3;

        if ($req->file('image') == true) {
            $blog->image   = $req->image->getClientOriginalName();
            $name = $req->image->getClientOriginalName();
            $path = $req->image->move('storage/images/', $name);
        }
        $blog->save();
        return redirect('/c_blogs')->with('status', 'successful updated');
    }

    public function deleteBlog($id)
    {
        $blog = blog::findOrFail($id);
        $blog->delete();
        return redirect('/c_blogs')->with('status', 'successful deleted');
    }
    public function addAdmin()
    {
        return view('contentAdmin.addAdmin');
    }
}
