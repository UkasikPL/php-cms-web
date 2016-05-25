<?php
  $Year = "2016";
  $LatestVersion = "0.1";

  function checkActive($page)
  {
    if ($_GET['p'] == $page)
    {
      echo 'class="active"';
    }
  }

  function print_social()
  {
    $TEXT = [];
    $blank = "";
    $socialFB = 'https://www.facebook.com/profile.php?id=100011832900761';
    $socialYT = 'https://www.youtube.com/channel/UCjMqN-zASKBiWBwFKwoX58w';
    $socialTW = '';

    if ($socialFB != "")
    {
      $TEXT[sizeof($TEXT)] = '<a style="iconlink" href="'.$socialFB.'" target="_blank"><i class="icon-facebook icon"></i></a>';
    }
    if ($socialYT != "")
    {
      $TEXT[sizeof($TEXT)] = '<a style="iconlink" href="'.$socialYT.'" target="_blank"><i class="icon-youtube icon"></i></a>';
    }
    if ($socialTW != "")
    {
      $TEXT[sizeof($TEXT)] = '<a style="iconlink" href="'.$socialTW.'" target="_blank"><i class="icon-twitter icon"></i></a>';
    }

    for ($i=0; $i < sizeof($TEXT); $i++) {
      echo $TEXT[$i]."\n\t\t\t";
    }
  }

  function print_content()
  {
    if ($_GET['p'] == 'home')
    {
      include_once('content/home.php');
    }
    elseif ($_GET['p'] == 'download')
    {
      include_once('content/download.php');
    }
    elseif ($_GET['p'] == 'contact')
    {
      include_once('content/contact.php');
    }
    elseif ($_GET['p'] == 'donate')
    {
      include_once('content/donate.php');
    }
    elseif ($_GET['p'] == 'e404')
    {
      include_once('content/404.php');
    }
    else
    {
      header("Location: ?p=e404");
    }
  }
?>
