<!-- Modal -->
<div class="modal fade p-3" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do not share these credentials with anyone else.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="classes/Connect.php">
          <div class="mb-3">
            <label for="host" class="form-label">Host</label>
            <input type="text" class="form-control" id="host" aria-describedby="host" name="host" required> 
            <div id="host" class="form-text">We'll never share your hostname with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="port" class="form-label">Port number</label>
            <input type="number" class="form-control" id="port" name="port" required>
          </div>
          <div class="mb-3">
            <label for="database" class="form-label">Database</label>
            <input type="text" class="form-control" id="database" name="database" required>
          </div> 
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
