function btnDelete(){
    swal({
        title: "Konfirmasi Penghapusan",
        text: "Yakin ingin menghapus data ini secara permanen?",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Data berhasil dihapus", {
            icon: "success",
          });
        } else {
          swal("Data tidak jadi dihapus");
        }
      });
}

$(document).ready(function(){
    $('.modal').modal();
  });

$(document).ready(function(){
    $('select').formSelect();
});