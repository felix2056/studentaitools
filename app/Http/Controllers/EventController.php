<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $topEvents = Event::where('is_active', true)->orderBy('views', 'desc')->paginate(16);
        $latestEvents = Event::where('is_active', true)->latest()->paginate(16);
        $localEvents = Event::where('is_active', true)->where('type', 'local')->latest()->paginate(16);
        $onlineEvents = Event::where('is_active', true)->where('type', 'online')->latest()->paginate(16);
        
        return view('events.index', compact('topEvents', 'latestEvents', 'localEvents', 'onlineEvents'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $event->increment('views');
        return view('events.show', compact('event'));
    }

    public function search($query)
    {
        if (!$query) return redirect()->route('events.index');

        $events = Event::where('name', 'like', "%$query%")->orWhere('content', 'like', "%$query%")->paginate(16);
        return view('events.search', compact('events', 'query'));
    }

    public function interested(Request $request, $id)
    {
        $event = Event::find($id);
        if (!$event) {
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Event not found.',
                ], 404);
            }

            return abort(404);
        }

        $user = User::find(auth()->id());

        if ($user->events()->where('event_id', $event->id)->exists()) {
            $user->events()->detach($event->id);

            if ($request->ajax()) {
                return response()->json([
                    'status' => 'unregistered',
                    'message' => 'You have unregistered from this event.',
                ]);
            }

            return redirect()->back()->with('success', 'You have unregistered from this event.');
        }

        // attach event to user and set status to interested
        $user->events()->attach($event->id, ['status' => 'interested']);

        if ($request->ajax()) {
            return response()->json([
                'status' => 'registered',
                'message' => 'You have registered for this event.',
            ]);
        }

        return redirect()->back()->with('success', 'You have registered for this event.');
    }
}
