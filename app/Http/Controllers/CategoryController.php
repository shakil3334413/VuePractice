<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return response()->json(['category' => $category],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        //
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
            "name" => "required",
        ]);

        $account = new Category();
        $account->name = $request->name;
        $account->slug = Str::slug($request->name,'-');
        if($account->save()){
            return response()->json([
                'success' => true,
                'leave' => $account
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        $category=Category::findOrfail($category);
        if($category){
            return response()->json([
                'success' =>true,
                'category'=>$category
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $category=Category::findOrfail($category);
        if($category){
            return response()->json([
                'success' =>true,
                'category'=>$category
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$category)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $department =Category::findOrfail($category);
        $department->name = $request->name;
        if($department->save()){
            return response()->json([
                'success' => true,
                'category' => $department
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category=Category::findOrfail($category);
        if($category->delete()){
            return response()->json([
                'success' =>true,
                'category'=>$category
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
}
