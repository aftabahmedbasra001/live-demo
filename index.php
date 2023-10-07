<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VFS - Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


  <nav class="navbar navbar-expand-lg border-bottom border-body">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img width="250" src="./assets/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-danger" type="submit">Search for Slot</button>
        </form>
      </div>
    </div>
  </nav>


  <div class="vfs-search-form">
    <div class="container">
      <div class="form-main">
        <form action="" class="d-block w-100">
          <div class="form-group mt-3 mb-3 text-center red">
            <h3 class="text-bg-info  p-3">
              Wait for a while let chrome extension check if the slot is available for selected city and visa type, if yes, you will see the response here
            </h3>
          </div>
          <div class="mb-3">
            <label for="category">Select City</label>
            <select class="form-control p-3" name="category" id="category">
              <option value="banglor">Bangalor</option>
              <option value="hydrabad">Haydrabad</option>
              <option value="chinnai">Chinnai</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="type">Visa Type</label>
            <select class="form-control p-3" name="type" id="type">
              <option value="national">National</option>
              <option value="international">International</option>
            </select>
          </div>

          <div class="mb-3">
            <div class="response text-bg-info p-3">
              LOADING RESPONES...
            </div>
          </div>

          <div class="mb-3">
            <input type="submit" value="Search For Slot" class="search-btn btn btn-danger">
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="./assets/jquery-3.1.1.min.js"></script>

  <script>
    $(document).ready(() => {


      $('.search-btn').click((e) => {


        e.preventDefault();

        let response = $('.response');
        $(response).removeClass('text-bg-info').removeClass('text-bg-success').removeClass('text-bg-warning');

        const random = Math.round(Math.random());

        if (random == 0) {
          $(response).addClass('text-bg-warning').text('NO slot is available')
        } else {
          $(response).addClass('text-bg-success').text('SLOT is available')
        }



      });


    });
  </script>
</body>

</html>