require('./bootstrap');
window.Swal = require("sweetalert2");
window.addEventListener("showSuccessMessage", event=>{
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        toast:true,
        title: event.detail.message || "Operation effectuée avec succes!",
        showConfirmButton: false,
        timer: 3000
    })
})



import "admin-lte/plugins/jquery/jquery";
import "admin-lte/plugins/bootstrap/js/bootstrap.bundle";
import "admin-lte/dist/js/adminlte";
