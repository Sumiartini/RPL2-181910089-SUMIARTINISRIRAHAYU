@extends('layouts.TeacherMaster')
@section('content')

        
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                   <div class="card-header">Daftar Kehadiran Kelas</div>
                <div class="card-body">
              <div class="table-responsive">

        
            <div>
                <a href="{{URL::to('/teachers/create')}}" class="btn btn-success btn-md"><i class="icon-note"></i><b>&nbsp;<u>tambah siswa</u></b></a>
            </div>
            <br>
   
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $no=>$lists)
                    <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$lists->nis}}</td>
                        <td>{{$lists->name}}</td>
                        <td>{{$lists->name_class}}</td>
                        <td>
                            <a href="{{URL::to('/teachers/')}}/{{$lists->user_id}}/edit" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{URL::to('/teachers/destroy/')}}/{{$lists->user_id}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

          </div>
            </div>
            </div>
          </div>
        </div>
        
     
@endsection