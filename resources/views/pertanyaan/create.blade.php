@extends('template.master')

@section('contents')
              <div class="card-header">
                <h3 class="card-title">Buat Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="/pertanyaan" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Isi</label>
                        <input type="text" name="isi" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Tgl</label>
                        <input type="date" name="tgl_buat" value="<?= date('Y-m-d');?>" class="form-control" readonly>
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>

@endsection