<header class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-dark nav1">
  <a class="navbar-brand" href="/">
    <img src="images/logo.png" alt="Logo" class="pl-2" style="width:110px;">
      <span class="badge badge-transparent"><p style="font-size: 24px;">RN Nepal</p></span>
  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{'/' == request()->path() ? 'active' : ''}}">
            <a class="nav-link" href="/"><i class="fas fa-home"></i>&nbsp;Home</a>
          </li>
          <li class="nav-item {{'news' == request()->path() ? 'active' : ''}}">
            <a class="nav-link" href="/news"><i class="fas fa-newspaper"></i>&nbsp;News</a>
          </li>
          <li class="nav-item dropdown {{'tournaments' == request()->path() ? 'active' : ''}} {{'tournamentDetail' == request()->path() ? 'active' : ''}} {{'UpcomingTournament' == request()->path() ? 'active' : ''}}">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-gamepad"></i> Tournaments
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-white" href="/tournaments">PUBG Mobile</a>
          </div>
          </li>
          <li class="nav-item {{'results' == request()->path() ? 'active' : ''}} {{'FinalResult' == request()->path() ? 'active' : ''}} {{'MatchdayResult' == request()->path() ? 'active' : ''}}">
            <a class="nav-link" href="/results">Results</a>
          </li>
          <li class="nav-item {{'aboutus' == request()->path() ? 'active' : ''}}">
            <a class="nav-link" href="/aboutus">About Us</a>
          </li>
          <li class="nav-item {{'contactus' == request()->path() ? 'active' : ''}}">
            <a class="nav-link" href="/contactus">Contact Us</a>
          </li>
    </ul>
  </div>
</nav>

<div>
  <nav class="navbar navbar-expand-sm navbar-dark nav2">
      <div class="row ml-auto mr-3">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
           <!-- Links -->
           <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="/sponsor"><i class="fas fa-users"></i>&nbsp; Become a Sponsor</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-target="#userLoginModal" data-toggle="modal"><i class="fas fa-sign-in-alt"></i>&nbsp; Login </a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
</div>
</header>
<div class="loginModal">
  <div class="modal fade" id="userLoginModal">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #1e272e;">

        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="text-center text-light">User Login</h2>
            <button class="bg-dark text-light" type="submit" data-dismiss="modal" style="cursor: pointer;">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php" class="was-validated">
            <div class="form-group">
              <label for="uname">Username :</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
              <label for="pwd">Password :</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group form-check pt-2">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember Me
              </label>
            </div>
          </form>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>
