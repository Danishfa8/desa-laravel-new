@extends('layouts.app')

@section('template_title')
    Sarana Lainya Desa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @include('layouts.messages')
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sarana Lainya Desa') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('admin_desa.sarana-lainya-desa.create') }}"
                                    class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Desa</th>
                                        <th>RT/RW</th>
                                        <th>Tahun</th>
                                        <th>Jenis Sarana Lainnya</th>
                                        <th>Nama Sarana Lainnya</th>
                                        <th>Created By</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saranaLainyaDesas as $saranaLainyaDesa)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $saranaLainyaDesa->desa->nama_desa }}</td>
                                            <td>{{ $saranaLainyaDesa->rtRwDesa->rt }}/{{ $saranaLainyaDesa->rtRwDesa->rw }}
                                            </td>
                                            <td>{{ $saranaLainyaDesa->tahun }}</td>
                                            <td>{{ $saranaLainyaDesa->jenis_sarana_lainnya }}</td>
                                            <td>{{ $saranaLainyaDesa->nama_sarana_lainnya }}</td>
                                            <td>{{ $saranaLainyaDesa->created_by }}</td>
                                            <x-action-buttons :item="$saranaLainyaDesa" route-prefix="admin_desa.sarana-lainya-desa"
                                                :ajukan-route="true" status-field="status" />

                                        </tr>
                                        @include('layouts.partials.modal.modal_sarana_lainnya')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @include('layouts.pagination', ['paginator' => $saranaLainyaDesas])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
