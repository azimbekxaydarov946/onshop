@extends('layouts.base-admin')
@section('content')
{{--
@php
    dd(  $orderMonth );
@endphp --}}
    <!--Grid row-->
   <div class="row">

          <!--Grid column-->
          <div class="col-xl-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card card-cascade cascading-admin-card">

              <!--Card Data-->
              <div class="admin-up">
                <i class="far fa-money-bill-alt primary-color"></i>
                <div class="data">
                  <p>Total amount</p>
                  <h4 class="font-weight-bold dark-grey-text">{{$order}}$</h4>
                </div>
              </div>
              <!--/.Card Data-->

              <!--Card content-->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--Text-->
                <p class="card-text"> (100%)</p>
              </div>
              <!--/.Card content-->

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card card-cascade cascading-admin-card">

              <!--Card Data-->
              <div class="admin-up">
                <i class="fas fa-chart-line warning-color"></i>
                <div class="data">
                  <p>Products</p>
                  <h4 class="font-weight-bold dark-grey-text">{{$product}}</h4>
                </div>
              </div>
              <!--/.Card Data-->

              <!--Card content-->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar red accent-2" role="progressbar" style="width: 100%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--Text-->
                <p class="card-text">100%</p>
              </div>
              <!--/.Card content-->

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card card-cascade cascading-admin-card">

              <!--Card Data-->
              <div class="admin-up">
                <i class="fas fa-user light-blue lighten-1"></i>
                <div class="data">
                  <p>Users</p>
                  <h4 class="font-weight-bold dark-grey-text">{{$user}}</h4>
                </div>
              </div>
              <!--/.Card Data-->

              <!--Card content-->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar red accent-2" role="progressbar" style="width: 100%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--Text-->
                <p class="card-text">100%</p>
              </div>
              <!--/.Card content-->

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card card-cascade cascading-admin-card">

              <!--Card Data-->
              <div class="admin-up">
                <i class="fas fa-chart-bar red accent-2"></i>
                <div class="data">
                  <p>Orders</p>
                  <h4 class="font-weight-bold dark-grey-text">{{$ordercount}}</h4>
                </div>
              </div>
              <!--/.Card Data-->

              <!--Card content-->
              <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--Text-->
                <p class="card-text">100%</p>
              </div>
              <!--/.Card content-->

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
    <!--Grid row-->

    <!--Grid column-->
    <div class="col-xl-12 col-md-6 mb-2">

        <!--Card-->
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table large-header mb-1">
                        <thead>
                            <tr>
                                <th class="font-weight-bold dark-grey-text"><strong>Month</strong></th>
                                <th class="font-weight-bold dark-grey-text"><strong>Order</strong></th>
                                <th class="font-weight-bold dark-grey-text"><strong>Salar</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderMonth as $item)

                            <tr>
                                <td>{{$month[$item->month][0] }}</td>
                                <td>{{$item->count}}</td>
                                <td>{{$item->sum}}$</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!--/.Card-->


    </div>
    <!--Grid column-->
@endsection
