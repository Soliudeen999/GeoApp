@extends('layouts.app')

@section('custom_styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="page-body">
        <div class="container-xl">
            
            <div class="alert alert-success">
                <div class="alert-title">
                    {{ __('Welcome') }} {{ auth()->user()->name ?? null }}
                </div>
                <div class="text-muted">
                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="row row-cards">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                      
                      <div class="card-body">
                        <table class="table" width="">
                            <tr>
                                <th colspan="5">Scheduled Alarms</th>
                            </tr>
                            <tr>
                                <th>Day</th>
                                <th>Location</th>
                                <th>Type</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                            @forelse($alarmer as $alarm)
                            <tr>
                                <td>{{ date('M d', strtotime($alarm->date)) }}</td>
                                <td>{{ $alarm->city }}, {{ realCountry($alarm->country) }}</td>
                                <td>{{ $alarm->type }}</td>
                                <td>{{ $alarm->time }}</td>
                                <td>
                                    @if($alarm->status)
                                        <button class="btn btn-success"></button>
                                    @else
                                        <button class="btn btn-warning"></button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="5" class="">No Alarm(s) yet</td>
                                </tr>
                            @endforelse
                        </table>
                      </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-8">
                    <div class="card">
                      <div class="row row-0">
                        <div class="col-3">
                          <img src="{{ asset('img/weather.jpeg') }}" class="w-100 h-100 object-cover" alt="Card side image">
                        </div>
                        <div class="col">
                          <div class="card-body">
                            <h3 class="card-title">Hi, Welcome to weather channel.</h3>
                            <p>From here you can find the weather for any city of your coice</p>

                            <div class="row">
                                <form class="form-vertical" ction="{{ route('channel') }}" method="get">
                                    <div class="form-group">
                                        <label class="form-label" id="city">
                                            City
                                        </label>
                                        <input type="text" name="city" class="form-control" placeholder="Enter City Name">
                                    </div>

                                    <div class="form-group mt-3">
                                        <input type="submit" name="Get Info" class="btn btn-success">
                                        <input type="reset" name="Clear" class="btn btn-default">
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- {{ Route::currentRouteName() }} --}}
                    @if(Route::currentRouteName() == 'home')
                    @if($result)
                    <div class="card">
                        <div class="card-body">
                        <div class="my-3" style="display: flex; justify-content: space-between; align-items: center;">
                            <h2>
                                {{ $location['name'] }}, {{ realCountry($location['country']) }}
                            </h2>
                            <div>
                                <table class="table" width="30%">
                                    <tr>
                                        <th colspan="2">Current Alarm</th>
                                    </tr>
                                    {{-- {{ dd($alarm) }} --}}
                                    @forelse($alarms as $alarm)
                                    <tr>
                                        <td>{{ $alarm->type }}</td>
                                        {{-- <td>{{ $alar->time }}</td> --}}
                                    </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="2" class="">No Alarm(s) yet</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                        <h3>{{ $weather['current']['weather'][0]['main'] }}<span class="ml-3">    |   Wind {{ $weather['current']['wind_speed'] }}km/h</span>
                        </h3>
                        <span class="text-success " style="font-size: 40px; font-style: bold;">{{ round($weather['current']['temp']) }}°</span>
                        <p class="text-success ml-5" style="font-size: 20px; font-style: bold;">Sunrise: {{ date('h:i:a', ($weather['current']['sunrise']) + $weather['timezone_offset']) }} | Sunset: {{ date('h:i:a', ($weather['current']['sunset']) + $weather['timezone_offset']) }}
                            <button class="btn btn-xs btn-default float-right" @if($alarms->count() < 1) onclick="createAlarm()" @endif id="alarm_button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /><path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" /><path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" /></svg>
                             @if($alarms->count() > 0) Alarm Created  @endif
                            </button>
                        </p>


                        <div class="sky text-center">
                            <img src="https://openweathermap.org/img/wn/{{ $weather['current']['weather'][0]['icon'] }}@2x.png"
                                 alt="{{ $weather['current']['weather'][0]['description'] }}">
                        </div>
                        <table class="table table-responsive">
                            <tr>
                                @foreach(range(0, count($weather['daily']) - 1) as $i)
                                    <td style="vertical-align: baseline;">{{ now()->addDays($i)->format('D') }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($weather['daily'] as $day)
                                    <td>{{ round($day['temp']['max']) }}°</td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach($weather['daily'] as $day)
                                    <td>{{ round($day['temp']['min']) }}°</td>
                                @endforeach
                            </tr>
                        </table>
                        <a href="{{ route('home') }}" style="display:block; text-align: center; padding: 10px; border-radius: 5px; width: 20%; margin: 30px auto; color: white; background-color: #1a202c; text-decoration: none;">
                            Back
                        </a>
                        </div>
                    </div>
                    @else
                        <div class="alert alert-danger">
                            You entered a wrong city name "{{ $location }}". Please Try Again
                        </div>
                    @endif
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection

@section('custom_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        function createAlarm(){
            var CSRF_TOKEN = "{{ csrf_token() }}";

            $.ajax({
               url: '/create-alarm',
               type: 'POST',
               data: {
                    _token: CSRF_TOKEN, 
                    'country' : "{{ $location['country'] ?? null }}", 
                    'city' : "{{ $location['name'] ?? null }}", 
                    'sunrise' : "{{ date('h:i:a', ($weather['current']['sunrise'] ?? 0) + ($weather['timezone_offset'] ?? 0)) }} ", 
                    'sunset': "{{ date('h:i:a', ($weather['current']['sunset'] ?? 0) + ($weather['timezone_offset'] ?? 0)) }}"
                },
               dataType: 'JSON',
               success: function (resp) { 
                    console.log(resp)
                    // document.getElementById("alarm_button").innerHtml = "Alarm Created";
                    Swal.fire({
                         title: 'Alarm has been created successfully',
                         toast: true,
                         timer: 3000,
                         position: 'bottom',
                         icon: 'success',
                         showConfirmButton: false,
                         showClass: {
                           popup: 'animate__animated animate__fadeInDown'
                         },
                         hideClass: {
                           popup: 'animate__animated animate__fadeOutUp'
                         }
                    })

                    setTimeout(reloader, 2000)
                }
            });
        }

        function reloader() {
            location.reload();
        }
    </script>

@endsection