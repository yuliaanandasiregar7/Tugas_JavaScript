$(document).ready(function () {
  $("#profile").click(function () {
    $("#content").html(
      "<h2>Profile Pribadi</h2><p>Selamat datang ! Ini adalah profile pribadi Saya .</p>"
    );
  });

  $("#moto_hidup").click(function () {
    $("#content").html(
      "<h2>Moto Hidup dan Alasan</h2><p>Moto Hidup : Berbuat baiklah kamu kepada sesama manusia ** Alasan : Karena kita semua hidup saling membutuhkan satu sama lain.</p>"
    );
  });

  $("#keahlian").click(function () {
    $("#content").html(
      "<h2>Keahlian dan Pengalaman</h2><p> Keahlian : Saya ahli bisa mengoding dan desain ** Pengalaman : Saya pernah membuat web covid dengan react js dan data film dengan memakai API .</p>"
    );
  });
});
