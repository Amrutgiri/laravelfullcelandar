<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Celander;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class CelanderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::all();
        $event=[];
        
        foreach($events as $row)
        {
            $enddate=$row->end."24:00:00";
            $event[]=\Calendar::event(
                $row->title,
                false,
                new \DateTime($row->start),
                new \DateTime($row->end),
                $row->id,
                [
                    'color'=>$row->color,
                ]
            );
        }
        $celander=\Calendar::addEvents($event);
        return view('calendar',compact('events','celander'));

        
       
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
    public function display()
    {
        return view('addevent');
    }
   
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'color'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
        ]);

        $events=new Event;
        $events->title=$request->input('title');
        $events->color=$request->input('color');
        $events->start=$request->input('start_date');
        $events->end=$request->input('end_date');
        $events->save();

        return redirect('event')->with('success','Event Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events=Event::all();
        return view('view',compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events=Event::find($id);
        return view('edit',compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function xyzzxy(Request $request,$id)
    {
        
        $this->validate($request,[
            'title'=>'required',
            'color'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
        ]);
         $events=Event::find($id);

        $events->title=$request->input('title');
        $events->color=$request->input('color');
        $events->start=$request->input('start_date');
        $events->end=$request->input('end_date');
        $events->update();

        return redirect('event')->with('success','Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $events=Event::find($id);
        $events->delete();
        return redirect('/editevent')->with('success','Event Deleted');
    }
}
