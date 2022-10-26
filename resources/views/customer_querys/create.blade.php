@extends('layouts.backend')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Customer Querys</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('customer_querys.customer_querys.index') }}" class="btn btn-primary" title="Show All Customer Querys">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Customer Querys
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('customer_querys.customer_querys.store') }}" accept-charset="UTF-8" id="create_customer_querys_form" name="create_customer_querys_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('customer_querys.form', [
                                        'customerQuerys' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


