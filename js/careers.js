$("#sectionForm").submit(function(){


      var website = document.getElementById("website").checked;
        var socialmedia = document.getElementById("socialmedia").checked;
        var AnEvent = document.getElementById("AnEvent").checked;
        var publishings = document.getElementById("publishings").checked;
        var friend = document.getElementById("friend").checked;
        var others = document.getElementById("others").checked;
    
        if((website == "") && ( socialmedia == "") && ( AnEvent == "") && ( publishings == "") && ( friend == "") && ( others == "") )
        {
            alert("At least one checkbox must be selected");
            return false;
        }
         else {
        return true;

         }

    });
        
    


    $("#sectionForm_phone").submit(function(){


      var website_phone = document.getElementById("website_phone").checked;
        var socialmedia_phone = document.getElementById("socialmedia_phone").checked;
        var AnEvent_phone = document.getElementById("AnEvent_phone").checked;
        var publishings_phone = document.getElementById("publishings_phone").checked;
        var friend_phone = document.getElementById("friend_phone").checked;
        var others_phone = document.getElementById("others_phone").checked;
    
        if((website_phone == "") && ( socialmedia_phone == "") && ( AnEvent_phone == "") && ( publishings_phone == "") && ( friend_phone == "") && ( others_phone == "") )
        {
            alert("At least one checkbox must be selected");
            return false;
        }
        else {
            return true;

          }
            
        });
