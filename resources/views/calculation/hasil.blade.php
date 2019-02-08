@section('content')
    <div class="row padding-sm-vr">
        <div class="with-transitions center-block col-lg-9" style="float: none;">
            <form method="POST" action="{{ current_url() }}">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="panel-heading">
                    <span class="panel-title">Hasil Data</span>
                </div>
                <div class="panel-body no-padding-hr">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-center"> Selamat Kepada Siswa / Siswi Yang Keterima</p>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="table-responsives no-margin no-padding" style="background: #efefef;">
                                <table class="table table-condensed no-border-hr table-input text-center" style="min-width: 600px;">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peserta</th>
                                        <th>Nilai</th>
                                        <th>Total</th>
                                        <th>Keterangan</th>
                                        <th>Rangking</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hasil as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->nilai }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td @if($item->keterangan == "Lolos") style="background: #28a745;" @else style="background: #dc3545;" @endif><span style="color: white;">{{ $item->keterangan }}</span></td>
                                            <td>{{ $index + 1 }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="{{ route('calculation::calculation.rangking') }}" style="font-size: 15px !important;" class="btn btn-flat">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@include('application.layout')
