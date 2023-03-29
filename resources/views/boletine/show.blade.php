@extends('layouts.app')

@section('template_title')
    {{ $boletine->name ?? 'Show Boletine' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Boletine</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('boletines.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $boletine->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $boletine->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $boletine->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
