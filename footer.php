    <footer class="container-fluid bg-dark text-center p-2">
      <small class="text-white">Copyright &copy; 2024 || Designed By: Rishabh Rawat || <a href="#login" data-bs-toggle="modal" data-bs-target="#adloginformModal">Admin Login</a></small>
    </footer>

    <!-- User Registration -->
    <!-- Modal -->
    <div class="modal fade" id="regformModal" tabindex="-1" aria-labelledby="regformModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"  style="background-color: bisque;">
          <div class="modal-header" style="border-bottom: 2px solid black;">
            <h1 class="modal-title fs-5" id="regformModalLabel">User Registration</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="border-bottom: 2px solid black;">
            <!-- User Registration Form -->
            <form>
              <div class="form-group">
                <i class="fas fa-user"></i>
                <label for="usrRegName" class="pl-2 font-weight-bold">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="usrRegName" id="usrRegName">
              </div>
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="usrRegEmail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="usrRegEmail" id="usrRegEmail">
                <small class="form-text">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="usrRegPass" class="pl-2 font-weight-bold">Create Password</label>
                <input type="password" class="form-control" placeholder="Password" name="usrRegPass" id="usrRegPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Sign Up</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <!-- User Login -->
    <!-- Modal -->
    <div class="modal fade" id="loginformModal" tabindex="-1" aria-labelledby="loginformModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"  style="background-color: bisque;">
          <div class="modal-header" style="border-bottom: 2px solid black;">
            <h1 class="modal-title fs-5" id="loginformModalLabel">User Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="border-bottom: 2px solid black;">
            <!-- User Login Form -->
            <form id="usrLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="usrLogEmail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="usrLogEmail" id="usrLogEmail">
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="usrLogPass" class="pl-2 font-weight-bold">Enter Password</label>
                <input type="password" class="form-control" placeholder="Password" name="usrLogPass" id="usrLogPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="usrLoginBtn">Login</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Admin Login -->
    <!-- Modal -->
    <div class="modal fade" id="adloginformModal" tabindex="-1" aria-labelledby="adloginformModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"  style="background-color: bisque;">
          <div class="modal-header" style="border-bottom: 2px solid black;">
            <h1 class="modal-title fs-5" id="adloginformModalLabel">Admin Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="border-bottom: 2px solid black;">
            <!-- Admin Login Form -->
            <form id="adLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="adLogEmail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="adLogEmail" id="adLogEmail">
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="adLogPass" class="pl-2 font-weight-bold">Enter Password</label>
                <input type="password" class="form-control" placeholder="Password" name="adLogPass" id="adLogPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="adLoginBtn">Login</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="JS/jquery.min.js"></script>
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/all.min.js"></script>
  </body>
</html>