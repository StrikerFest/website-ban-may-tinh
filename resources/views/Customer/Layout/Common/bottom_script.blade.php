{{-- <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/waves.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/jquery.slimscroll.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/modernizr.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/css-scrollbars.js')}}"></script>
    <script src="{{ asset('js/highcharts.js') }}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/custom-prism.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/i18next.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/i18nextxhrbackend.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/i18nextbrowserlanguagedetector.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/jquery-i18next.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/pcoded.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/menu-hori-fixed.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/jquery.mcustomscrollbar.concat.min.js')}}"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript" src="{{ asset('js/script.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="284550efe2f34c11bdc2fce4-text/javascript"></script>
    <script type="284550efe2f34c11bdc2fce4-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ asset('js/rocket-loader.min.js')}}" data-cf-settings="284550efe2f34c11bdc2fce4-|49" defer=""></script> --}}

{{-- <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> --}}

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
<script>
    const tx = document.getElementsByTagName("textarea");
    for (let i = 0; i < tx.length; i++) {
        tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
        tx[i].addEventListener("input", OnInput, false);
    }

    function OnInput() {
        this.style.height = "auto";
        this.style.height = (this.scrollHeight) + "px";
    }
</script>

<script>
    function displayBlock() {
        document.getElementById("profile").style.display = "block";
    }

    function displayNone() {
        document.getElementById("profile").style.display = "none";
    }
</script>
