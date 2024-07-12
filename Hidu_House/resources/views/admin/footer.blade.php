  <!--   Core JS Files   -->
  <script src="/fontend/js/core/jquery-3.7.1.min.js"></script>
  <script src="/fontend/js/core/popper.min.js"></script>
  <script src="/fontend/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="/fontend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Chart JS -->
  <script src="/fontend/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="/fontend/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="/fontend/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="/fontend/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="/fontend/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="/fontend/js/plugin/jsvectormap/jsvectormap.min.js"></script>
  <script src="/fontend/js/plugin/jsvectormap/world.js"></script>

  <!-- Sweet Alert -->
  <script src="/fontend/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="/fontend/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="/fontend/js/setting-demo.js"></script>
  <script src="/fontend/js/demo.js"></script>
  <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#177dff",
      fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#f3545d",
      fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#ffa534",
      fillColor: "rgba(255, 165, 52, .14)",
    });
  </script>