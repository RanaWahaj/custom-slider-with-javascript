<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Slider</title>
</head>
<body>
    
<style>
    h1{text-align:center;}
    {box-sizing: border-box}
    .mySlides1, .mySlides2 {display: none}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 1158px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    }

    /* On hover, add a grey background color */
    .prev:hover, .next:hover {
    background-color: #f1f1f1;
    color: black;
    }
</style>

 <div class="slideshow-container">
  <h1>Custom Slider</h1>  
  <div class="mySlides1">
   <img src="./slider.webp" width="100%" />
  </div>

  <div class="mySlides1">
   <img src="./Header.webp" width="100%" />
  </div>

  <div class="mySlides1">
   <img src="./myfile.webp" width="100%" />
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>

 </div>

<script>
 let slideIndex = [1,1];
 let slideId = ["mySlides1", "mySlides2"]
 showSlides(1, 0);
 showSlides(1, 1);

    function plusSlides(n, no) {
    showSlides(slideIndex[no] += n, no);
    }

    function showSlides(n, no) {
    let i;
    let x = document.getElementsByClassName(slideId[no]);
    if (n > x.length) {slideIndex[no] = 1}    
    if (n < 1) {slideIndex[no] = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex[no]-1].style.display = "block";  
    }
</script>
</body>
</html>
