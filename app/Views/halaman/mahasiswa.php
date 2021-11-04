<?= $this->extend('halaman/templates/index'); ?>

<?= $this->section('content'); ?>
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque eos autem dicta a cum voluptas? A autem pariatur, quod accusamus odit incidunt aut, saepe assumenda odio voluptatem eius placeat! Aliquam!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio autem eum odio perspiciatis, accusamus modi! Fugit aut voluptatibus, eaque magnam at necessitatibus odio quod. Aspernatur, natus! Sed obcaecati culpa dolorem?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quam quae cumque, illum atque unde ea sequi aut delectus. Ullam id, natus repellendus illo est tempore harum quam libero exercitationem?</p>
        <!-- End of Main Content -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website <?= date('Y'); ?></span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<?= $this->endSection(); ?>