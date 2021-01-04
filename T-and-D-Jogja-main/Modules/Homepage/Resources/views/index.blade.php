@extends('homepage::layouts.master')

@section('content')
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
    </div>
    <div class="container2">

        <div class="container rounded shadow p-3 mb-5 bg-white rounded" style="background-color: white; width: 900px;">
            <p><b>Lengkapi keahlianmu sekarang</b></p>
            <hr>

            <form action="{{ route('homepage.cari') }}" method="post">@csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="program_type_id">Program</label>
                      <select class="form-control" name="program_type_id" id="program_type_id" required>
                        <option value="">Pilih</option>
                        @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="program_category_id">Kategori</label>
                      <select class="form-control" name="program_category_id" id="program_category_id" required>
                        <option value="">Pilih</option>
                        @foreach($cats as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="program_location_id">Lokasi</label>
                      <select class="form-control" name="program_location_id" id="program_location_id" required>
                        <option value="">Pilih</option>
                        @foreach($locs as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="program_type_id" class="text-white">Submit</label>
                      <button class="btn btn-primary form-control" type="submit"><i class="fa fa-eye text-white" aria-hidden="true"></i> Cari</button>
                    </div>
                </div>
            </div>
            </form>

    </div>
</div>
<!-- CLOSING JUMBOTRON -->

<div class="container mb-5" style="margin-top: 8%;"><br>
    <b>Program Pilihan</b>
    <div class="row row-cols-1 row-cols-md-3" style="margin-top: 3%;">

        @foreach($progs as $prog)
        <div class="col mb-4">
            <div class="card h-100" onclick="location.href='{{ route('homepage.tipe', $prog->slug) }}'" style="cursor: pointer">
                {{-- <img src="{{ asset('template') }}/img/Jumbotron.png" class="card-img-top" alt="..."> --}}
                <img src="{{ asset('storage/'.$prog->thumbnail) }}" class="card-img-top" alt="...">
                <div class="card-header" style="background-color: #ab5139; height: 10%;">
                    <p style="text-align: center; color: white;"> {{ $prog->note }}</p>
                </div>
                <h3 class="card-tittle" style="margin-top: 2%;">{{ $prog->name }}</h3>
                <div class="card-body">
                    <p class="card-text">{{ $prog->description }}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
