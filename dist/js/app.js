var app = {
    Boot:function(){
        app.Form.Boot(); // boot all form functions
        app.Ui.Boot(); // boot all Ui functions
    },
    Form:{
        Boot:function(){

        }
    },
    Ui:{
        Boot:function(){
            app.Ui.toggleNewPasswordModal();
        },
        toggleNewPasswordModal:function(){
           $('#addNewLink').click(function (e) { 
                // show the modal window
                $('#newPasswordModal').toggleClass('hidden');
                // focus the first input field
                $('#newWebsiteAddressInput').focus();
           });
           $('#pwModalBg').click(function (e) { 
                // Hide the modal window

                // reset the form fields
                $('#newWebsiteAddressInput').val('');
                $('#newWebsitePasswordInput').val('');
           });
        }
    }
}

app.Boot();