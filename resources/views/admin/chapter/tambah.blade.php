@extends('layouts.admin')
@section('main')
    <div class="card">
        <div class="card-header">
            kategori
        </div>
        <div class="card-body">
            <form action="{{ url('masukan-buku') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                     <div class="col-md-12 mb-3"> 
                        <select class="form-select" aria-label="Default select example" name="cate_id" required>
                        <option selected >Pilih kategori</option>
                        @foreach ($data as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="date" name="rilis" id="" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" id="" class="form-control" onchange="showMyImage(this)">
                        <img id="thumbnil" style="width:20%; margin-top:10px;"  src="" alt="image"/>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
@endsection