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