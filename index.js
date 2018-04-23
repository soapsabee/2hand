var  SearchRange;
$(function(){
    $("#iFind").click(function(){    
        if($("#keyword").val()!=""){      
            if(SearchRange == null) {
                SearchRange = document.body.createTextRange();
            }       
            if(SearchRange.findText($("#keyword").val()) != false ) {
              SearchRange.select();
              SearchRange.scrollIntoView();
              SearchRange.moveStart("word");
            }else{
              SearchRange = null;
            }
        }
    });
});