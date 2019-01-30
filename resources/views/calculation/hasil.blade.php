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
                        @foreach($hasil as $item)
                            <div class="col-sm-6" style="margin-top: 50px;">
                                <div class="form-group no-margin-hr panel-padding-h">
                                    <div class="row">
                                        <label class="col-sm-5 control-label" for="nama">Nama</label>

                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="{{ $item->nama }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group no-margin-hr panel-padding-h ">
                                    <div class="row ">
                                        <label class="col-sm-5 control-label " for="nrr">Nilai</label>

                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="{{ $item->nilai }}" readonly>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group no-margin-hr panel-padding-h ">
                                    <div class="row ">
                                        <label class="col-sm-5 control-label" for="nun">Total</label>

                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="{{ $item->total }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group no-margin-hr panel-padding-h ">
                                    <div class="row ">
                                        <label class="col-sm-5 control-label" for="nun">Keterangan</label>

                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="{{ $item->keterangan }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
