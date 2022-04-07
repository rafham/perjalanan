@extends('layout.app')
@section('content')
 <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
               <h4 class="card-title">Data Perjalanan Anda</h4>
            <div class="table-responsive">
                <table class="table table-hover">
            </div>
            </div>

<div class="col-12">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right " data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="mdi mdi-plus"></i>
</button>
</div>
  <table class="table table-hover">
    <thead>
        <tr>
            <th class="text-secondary">No</th>
            <th class="text-secondary">Tanggal</th>
            <th class="text-secondary">Jam</th>
            <th class="text-secondary">Lokasi</th>
            <th class="text-secondary">Suhu Tubuh</th>
            <th class="text-secondary">Action</th>
        </tr>
    </thead>
      @foreach($perjalanan as $no => $item)
    <tbody>
      <tr>
        <td class="text-secondary">{{ $perjalanan->firstItem() + $no }}</td>
        <td class="text-secondary">{{ $item->tanggal }}</td>
        <td class="text-secondary">{{ $item->jam }}</td>
        <td class="text-secondary">{{ $item->lokasi }}</td>
        <td class="text-secondary">{{ $item->suhu_tubuh }}°</td>
        <td>
        <button type="submit" class="btn btn-primary "><a href="/perjalanan/delete/{{$item->id}}">Delete</a></button>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
<div class="row">
  <div class="col-md-6 mt-3">
    Tampilan
    {{ $perjalanan->firstItem() }}
    Sampai
    {{ $perjalanan->lastItem() }}
    data,dari total 
    {{ $perjalanan->total() }}
    data
  </div>
  <div class="col-md-6 d-flex justify-content-end mt-3"> 
    {{ $perjalanan->links() }}  
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <form action='/perjalanan/store' method='POST'>
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jam</label>
    <input type="time" name="jam" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lokasi</label>
    <input type="text" name="lokasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Suhu Tubuh</label>
    <input type="text" name="suhu_tubuh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
      </div>
     
    </div>
  </div>
</div>
@stop