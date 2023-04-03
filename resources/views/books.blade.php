<x-layout>
    <div class="contenedorDash">
        <div class="py-4 w-100 d-flex px-5 justify-content-between align-items-center">
            <h5 class="FontClean">New Book</h5>
            <form action="/new-book" class="w-100 d-flex justify-content-around align-items-center border border-dark px-2 py-2 rounded " method="post">
                @csrf
                <label for="title" class="FontClean fs-5">Title</label>
                <input type="text" class="FontClean" name="title">
                <label for="author" class="FontClean fs-5">Author</label>
                <input type="text" class="FontClean" name="author">
                <input type="hidden" name="member_id" value={{1}}>
                <button type="submit" class="FontClean btn btn-light">Add</button>
            </form>
        </div>
        @livewire('show-books')
    </div>
    @livewireScripts
</x-layout>