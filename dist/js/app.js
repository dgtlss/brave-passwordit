var app = {
    Boot:function(){
        app.Form.Boot();
        app.Ui.Boot();
    },
    Form:{
        Boot:function(){

        }
    },
    Ui:{
        Boot:function(){
            app.Ui.toggleEditModal();
        },
        toggleEditModal:function(){
            console.log('modal toggle active');
        }
    }
}

app.Boot();