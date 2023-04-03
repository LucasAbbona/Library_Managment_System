<x-layout>
    <div class="contenedorDash">
        <div class="py-4 w-100 d-flex px-5 justify-content-between align-items-center">
            <h5 class="FontClean">New Member</h5>
            <form action="/new-member" class="w-100 d-flex justify-content-around align-items-center border border-dark px-2 py-2 rounded " method="post">
                @csrf
                <label for="" class="FontClean fs-5">Full Name</label>
                <input type="text" class="FontClean" name="name">
                <label for="" class="FontClean fs-5">Address</label>
                <input type="text" class="FontClean" name="address">
                <label for="" class="FontClean fs-5">Age</label>
                <input type="number" class="FontClean" name="age" max="90" min="5" id="">
                <button type="submit" class="FontClean btn btn-light">Suscribe</button>
            </form>
        </div>
        @livewire('show-members')
    </div>
    @livewireScripts
</x-layout>