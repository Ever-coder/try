var slideIndex = 1;
  showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
      }
var slideIndexs = 1;
  showDivss(slideIndexs);

      function plusDivss(n) {
        showDivss(slideIndexs += n);
      }

      function showDivss(n) {
        var i;
        var x = document.getElementsByClassName("mySlides2");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndexs = x.length}
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        x[slideIndexs-1].style.display = "block";  
      }


var myIndex = 0;
  carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 4000); // Change image every 2 seconds
    }
var myIndexs = 0;
  carousel2();

    function carousel2() {
      var i;
      var x = document.getElementsByClassName("mySlides2");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndexs++;
      if (myIndexs > x.length) {myIndexs = 1}    
      x[myIndexs-1].style.display = "block";  
      setTimeout(carousel2, 4000); // Change image every 2 seconds
    }