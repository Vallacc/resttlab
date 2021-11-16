<?= $this->extend('halaman/templates/index'); ?>

<?= $this->section('content'); ?>
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Program Studi</th>
                                <th>Npm</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th>Periode Masuk</th>
                                <th>Detail</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Program Studi</th>
                                <th>Npm</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th>Periode Masuk</th>
                                <th>Detail</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody class="text-center">
                            <?php foreach ($mahasiswa as $key => $maha) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $maha['nama_mahasiswa'] ?></td>
                                    <td><?= $maha['nama_program_studi'] ?></td>
                                    <td><?= $maha['nim'] ?></td>
                                    <td><?= $maha['jenis_kelamin'] ?></td>
                                    <td><?= $maha['nama_status_mahasiswa'] ?></td>
                                    <td><?= $maha['nama_periode_masuk'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDetail<?= $maha['id_mahasiswa'] ?>">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website <?= date('Y'); ?></span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $key => $maha) : $no++; ?>
            <!-- Modal Detail -->
            <div class="modal fade" id="modalDetail<?= $maha['id_mahasiswa'] ?>" tabindex="-1" aria-labelledby="exampleModalDetail" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Id Mahasiswa</td>
                                        <td>:</td>
                                        <td><?= $maha['id_mahasiswa'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Mahasiswa</td>
                                        <td>:</td>
                                        <td><?= $maha['nama_mahasiswa'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td><?= $maha['jenis_kelamin'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td><?= $maha['tanggal_lahir'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Id Perguruan Tinggi</td>
                                        <td>:</td>
                                        <td><?= $maha['id_perguruan_tinggi'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Id Perguruan Tinggi</td>
                                        <td>:</td>
                                        <td><?= $maha['id_perguruan_tinggi'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Id Agama</td>
                                        <td>:</td>
                                        <td><?= $maha['id_agama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Agama</td>
                                        <td>:</td>
                                        <td><?= $maha['nama_agama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Id Prodi</td>
                                        <td>:</td>
                                        <td><?= $maha['id_prodi'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Prodi</td>
                                        <td>:</td>
                                        <td><?= $maha['nama_program_studi'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td><?= $maha['nama_status_mahasiswa'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Npm</td>
                                        <td>:</td>
                                        <td><?= $maha['nim'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Id Periode</td>
                                        <td>:</td>
                                        <td><?= $maha['id_periode'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Periode Masuk</td>
                                        <td>:</td>
                                        <td><?= $maha['nama_periode_masuk'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Created At</td>
                                        <td>:</td>
                                        <td><?= $maha['created_at'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Updated At</td>
                                        <td>:</td>
                                        <td><?= $maha['updated_at'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Akhir Modal Detail -->

        <!-- Modal Edit -->
        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalDetail" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Edit -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<?= $this->endSection(); ?>