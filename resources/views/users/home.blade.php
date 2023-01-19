@extends('layouts.app')

@section('content')

            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Business Name or Tagline</h1>
                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                    <a class="btn btn-primary" href="#!">Call to Action!</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
            </div>


     @if(Auth::check())
      @if($data['books']->count() > 0)
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Summary</th>
            <th>Likes</th>
            <th>Uploaded On</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data['books'] as $books=>$book)

          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$book->title}}</td>
            <td>
             {{ Illuminate\Support\Str::limit($book->summary, 150, '') }}

            @if (strlen(strip_tags($book->summary)) > 150)
              ... <a href="homes/{{$book->id}}" class="btn btn-info btn-sm">Read More</a>
            @endif
           </td>
            <td>{{$book->like}}</td>
            <td>{{$book->created_at}}</td>
          </tr>
          @endforeach
        </tbody>
            <div class="d-flex">
                {!! $data['books']->links() !!}
            </div>
        <tfoot>
            
        </tfoot>
      </table>
          
      @else
      <div class="text-center">No Post found</div>
      @endif

      @endif
@endsection