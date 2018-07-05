<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\Member;
use Twilio;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::all();
        return view('notifications.index')->with('notifications', $notifications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $notification = new Notification();
        $notification->title = $request->input('title');
        $notification->description = $request->input('description');
        $notification->save();
        $message = "[OBAVIJEST] \n\n" . $request->input('title') . "\n" . $request->input('description');
        foreach (Member::all() as $member)
        {
            Twilio::message($member->tel, $message);
        }




        return redirect('/notifications')->with('success', 'Obavijest kreirana');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notification = Notification::find($id);
        return view('notifications.edit')->with('notification', $notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $notification = Notification::find($id);
        $notification->title = $request->input('title');
        $notification->description = $request->input('description');
        $notification->save();
        $message = "[OBAVIJEST] \n\n" . $request->input('title') . "\n" . $request->input('description');
        foreach (Member::all() as $member)
        {
            Twilio::message($member->tel, $message);
        }
        return redirect('/notifications')->with('success', 'Obavijest ažurirana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = Notification::find($id);
        $notification->delete();
        return redirect('/notifications')->with('success', 'Obavijest obrisana');
    }
}
