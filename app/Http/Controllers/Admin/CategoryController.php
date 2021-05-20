<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

//class CategoryController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return Response
//     */
//    public function index()
//    {
//        $categories = Category::simplePaginate(15);
//        return view('admin.categories.index',compact('categories'));
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return Response
//     */
//    public function create()
//    {
//        return view('admin.categories.create');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param Request $request
//     * @return Response
//     */
//    public function store(Request $request)
//    {
//        $request->validate([
//           'title' => 'required',
//        ]);
//        Category::create($request->all());
////        $request->session()->flash('success','Категория добавлено');
//        return redirect()->route('categories.index')->with('success','Категория добавлено');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function edit($id)
//    {
//        $category = Category::find($id);
//        return view('admin.categories.edit',compact('category'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param Request $request
//     * @param  int  $id
//     * @return Response
//     */
//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'title' => 'required',
//        ]);
//        $category = Category::find($id);
////        $category->slug = null;
//        $category->update($request->all());
//        return redirect()->route('categories.index')->with('success','Категория обновлена');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return Response
//     */
//    public function destroy($id)
//    {
////        $category = Category::find($id);
////        $category->delete();
//        Category::destroy($id);
//        return redirect()->route('categories.index')->with('success','Категория удалена');
//    }
//}
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        Category::create($request->all());
//        $request->session()->flash('success', 'Категория добавлена');
        return redirect()->route('categories.index')->with('success', 'Категория добавлена');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $category = Category::find($id);
//        $category->slug = null;
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->posts->count()) {
            return redirect()->route('categories.index')->with('error', 'Ошибка! У категории есть записи');
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Категория удалена');
    }
}
