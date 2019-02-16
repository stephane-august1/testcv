//on cree un objet pour icone 
const weatherIcons=
 {     "Fog":"wi wi-day-fog",
       "Clear": "wi wi-day-sunny",
       "Clouds" : "wi wi-day-cloudy",
       "Rain": "wi wi-day-rain",
       "Snow": "wi wi-day-snow",
       "Mist": "wi wi-day-fog",
       "Drizzle": "wi wi-day-sleet",
}

var access_key='065fac4b44a9c6739c9cf1f46abc6838';
var my_key= '9ec4250d72b55a53203ad4b5cc624750';


function capitalize(str){
    return str[0].toUpperCase() + str.slice(1);
}

function main(){
var url1='https://api.ipify.org?format=json';
   //1.Choper l'adresse IP du PC qui ouvre La page .https://api.ipify.org?format=json
                fetch(url1)
                .then(resultat => resultat.json()) 
                .then(json => {
                        const ip = json.ip;
                console.log(ip)

//---------------//
//2. Choper la ville grace à l' adresse IP: http://api.ipstack.com

var access_key = '065fac4b44a9c6739c9cf1f46abc6838';

var url2='http://api.ipstack.com/' + ip + '?access_key=' + access_key;
fetch(url2
     ) 
    .then(resultat => resultat.json())
    .then(json => {
   // console.log(json)
  const country= json.country_code;  
  const ville = json.city;
  var my_key= '9ec4250d72b55a53203ad4b5cc624750';

    
       
// 3 . Choper Les infos météo gràce à la ville : http://api.openweathermap.org/data/2.5.weather?q.ville....('https://api.openweathermap.org/data/2.5/find?q=' +ville+"?access_key=" + my_key +'&lang=fr&units=metric '
   var url3='http://api.openweathermap.org/data/2.5/weather?q='+ville+','+country+'&APPID='+my_key +'&units=metric&lang=fr';
      fetch( url3 )
       .then(resultat => resultat.json())
       .then(json => {
        //{
         const meteo = json;
        const name = json.name;
      // console.log(json);
           displayWeatherInfos(meteo) 
           
       })
              
})
})   // 4 . Afficher les Informations sur la page

function displayWeatherInfos(data){
var name =data.name;

const temperature = data.main.temp;
const condition = data.weather[0].main;
const icone = data.weather[0].icon;
const description = data.weather[0].description;
//console.log(name)console.log(temperature)console.log(condition)console.log(description)
//dirige le name vers le id ville page html:
document.querySelector('#ville').textContent = name;
document.querySelector('#temperature').textContent = Math.round(temperature);//Math.round arrondir le temp.
document.querySelector('#conditions').textContent = description;
document.querySelector('i.wi').className = weatherIcons[condition];
//console.log(icone)
//document.querySelector('src').className = icone;
//getElementbyName.querySelector(content).textContent = ico;
//ajouter des image en background pour styliser:

document.body.className  = condition.toLowerCase();//prend la class condition miniscule donc l'image correspondante a condition.
document.querySelector('#base').innerHTML=
"<h3 style='font-size:40px; font-weight: bold;'> la ville  : "+name+"</h3>"+"<h3>icone:"+"<img src='http://openweathermap.org/img/w/"+icone+".png'>"; 
   
       
    };
      };     
     
      var callBackGetSuccess = function(data){
        console.log("donnees:", data)
        var icone = data.weather[0].icon;
        var name = data.name;
        var temperature = data.main.temp;
        var temp= Math.round(temperature);
       
        document.querySelector('#ici').innerHTML=
              "<h3 style='font-size:2.2em; font-weight: bold;'>"+name+"</h3>"
              +"<h3 style='font-size:2.2em; font-weight: bold;'>Temp : "+temp+" "+"°C"+"'/"+"humidity :"+"</h3>"
               +"<h3>Weather : "+"<img src='http://openweathermap.org/img/w/"+icone+".png'>"+"</h3>";  
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





          

main();

