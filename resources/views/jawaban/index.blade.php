@extends('template.master')

@section('contents')
        <div class="card-header">
            <h3 class="card-title">Jawaban</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-bordered">
                <thead>                  
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Isi</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jawaban as $key => $j)
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $j->isi }} </td>
                        <td> {{ $j->created_at }} </td>
                     
                    </tr>
                @endforeach
                </tbody>
            </table>
@endsection