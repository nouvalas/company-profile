<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExample">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="assets/img/kategori/apart.png" class="img-fluid" alt="one">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="assets/img/kategori/livingroom.png" class="img-fluid" alt="two">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="assets/img/kategori/bedroom.png" class="img-fluid" alt="three">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="assets/img/kategori/cafe.png" class="img-fluid" alt="four">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="assets/img/kategori/kitchen.png" class="img-fluid" alt="five">
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script>
      var items = document.querySelectorAll('.carousel .carousel-item');
      items.forEach((e)=>{
        const slide = 4;
        let next = e.nextElementSibling;
        for (var i = 0; i < slide; i++){
          if (!next) {
            next = items[0]
          }
          let clonechild = next.cloneNode(true)
          e.appendChild(clonechild.children[0])
          next = next.nextElementSibling
        }
      })
    </script>

  </body>
</html>