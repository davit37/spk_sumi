$(document).on('click', '.deleteAdmin', function () {
    var del_id = $(this).attr("id");
    

    swal({
        title: 'Anda yakin ?',
        text: "Data ini akan dihapus !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#74b9ff',
        cancelButtonColor: '#ff7675',
        confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
        window.open("action/delete_action.php?id="+del_id,"_self")
        }
    })
    
    
});
 
$(document).on('click', '.editAdmin', function(){
    var id = $(this).attr('id');
    window.open('?page=barang_edit&id='+id, "_self")
})



