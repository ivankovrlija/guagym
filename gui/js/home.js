var index = 1;
			function plusIndex(n){
				index = index + 1;
				showImage(index);
				showDiv(index);
			}
			showImage(1);
			function showImage(n){
				var i;
				var x= document.getElementsByClassName("slides");
				if (n > x.length) {index = 1};
				if (n < 1) {index = x.length};
				for(i=0;i<x.length;i++){
					x[i].style.display="none";
				}
				x[index - 1].style.display = "block";
			}
			autoSlide();
			function autoSlide(){
				var i;
				var x= document.getElementsByClassName("slides");
				for(i=0;i<x.length;i++){
					x[i].style.display="none";
				}
				if (index > x.length) { index = 1};
				x[index - 1].style.display = "block";
				index++;
				setTimeout(autoSlide,8000);	
			}
			showDiv(1);
			function showDiv(n){
				var i;
				var x= document.getElementsByClassName("slogans");
				if (n > x.length) {index = 1};
				if (n < 1) {index = x.length};
				for(i=0;i<x.length;i++){
					x[i].style.display="none";
				}
				x[index - 1].style.display = "block";
			}
			autoDiv();
			function autoDiv(){
				var i;
				var x= document.getElementsByClassName("slogans");
				for(i=0;i<x.length;i++){
					x[i].style.display="none";
				}
				if (index > x.length) { index = 1};
				x[index - 1].style.display = "block";
				index++;
				setTimeout(autoDiv,8000);	
			}
			changeToGreen();
			changeToPink();
			function changeToGreen(){
				x=document.getElementById('promotion_content');
				if (x.style.backgroundColor = "#f8b2bc") {
					x.style.backgroundColor = "#5AAC56";
				}
				setTimeout(changeToGreen,1000);
			}
			function changeToPink(){
				x=document.getElementById('promotion_content');
				if (x.style.backgroundColor = "#5AAC56") {
					x.style.backgroundColor = "#f8b2bc";
				}
				setTimeout(changeToPink,1500);
			}
			changeToGreena();
			changeToPinka();
			function changeToGreena(){
				x=document.getElementById('promo');
				if (x.style.backgroundColor = "#f8b2bc") {
					x.style.backgroundColor = "#5AAC56";
				}
				setTimeout(changeToGreena,1000);
			}
			function changeToPinka(){
				x=document.getElementById('promo');
				if (x.style.backgroundColor = "#5AAC56") {
					x.style.backgroundColor = "#f8b2bc";
				}
				setTimeout(changeToPinka,1500);
			}
			function changeBackground(){
				x=document.getElementById("header_background");
				if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        			x.classList.add("header_background");
    			}
    			else {
       				x.classList.remove("header_background");
    			}
			}