@extends('layouts.backend')

@section('content')

    @if(Session::has('success_message'))
     <div class="alert alert-success d-flex justify-content-between alert-dismissible fade show" role="alert">
            <div>
                <i class=" fas fa-fw fa-check" aria-hidden="true"></i>
                {!! session('success_message') !!}
            </div>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif

    <div class="card">

        <div class="card-header d-flex align-items-center justify-content-between">

            <h5  class="my-1 float-left">Customer Querys</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('customer_querys.customer_querys.create') }}" class="btn btn-success" title="Create New Customer Querys">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Customer Querys
                </a>
            </div>

        </div>

        @if(count($customerQuerysObjects) == 0)
            <div class="card-body text-center">
                <h4>No Customer Querys Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm" class="display compact" id="myTable">
                    <thead>
                        <tr>
                                <th>Name</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Is Read</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($customerQuerysObjects as $customerQuerys)
                        <tr>
                                <td>{{ $customerQuerys->name }}</td>
                            <td>{{ $customerQuerys->subject }}</td>
                            <td>{{ $customerQuerys->email }}</td>
                            <td>{{ ($customerQuerys->is_read) ? 'Yes' : 'No' }}</td>

                            <td>

                                <form method="POST" action="{!! route('customer_querys.customer_querys.destroy', $customerQuerys->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right " role="group">
                                        <a href="{{ route('customer_querys.customer_querys.show', $customerQuerys->id ) }}"title="Show Customer Querys">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('customer_querys.customer_querys.edit', $customerQuerys->id ) }}" class="mx-4" title="Edit Customer Querys">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"  title="Delete Customer Querys" onclick="return confirm(&quot;Click Ok to delete Customer Querys.&quot;)">
                                            <i class=" fas  fa-trash text-danger" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="card-footer">
            {!! $customerQuerysObjects->render() !!}
        </div>

        @endif

    </div>
@endsection

@section('scripts')

     <script>
         $(document).ready(function () {
             $('table').DataTable({
                 responsive: true,
                 "order": [],
                 dom: 'lBfrtip',
                 buttons: [
                     'copy', 'excel', 'pdf', 'print'
                 ]

             });

             });
     </script>

     <style>
         .dataTables_filter {
             float: right;
         }
        i:hover { color: #0248fa !important; }

     </style>


@endsection


