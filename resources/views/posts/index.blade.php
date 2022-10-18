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

            <h5  class="my-1 float-left">Posts</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('posts.post.create') }}" class="btn btn-success" title="Create New Post">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Post
                </a>
            </div>

        </div>

        @if(count($posts) == 0)
            <div class="card-body text-center">
                <h4>No Posts Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                                <th>Author</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Body</th>
                            <th>Is Published</th>
                            <th>Category</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                                <td>{{ $post->author }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->body }}</td>
                            <td>{{ ($post->is_published) ? 'Yes' : 'No' }}</td>
                            <td>{{ optional($post->category)->title }}</td>

                            <td>

                                <form method="POST" action="{!! route('posts.post.destroy', $post->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right " role="group">
                                        <a href="{{ route('posts.post.show', $post->id ) }}"title="Show Post">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('posts.post.edit', $post->id ) }}" class="mx-4" title="Edit Post">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"  title="Delete Post" onclick="return confirm(&quot;Click Ok to delete Post.&quot;)">
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
            {!! $posts->render() !!}
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


