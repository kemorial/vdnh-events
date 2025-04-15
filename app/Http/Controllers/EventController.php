<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Enums\EventType;

class EventController extends Controller
{
    public function index(Request $request)
    {
        if ($request['filter'] === 'Y') {
            $events = Event::query();
            $categories = [];
            if ($request->has('type')) {
                foreach ($request->type as $type) {
                    $categories[] = EventType::fromValue($type)->id();
                }
                $events->whereIn('category_id', $categories);
            }

            if ($request->has('schedule')) {
                switch ($request->schedule) {
                    case "today":
                        $events->whereDate('end_date', '>=', Carbon::today())
                               ->whereDate('start_date', '<=', Carbon::today());
                        break;

                    case "tomorrow":
                        $events->whereDate('end_date', '>=', Carbon::tomorrow())
                               ->whereDate('start_date', '<=', Carbon::tomorrow());
                        break;

                    case "after_tomorrow":
                        $events->whereDate('end_date', '>=', Carbon::tomorrow()->addDay())
                               ->whereDate('start_date', '<=', Carbon::tomorrow()->addDay());
                        break;



                    default:
                        if (isset($request->schedule['from']) && isset($request->schedule['to'])) {
                            $events->whereDate('end_date', '>=',Carbon::createFromFormat('d.m.Y', $request->schedule['from'])->format('Y-m-d') )
                                   ->whereDate('start_date', '<=', Carbon::createFromFormat('d.m.Y', $request->schedule['to'])->format('Y-m-d'));
                        }
                        break;
                }
            }

            return response($events->orderBy('start_date', 'desc')->paginate(10));
        } else {
            return response()->json(Event::orderBy('start_date', 'desc')->paginate(10));
        }
    }
}
