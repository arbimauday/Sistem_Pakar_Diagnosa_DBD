@section('title', 'Pengunjung')
<div class="container-fluid">
    <div class="header">
        <h1 class="header-title">
            Pengunjung
        </h1>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header row">
                    <div class="col-sm-6">
                        <h2><b>Tabel Pengunjung</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0 search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input wire:model="cari" class="form-control form-control-sm ml-3 w-50" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatables-basic" class="table table-striped dataTable dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatables-basic_info">
                            <thead>
                            <tr role="row">
                                {{-- <button wire:click="sorting(nama)" type="button">V</button> --}}
                                <th class="sorting_asc">No</th>
                                <th class="sorting">Nama Panjang</th>
                                <th class="sorting">Jenis Kelamin</th>
                                <th class="sorting">Umur</th>
                                <th class="sorting">Waktu</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pengunjungs as $diagnosa)
                                <tr role="row" class="odd">
                                    <td class="sorting_1 dtr-control">{{$loop->iteration}}</td>
                                    <td>{{$diagnosa->fullName}}</td>
                                    <td>{{$diagnosa->gender}}</td>
                                    <td>{{$diagnosa->age}}</td>
                                    <td>{{$diagnosa->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
