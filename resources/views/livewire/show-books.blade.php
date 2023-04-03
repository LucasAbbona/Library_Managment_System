<div>
    <input wire:model="search" type="search" class="FontClean form-control w-75 m-auto my-4" placeholder="Search books by title or author">

    <table class="table-responsive table table-striped table-hover">
        <thead>
            <tr>
                <td class="FontClean">Title</td>
                <td class="FontClean">Author</td>
                <td class="FontClean">Last Owner</td>
                <td class="FontClean">Returned</td>
                <td class="FontClean">Times Issued</td>
                <td class="FontClean">Delete</td>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($books as $book)
                <tr>
                    <td class="FontClean">{{$book->title}}</td>
                    <td class="FontClean">{{$book->author}}</td>
                    @if ($last->where('book_id',$book->id)->last())
                        <td class="FontClean">{{$owner->where('id',$last->where('book_id',$book->id)->last()->member_id)->last()->name}}</td>
                        <td class="FontClean">{{(($last->where('book_id',$book->id)->last()->returned)===1)?'Yes':'No'}}</td>
                        <td class="FontClean">{{count($last->where('book_id',$book->id))}}</td>        
                        <td>
                            <form action="/book/{{$book->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="FontClean btn btn-danger">Delete</button>
                            </form>
                        </td>
                    @else
                        <td class="FontClean">Never Issued</td>
                        <td class="FontClean">Never Issued</td>
                        <td class="FontClean">Never Issued</td>
                        <td>
                            <form action="/book/{{$book->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="FontClean btn btn-danger">Delete</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$books->links('pagination::bootstrap-5')}}
</div>
