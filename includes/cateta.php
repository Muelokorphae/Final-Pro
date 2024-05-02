<?php 
$sql=$conn->query('SELECT DISTINCT school_tag FROM school WHERE school_tag = school_tag');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <?php while($show = $sql->fetch_array()) { ?>
        <li class="nav-item <?php echo isset($_GET['school_tag']) && $_GET['school_tag'] == $show['school_tag'] ? 'active' : ''; ?>">
            <a class="nav-link" href="?school_tag=<?php echo $show['school_tag']; ?>"><?php echo $show['school_tag']; ?></a>
        </li>
    <?php } ?>
</ul>

    <form class="form-inline my-2 my-lg-0">
    <div class="right search"><input type="search" placeholder="Search..." id="search"><br></div>
    </form>
  </div>

</nav>