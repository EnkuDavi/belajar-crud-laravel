@extends('template.master')

@section('contents')
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Created</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key => $p)
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td> {{ $p->judul }} </td>
                            <td> {{ $p->isi }} </td>
                            <td> {{ $p->tgl_buat }} </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>

@endsection