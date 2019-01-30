@section('content')
    <div class="row padding-sm-vr">
        <div class="with-transitions center-block col-lg-9" style="float: none;">
            <form method="POST" action="{{ current_url() }}">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="panel-heading">
                    <span class="panel-title">Input Data</span>
                </div>
                <div class="panel-body no-padding-hr">
                    <div class="row">
                        @for ($i = 0; $i <=3; $i++)
                            <div class="col-sm-6" style="margin-top: 50px;">
                                <div class="form-group no-margin-hr panel-padding-h">
                                    <div class="row">
                                        <label class="col-sm-5 control-label" for="nama">Nama</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="items[{{$i}}][nama]" class="form-control" id="nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group no-margin-hr panel-padding-h ">
                                    <div class="row ">
                                        <label class="col-sm-5 control-label " for="nrr">Nilai Rata-Rata kelas 4-6</label>

                                        <div class="col-sm-7">
                                            <input type="number" name="items[{{$i}}][nrr]" class="form-control" id="nrr">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group no-margin-hr panel-padding-h ">
                                    <div class="row ">
                                        <label class="col-sm-5 control-label" for="nun">Nilai UN</label>

                                        <div class="col-sm-7">
                                            <input type="number" name="items[{{$i}}][nun]" class="form-control" id="nun">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group no-margin-hr panel-padding-h ">
                                    <div class="row ">
                                        <label class="col-sm-5 control-label" for="nuas">Nilai UAS</label>

                                        <div class="col-sm-7">
                                            <input type="number" name="items[{{$i}}][nuas]" class="form-control" id="nuas">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group no-margin-hr panel-padding-h ">
                                    <div class="row ">
                                        <label class="col-sm-5 control-label" for="nkh">Rata-Rata Kehadiran Kelas 4-6</label>

                                        <div class="col-sm-7">
                                            <input type="number" name="items[{{$i}}][nkh]" class="form-control" id="nkh">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group no-margin-hr panel-padding-h">
                                    <div class="row ">
                                        <label class="col-sm-5 control-label" for="ntest]">Nilai Tes Masuk</label>

                                        <div class="col-sm-7">
                                            <input type="number" name="items[{{$i}}][ntest]]" class="form-control" id="ntest]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="panel-footer text-right" >
                        <button type="submit" class="btn btn-success btn-flat actions" style="font-size: 15px !important;">Proses</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@include('application.layout')
