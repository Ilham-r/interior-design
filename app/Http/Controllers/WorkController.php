<?php

namespace App\Http\Controllers;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works=Work::orderBy('created_at','DESC')->paginate();
        return View('work.index')->with('works', $works);
    }
  public function show($title)
  {
    $work = Work::where('title',$title)->firstOrFail();

    return view('work.show')->with([
      'work'=>$work,
    ]);
  }
}
