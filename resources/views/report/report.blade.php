@section('content')
    <div class="row padding-sm-vr">
        <div class="with-transitions center-block col-lg-9" style="float: none;">
            <form method="POST" action="{{ current_url() }}">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="panel-heading">
                    <span class="panel-title">Report Data</span>
                </div>
                <div class="panel-body no-padding-hr">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-center"> Report SMP Caution Brad Bogor </p>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="table-responsives no-margin no-padding" style="background: #efefef;">
                                <table class="table table-condensed no-border-hr table-input text-center" style="min-width: 600px;">
                                    <thead>
                                    <tr>
                                        <th>Nomor Peserta</th>
                                        <th>Nama Peserta</th>
                                        <th>Nilai</th>
                                        <th>Total</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 0;
                                    ?>
                                    @if(count($datas) > 0)
                                        @foreach($datas as $key => $item)
                                            <tr>
                                                <td>{{ isset($item->no_peserta) ? $item->no_peserta : '-' }}</td>
                                                <td>{{ isset($item->nama) ? $item->nama : '-' }}</td>
                                                <td>{{ isset($item->nilai) ? $item->nilai : '-'  }}</td>
                                                <td>{{ isset($item->total) ? $item->total : '-' }}</td>
                                                <td>{{ isset($item->keterangan) ? $item->keterangan : '-' }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6">Tidak Ada Peserta</td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="{{ route('siswa::siswa') }}" style="font-size: 15px !important;" class="btn btn-flat">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@include('application.layout')
