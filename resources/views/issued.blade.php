<x-layout>
    <div class="contenedorDash ">
        <div class="py-4 w-100 d-flex px-5 justify-content-between align-items-center">
            <h5 class="FontClean">New Issued Book</h5>
            <form action="/new-issued" class="w-75 d-flex justify-content-around align-items-center border border-dark px-4 py-2 rounded " method="post">
                @csrf
                <label for="book" class="FontClean fs-5">Book</label>
                <select name="book_id" class="FontClean" id="book">
                    @foreach ($books as $book)
                        <option class="FontClean" value='{{$book->id}}'>{{$book->title}}</option>                        
                    @endforeach
                </select>
                <label for="issuer" class="FontClean fs-5">Issued By</label>
                <select name="member_id" class="FontClean" id="issuer">
                    @foreach ($members as $member)
                        <option class="FontClean" value='{{$member->id}}'>{{$member->name}}</option>
                    @endforeach
                </select>
                <label for="deadline" class="FontClean">Deadline</label>
                <input type="date" name="deadline" id="deadline" value="">
                <input type="hidden" name="take_away" value="{{date('Y-m-d')}}">
                <input type="hidden" value="0" name="returned">
                <button type="submit" class="FontClean btn btn-light">Report</button>
            </form>
        </div>
        <table class="table-responsive table table-striped table-hover mt-5">
            <thead class="border-top border-black">
                <tr>
                    <td class="FontClean">Title</td>
                    <td class="FontClean">Author</td>
                    <td class="FontClean">Issued By</td>
                    <td class="FontClean">Address</td>
                    <td class="FontClean">Take Away</td>
                    <td class="FontClean">Deadline</td>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($issued as $issue)
                    <tr>
                        <td class="FontClean">{{$books->where('id',$issue->book_id)->last()->title}}</td>
                        <td class="FontClean">{{$books->where('id',$issue->book_id)->last()->author}}</td>
                        <td class="FontClean">{{$members->where('id',$issue->member_id)->last()->name}}</td>
                        <td class="FontClean">{{$members->where('id',$issue->member_id)->last()->address}}</td>
                        <td class="FontClean">{{$issue->take_away}}</td>
                        <td class="FontClean">{{$issue->deadline}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            {{$issued->links('pagination::bootstrap-5')}}
    </div>
</x-layout>