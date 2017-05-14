<?php include 'inc/configAdmin.php'; $template['header_link'] = 'PAGES'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- FAQ Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Frequently Asked Questions</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Extra Pages</li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END FAQ Header -->

    <!-- Intro Block -->
    <div class="block">
        <!-- Intro Title -->
        <div class="block-title">
            <h2>General</h2>
        </div>
        <!-- END Intro Title -->

        <!-- Intro Content -->
        <div id="faq1" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1"><strong>Welcome to Simple O</strong></a>
                    </div>
                </div>
                <div id="faq1_q1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>Simple-O (Sistem Penilaian Esai Otomatis) merupakan program berbasis web untuk penilaian esai yang dikembangkan di Departemen Teknik Elektro Fakultas Teknik Universitas Indonesia sejak tahun 2007.</p>
                       
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2"><strong>Bagaimana cara masuk ke akun saya?</strong></a>
                    </div>
                </div>
                <div id="faq1_q2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Untuk dapat masuk, anda dapat membuka page welcome Kemudian masukkan password dan email anda</p>
                        <p class="remove-margin"></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3"><strong>Bagaimana cara keluar dari akun saya?</strong></a>
                    </div>
                </div>
                <div id="faq1_q3" class="panel-collapse collapse">
                    <div class="panel-body">Untuk dapat keluar, anda dapat mengklik tombol profil di pojok kanan atas, kemudian klik log out</div>
                </div>
            </div>
        </div>
        <!-- END Intro Content -->
    </div>
    <!-- END Intro Block -->

    <!-- Functionality Block -->
    <div class="block">
        <!-- Functionality Title -->
        <div class="block-title">
            <h2>Mahasiswa</h2>
        </div>
        <!-- END Functionality Title -->

        <!-- Functionality Content -->
        <div id="faq2" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1"><strong>Bagaimana cara mengikuti ujian?</strong></a>
                    </div>
                </div>
                <div id="faq2_q1" class="panel-collapse collapse in">
                    <div class="panel-body">Pilih mata kuliah yang tersedia, kemudian anda dapat melihat ujian yang sedang dibuka.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2"><strong>Bagaimana cara melihat nilai yang saya dapat?</strong></a>
                    </div>
                </div>
                <div id="faq2_q2" class="panel-collapse collapse">
                    <div class="panel-body">Anda dapat melihatnya di halaman View Grades</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3"><strong>Bagaimana cara melihat mata kuliah yang sedang saya ikuti?</strong></a>
                    </div>
                </div>
                <div id="faq2_q3" class="panel-collapse collapse">
                    <div class="panel-body">Anda dapat melihatnya di halaman my courses</div>
                </div>
            </div>
        </div>
        <!-- END Functionality Content -->
    </div>
    <!-- END Functionality Block -->

    <!-- Payments Block -->
    <div class="block">
        <!-- Payments Title -->
        <div class="block-title">
            <h2>Dosen</h2>
        </div>
        <!-- END Payments Title -->

        <!-- Payments Content -->
        <div id="faq3" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1"><strong>Bagaimana cara membuka kelas?</strong></a>
                    </div>
                </div>
                <div id="faq3_q1" class="panel-collapse collapse in">
                    <div class="panel-body">Anda dapat mengajukan pembukaan kelas baru ke admin</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q2"><strong>Bagaimana cara membuat ujian baru?</strong></a>
                    </div>
                </div>
                <div id="faq3_q2" class="panel-collapse collapse">
                    <div class="panel-body">Anda dapat masuk ke halaman view current exam kemudian memilih tombol add</div>
                </div>
            </div>
        </div>
        <!-- END Payments Content -->
    </div>
    <!-- END Payments Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>