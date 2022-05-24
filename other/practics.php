
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      /*style hone here*/  
    li {
      list-style-type: none;
    }
    /* .main_h {
      position: relative;
    }
    .main_h::before {
      content: "";
      position: absolute;
      top: 5px;
      left: -5px;
      transform: translate(-50%, -50%);
      width: 5px;
      height: 5px;
      background-color: green;
      border-radius: 5px;
    } */


.accordion {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  position: relative;


}

.accordion::before {
  /* content: "\25B8"; */
  content: "\02795";
  font-size: 7px;
  color: black;
  display: inline-block;
  margin: 5px 5px 5px -12px;
  transition:  all linear .5s;
  padding: 2px;
  border: 1px solid white;
}
.caret-down::before {
  content: "\2796";
  color: green;
  transition: all linear .5s;

}

.child {
display: none;
/*transition: all linear .5s;
position: absolute;
left: 100px;
top: -100%;
transform: translate(-50%, -50%); */
}
/* 
.active {
  display: block;
  animation: all linear .5s;
}
 */





.accordion {
   transition: 0.4s;
   padding: 5px;
   margin: 5px 2px;
   color: green;
   font-size: 15px;
  /* border: 1px solid rgb(55, 214, 95); */
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  /* background-color: #ccc; */
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  /* background-color: white; */
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  border-left: 1px solid white;
  position: relative;
  font-size: 10px;

}
.panel > li {
  /* color: white; */
  position: relative;
}
.panel > li::after {
  content: "";
  position: absolute;
  top: 0;
  left: -30px;
  width: 1px;
  height: 1px;
  background-color: white;
  border-width: 8px;
  border-style: solid;
  border-color: gray;
  border-left: 8px solid white;
}




    </style>
  </head>

  <body>
  <h3> How to design array. </h3>
    <ul style="background-color: gray; width:250px;">
      <li>
        <span class="accordion caret-down" >Student</span>
        <ul class="panel" style="max-height: 100%;">
          <li >
            <span class="accordion caret-down">Zubair</span>
              <ul class="panel" style="max-height: 100%;">
                <li>Name : zubair</li>
                <li>class : inter 1st</li>
                <li>ID : ABC 123</li>
                <li>
                  <span class="accordion">Address</span>
                  <ul class="panel">
                    <li>
                      <span class="accordion">P_addr</span> :
                      <ul class="panel">
                        <li>Dist : Kushtia</li>
                        <li>Sub_dist : shoilkupa</li>
                        <li>Post : shoilkupa</li>
                        <li>Village : modhukhali</li>
                        <li>Post Code : 1540</li>
                      </ul>
                    </li>
                    <li>
                      <span class="accordion">Current_addr</span>
                      <ul class="panel">
                        <li>Dist : Bhola</li>
                        <li>Sub_dist : Lalmohan</li>
                        <li>Post : Lord Hardinge </li>
                        <li>Village : Lord Hardinge</li>
                        <li>Post Code : 2540</li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li>
                  <span class="accordion">Student Quary</span>
                  <ul class="panel">
                    <li>Academic : Vigorous</li>
                    <li>Result : Pass</li>
                    <li></li>
                  </ul>
                </li>
              </ul>
          </li>
          <li > 
            <span class="accordion">Rayhan</span>
            <ul class="panel">
              <li>Name: Rayhan</li>
              <li> Class : inter 2nd </li>
              <li> ID : ABC234</li>
              <li>
                <span class="accordion">P_addr</span>
                <ul class="panel">
                  <li>Dist : Jhenidhah</li>
                  <li>Sub_dist : shoilkupa</li>
                  <li>Post : sheikhpara</li>
                  <li>Village : modhukhali</li>
                  <li>Post Code : 1540</li>
                </ul>
              </li>

              <li>
                <span class="accordion">C_addr</span>
                <ul class="panel">
                  <li>Dist : Pabna</li>
                  <li>Sub_dist : </li>
                  <li>Post :</li>
                  <li>Village :</li>
                  <li>Post Code :</li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>

      </li>
    </ul>
    


<br>
  <!-- <button class="accordion">Section 3</button>
  <div class="panel">
    <p>Lorem ipsum...</p>
  </div> -->
  </body>

  <script>

    //js gone here
    // var toggler = document.getElementsByClassName("main_h");
    // var i;

    // for (i = 0; i < toggler.length; i++) {
    //   toggler[i].addEventListener("click", function() {
    //     var panel = this.parentElement.querySelector(".child");
    //     console.log(panel);
        
    //     panel.classList.toggle("active");

    //     this.classList.toggle("caret-down");
  
        
    //   });
    // }

      var acc = document.getElementsByClassName("accordion");
      var z, y;
      var open_def = document.getElementsByClassName("accordion");
          for (y = 0; y <= open_def.length; y++)
          {
            open_def[0].style.maxHeight = 50+"px";
          };

      for (z = 0; z < acc.length; z++) {
        acc[z].addEventListener("click", function () {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          
          console.log(panel);
          this.classList.toggle("caret-down");
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.maxHeight = 100+"%";
            
          }

        });
      }


  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

  </html>