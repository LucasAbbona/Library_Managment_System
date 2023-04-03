<div>
    <input wire:model="search" type="search" class="FontClean form-control w-75 m-auto my-4" placeholder="Search members by name or city">

    <table class="table-responsive table table-striped table-hover">
        <thead>
            <tr>
                <td class="FontClean">Fullname</td>
                <td class="FontClean">Address</td>
                <td class="FontClean">Age</td>
                <td class="FontClean">Books Issued</td>
                <td class="FontClean">Returned</td>
                <td class="FontClean">Subscription Day</td>
                <td class="FontClean">Delete</td>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($members as $member)
                <tr>
                    <td class="FontClean">{{$member->name}}</td>
                    <td class="FontClean">{{$member->address}}</td>
                    <td class="FontClean">{{$member->age}}</td>
                    <td class="FontClean">{{count($issued->where('member_id',$member->id))}}</td>
                    <td class="FontClean">{{count($issued->where('member_id',$member->id)->where('returned',1))}}</td>
                    <td class="FontClean">{{$member->created_at}}</td>
                    <td>
                        <form action="/member/{{$member->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="FontClean btn btn-danger">Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$members->links('pagination::bootstrap-5')}}
</div>
