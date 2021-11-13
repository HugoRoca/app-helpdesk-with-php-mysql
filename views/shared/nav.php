<nav class="side-menu">
  <?php
  if ($_SESSION["idRol"] == 1) {
  ?>
    <ul class="side-menu-list">
      <li class="red">
        <a href="mail.html">
          <i class="font-icon glyphicon glyphicon-send"></i>
          <span class="lbl">Dashboard</span>
        </a>
      </li>
      <li class="blue-dirty">
        <a href="..\ticket\">
          <span class="glyphicon glyphicon-th"></span>
          <span class="lbl">Tickets</span>
        </a>
      </li>
      <!-- <header class="side-menu-title">Tags</header> -->
      <li>
        <a href="../ticket/query.php">
          <i class="glyphicon glyphicon-th"></i>
          <span class="lbl">Consultant Ticket</span>
        </a>
      </li>
    </ul>
  <?php
  } else {
  ?>
    <ul class="side-menu-list">
      <li class="red">
        <a href="mail.html">
          <i class="font-icon glyphicon glyphicon-send"></i>
          <span class="lbl">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../ticket/query.php">
          <i class="glyphicon glyphicon-th"></i>
          <span class="lbl">Consultant Ticket</span>
        </a>
      </li>
    </ul>
  <?php
  }
  ?>
</nav>