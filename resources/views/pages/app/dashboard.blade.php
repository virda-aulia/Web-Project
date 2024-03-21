@extends('pages.layouts')

@push('app-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="mb-4">
            Dashboard
        </h4>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="fa fa-users ti-md"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">42</h4>
                        </div>
                        <p class="mb-1">
                            Jumlah Data Balita
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card card-border-shadow-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="fa fa-gears ti-md"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">40</h4>
                        </div>
                        <p class="mb-1">
                            Jumlah Data Cek Gizi
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card card-border-shadow-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="fa fa-book ti-md"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">30</h4>
                        </div>
                        <p class="mb-1">
                            Jumlah Clustering
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mb-4">
            Hasil Silhouette
        </h4>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="fa fa-users ti-md"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">42</h4>
                        </div>
                        <p class="mb-1">
                            Cluster 1
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card card-border-shadow-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="fa fa-gears ti-md"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">40</h4>
                        </div>
                        <p class="mb-1">
                            Cluster 2
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card card-border-shadow-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class="fa fa-book ti-md"></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">30</h4>
                        </div>
                        <p class="mb-1">
                            Cluster 3
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <h5 class="mb-4 text-center">
                            Pie Chart
                        </h5>
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="col-md-6 mb-2">
                        <h5 class="mb-4 text-center">
                            Dendogram Clustering
                        </h5>
                        <canvas id="myBar"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('app-js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const bar = document.getElementById('myBar');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        new Chart(bar, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
