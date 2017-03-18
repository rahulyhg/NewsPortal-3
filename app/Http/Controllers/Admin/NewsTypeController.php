<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Category;
use App\Entities\NewsType;
use Illuminate\Http\Request;

class NewsTypeController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsTypes = NewsType::all();
        $this->data['newsTypes'] = $newsTypes;
        return view('admin.news-type.index')->with($this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NewsType::create([

        ]);
        $this->data['message-success'] = 'Successfully added.';
        return redirect()->route('admin.news-type.create')->with($this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsType = NewsType::find($id);
        $categories = Category::all();
        $this->data['newsType'] = $newsType;
        $this->data['categories'] = $categories;
        return view('admin.news-type.edit')->with($this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newsType = NewsType::find($id);
        $this->data['message-success'] = 'Successfully edited.';
        return redirect()->route('admin.news-type.edit', ['news_type' => $newsType])->with($this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsType = NewsType::find($id);
        NewsType::destroy($id);
        $this->data['message-success'] = 'Successfully deleted "' . $newsType->name . '".';
        return redirect()->route('admin.news-type.index')->with($this->data);
    }
}
