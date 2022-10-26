@extends('layouts.backend')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($customerQuerys->name) ? $customerQuerys->name : 'Customer Querys' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('customer_querys.customer_querys.destroy', $customerQuerys->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('customer_querys.customer_querys.index') }}" class="btn btn-primary mr-2" title="Show All Customer Querys">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Customer Querys
                    </a>

                    <a href="{{ route('customer_querys.customer_querys.create') }}" class="btn btn-success mr-2" title="Create New Customer Querys">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Customer Querys
                    </a>

                    <a href="{{ route('customer_querys.customer_querys.edit', $customerQuerys->id ) }}" class="btn btn-primary mr-2" title="Edit Customer Querys">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Customer Querys
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Customer Querys" onclick="return confirm(&quot;Click Ok to delete Customer Querys.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Customer Querys
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $customerQuerys->name }}</dd>
            <dt>Subject</dt>
            <dd>{{ $customerQuerys->subject }}</dd>
            <dt>Email</dt>
            <dd>{{ $customerQuerys->email }}</dd>
            <dt>Message</dt>
            <dd>{{ $customerQuerys->message }}</dd>
            <dt>Is Read</dt>
            <dd>{{ ($customerQuerys->is_read) ? 'Yes' : 'No' }}</dd>

        </dl>

    </div>
</div>

@endsection
