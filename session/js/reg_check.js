//注册验证
function validate() {
              var pwd1 = document.getElementById("p1").value;
              var pwd2 = document.getElementById("p2").value;
              if((pwd1 == pwd2) && pwd1!='') {
                if (pwd1.length <= 6 ) 
                {
                    document.getElementsByClassName("_tip")[0].innerHTML="<font color='orange'>密码长度太短</font>";
                    document.getElementById("submit").disabled = true;                    
                }else{
                  document.getElementsByClassName("_tip")[0].innerHTML="<font color='green' >两次密码相同</font>";
                  document.getElementById("submit").disabled = false;
                  }
              }
              else {
                  document.getElementsByClassName("_tip")[0].innerHTML="<font color='red' >两次密码不相同</font>";
                    document.getElementById("submit").disabled = true;
              }
          }
function emailcheck(el){         //正则
    var ePattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if(ePattern.test(el.value)){

            document.getElementsByClassName("_tip")[1].innerHTML="<font color='green' >Email正确</font>";
    }
    else{

            document.getElementsByClassName("_tip")[1].innerHTML="<font color='red' >Email错误</font>";
    }

  
    
    }

