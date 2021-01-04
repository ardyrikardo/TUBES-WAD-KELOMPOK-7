@extends('homepage::layouts.master')

@section('content')
<div class="row mx-5 mt-5">
    <div class="col">
        <small class="text-muted">Terdapat <span class="text-success font-weight-bold">{{ $progs->count() }}</span> pilihan program untuk :</small>
        <h4>{!! $title !!}</h4>
        <hr>
    </div>
</div>

@foreach($progs as $prog)
<div class="row mx-5 mb-3" onclick="location.href='{{ route('homepage.program', $prog->slug) }}'" style="cursor: pointer">
    <div class="col">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('storage/' . $prog->thumbnail) }}" class="img-fluid">
            </div>
            <div class="col-md-5">
                <p class="text-success font-weight-bold">{{ $prog->program_type->name }}</p>
                <p class="lead font-weight-bold">{{ $prog->name }}</p>
                <p class="text-muted">{!! $prog->short_description !!}</p>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-1">
                        <i class="fa fa-map-marker text-success" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11">
                        <strong>{{ $prog->program_office->name }}</strong>
                        <p class="text-muted">
                            {{ $prog->program_office->address }}
                            <br>
                            {{ $prog->program_office->city }} - {{ $prog->program_location->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <i class="fa fa-calendar text-success" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11">
                        <strong>{{ $prog->periode_tanggal }}</strong>
                        <p class="text-muted">
                            {{ $prog->periode_hari }}
                            <br>
                            {{ $prog->periode_waktu }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
