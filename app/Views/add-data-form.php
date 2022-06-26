<section class="auth-section password-reset-section text-center py-5">
  <div class="container">
    <div class="site-logo mb-4"><a class="navbar-brand me-0" href="#"><span class="logo-text">Add<span class="text-alt">Data</span></span></a></div>

    <div class="auth-wrapper mx-auto shadow p-5 rounded" style="max-width:800px;">

    <div class="auth-intro mb-4 text-center">Place holder</div>

    <div class="auth-form-container text-start">

      <form class="auth-form resetpass-form">
        <div class="mb-3">
          <label class="sr-only" for="key">Your Key</label>
          <input id="key" name="key" type="text" class="form-control" placeholder="key" required="required">
          <br/>
          <textarea id="value" name="value" class="form-control" placeholder="value" required="required" rows="15" style="height:180px;"></textarea>
        </div><!--//form-group-->
        <div class="text-center">
          <button type="button" class="btn btn-primary w-100 theme-btn mx-auto" onclick="writeData()">Write data</button>
        </div>
      </form>

      <div class="auth-option text-center pt-5"><a class="text-link" href="/"  target="_blank">Return to Home page</a>&nbsp;&nbsp; |&nbsp;&nbsp; <a class="text-link" href="/status"  target="_blank">Return to Status page</a></div>
    </div><!--//auth-form-container-->
  </div><!--//auth-wrapper-->

  </div><!--//container-->
</section><!--//auth-section-->
