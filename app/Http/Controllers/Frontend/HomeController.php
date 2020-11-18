<?php

namespace App\Http\Controllers\Frontend;

use App\Curriculum;
use App\Feel;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Product;
use App\StudentCurriculum;
use App\StudentCurriculumLessonStatus;
use Auth;
use Illuminate\Http\Request;
use Response;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::where('state', 1)->with(['Category', 'Images']);
        if (request('keyword') !== '') {
            $products = $products->where('name', 'like', "%" . request('keyword') . "%");
        }
        if (request('category') > 0) {
            $products = $products->where('category_id', request('category'));
        }
        if (request('min')) {
            $products = $products->where('price', '>=', request('min') * 1000000);
        }
        if (request('max')) {
            $products = $products->where('price', '<=', request('max') * 1000000);
        }
        $products = $products->paginate(6);

        return view('frontend.homepage.homepage', compact('products'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data                   = new StudentCurriculum;
        $data->stdcode          = Auth::guard('student')->user()->stdcode;
        $data->curriculum_id    = $request->curri_id;
        $data->curriculums_name = Curriculum::find($request->curri_id)->name;
        $data->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
//        $data = Curriculum::find(substr(strrchr($id,'-'),1));
//        $lessondata=Lesson::where([['curriculum_id',substr(strrchr($id,'-'),1)],['parent_id',0]])->get();
//        if(Auth::guard('student')->check()){
//
//            $course = StudentCurriculum::where([['stdcode',Auth::guard('student')->user()->stdcode],['curriculum_id',substr(strrchr($id,'-'),1)]])->get();
//            $passtotal = StudentCurriculumLessonStatus::where([['student_curriculum_id',$course[0]->id],['pass',1]])->get();
//            $lessontotal = StudentCurriculumLessonStatus::where([['student_curriculum_id',$course[0]->id]])->get();
//            if (count($course) == 0) {
//                $registed = 0;
//            }else{
//                $registed = 1;
//            }
//            return view('frontend/detail',compact('data','lessondata','passtotal','lessontotal','registed'));
//        }
//        return view('frontend/detail',compact('data','lessondata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
