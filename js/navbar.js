var tab = '';

function mobile_menu(id){
    if(id){

        if(id == 'open'){

            tab = 'main';
            $("#mobile_menu").css('display','');
            $("#open_but").css('display','none');
            $("#close_but").css('display','');

        }else if(id == 'close'){

            tab = '';
            $("#mobile_menu").css('display','none');
            $("#close_but").css('display','none');
            $("#open_but").css('display','');

        }else{

            $("#"+tab).css('display','none');
            $("#"+id).css('display','');
            tab = id;

        }

    }
}


console.log($("#main"));