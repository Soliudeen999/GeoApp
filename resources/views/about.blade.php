@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
                {{ __('Money Transfer Page') }}
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card mb-5">
                <div class="card-body">
                    <p class="card-text">
                        {{ __('Your Money Transactions made easy ') }}
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 col-xl-4 ">

                    <div class="card ">
                      <div class="card-body text-center">
                        <div class="mb-3">
                          <span class="avatar avatar-xl avatar-rounded">AA</span>
                        </div>
                        <div class="card-title mb-1">{{ auth()->user()->name }}</div>
                        <div class="text-muted">{{ auth()->user()->email }}</div>
                      </div>
                      <a href="#" class="card-btn">View full profile</a>
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
                        <div class="col-md-4 col-xl-4">
                            <div class="card card-sm">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <span class="bg-blue text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path d="M12 3v3m0 12v3"></path></svg>
                                    </span>
                                  </div>
                                  <div class="col">
                                    <div class="font-weight-medium">
                                      Request
                                    </div>
                                    <div class="text-muted">
                                      Request money from friends and family
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        <div class="col-md-4 col-xl-4">
                            <a href="{{ route('send.money') }}">
                            <div class="card card-sm">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <span class="bg-red-lt avatar"><!-- Download SVG icon from http://tabler-icons.io/i/arrow-up -->
                                      <!-- Download SVG icon from http://tabler-icons.io/i/send -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                                    </span>
                                  </div>
                                  <div class="col">
                                    <div class="font-weight-medium">
                                      Send Money
                                      <span class="float-right font-weight-medium text-red">(free)</span>
                                    </div>
                                    <div class="text-muted">
                                      Send Funds to Friends and Family
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-xl-4">
                            <div class="card card-sm">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <span class="bg-green-lt avatar"><!-- Download SVG icon from http://tabler-icons.io/i/arrow-down -->
                                      <!-- Download SVG icon from http://tabler-icons.io/i/cash -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="7" y="9" width="14" height="10" rx="2" /><circle cx="14" cy="14" r="2" /><path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" /></svg>
                                    </span>
                                  </div>
                                  <div class="col">
                                    <div class="font-weight-medium">
                                      Deposit
                                      <span class="float-right font-weight-medium text-green">(free)</span>
                                    </div>
                                    <div class="text-muted">
                                        29813849475
                                      <span class="float-right font-weight-medium text-green">GeoApp Bank</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-4">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Transactions</h3>
                              </div>
                              <div class="card-body border-bottom py-3">
                                <div class="d-flex">
                                  <div class="text-muted">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                      <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                                    </div>
                                    entries
                                  </div>
                                  <div class="ms-auto text-muted">
                                    Search:
                                    <div class="ms-2 d-inline-block">
                                      <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                  <thead>
                                    <tr>
                                      <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                                      <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="6 15 12 9 18 15"></polyline></svg>
                                      </th>
                                      <th>Naration</th>
                                      <th>Bank</th>
                                      <th>Acct No.</th>
                                      <th>Created</th>
                                      <th>Status</th>
                                      <th>Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                      <td><span class="text-muted">001401</span></td>
                                      <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                                      <td>
                                        <span class="flag flag-country-us"></span>
                                        UBA
                                      </td>
                                      <td>
                                        8795662163
                                      </td>
                                      <td>
                                        15 Dec 2017
                                      </td>
                                      <td>
                                        <span class="badge bg-success me-1"></span> Paid
                                      </td>
                                      <td>87,010</td>
                                      
                                    </tr>
                                    <tr>
                                      <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                      <td><span class="text-muted">001402</span></td>
                                      <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                                      <td>
                                        <span class="flag flag-country-gb"></span>
                                        GTBank
                                      </td>
                                      <td>
                                        8795642134
                                      </td>
                                      <td>
                                        12 Apr 2017
                                      </td>
                                      <td>
                                        <span class="badge bg-warning me-1"></span> Pending
                                      </td>
                                      <td>1,200</td>
                                    </tr>
                                    <tr>
                                      <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                      <td><span class="text-muted">001406</span></td>
                                      <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                                      <td>
                                        <span class="flag flag-country-br"></span>
                                        Union
                                      </td>
                                      <td>
                                        8795662123
                                      </td>
                                      <td>
                                        4 Feb 2018
                                      </td>
                                      <td>
                                        <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                                      </td>
                                      <td>42,300</td>
                                      
                                    </tr>
                                    <tr>
                                      <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                      <td><span class="text-muted">001407</span></td>
                                      <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo &amp; Print</a></td>
                                      <td>
                                        <span class="flag flag-country-us"></span>
                                        First Bank
                                      </td>
                                      <td>
                                        8795662123
                                      </td>
                                      <td>
                                        22 Mar 2018
                                      </td>
                                      <td>
                                        <span class="badge bg-success me-1"></span> Paid Today
                                      </td>
                                      <td>5,200</td>
                                      
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="card-footer d-flex align-items-center">
                                <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                                <ul class="pagination m-0 ms-auto">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                      <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="15 6 9 12 15 18"></polyline></svg>
                                      prev
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">
                                      next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
