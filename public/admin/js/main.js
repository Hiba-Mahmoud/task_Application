

$(function() {
// delete
function toggleDeleteuserModal () {
       $('.delete_modale').on('click', function () {

          $('#deletModal').modal('toggle')
          var userId = $(this).attr('data-id');
          console.log(userId)
         $('#confirm_delete_user_btn').on('click',function(event){
             var me = $(this);
                   event.preventDefault();
                   if ( me.data('requestRunning') ) {
                       return;
                   }
                   me.data('requestRunning', true);
            console.log(userId)
             $.ajaxSetup({
                 headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
               });
             $.ajax({
                 url: "destroy",
                 method: 'POST',
                 data:'id='+userId,
                // datatype:'json',


                 success:function(data){
                     console.log(data);
                     $('#deletModal').modal('toggle');
                     $('#deleteMsg').modal('toggle');

                     me.data('requestRunning', false);

                    },
                    error:function(e){
                        console.log(e);
                        me.data('requestRunning', false);
                 }

             });



         })

       })



 }

 toggleDeleteuserModal()
function closeModal () {
       $('#delete').on('click', function () {

          $('#deleteMsg').modal('toggle')
          location.reload();



       })



 }

 closeModal()

})
