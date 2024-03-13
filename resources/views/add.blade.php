@extends('main')

@section('navbar')
<form action="store" method="POST">
    @csrf
    <div class="hero">
        <div class="hero-content flex-col lg:flex-row-reverse">
          <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <form class="card-body">
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Nama</span>
                </label>
                <input name="nama" type="text" placeholder="nama siswa" class="input input-bordered" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Kelas</span>
                </label>
                <input name="kelas" type="text" placeholder="kelas siswa" class="input input-bordered" required />
              </div>
              <div class="form-control mt-6">
                <button class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</form>
@endsection