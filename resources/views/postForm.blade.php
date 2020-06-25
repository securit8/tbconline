<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
<body onload="done()" >

    <section  id="news" class="container-fluid">

        <form style="display: none" class="form-horizontal col-12" method="POST"  id="submit" action="https://www.flytaxi.ge/taxicall.php?md_time=<?=md5(time());?>">
            <div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
                <div class = "col-5  ticket_padding_top">
                    <p style="color:black;font-size:1rem;padding-top:5px;">ყაზბეგი</p>
                </div>
                <div class = "col-3 d-flex justify-content-end">
                    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button type="button" class="circle minus">-</button><input class = "quantity" value="{{$qty}}" style="color:black;margin:0px 30px;font-size:1.5rem;"/><button type="button" class="circle circle2 plus">+</button></p>

                </div>
                <div class = "col-2 ticket_padding_top">
                    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;"><input id = "yazbegi_price" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;" name="cash_f" type="text" value="{{$cash_f}}"></span>&nbsp;ლარი</p>
                </div>
                <input type="hidden" name="sec" value="<?=md5(md5(time())."flytaxi");?>">
                <input type="hidden" name="send" >
                <div class = "col-2 ticket_padding_top">
                    <button onload="done()" name ="send" type ="submit" class = "btn btn-success">ყიდვა</button>

                </div>
            </div>
        </form>
    </section>


<script>
    function done() {
      document.getElementById('submit').submit();


    }
</script>
</body>
</html>
