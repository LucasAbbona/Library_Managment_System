<x-layout>
    <div class="contenedorDash">
        <table class="table-responsive table table-striped table-hover">
            <thead>
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
    </div>
</x-layout>