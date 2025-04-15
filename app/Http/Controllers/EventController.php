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
            $categories = [];  // Инициализируем пустой массив
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
                        // Если schedule приходит как объект с from и to:
                        if (isset($request->schedule['from']) && isset($request->schedule['to'])) {
                            $events->whereDate('end_date', '>=', $request->schedule['from'])
                                   ->whereDate('start_date', '<=', $request->schedule['to']);
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
