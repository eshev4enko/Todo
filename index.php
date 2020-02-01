<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Fuck-->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <title>Test Task Ruby</title>
  </head>
  <body>
  <form method="post" id="ajax_form" class="todo-form" action="" >
    <div class="user-authorization">
      <button type="button" class="popup-btn" data-popup="popup-authorization">Authorization</button>
      <div class="login-wrap">
        <span class="user-authorization-login"></span>
        <button class="away-user">Log out</button>
      </div>
      <div id="popup-authorization" class="popup-authorization">
        <div class="popup-content">
          <h2>Enter login and password!</h2>
          <i class="fa fa-close close-popup fade-out" aria-hidden="true"></i>
          <div id="user-authorization-form" class="user-authorization-form">
            <div class="popup-field-wrap">
              <label for="userLogin">Login:</label>
              <input id="userLogin" type="text">
            </div>
            <div class="popup-field-wrap">
              <label for="userPassword">Password:</label>
              <input id="userPassword" type="password" autocomplete="current-password">
            </div>

            <button type="button" class="ok-popup">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="container">
        <div class="todo-list-inner-box clean-add-list">
          <header class="header-list col-md-8">
            <div class="header-title">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              <input type="text" class="list-title" placeholder="Complete the test task for Ruby Garage" readonly>
              <div class="header-list-edit">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <i class="fa fa-trash" aria-hidden="true"></i>
              </div>
          </div>
          <div class="header-add-task">
            <div class="enter-data-list">
              <i class="fa fa-plus" aria-hidden="true"></i>
              <div class="input-list-data">
                <input type="text" placeholder="Start typing here to create a task" value="">
                <button class="push">Add Task</button>
              </div>
            </div>
          </div>
        </header>
        <section class="body-list-data col-md-8">
          <ul class="list-sections"></ul>
        </section>
      </div>

      <div class="todo-list-inner-box">
        <header class="header-list col-md-8">
          <div class="header-title">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <input type="text" class="list-title" placeholder="Complete the test task for Ruby Garage" readonly>
            <div class="header-list-edit">
              <i class="fa fa-pencil" aria-hidden="true"></i>
              <i class="fa fa-trash" aria-hidden="true"></i>
            </div>
          </div>
          <div class="header-add-task">
            <div class="enter-data-list">
              <i class="fa fa-plus" aria-hidden="true"></i>
              <div class="input-list-data">
                <input type="text" placeholder="Start typing here to create a task" value="">
                <button>Add Task</button>
              </div>
            </div>
          </div>
        </header>
        <section class="body-list-data col-md-8">
            <ul class="list-sections"></ul>
        </section>
      </div>
    </div>
    <div class="buttons-box">
      <button class="add-todo-list">Add todo list</button>
      <button class="send">Send</button>
    </div>
  </div>
  </form>

    <!-- JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
  </body>
</html>