<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <x-header></x-header>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <x-sidebar></x-sidebar>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-navbar></x-navbar>
                <!-- End of Topbar -->

                {{ $slot }}

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <x-modal></x-modal>

    <!-- Bootstrap core JavaScript-->
    <x-script></x-script>

</body>

</html>
