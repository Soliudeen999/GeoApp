@extends('layouts.app')

@section('custom_styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
                {{ __('Send Money') }}
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row mt-3">
                <div class="col-md-4 col-xl-4 ">

                    <div class="card mt-5">
                      <div class="card-body text-center">
                        <div class="mb-3">
                          <span class="avatar avatar-xl avatar-rounded">AA</span>
                        </div>
                        <div class="card-title mb-1">{{ auth()->user()->name }}</div>
                        <div class="text-muted">{{ auth()->user()->email }}</div>
                      </div>
                      <a href="{{ route('profile.show') }}" class="card-btn">View full profile</a>
                    </div>

                    <div class="card my-3">
                      <div class="card-body text-center">
                        <div class="mb-3">
                          <span class="avatar avatar-xl avatar-box">
                              <!-- Download SVG icon from http://tabler-icons.io/i/wallet -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" /><path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" /></svg>
                          </span>
                        </div>
                        <div class="card-title mb-1">
                            <span style="font-size: 30px;"># 5,023</span>
                        </div>
                        <div class="text-muted">Balance</div>
                      </div>
                    </div>

                </div>

                <div class="col-md-8 col-xl-8">
                    <div class="row">
                        <div class="col-md-8 col-xl-8 offset-2">
                          <div class="text-center">
                            <h1>Send Money</h1>
                            <p>Send your money on anytime, anywhere in the world.</p>
                          </div>
                            <div class="card card-sm">
                              <div class="card-header">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <span class="bg-blue text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path d="M12 3v3m0 12v3"></path></svg>
                                    </span>
                                  </div>
                                  <div class="col">
                                    <div class="font-weight-medium">
                                      Enter the Details
                                    </div>
                                  </div>
                                </div>  
                              </div>
                              <div class="card-body">
                                <form>
                                  <div class="input-icon mb-3">
                                    <span class="input-icon-addon">
                                      <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Amount" id="amount">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label required">Account Number</label>
                                    <input type="text" class="form-control" name="example-required-input" placeholder="Required..." id="number">
                                  </div>

                                  <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                      <option selected="">Open this select bank</option>
                                      <option value="1">GeoApp Bank</option>
                                      <option value="1">Union Bank</option>
                                      <option value="2">Guarantee Trust Bank</option>
                                      <option value="3">First Bank</option>
                                      <option value="3">Zenith Bank</option>
                                      <option value="3">United Bank of Africa</option>
                                    </select>
                                    <label for="floatingSelect">Bank Name</label>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">Narration <span class="form-label-description">0/10</span></label>
                                    <textarea class="form-control" name="example-textarea-input" rows="3" placeholder="Content.."></textarea>
                                  </div>

                                  <div class="my-3">
                                    <button type="button"  class="btn btn-success btn-pill w-100" onclick="sendNow()">
                                      Send
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        function sendNow(){

            if($('#amount').val() == '' || $('#number').val() == ''){
              Swal.fire({
                   title: 'PLease fill all fields',
                   toast: true,
                   timer: 9000,
                   position: 'top',
                   icon: 'error',
                   showConfirmButton: false,
                   showClass: {
                     popup: 'animate__animated animate__fadeInDown'
                   },
                   hideClass: {
                     popup: 'animate__animated animate__fadeOutUp'
                   }
              })
              return
            }

            let timerInterval
            Swal.fire({
              title: 'Sending',
              html: 'Money on the way!',
              timer: 2000,
              timerProgressBar: true,
              didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                  b.textContent = Swal.getTimerLeft()
                }, 100)
              },
              willClose: () => {
                clearInterval(timerInterval)
              }
            }).then((result) => {
              /* Read more about handling dismissals below */
              if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
                Swal.fire({
                     title: 'Money Sent Successfully',
                     toast: true,
                     timer: 9000,
                     position: 'center',
                     icon: 'success',
                     showConfirmButton: false,
                     showClass: {
                       popup: 'animate__animated animate__fadeInDown'
                     },
                     hideClass: {
                       popup: 'animate__animated animate__fadeOutUp'
                     }
                })
              }
            })
            // Swal.fire({
            //      title: 'Money Sent Successfully',
            //      toast: true,
            //      timer: 9000,
            //      position: 'center',
            //      icon: 'success',
            //      showConfirmButton: false,
            //      showClass: {
            //        popup: 'animate__animated animate__fadeInDown'
            //      },
            //      hideClass: {
            //        popup: 'animate__animated animate__fadeOutUp'
            //      }
            // })

            setTimeout(reloader, 10000)
        }

        function reloader() {
            location.reload();
        }
    </script>

@endsection
