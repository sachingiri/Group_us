    $(document).ready(function(){
        
            showUI('#cont1');
        });
        
        function showUI(ele){
            console.log($(ele));
            var kids = $(ele).children(), temp;
            for( var i = kids.length-1 ; i >=0  ; i-- ){
                temp  = $(kids[i]);
                
                if(temp.is('div')){
                    temp.animate({
                        marginTop:0,
                    },400).css({opacity:1}).fadeIn()
                }
                else{
                    temp.css({opacity:1}).fadeIn()
                }   
            }
        }
 