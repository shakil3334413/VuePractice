<?php

namespace App\Http\Controllers;

use App\Model\SubCategory;
use Illuminate\Http\Request;
use App\Model\Category;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = SubCategory::with('category')->get();
        return response()->json(['subcategory'=>$students], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return response()->json(['category' => $category],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "category_id" => "required",
            "name" => "required",
        ]);

        $student = new SubCategory();
        $student->name = $request->name;
        $student->category_id = $request->category_id;
        $student->save();

        return response()->json([
          "message" => "student record created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show($subCategory)
    {
        if (SubCategory::where('id', $subCategory)->exists()) {
            $student = SubCategory::where('id', $subCategory)->get();
            return response(['subcategory' => $student], 200);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($subCategory)
    {
        if (SubCategory::where('id', $subCategory)->exists()) {
            $student = SubCategory::where('id', $subCategory)->get()->toJson(JSON_PRETTY_PRINT);
            return response($student, 200);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$subCategory)

    {
        $request->validate([
            "category_id" => "required",
            "name" => "required",
        ]);

        if (SubCategory::where('id', $subCategory)->exists()) {
            $student = SubCategory::find($subCategory);

            $student->name = is_null($request->name) ? $student->name : $request->name;
            $student->category_id = is_null($request->category_id) ? $student->category_id : $request->category_id;
            $student->save();

            return response()->json([
              "message" => "records updated successfully"
            ], 200);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($subCategory)
    {
        if(SubCategory::where('id', $subCategory)->exists()) {
            $student = SubCategory::find($subCategory);
            $student->delete();

            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }

    }
}
