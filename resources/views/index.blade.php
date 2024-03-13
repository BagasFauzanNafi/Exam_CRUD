@extends('main')

@section('navbar')
@php
    $no = 0;
@endphp
<a href="add" class="btn btn-primary mb-5">Add</a>
<div class="overflow-x-auto">
    <table class="table table-zebra">
      <!-- head -->
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        @foreach ($belajar as $a)   
        <tr>
            <th>{{ ++$no }}</th>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->kelas }}</td>
            <td>         
                <a href="{{ $a->id }}/edit" class="btn btn-success">Edit</a>
                <form action="/update/{{ $a->id }}" method="POST" class="btn btn-error">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection