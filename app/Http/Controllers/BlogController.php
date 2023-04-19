<?php

namespace App\Http\Controllers;

use App\Http\Traits\media;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Image;
use \Yajra\Datatables\Datatables;

class BlogController extends Controller
{
    use media;
    public function store(Request $request)
    {
        try{
            $request->validate([
                'title' => 'required',
                'title_ar' => 'required',
                'title_fr' => 'required',
                'article' => 'required',
                'article_fr' => 'required',
                'article_ar' => 'required',
                'image' => 'required|max:1024',
            ], [
                'title.required' => 'العنوان مطلوب ',
                'title_ar.required' => 'العنوان مطلوب ',
                'title_fr.required' => 'العنوان مطلوب ',
                'article_ar.required' => ' المقال مطلوب  ',
                'article_fr.required' => ' المقال مطلوب  ',
                'article.required' => ' المقال مطلوب  ',
                'image.required' => ' صورة المقال مطلوبه  ',
            ]);
            if ($request->hasFile('image')) {
                $filename = $this->uploadMedia($request->file('image'), 'images/blogs/', 700, 600);
            }
    
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->title_ar = $request->title_ar;
            $blog->title_fr = $request->title_fr;
            $blog->article = $request->article;
            $blog->article_ar = $request->article_ar;
            $blog->article_fr = $request->article_fr;
            $blog->image =  $filename;
            $blog->save();
            return response()->json(['err' => false, 'msg' => 'تم اضافة مقال'], 200);
        }catch (\Exception  $e) {
            return response()->json(['err' => true, 'msg' => $e->getMessage()], 200);
        }
        
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('blogs.edit', $row->id);
                    $actionBtn = '<a href="' . $edit . '" class="edit m-1 btn btn-success btn-sm">Edit</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.blogs.create');
    }

    public function edit($id)
    {

        $blog =  Blog::find($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request)
    {
        $blog =  Blog::find($request->id);
        if ($request->hasFile('image')) {
            $blog->image  = $this->uploadMedia($request->file('image'), 'images/blogs/', 700, 600);
        }
        $blog->title = $request->title;
        $blog->title_ar = $request->title_ar;
        $blog->title_fr = $request->title_fr;
        $blog->article = $request->article;
        $blog->article_ar = $request->article_ar;
        $blog->article_fr = $request->article_fr;
        $blog->save();
        return response()->json(['err' => false, 'msg' => '  تم تعديل المقال بنجاح '], 200);
    }
    public function delete(Request $request)
    {
        $b = Blog::find($request->id);
        $b->delete();
        return response()->json(['err' => false, 'msg' => ' تم مسح المقاله '], 200);
    }

    public function oneBlog($id)
    {
        $blog =  Blog::find($id);
        return view('blogs.oneblog', compact('blog'));
    }
    public function allarticle()
    {
        $articles = Blog::paginate(2);

        return view('articles.fullarticle', compact('articles'));
    }

    public function OneArticle($id)
    {

        $comments = Comment::all();
        $article = Blog::find($id);
        return view('articles.oneArticle', compact('article', 'comments'));
    }
}
