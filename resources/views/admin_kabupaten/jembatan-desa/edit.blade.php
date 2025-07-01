@extends('layouts.app')

@section('template_title')
    Edit Jembatan Desa
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Edit Jembatan Desa (Admin Kabupaten)</span>
                </div>
                <div class="card-body bg-white">
                    <form method="POST" action="{{ route('admin_kabupaten.jembatan-desa.update', $jembatanDesa->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        @include('admin_kabupaten.jembatan-desa.form', ['jembatanDesa' => $jembatanDesa, 'desas' => $desas])
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
