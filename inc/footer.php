<div>
	<!-- Footer -->
    <footer class="text-white pb-1" style="background-color: #c03369">
      <div class="container">
        <div class="row justify-content-evenly text-center">
          <div class="col-md-6">
            <p>Created with <i class="bi bi-heart-fill"></i> by <a href="#" class="text-white text-decoration-none fw-bold">Ageng Ari Nugroho</a></p>
          </div>
          <div class="col-md-6">
            <p>Anda admin? masuk <a href="#login" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#login">disini!</a></p>
          </div>
        </div>
      </div>
    </footer>

	<!-- Modal/Popup -->
    <div class="modal fade" id="login" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Login Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="admin/cek_login.php">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="masukan username disini" />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="masukan password anda" />
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary mt-2">Login</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <p>Maaf, login hanya dapat dilakukan oleh admin untuk mengelola sistem!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal/Popup -->

    <!-- Akhir Footer -->

	<!-- Option 1: Javascript Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>