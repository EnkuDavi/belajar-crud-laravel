@extends('template.master')

@section('contents')
              <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key => $p)
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td> {{ $p->judul }} </td>
                            <td> {{ $p->isi }} </td>
                            <td> {{ $p->tgl_buat }} </td>
                            <td>
                              <a href="/pertanyaan/{{$p->id}}" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>

@endsection