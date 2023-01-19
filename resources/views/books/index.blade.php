@extends('layouts.master')

@section('content')
    <h5 class="mt-4">List of Books</h5>
    <div class="col-md-12 col-sm-6  ">
  <div class="x_panel">
    <div class="x_content">

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
             <td><a href="books/{{$book->id}}">{{$book->title}}</a></td>
            <td>
             {{ Illuminate\Support\Str::limit($book->summary, 120, '') }}

            @if (strlen(strip_tags($book->summary)) > 120)
              ... <a href="#" class="btn btn-info btn-sm">Read More</a>
            @endif
            </td>
            <td>{{$book->like}}</td>
            <td>{{$book->created_at}}</td>
            <td><form action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="x" />
                </form>
            </td>

          </tr>
          @endforeach
        </tbody>
            <div class="d-flex">
                {!! $data['books']->links() !!}
            </div>







         {{--  <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td><a href="books/{{$book->id}}">{{$book->title}}</a></td>
            <td>{!! $book->summary !!}</td>
            <td>{{$book->like}}</td>
            <td>{{$book->created_at}}</td>
            <td><form action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="x" />
                </form>
                <button></button>
            </td>
          </tr>
          @endforeach
        </tbody> --}}
      </table>
          
      @else
      <div class="text-center">No Post found</div>
      @endif
    </div>
  </div>
</div>
@endsection