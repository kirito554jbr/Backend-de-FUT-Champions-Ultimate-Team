<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php include'./cennect.php';?>
    <section class="mb-5">
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./src/assets/img/376304-middle-removebg-preview.png"  alt="Logo" width="50" height="24" class="d-inline-block align-text-top">
      FUT-CHAMP
    </a>
  </div>
</nav>
    </section>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Nation</th>
      <th>Position</th>
      <th>Club</th>
      <th>ADD</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
$query = "SELECT *FROM players;";

$result = mysqli_query($link, $query); 
  
 
    // OUTPUT DATA OF EACH ROW 
    while($row = mysqli_fetch_assoc($result)) { 
        echo "name: " . $row["name"] 
        . " - photo: <img src=" . $row['photo'] . " /><br>"
        . " - position_p: " . $row["position_p"]. "<br>"; 
        
    } 
    ?>
  </tbody>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="<?php echo  $row["photo"];?>"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">Lionel Messi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Argentina</p>
      </td>
      <td>
       <p>RW</p>
      </td>
      <td>Inter Miami</td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
      <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold"
                data-mdb-ripple-color="dark"
                >
          Edit
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://cdn.sofifa.net/players/203/376/25_120.png"
              class="rounded-circle"
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">Virgil van Dijk</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Netherlands</p>
      </td>
      <td>
        <p>CB</p>
      </td>
      <td>Liverpool</td>
      <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold"
                data-mdb-ripple-color="dark"
                >
          Edit
        </button>
      </td>
      <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold"
                data-mdb-ripple-color="dark"
                >
          Edit
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://cdn.sofifa.net/players/200/389/25_120.png"
              class="rounded-circle"
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">Jan Oblak</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Slovenia</p>
      </td>
      <td>
        <p>GK</p>
      </td>
      <td>Atletico Madrid</td>
      <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold"
                data-mdb-ripple-color="dark"
                >
          Edit
        </button>
      </td>
       <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold"
                data-mdb-ripple-color="dark"
                >
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>