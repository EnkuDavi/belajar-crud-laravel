@extends('template.master')

@section('contents')
    <div class="card-header">
        <h3 class="card-title">Pertanyaan dan Jawaban</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table class="table table-bordered">
        <thead>                  
        <tr>
            <th style="width: 10px">#</th>
            <th>Judul</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pertanyaan as $key => $p)
            <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $p->judul }} </td>
                <td> {{ $p->tanya }} </td>
                <td> {{ $p->jawab }} </td>
                
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection