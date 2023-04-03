<x-layout>
    <div class="contenedorDash">
        <div class=" d-flex justify-content-center gap-5 pt-5 flex-wrap">
          <div class="card w-25">
            <div class="card-body">
              <h5 class="FontClean card-title text-center fs-4">Books</h5>
              <p class="FontClean card-text text-center fs-1 fw-bold">{{count($books)}}</p>
            </div>
        </div>
        <div class="card w-25"> 
            <div class="card-body">
              <h5 class="FontClean card-title text-center fs-4">Members</h5>
              <p class="FontClean card-text text-center fs-1 fw-bold">{{count($members)}}</p>
            </div>
          </div>
          <div class="card w-25">
            <div class="card-body">
              <h5 class="FontClean card-title text-center fs-4">Issued</h5>
              <p class="FontClean card-text text-center fs-1 fw-bold">{{count($issued)}}</p>
            </div>
          </div>
          <div class="card w-25">
            <div class="card-body">
              <h5 class="FontClean card-title text-center fs-4">Not Returned</h5>
              <p class="FontClean card-text text-center fs-1 fw-bold">{{count($notReturned)}}</p>
            </div>
          </div>
          <div class="card w-25">
            <div class="card-body">
              <h5 class="FontClean card-title text-center fs-4">Returned</h5>
              <p class="FontClean card-text text-center fs-1 fw-bold">{{count($returned)}}</p>
            </div>
          </div>
          <div>
        </div>
        </div>

        <div class="LastExpiringCard w-50 mx-auto d-flex flex-column align-items-center mt-5">
          <h3 class="FontClean">Soon Expiring</h3>
          <div class="ExpiringBar px-4  mb-3"></div>
          <div class="d-flex justify-content-between px-4 w-100">
            <p class="FontClean fw-bold fs-5">Book</p>
            <p class="FontClean fw-bold fs-5">Issued By</p>
          </div>
          <div class="d-flex justify-content-between px-4 w-100">
            <p>{{$books->find($closerDeadline->book_id)->title}}</p>
            <p>{{$members->find($closerDeadline->member_id)->name}}</p>
          </div>
        </div>
    </div>
</x-layout>