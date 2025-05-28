<!-- Header Start -->
    <?php include('header.php'); ?>
<!-- Header End -->
  
<!-- Sidebar Start -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar End -->

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Role</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="index.php">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="editrole.php">Edit Role</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Edit Role</h4>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row align-items-end g-3">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="form-group mb-0">
                            <label class="form-label">Edit Role</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12"></div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <center><div class="form-group mb-0">
                            <button type="button" class="btn btn-secondary">Save</button>
                            <button type="reset" class="btn btn-danger">
                            <i class="fas fa-redo me-2"></i>Reset
                          </button></center>
                          </div>
                          
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12"></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

<!-- Footer Start -->
    <?php include('footer.php'); ?>
<!-- Footer End -->

<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(function (btn) {
      btn.addEventListener("click", function () {
        Swal.fire({
          title: "Are you sure?",
          text: "Do you really want to delete this record?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#d33",
          cancelButtonColor: "#3085d6",
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel"
        }).then((result) => {
          if (result.isConfirmed) {
            // ✅ Do the deletion logic here (e.g., AJAX, remove row, etc.)
            Swal.fire("Deleted!", "The record has been deleted.", "success");
          } else if (result.dismiss === Swal.DismissReason.cancel) {
            // ❌ Cancelled
            Swal.fire("Cancelled", "The record is safe.", "info");
          }
        });
      });
    });
  });
</script>