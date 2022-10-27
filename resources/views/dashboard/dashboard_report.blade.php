@extends('dashboard.layouts.main')

@section('contents')
    <div class="page-body">
        <div class="container d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form action="/generatereport" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="petugas">Petugas Monitoring</label>
                                <select class="form-select" id="petugas" name="operator">
                                    <option value="option_select" disabled selected>----Select Name----</option>
                                    @foreach ($operators as $operator)
                                        <option value="{{ $operator->id }}">{{ $operator->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <label>Fujitsu</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Normal" name="fujitsu_status" id="fujitsu_normal" checked>
                                <label class="form-check-label" for="fujitsu_bermasalah">
                                    Normal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Bermasalah" name="fujitsu_status" id="fujitsu_bermasalah">
                                <label class="form-check-label" for="fujitsu_bermasalah">
                                    Bermasalah
                                </label>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="tangkapan_layar">Tangkapan Layar Dashboard SiOne</label>
                                <input type="file" class="form-control" name="dashboard_SiOne">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Generate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection