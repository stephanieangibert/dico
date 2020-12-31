const input=document.querySelectorAll("input");
const textarea=document.querySelector("textarea");
const form=document.querySelector("form");
const definition=document.getElementById("definition");
const definition2=document.getElementById("definition2");
const definition3=document.getElementById("definition3");
const citationBis=document.getElementById("citation");
const littre=document.getElementById("littre");
const btn=document.getElementById("reponseBtn");
const motChoisis=document.getElementById("leMotChoisis");
const mot1=document.getElementById("mot1");
const mot2=document.getElementById("mot2");
const mot3=document.getElementById("mot3");
const li=document.querySelectorAll("li");
const motClick=document.getElementById("text");
const form2=document.querySelector(".carreReponse");
const containerBox=document.querySelector(".containerBox");
console.log(containerBox);

console.log(input);
// input[2].value="";
const tableauLittre=[];
 
 
 var request = new XMLHttpRequest();

 request.onreadystatechange = function() {
    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {      
       var response = JSON.parse(this.response);               
        console.log(response);      
         definition.innerHTML="";
    
    
        for( i=0;i<response.length;i++){  
     
        if(response[i].attributionText=="Grand Dictionnaire de la langue française numérisé"){           
           tableauLittre.push(response[i].definition);                 
           }
        }  
                       
        for(j=0;j<5;j++){
            definition.innerHTML=definition.innerHTML+response[j].definition;  
           
        }  
      
        
    }    
 
     
    };       
    
    
var request2 = new XMLHttpRequest();

 request2.onreadystatechange = function() {
    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {      
       var response = JSON.parse(this.response);               
        console.log(response);
     
                 synonyme1.innerHTML=response[0].mot;
                 synonyme2.innerHTML=response[1].mot;
                 synonyme3.innerHTML=response[2].mot;
                 synonyme4.innerHTML=response[3].mot;
                 synonyme5.innerHTML=response[4].mot;
    }
};

mot1.addEventListener("click",(e)=>{
     console.log(e.target);
     input[2].value=e.target.innerHTML;
     })
     mot2.addEventListener("click",(e)=>{
         console.log(e.target);
         input[2].value=e.target.innerHTML;
         })
     mot3.addEventListener("click",(e)=>{
             console.log(e.target);
             input[2].value=e.target.innerHTML;
             })
document.querySelector(".form1").addEventListener("submit",(e)=>{
           e.preventDefault();
      
          definition.innerHTML=""; 
          synonyme1.innerHTML="";
          synonyme2.innerHTML="";
          synonyme3.innerHTML="";
          synonyme4.innerHTML="";
          synonyme5.innerHTML="";


     console.log("coucou");
     let motBis=input[2].value;  
     console.log(input[2].value); 
     input[2].value=motBis;
     motChoisis.innerHTML=motBis;
     input[0].value=motBis;
    
    request.open("GET", "https://api.dicolink.com/v1/mot/"+motBis+"/definitions?limite=200&api_key=**********",true);
    request.send();
    request2.open("GET","https://api.dicolink.com/v1/mot/"+motBis+"/synonymes?limite=5&api_key=********",true);
    request2.send();
   

    
    btn.classList.add("reponseBtnBis");
    btn.innerHTML="enregistrer";
   console.log(btn);

})

const tableauDemesMots=["alacrité","fulgurance","pandemonium","rage","praticité","lipothymique","irréfragable","filigrane","calice","béotien","impéritie","atrabilaire","inique","imprimatur","extime","aphasique","prodigalité","diariste","idiosyncratie","trophallaxie","idoine"];
const tableauDemesMots2=["élégiaque","contrapuntique","antre","mansuétude","inexpugnable","vibrisse","sclérotique","antédiluvien","amphigourique","pléthorique","pavane","partial","antonyme","noosphère","lénifiant","matriarcat","putatif","apocope","parangon","cognitif","congruence"];
const tableauDemesMots3=["coruscant","parcimonie","dantesque","incipit","maïeutique","phylactère","éthéré","allégorie","thébaïde","lénifiant","pugnace","truchement","éthologie","résilience","phallocratie","agnostique","cristalliser","sororité","chiasme","reptilien","scorie"];




li[0].addEventListener("mouseover",()=>{
    mot1.classList.add("motUn");
    let nbre=Math.floor(Math.random()*Math.floor(tableauDemesMots.length));
    let motAuHasard=tableauDemesMots[nbre];    
    mot1.innerHTML=motAuHasard;  
})

li[0].addEventListener("mouseout",()=>{
    mot1.classList.remove("motUn");
    mot1.innerHTML="";
})
li[1].addEventListener("mouseover",()=>{
    mot2.classList.add("motUn");
    let nbre2=Math.floor(Math.random()*Math.floor(tableauDemesMots2.length));
    let motAuHasard2=tableauDemesMots2[nbre2];    
    mot2.innerHTML=motAuHasard2;
})
li[1].addEventListener("mouseout",()=>{
    mot2.classList.remove("motUn");
    mot2.innerHTML="";
})
li[2].addEventListener("mouseover",()=>{
    mot3.classList.add("motUn");
    let nbre3=Math.floor(Math.random()*Math.floor(tableauDemesMots3.length));
    let motAuHasard3=tableauDemesMots3[nbre3];    
    mot3.innerHTML=motAuHasard3;
})
li[2].addEventListener("mouseout",()=>{
    mot3.classList.remove("motUn");
    mot3.innerHTML="";
})


