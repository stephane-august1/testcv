var my_key= '9ec4250d72b55a53203ad4b5cc624750';
var callBackGetSuccess = function(data){
console.log("donnees:", data)
var icon = data.weather[0].icon;
var name = data.name;
var temperature = data.main.temp;
var temp= Math.round(temperature);
//var icone='http://openweathermap.org/img/w/'icon'.png'
document.querySelector('#ici').innerHTML=
      "<h3 style='font-size:40px; font-weight: bold;'> Votre ville : "+name+"</h3>"
      +"<h3 style='font-size:40px; font-weight: bold;'> temperature : "+temp+"</h3>"+
       +"<h3>icone:"+"<img src='http://openweathermap.org/img/w/"+icon+".png'>";  
}
 //function buttonClickGet(){
     $(document).ready(function(){
    $("button").click(function(){
        var name=$('#newcity').val();
   console.log(name)
     var url = "http://api.openweathermap.org/data/2.5/weather?q="+name+"&APPID="+my_key +"&units=metric&lang=fr"
     $.get(url, callBackGetSuccess).done(function(){

     })
     .fail(function(){
         console.log("erreur")
       

     })
     .always(function(){
       
        var name = newcity;
     });
 });
});
      
   // $.get(url, callbackGetSuccess).done(function(){
        
   // })
   //  .fail(function(){
         
   //                     alert("error");
   //              })
   //  .always(function(){
      
  //   } );           

  //  })
    //$.ready(function(){ 
             
     //   $('#submitWeather').click(function(){
         
            
      
    //        const ville=$('#newcity').val();    
       
     //     var url='http://api.openweathermap.org/data/2.5/weather?q='+ville+'&APPID='+my_key +'&units=metric&lang=fr';
     //     var url3='http://api.openweathermap.org/data/2.5/weather?q='+ville+',&APPID=' 
    //       fetch(url3)
   //    .then(resultat => resultat.json())
   //    .then(json => { 
    //    const meteo = json;

        
    //    const ville=$('#newcity').val(); })

   //     function displayWeatherInfos(data){
            
     //      console.log(json);
     //       const icone = data.weather[0].icon;
      //      document.querySelector('#newville').textContent = name;
             //document.querySelector('#ici').textContent=ville;
    //         document.querySelector('#ici').innerHTML=
    //       "<h3 style='font-size:40px; font-weight: bold;'> la ville 1 : "+name+"</h3>"
  //         +"<h3>icone:"+"<img src='http://openweathermap.org/img/w/"+icone+".png'>";   
   //     }
   //     });
   /// }   );
  
             

 
          
        
    