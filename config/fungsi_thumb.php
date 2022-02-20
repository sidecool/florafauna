<?php
function UploadBanner($fupload_name){
  $vdir_upload = "../../../foto/";
  $vfile_upload = $vdir_upload . $fupload_name;
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

function UploadAudio($fupload_name){
  $vdir_upload = "../../../audio/";
  $vfile_upload = $vdir_upload . $fupload_name;
  move_uploaded_file($_FILES["audio"]["tmp_name"], $vfile_upload);
}

function UploadVideo($fupload_name){
  $vdir_upload = "../../../video/";
  $vfile_upload = $vdir_upload . $fupload_name;
  move_uploaded_file($_FILES["video"]["tmp_name"], $vfile_upload);
}
?>
