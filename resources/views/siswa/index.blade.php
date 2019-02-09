@section('content')
    <div class="row padding-sm-vr">
        <div class="with-transitions center-block col-lg-9" style="float: none;">
            <form method="POST" action="{{ current_url() }}">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="panel-heading">
                    <span class="panel-title">Input Jumlah Siswa</span>
                </div>
                <div class="panel-body no-padding-hr">
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 50px; text-align: center">
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <label class="col-sm-5 control-label" for="jumlah_siswa">Jumlah Siswa</label>

                                    <div class="col-sm-4">
                                        <input type="number" name="jumlah_siswa" required class="form-control" id="jumlah_siswa">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button type="submit" class="btn btn-success btn-flat actions" style="font-size: 15px !important;">Selanjutnya</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@include('application.layout')
