<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DmitryIvanov\DarkSkyApi\DarkSkyApi;
use Illuminate\Support\Facades\Http;
use App\Models\Alarm;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $data = Http::get('https://api.openweathermap.org/data/2.5/weather?q=lagos&units=imperial&appid=ab85ba57bbbb423fb62bfb8201126ede')->object();

        return view('home', ['data' => $data]);
    }

    public static function main(Request $request, string $city = null)
    {
        $city = $request->get('city', $city);

        $location = Http::get('https://api.openweathermap.org/geo/1.0/direct', [
            'appid' => '8516dbc0b619c1a5b25dc01f1ce492b1',
            'q' => $city,
            'limit' => 1
        ])->json()[0] ?? null;

        $alarm = [];
        if ($location != null) {
            $response = Http::get('https://api.openweathermap.org/data/2.5/onecall', [
                'appid' => '8516dbc0b619c1a5b25dc01f1ce492b1',
                'lat' => $location['lat'],
                'lon' => $location['lon'],
                'units' => 'metric',
            ]);


            $alarm = Alarm::where('user_id',auth()->user()->id)->where('country', $location['country'])->where('city', $location)->where('date', Carbon::now()->format('Y-m-d')
                                )->get();
        }

        // dd($alarm);

        $data = Http::get('https://api.openweathermap.org/data/2.5/weather?q=lagos&units=imperial&appid=ab85ba57bbbb423fb62bfb8201126ede')->object();
        $alarmer = Alarm::where('user_id', auth()->user()->id)->get();
        // dd($response->object());
        return view('home')
            ->with('location', !is_null($location) ? $location : $city)
            ->with('result', !is_null($location) ? true : false)
            ->with('weather', !is_null($location) ? $response->json() : null)
            ->with('data', $data)
            ->with('alarmer', $alarmer)
            ->with('alarms', $alarm);
    }
}
