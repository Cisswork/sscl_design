        <footer class="footer">
            <div class="container-fluid d-flex justify-content-center">
                <div class="copyright">
                    2025, All Right Reserved | Design & Developed <i class="fa fa-heart heart text-danger"></i> By <a href="https://www.myamberinnovations.com/" target="_blank">Amber Innovations</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
    <!-- Core JS Files -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- jQuery Sparkline -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/circles/0.0.6/circles.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap-world-mill.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>



    <!-- DataTables and Buttons JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    
    <!-- Keep your custom JS files -->
    <script src="assets/js/kaiadmin.min.js"></script>
    <script src="assets/js/setting-demo.js"></script>
   
</body>
</html>

<!-- Graph Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
// Status Chart (Doughnut)
new Chart(document.getElementById('statusChart'), {
  type: 'doughnut',
  data: {
    labels: ['Pending', 'In Progress', 'Completed', 'Flagged'],
    datasets: [{
      data: [35, 25, 30, 10],
      backgroundColor: ['#FFC107', '#1572E8', '#31CE36', '#F25961'],
      borderWidth: 0
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        position: 'bottom',
        labels: {
          padding: 20,
          usePointStyle: true
        }
      }
    },
    cutout: '70%'
  }
});

// Screening Chart (Bar)
new Chart(document.getElementById('screeningChart'), {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [{
      label: 'Completed',
      data: [65, 59, 80, 81, 56, 55],
      backgroundColor: '#1572E8',
      borderRadius: 5
    }, {
      label: 'Pending',
      data: [28, 48, 40, 19, 86, 27],
      backgroundColor: '#FFC107',
      borderRadius: 5
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        position: 'bottom'
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        grid: {
          borderDash: [4, 4]
        }
      },
      x: {
        grid: {
          display: false
        }
      }
    }
  }
});
});
</script>

<script>
// Summernote 
  $(document).ready(function() {
      $('#summernote').summernote({
          height: 500,
          toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'underline', 'clear']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link']],
              ['view', ['fullscreen', 'codeview']]
          ]
      });
  });
</script>

<script>
// Table Script
  $(document).ready(function () {
    $("#basic-datatables").DataTable({});

    $("#multi-filter-select").DataTable({
      pageLength: 5,
      initComplete: function () {
        this.api()
          .columns()
          .every(function () {
            var column = this;
            var select = $(
              '<select class="form-select"><option value=""></option></select>'
            )
              .appendTo($(column.footer()).empty())
              .on("change", function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                column
                  .search(val ? "^" + val + "$" : "", true, false)
                  .draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append(
                  '<option value="' + d + '">' + d + "</option>"
                );
              });
          });
      },
    });

    // Add Row
    var table = $("#add-row").DataTable({
      dom: 'Bfrtip',
      buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
      pageLength: 5,
    });


    // Action buttons HTML
    var action = `
      <td>
        <div class="form-button-action">
          <button type="button" data-bs-toggle="tooltip" title="Edit Task" class="btn btn-link btn-primary btn-lg">
            <i class="fa fa-edit"></i>
          </button>
          <button type="button" data-bs-toggle="tooltip" title="Remove" class="btn btn-link btn-danger">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </td>`;

    // Handle Add Row button click
    $("#addRowButton").click(function () {
      table.row.add([
        $("#addName").val(),
        $("#addPosition").val(),
        $("#addOffice").val(),
        action
      ]).draw(false);
      $("#addRowModal").modal("hide");
    });
      });
</script>




