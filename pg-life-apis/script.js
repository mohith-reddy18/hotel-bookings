function showsidebar(){
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display='flex'
                sidebar.style.height='250px'
            }
            function hidesidebar(){
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display='none'
            }
            function yashu(){
                 form = document.getElementById("loginForm");
                 let formData = new FormData(form);
                 xhttp = new XMLHttpRequest();
                
                  
                 xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        alert(this.responseText);
                    }
                 };
                  xhttp.open("POST","pg-life-apis/login-pg-life.php",true);
                 xhttp.send(formData);
            }