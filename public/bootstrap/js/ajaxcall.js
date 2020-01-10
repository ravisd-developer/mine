$(document).ready(function () {

    $('#myClassicTabOrange').on('click', 'a', function () {
        $('.name-section p').addClass('name');
        $('.name-section h1').hide();
        // console.log("ravi");
    })
    // console.log("ravi");

    //url submit function
    $('#urlsubmit').on('click', function (e) {
        e.preventDefault();
        $data = $("#insert-url").serialize();
        $.ajax({
            url: 'insert',
            method: 'get',
            data: $data,
            success: function (response) {
                //console.log(response)
                if (response == 0) {
                    $.toaster({
                        message: 'Enter Correct URL',
                        title: 'Error',
                        priority: 'danger'
                    });
                } else {
                    $.toaster({
                        message: 'Your Shortened URL ready',
                        title: 'Success',
                        priority: 'Success'
                    });
                    $('#insert-url').trigger("reset");
                    var html = '<div>';
                    html += '<p class="link-url">Short link</p>';
                    html += '<input class="form-control" type="text" name="url" id="r-url" value="' + response + '">';
                    html += '<input class="btn btn-outline-success   waves-effect" type="button" value="' + response + '" id="u-url">';
                    html += '<p class="">Click here to Copy</p>';
                    html += '</div>';
                    $('.user-url').append(html);
                    $('#u-url').on('click', function () {
                        var copyText = document.getElementById("r-url");
                        copyText.select();
                        document.execCommand("copy");
                        copyText.setSelectionRange(0, 99999);
                        $.toaster({
                            message: 'Copied!!',
                            priority: 'Success'
                        });
                    })
                }
            }
        })
    })
     //url submit function ends


     //copmpany registraion starts
     $('#registerButton').on('click', function(e){
   
         e.preventDefault();
      $formValues = $('#registerForm').serialize();
        $.ajax({
            url: 'register',
            data :  $formValues,
            success: function(response){
                
                if(response == 0){
                    $.toaster({
                        message: 'Error : Fill All The Fields',
                        priority: 'danger'
                    });
                }
                else{
                    $.toaster({
                        message: 'Success : Fill All The Fields',
                        priority: 'success'
                    });
                    console.log(response);
                    $('#registerForm').trigger("reset");;
                }
            },
            error : function(errorMessage){
            console.log(errorMessage);

            }
        })

     })






})
