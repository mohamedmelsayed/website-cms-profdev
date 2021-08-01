// $(document).ready(function(){
//     $("#salesdove").click(function(){

//         $.ajax({
//             type: 'GET',
//             url: 'http://localhost/website/requests.php?salesdove=true',
//             success: function(data) {
//                 $("#content").html(data);

//             }
//         });
// });

// $("#ourteam").click(function(){

//     $.ajax({
//         type: 'GET',
//         url: 'http://localhost/website/requests.php?team=true',
//         success: function(data) {
//             $("#content").html(data);

//         }
//     });
// });
// });



$(document).ready(function(){

$("#homepage").click(function(){

    $.ajax({
        type: 'GET',
        url: 'http://localhost/website/requests.php?aboutUs=true',
        success: function(data) {
            $("#content").html(data);

        }
    });
});


$("#contactUs").click(function(){

    $.ajax({
        type: 'GET',
        url: 'http://localhost/website/requests.php?contactus=true',
        success: function(data) {
            $("#content").html(data);

        }
    });
});

$("#videos").click(function(){

    $.ajax({
        type: 'GET',
        url: 'http://localhost/website/requests.php?videos=true',
        success: function(data) {
            // alert(data);
            $("#content").html(data);

        }
    });
});

$("#send").click(function(){
    // alert($('#email2').val());
    let url='http://www.prof-dev.com/mail.php?title='+$('#name2').val()+'&email='+$('#email2').val()+'&text='+$('#message2').val();
    // alert(url);
    $.ajax({
        type: 'GET',
        url: 'http://www.prof-dev.com/mail.php?title='+$('#name2').val()+'&email='+$('#email2').val()+'&text='+$('#message2').val(),
        success: function(data) {
            if(data=="true"){
                alert("Your email is received");

            }
            else{
                alert("error happend");

            }
            // $("#content").html(data);

        }
    });
});

});





$('#modal1').on('hidden.bs.modal', function (e) {
    // do something...
    $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
  });
  
  $('#modal6').on('hidden.bs.modal', function (e) {
    // do something...
    $('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
  });
  
  $('#modal4').on('hidden.bs.modal', function (e) {
    // do something...
    $('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
  });