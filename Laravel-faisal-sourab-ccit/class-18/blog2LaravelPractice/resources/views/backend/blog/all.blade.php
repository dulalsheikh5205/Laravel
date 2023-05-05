
@extends('layouts.app');

@section('content')
    <div class="container">
        <h2>All Posts</h2>
        <table class="table table-responsive">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Added By</th>
                    <th>View Count</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
{{--            {{ var_dump($blogPosts) }}--}}
            @forelse($blogPosts as $key=>$post)
                <tr>
                    <td> {{ ++$key  }} </td>
                    <td> {{ $post->title }} </td>
                    <td>{{ $post->detail }}</td>
                    <td>{{ $post->added_by }}</td>
                    <td> {{ $post->view_count }} </td>
                    <td> <span class="badge {{ $post->status == true ?'bg-success':'bg-danger' }} ">{{ $post->status == true?'active':'deactive' }}</span> </td>
                    <td>
                        <div class="btn-group">
                            <a href=" {{ route('blog.edit', $post->id) }} " class="btn btn-primary btn-sm">Edit</a>
                            <a href=" {{ route('blog.status', $post->id) }} " class="btn btn-warning btn-sm">Status</a>
{{--                            <a href=" {{ route('blog.delete', $post->id) }} " class="btn btn-danger btn-sm">Delete</a>--}}
                            <button type="submit" class="btn btn-danger btn-sm btnDelete">Delete</button>
                            <form action=" {{ route('blog.delete', $post->id) }} " method="POST">
                                @csrf
                                @method('DELETE')

                            </form>
                        </div>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="7" class="text-center">No Data Found</td>
                </tr>

            @endforelse


        </table>
    </div>

@push('customJs')
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
   let button = $('.btnDelete');
   button.click(function () {
       /* swal start here*/
      let form = $(this).next('form');
       Swal.fire({
           title: 'Are you sure?',
           text: "You won't be able to revert this!",
           icon: 'question',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes, delete it!'
       }).then((result) => {
           if (result.isConfirmed) {
                    form.submit();
           }
       })
       /* swal end here*/
   })
    </script>
@endpush

@endsection

