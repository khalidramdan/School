$(".sweet-confirm i").click(function (e) { 
    e.preventDefault();
});
$(".sweet-confirm").click(function (e) {
    e.preventDefault();
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-danger',
            cancelButton: 'btn btn-success'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Avez-vous sûr?',
        text: "Vous ne pourrez pas revenir en arrière !!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oui, Supprimer!',
        cancelButtonText: 'No, Annuller!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            debugger
            $(e.target).parents("td").find('form').submit();
            swalWithBootstrapButtons.fire(
                'Supprimé!',
                'Ce professeur a été supprimé.',
                'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            debugger
            swalWithBootstrapButtons.fire(
                'Annulé',
                'Cette opération est annulée :)',
                'error'
            )
        }
    })

    // Swal.fire({
    //     title: 'Are you sure to delete ?',
    //     showDenyButton: true,
    //     showCancelButton: true,
    //     confirmButtonText: 'Delete',
    //     denyButtonText: `Don't Delete`,
    // }).then((result) => {
    //     /* Read more about isConfirmed, isDenied below */
    //     if (result.isConfirmed) {
    //         Swal.fire('Saved!', '', 'success')
    //     } else if (result.isDenied) {
    //         Swal.fire('Changes are not saved', '', 'info')
    //     }
    // })

    // swal({
    //     title: "Are you sure to delete ?",
    //     text: "You will not be able to recover this imaginary file !!",
    //     type: "warning",
    //     showCancelButton: !0,
    //     confirmButtonColor: "#DD6B55",
    //     confirmButtonText: "Yes, delete it !!",
    //     // closeOnConfirm: !1
    // },
    // function () {
    //     debugger;
    //     $("#"+e.target.form).submit();
    //     swal("Deleted !!", "Hey, your imaginary file has been deleted !!", "success")
    // })
});
