<?php require_once('layouts/header.php'); ?>
  <div id="wrapper" class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Hrvatska proljetna pedijatrijska škola</h1>
      </div>
      <div class="col-sm-9">
        <img src="img/bg/pedijatrija_main.jpg" class="fullwidth">
        <p>Curabitur condimentum dictum imperdiet. Donec ipsum elit, hendrerit a placerat id, viverra sit amet turpis. Donec volutpat massa ut cursus facilisis. Duis sollicitudin at sapien tristique suscipit. In tincidunt consequat suscipit. Curabitur cursus tempus tortor at vestibulum.</p>
        <p>Nulla nulla justo, viverra id justo in, porta dignissim turpis. Praesent consequat euismod urna efficitur maximus. Aliquam erat volutpat. Quisque cursus quam leo. Mauris in aliquam tortor. Ut sed pellentesque erat. Pellentesque sed odio neque. Cras posuere sapien ut est hendrerit tincidunt. Sed eleifend dignissim sollicitudin. Aenean et dapibus ex.</p>
      </div>
      <div class="col-sm-3">
        <?php 
        $data = array('Malo teksta', 'Tralalala', 'Jos nekog teksta', 'Evo opet teksta');
        for($i = 0; $i < 5; $i++) {
          echo "<p>";
          echo "<h3>".(rand(2000, 2015)).".</h3>";
          echo "<ul class='list-custom'>";
          for($j = 0; $j < rand(1,3); $j++)
            echo "<li>".$data[rand(0,3)]."</li>";
          echo "</ul>";
          echo "</p>";
        }

        ?>
        <a class="btn btn-success fullwidth" href="#">Vidjeti još...</a>
      </div>
    </div>
  </div>
  <br>
<?php require_once('layouts/footer.php'); ?>


