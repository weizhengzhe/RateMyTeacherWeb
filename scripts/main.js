
 <!--  window.location.reload(false); -->

function askAge(){
	age=prompt("Enter your age");
 
 if (age<10){
	alert("Do something")
	}
	else{
		alert("Do something else")
	}
}

var storyInput=document.getElementById("addBox");
var paraContent=document.getElementById("bedwet");
var searchButton=document.getElementById("activateSearch");
var searchBox=document.getElementById("searchEngine");
var homeButton=document.getElementById("homeButton");

searchBox.style.visibility="hidden";

var sum=paraContent.innerHTML;
  var newSto=storyInput.value;


 storyInput.addEventListener("blur", add);
 searchButton.addEventListener("mouseover", revealSearch);
 searchButton.addEventListener("mouseout", hideSearch);
 searchButton.addEventListener("mousedown", searchBoxDisappear);



homeButton.addEventListener("mouseover", revealhomeButton);
homeButton.addEventListener("mouseout", hidehomeButton);
homeButton.addEventListener("mousedown", goHome);


function goHome(){
    homeButton.style.padding= "12px";
    searchBox.style.visibility="hidden";
     searchButton.style.padding= "12px";
}


function revealhomeButton(){
    homeButton.style.padding= "20px";
   
}

function hidehomeButton(){
    homeButton.style.padding= "12px";
}







function searchBoxDisappear(){
	if(searchBox.style.visibility=="hidden"){
    searchBox.style.visibility="visible";
    searchButton.style.padding= "12px";
    homeButton.style.padding="12px"
}
else{
     searchBox.style.visibility="hidden";
     searchButton.style.padding= "12px";
}
}

function revealSearch(){
    searchButton.style.padding= "20px";
   
}

function hideSearch(){
    searchButton.style.padding= "12px";
}


  sum=paraContent.innerHTML;
 function add(){
 	
    <!-- paraContent.innerHTML=paraContent.innerHTML+"<br>"+storyInput.value; -->
    
if (storyInput.value == "clear"){
	  
      paraContent.innerHTML=sum;

    }
else{
	paraContent.innerHTML=sum+"<br>"+storyInput.value;
    
}


}