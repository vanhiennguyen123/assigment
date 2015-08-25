var anh =1;
function slide(num){
	num =anh;
	if(anh>5){
		anh =1;
		}
	if(anh<1){
		anh =5;
		}
	var img = document.getElementById("view");
	var url = "images/"+ anh + ".jpg";
	img.src= url;		
	}
function run(){
	num =++anh;
	slide(num);
	setTimeout(run,2500);
	}	