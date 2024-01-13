@extends('partial.sidebar')
@section('isi')
    <section id="canvas">
        <div class="">
            <h1>Aplikasi Pengaduan Masyarakat</h1>
            <h5>INDEX</h5>
        </div>
        <div style="display: flex; justify-content: center;">
            <img src="soal/index1.JPG" style="width: 500px; height: auto;">
        </div>
        <div class="container-fluid">
            <div class="row" id="html">
                <div class="col">
                    <label><i class="fa-brands fa-html5" style="color: #60d2cb;"></i>HTML</label>
                    <textarea id="html-code" onkeyup="run()"></textarea>
                </div>
            </div>
            <div class="row" id="css">
                <div class="col">
                    <label><i class="fa-brands fa-css3-alt" style="color: #83d7ec;"></i>CSS</label>
                    <textarea id="css-code"onkeyup="run()"></textarea>
                </div>
                <div class="col">
                    <label><i class="fa-brands fa-js" style="color: #45e5e8;"></i>JS</label>
                    <textarea id="js-code"onkeyup="run()"></textarea>
                </div>
            </div>
            <div class="output">
                <label><i class="fa-solid fa-play" style="color: #60d2cb"></i> Output</label>
                <iframe id="output"></iframe>
            </div>
        </div>
    </section>
    <section>
        <div class="row mt-3">
            <form class="was-validated" method='post' action="/" enctype="multipart/form-data">
                @csrf
                <div class="mt-3">
                    <input type="file" name="file" class="form-control" aria-label="file example" required>
                    @error('file')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </section>
    <script>
        function run() {
            let htmlcode = document.getElementById("html-code").value;
            let csscode = document.getElementById("css-code").value;
            let jscode = document.getElementById("js-code").value;
            let output = document.getElementById("output").contentWindow.document;

            output.open();
            output.writeln(
                htmlcode +
                "<style>" + csscode + "</style>" +
                "<script>" + "window.onload = function() {" + jscode + "}" + "</" + "script>"
            );
            output.close();
        }
    </script>
@endsection
