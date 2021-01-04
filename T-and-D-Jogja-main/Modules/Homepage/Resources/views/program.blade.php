@extends('homepage::layouts.master')

@section('content')
<div class="row mx-5 mt-5">
    <div class="col">
        <div class="jumbotron">
            <h1 class="display-3 text-white">{{ $title }}</h1>
            <p class="lead text-white">{{ $program->short_description }}</p>
            <hr class="my-2">
            <p class="lead">
                <form action="{{ route('homepage.daftar_program', $program->slug) }}" method="post"> @csrf
                <button class="btn btn-primary btn-lg" type="submit" role="button" onclick="return confirm('Apakah Anda yakin?')">Daftar Program</button>
            </p>
        </div>
    </div>
</div>

<div class="row  mx-5 mt-3">
    <div class="col-md-3">
        <img src="{{ asset('storage/' . $program->thumbnail) }}" class="img-fluid">
    </div>
    <div class="col-md-5">
        <p class="text-success font-weight-bold">{{ $program->program_type->name }}</p>
        <p class="lead font-weight-bold">{{ $program->name }}</p>
        <p class="text-muted">{!! $program->long_description !!}</p>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-1">
                <i class="fa fa-map-marker text-success" aria-hidden="true"></i>
            </div>
            <div class="col-md-11">
                <strong>{{ $program->program_office->name }}</strong>
                <p class="text-muted">
                    {{ $program->program_office->address }}
                    <br>
                    {{ $program->program_office->city }} - {{ $program->program_location->name }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <i class="fa fa-calendar text-success" aria-hidden="true"></i>
            </div>
            <div class="col-md-11">
                <strong>{{ $program->periode_tanggal }}</strong>
                <p class="text-muted">
                    {{ $program->periode_hari }}
                    <br>
                    {{ $program->periode_waktu }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <i class="fa fa-dollar-sign text-success" aria-hidden="true"></i>
            </div>
            <div class="col-md-11">
                <strong>Biaya Program</strong>
                <p class="text-muted">
                    Rp. {{ number_format($program->price, 0, ',', '.') }}
                </p>
                <p>
                    <button class="btn btn-primary" type="submit" role="button" onclick="return confirm('Apakah Anda yakin?')">Daftar Program</button>
                    <input type="hidden" name="program_id" value="{{ $program->id }}">
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
