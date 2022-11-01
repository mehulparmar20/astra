// checkbox 1


  $(document).ready(function(){
      $('#select-all_l1').on('click',function(){
          if(this.checked){
              $('.checkbox1').each(function(){
                  this.checked = true;
              });
          }else{
              $('.checkbox1').each(function(){
                  this.checked = false;
              });
          }
      });
      
      $('.checkbox1').on('click',function(){
          if($('.checkbox1:checked').length == $('.checkbox1').length){
              $('#select-all_l1').prop('checked',true);
          }else{
              $('#select-all_l1').prop('checked',false);
          }
      });
  });


// checkbox 2

$(document).ready(function(){
    $('#select-all_l2').on('click',function(){
        if(this.checked){
            $('.checkbox2').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox2').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox2').on('click',function(){
        if($('.checkbox2:checked').length == $('.checkbox2').length){
            $('#select-all_l2').prop('checked',true);
        }else{
            $('#select-all_l2').prop('checked',false);
        }
    });
  });



//  check box 3


  $(document).ready(function(){
    $('#select-all_l3').on('click',function(){
        if(this.checked){
            $('.checkbox3').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox3').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox3').on('click',function(){
        if($('.checkbox3:checked').length == $('.checkbox3').length){
            $('#select-all_l3').prop('checked',true);
        }else{
            $('#select-all_l3').prop('checked',false);
        }
    });
  });
  

    
    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
      }
      element.className = arr1.join(" ");
    }
    
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }