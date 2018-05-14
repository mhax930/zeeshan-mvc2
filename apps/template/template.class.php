<?php
class Template{

  public function __construct() { }

  static function fileSuperMaster($file_name){
    include_once(__DIR__."../../views/partials/". $file_name . ".php");
  }

  static function fileIncluder($dir, $file_name){
    include_once(__DIR__."../../views/" . $dir ."/". $file_name . ".php");
  }

  static function paging($resource){
    echo '<div class="pagination">';
    $limit = 15;
    $total_pages = ceil(count($resource) / $limit);
    $str = str_replace("path=showSrch", "", $_SERVER['QUERY_STRING']);
    $whatIWant = "&". substr($str, strpos($str, "&purpose_id") + 1);
    $pager = null;
    if (strpos($str, 'page') !== false) { $pager =  'yes'; }

    if(($pager=="yes" || $pager==null) && !empty($total_pages)){
      echo "<a href='showSrch?page=0" .  $whatIWant . "' class='active'>First Page,</a>";
    }

    while(($i<$total_pages)){
        if((($total_pages% 2) == 0) && ($total_pages>1)){
         echo "<a href='showSrch?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        if((($total_pages% 2) != 0) && ($total_pages>1)){
          echo "<a href='showSrch?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        $i++;
    }
    
    if(($pager=="yes" || $pager==null) && ($total_pages>=1)){
      echo "<a href='showSrch?page=" . $total_pages .  $whatIWant . "' class='active'>Last Page</a>";
    }
    echo "</div>";
  }

  static function paging_props2($resource){
    echo '<div class="pagination">';
    $limit = 15;
    $total_pages = ceil(count($resource) / $limit);
    $str = str_replace("path=showMeProperty2", "", $_SERVER['QUERY_STRING']);
    $whatIWant = "&". substr($str, strpos($str, "&cid") + 1);
    $pager = null;
    if (strpos($str, 'page') !== false) { $pager =  'yes'; }

    if(($pager=="yes" || $pager==null) && !empty($total_pages)){
      echo "<a href='showMeProperty2?page=0" .  $whatIWant . "' class='active'>First Page,</a>";
    }

    while(($i<$total_pages)){
        if((($total_pages% 2) == 0) && ($total_pages>1)){
         echo "<a href='showMeProperty2?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        if((($total_pages% 2) != 0) && ($total_pages>1)){
          echo "<a href='showMeProperty2?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        $i++;
    }
    
    if(($pager=="yes" || $pager==null) && ($total_pages>=1)){
      echo "<a href='showMeProperty2?page=" . $total_pages .  $whatIWant . "' class='active'>Last Page</a>";
    }
    echo "</div>";
  }

  static function paging_getProps($resource){
    echo '<div class="pagination">';
    $limit = 15;
    $total_pages = ceil(count($resource) / $limit);
    $str = str_replace("path=getprop", "", $_SERVER['QUERY_STRING']);
    $whatIWant = "&". substr($str, strpos($str, "&purpose_id") + 1);
    $pager = null;
    if (strpos($str, 'page') !== false) { $pager =  'yes'; }

    if(($pager=="yes" || $pager==null) && !empty($total_pages)){
      echo "<a href='getprop?page=0" .  $whatIWant . "' class='active'>First Page,</a>";
    }

    while(($i<$total_pages)){
        if((($total_pages% 2) == 0) && ($total_pages>1)){
         echo "<a href='getprop?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        if((($total_pages% 2) != 0) && ($total_pages>1)){
          echo "<a href='getprop?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        $i++;
    }
    
    if(($pager=="yes" || $pager==null) && ($total_pages>=1)){
      echo "<a href='getprop?page=" . $total_pages .  $whatIWant . "' class='active'>Last Page</a>";
    }
    echo "</div>";
  }

  static function paging_guestSrch($resource){
    echo '<div class="pagination">';
    $limit = 15;
    $total_pages = ceil(count($resource) / $limit);
    $str = str_replace("path=showGuestSrch", "", $_SERVER['QUERY_STRING']);
    $whatIWant = "&". substr($str, strpos($str, "&purpose_id") + 1);
    $pager = null;
    if (strpos($str, 'page') !== false) { $pager =  'yes'; }

    if(($pager=="yes" || $pager==null) && !empty($total_pages)){
      echo "<a href='showGuestSrch?page=0" .  $whatIWant . "' class='active'>First Page,</a>";
    }

    while(($i<$total_pages)){
        if((($total_pages% 2) == 0) && ($total_pages>1)){
         echo "<a href='showGuestSrch?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        if((($total_pages% 2) != 0) && ($total_pages>1)){
          echo "<a href='showGuestSrch?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        $i++;
    }
    
    if(($pager=="yes" || $pager==null) && ($total_pages>=1)){
      echo "<a href='showGuestSrch?page=" . $total_pages .  $whatIWant . "' class='active'>Last Page</a>";
    }
    echo "</div>";
  }

  static function paging_props($resource){
    echo '<div class="pagination">';
    $limit = 15;
    $total_pages = ceil(count($resource) / $limit);
    $str = str_replace("path=showMeProperty", "", $_SERVER['QUERY_STRING']);
    $whatIWant = "&". substr($str, strpos($str, "&cid") + 1);
    $pager = null;
    if (strpos($str, 'page') !== false) { $pager =  'yes'; }

    if(($pager=="yes" || $pager==null) && !empty($total_pages)){
      echo "<a href='showMeProperty?page=0" .  $whatIWant . "' class='active'>First Page,</a>";
    }

    while(($i<$total_pages)){
        if((($total_pages% 2) == 0) && ($total_pages>1)){
         echo "<a href='showMeProperty?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        if((($total_pages% 2) != 0) && ($total_pages>1)){
          echo "<a href='showMeProperty?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        $i++;
    }
    
    if(($pager=="yes" || $pager==null) && ($total_pages>1)){
      echo "<a href='showMeProperty?page=" . $total_pages .  $whatIWant . "' class='active'>Last Page</a>";
    }
    echo "</div>";
  }

  static function paging_clientSrch($resource){
    echo '<div class="pagination">';
    $limit = 15;
    $total_pages = ceil(count($resource) / $limit);
    $str = str_replace("path=showGuestSrch", "", $_SERVER['QUERY_STRING']);
    $whatIWant = "&". substr($str, strpos($str, "&purpose_id") + 1);
    $pager = null;
    if (strpos($str, 'page') !== false) { $pager =  'yes'; }

    if(($pager=="yes" || $pager==null) && !empty($total_pages)){
      echo "<a href='showGuestSrch?page=0" .  $whatIWant . "' class='active'>First Page,</a>";
    }

    while(($i<$total_pages)){
        if((($total_pages% 2) == 0) && ($total_pages>1)){
         echo "<a href='showGuestSrch?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        if((($total_pages% 2) != 0) && ($total_pages>1)){
          echo "<a href='showGuestSrch?page=" .  ($i+1) .  $whatIWant . "' class='active'>" . ($i+1) . ",</a>";
        }
        $i++;
    }
    
    if(($pager=="yes" || $pager==null) && ($total_pages>=1)){
      echo "<a href='showGuestSrch?page=" . $total_pages .  $whatIWant . "' class='active'>Last Page</a>";
    }
    echo "</div>";
  }
}
?>