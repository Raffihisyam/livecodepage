@extends('partial.sidebar')
@section('isi')
    <section>
        @if (session()->has('store'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('store') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <h3>Live Coding 1</h3>
        <h5>Aplikasi Pelaporan Pengaduan Masyarakat</h5>
        <div class="row">
            <div class="col-9">
                <iframe src="{{ asset('soalukk_tkj.pdf') }}" width="100%" height="600%" id="soalukk"></iframe>

            </div>
            <div class="col-3" style="text-align: right">
                <div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group"
                    style="float: right" id="tombol">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Radio 4</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Radio 5</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Radio 6</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Radio 7</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Radio 8</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Radio 9</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Radio 10</label>
                </div>
            </div>
        </div>
        <div class="lanjut" style="text-align: right">
            <a class="btn btn-primary" href="/" role="button">Link</a>
        </div>
    </section>
@endsection
