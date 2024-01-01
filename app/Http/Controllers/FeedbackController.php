<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = Feedback::all();

        return view('admin.feedback.index', compact('feedback'));
    }

    public function create(){
        return view('admin.feedback.create');
    }

    public function store(FeedbackRequest $request){
        $data = $request->validated();
        Feedback::create($data);
        return redirect()->back()->with('message','Feedback sent successfully!');
    }

    public function show(){
        return view('admin.feedback.index');
    }
    public function destroy(Feedback $item){
        $item->delete();
        return redirect('admin/Feedback')->with('success','Deleted successfully!');
    }
}
