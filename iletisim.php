<?php include ("includes/header.php")?>
<center>
<div class="iletisim1">
<h2><font-color="#333">İletişim</font></h2>
<form action="sys_kontrol.php" method="post">
<p>Adınız<br /> <input id="name" type="text" name="ad" /></p>
<p>Soyadınız<br /><input id="surname" type="text" name="soyad" /></p>
<p>E-Posta Adresiniz<br /><input id="email" type="email" name="eposta" /></p>
Konunun İçeriği<br /><textarea class="textbox" name="eposta" cols="50" rows="5">
</textarea>
<br />
<br />

<div style= "margin-left : 700px ; margin-right : 600px">
<p><input onclick="validation()" class="giris" type="button" value="Gönder"/></p>
</div>
<div style = "margin-right : 150px ;">
<p><input onclick="clear()" class="giris" type="button" value="Temizle"/></p>
</div>
</form>
</div>
</center>

<?php include ("includes/footer.php")?>

<script text="javascript">

function validation(){
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var email = document.getElementById("email").value;

    var emailControl = validateEmail(email);

    if(name == "" || surname == "" || email == ""){
        alert("Hiç bir veri boş geçilemez");
    }
    else if(!emailControl)
    {
        alert("Geçerli bir email giriniz")
    }
}

function clear()
{
    debugger;
    document.getElementById("name").value = "";
    document.getElementById("surname").value="";
    email = document.getElementById("email").value="";
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

</script>

