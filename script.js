function check()
{
    var username=document.getElementById("usrname").value;
    var password=document.getElementById("pwd").value;
    if(username=="karthi2002"||username=="barath2002"||username=="nivetha2003")
    {
        if(password=="123456")
        {
            window.location.assign("index.html")
        }
    }
    else
    {
        alert("Account not found");
    }
}
/* var username=[];
var password=[];
var email=[];
var phno=[];

function register()
{
    var usrname=document.getElementById("Rusrname").value;
    var mail=document.getElementById("email").value;
    var phone=document.getElementById("phno").value;
    var pwd=document.getElementById("Rpwd").value;
    var conpwd=document.getElementById("conpwd").value;
    if(pwd==conpwd)
    {
        username.push(usrname);
        password.push(password);
        mail.push(email);
        phone.push(phno);
        alert("Thanks for registration. \nTry to login Now");
        window.location.assign("Login.html")
    }
} */