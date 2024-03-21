@extends('pages.layouts')

@push('app-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="mb-4">
            Data Administrator
        </h4>
        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary btn-sm">
                    <i class="fa fa-plus" style="margin-right: 5px"></i> Tambah Data
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th class="text-center">Akses</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                        <tr>
                            <td class="text-center">{{ $i }}.</td>
                            <td>Virda Aulia</td>
                            <td>virda@gmail.com</td>
                            <td class="text-center">
                                <span class="badge btn-primary">
                                    Administrator
                                </span>
                            </td>
                            <td class="text-center">
                                <?php if ($i == 1) : ?>
                                    -
                                <?php else : ?>
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit" style="margin-right: 5px"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash" style="margin-right: 5px"></i> Hapus
                                    </button>
                                <?php endif ?>
                            </td>
                        </tr>
                        <?php endfor ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endpush
