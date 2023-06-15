@extends('admin.template.main')

@section('css')
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('main-content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard Admin</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <p>Jumlah Member</p>

                            <h3>{{ $membersCount }}</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-people"></i>
                        </div>
                        <a href="{{ route('admin.members.index') }}" class="small-box-footer">Lihat member <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <p>Jumlah Transaksi</p>

                            <h3>{{ $transactionsCount }}</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.transactions.index') }}" class="small-box-footer">Lihat transaksi <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <p>Transaksi Priority</p>

                            <h3>{{ $transactionsPriorityCount }}</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-speedometer"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <p>Transaksi Regular</p>

                            <h3>{{ $transactionsRegularCount }}</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-checkmark"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <p>Jumlah Voucher</p>

                            <h3>{{ $vouchersCount }}</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pricetag"></i>
                        </div>
                        <a href="{{ route('admin.vouchers.index') }}" class="small-box-footer">Lihat voucher <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <p>Average Harga</p>

                            <h3>Rp. {{ substr($pricelistsCount, 0, -5) }}</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-thumbsup"></i>
                        </div>
                        <a href="{{ route('admin.price-lists.index') }}" class="small-box-footer">Lihat daftar harga <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3">Transaksi Berjalan (Priority Service): </h3>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($priorityTransactions as $transaction)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ date('d F Y', strtotime($transaction->created_at)) }}</td>
                                            <td>
                                                @if ($transaction->status_id != '3')
                                                    <span class="text-warning">{{ $transaction->status->name }}</span>
                                                @else
                                                    <span class="text-success">{{ $transaction->status->name }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3">Transaksi Berjalan: </h3>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recentTransactions as $transaction)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ date('d F Y', strtotime($transaction->created_at)) }}</td>
                                            <td>
                                                @if ($transaction->status_id != '3')
                                                    <span class="text-warning">{{ $transaction->status->name }}</span>
                                                @else
                                                    <span class="text-success">{{ $transaction->status->name }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection
