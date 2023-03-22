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
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Judul Lain</label>
                        <input type="text" class="form-control" name="judul_lain">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Author</label>
                        <input type="text" class="form-control" name="author">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" id="" rows="3" class="form-control" ></textarea>
                    </div>
                    <div class="col-md-12 mb-3"> 
                        <select class="form-select" aria-label="Default select example" name="type" required>
                        <option selected >Pilih Type</option>
                            <option value="manga">manga</option>
                            <option value="manhwa">manhwa</option>
                            <option value="novel">Novel</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3"> 
                        <select class="form-select" aria-label="Default select example" name="status_manga" required>
                        <option selected >Status Manga</option>
                            <option value="On Going">On Going</option>
                            <option value="End">End</option>
                            <option value="Hiatus">Hiatus</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="price">Genre</label>
                        <input type="Gnere" name="genre" id="" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" id="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">trending</label>
                        <input type="checkbox"  name="trending">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox"  name="popular">
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
    <script>
   function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnil");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }
</script>
@endsection