//------------------------- var communities ------------------------------------
 var writeUrl ={
                 insert : function (){
                    
                    var i = 0;
                    var li = document.createElement("li");
                    li.setAttribute("id",'0');
//                    
                    li.innerHTML='<span class="icon background-warning"><i class="fa fa-star"></i></span><div class="news-item-info"><h4 class="name"><a href="#">'+readUrls.Urls[i].url+'</a></h4><p>First 700 people will take part in building first human settlement outside of Earth.Thats awesome, right?</p><div class="time"></div>';
                    
                    var button1 = '';
                    for (var i in readUrls.Urls[0].Incluir) {
                        var button = readUrls.Urls[0].Incluir[i];
                        button1 += button;
                        alert(button1);
                       // $('div.time').append('<div>'+button1+'</div>')
                    }
                    var ul = document.getElementById("readUrls");
                    ul.setAttribute("style",'list-style: none;');
                    //var element = document.getElementById("socialShare");
                    ul.appendChild(li); 
                 },
                init:function (){
                    writeUrl.insert();
                }
};
writeUrl.init();
 




