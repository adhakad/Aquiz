
         function load_total_que()
         {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function()
            {
                if(xmlhttp.readyState==4&&xmlhttp.status==200)
                {
                    document.getElementById("total_que").innerHTML=xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET","forajex/load_total_que.php",true);
            xmlhttp.send(null);
         }
        

         var questionno="1";
         load_questions(questionno); 
         function load_questions(questionno)
         {
             document.getElementById("current_que").innerHTML=questionno;
             var xmlhttp=new XMLHttpRequest();
             xmlhttp.onreadystatechange=function()
             {
                if(xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    if(xmlhttp.responseText=="over")
                    {
                      window.location="result.php";  
                    }
                    else
                    {
                       document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                       load_total_que();
                    }
                }
             };
            xmlhttp.open("GET","forajex/load_questions.php?questionno="+questionno,true);
            xmlhttp.send(null);
         }
        
        
        function radioclick(radiovalue,questionno)
        {
           var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function()
            {
                if(xmlhttp.readyState==4&&xmlhttp.status==200)
                {
                    
                }
            };
            xmlhttp.open("GET","forajex/save_answer_in_session.php?questionno="+questionno+ "&value1="+ radiovalue,true);
            xmlhttp.send(null); 
        }


