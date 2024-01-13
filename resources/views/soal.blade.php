@extends('partial.sidebar')
@section('isi')
    <section>
        <h1>Live Coding</h1>
        <h5>Berikut adalah contoh-contoh soal UKK tahun sebelumnya. Silahkan dikerjakan dan dikumpulkan agar mendapat lebih
            banyak point</h5>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card mb-4 mt-4" style="max-width: 540px;" id="soal1">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Emblem_of_Federal_security_service.svg/150px-Emblem_of_Federal_security_service.svg.png"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p>Live Coding 1</p>
                                    <h5 class="card-title">Aplikasi Pengaduan Masyarakat</h5>
                                    <a href="soalukk">
                                        <p class="card-text">Kota Malang dalam rangka mewadahi aspirasi masyarakat
                                            membutuhkan suatu
                                            aplikasi yang bisa menampung pengaduan masyarakat secara real...
                                        </p>
                                    </a>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 ">
                    <div class="card" style="width: 18rem;" id="peringkat">
                        <div class="card-header">
                            Peringkat
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Akbar</li>
                            <li class="list-group-item">Yadi </li>
                            <li class="list-group-item">Aldi Chan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
