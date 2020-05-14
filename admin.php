<?php 
if($_GET['pass']=='ku'){
    include('urlfile.php');
    function openFile($linkurl){
        if (file_exists($linkurl)){
            $datafile = (int)file_get_contents($linkurl);
            return $datafile;
        }
    }
    echo "<a href='.'>back<a/>";
    echo "<div style='padding: 20px;'><h1>View Page</h1><br/>";
    echo "PURE_VIEW_FROM_INDEX | ".openFile($urlfile_index)."<br/>";
    echo "PURE_VIEW_FROM_SCI | ".openFile($urlfile_sci)."<br/>";
    echo "PURE_VIEW_FROM_ENGINEER | ".openFile($urlfile_en)."<br/>";
    echo "PURE_VIEW_FROM_NEW | ".openFile($urlfile_new)."<br/>";
    echo "PURE_VIEW_FROM_NEWNEW | ".openFile($urlfile_new2)."<br/>";
    echo "</div><hr>";

    //ZONE CAL
    echo "<div style='padding: 20px;'><h1>Type Click</h1><br/>";
    echo "CLICK_THROUGH_LINK | ".openFile($urlfile_linkclick)."<br/>";
    echo "CLICK_THROUGH_IMG | ".openFile($urlfile_linkimg)."<br/>";
    echo "</div><hr>";

    //ZONE MAP CLICK
    echo "<div style='padding: 20px;'><h1>Type Map Click</h1><br/>";
    echo "CLICK_MAP_SCI | ".openFile($urlfile_mapsci)."<br/>";
    echo "CLICK_MAP_ENGINEER | ".openFile($urlfile_mapen)."<br/>";
    echo "CLICK_MAP_NEW | ".openFile($urlfile_mapnew)."<br/>";
    echo "CLICK_MAP_NEWNEW | ".openFile($urlfile_mapnew2)."<br/>";
    echo "</div><hr>";
}