@extends("layouts.app");

@section("content")

<div class="container">
    <h3>all posts</h3>
    <table class="table table-responsive">
        <tr>
            <th>serial No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Added By</th>
            <th>View Count</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @forelse($blogPosts as $key=>$post)
       

       
        <tr>
            <td>{{++$key}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->details}}</td>
            <td>{{$post->added_by}}</td>
            <td>{{$post->view_count}}</td>
            <td><span class="badge {{$post->status == true?'bg-success':'bg-danger'}}">{{$post->status == true?'active':'deactive'}}</span></td>
            <td>
                <div class="btn-group">
                <a href="{{ route('blog.edit',$post->id)}}" class="btn btn-primary btn-sm ">Edit</a>
                <a href="{{ route('blog.status',$post->id)}}" class="btn btn-warning btn-sm ">Status</a>
                {{-- <a href="{{route('blog.delete')}}" class="btn btn-danger btn-sm">Delete</a> --}}
                <button type="submit" class="btn btn-danger btn-sm btnDelete">Delete</button>
                <form action="{{ route('blog.delete',$post->id)}}"  method="POST">
                @csrf
                @method('DELETE')
                </form>
             
                </div>
            </td>
        </tr> 
      
        @empty
        <tr>
            <td colspan="7" class="text-center">no data found</td>
        </tr>
        @endforelse
    </table>
</div>
@push('customJs')
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
 let button =   $('.btnDelete')
 button.click(function(){
    // swal starts here
    let form =  $(this).next('form');
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
    // swal ends here
 })
</script>
@endpush
@endsection