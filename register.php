<! DOCTYPE html>
<html>
    <head>
        <title>Boite modale</title>
        <link rel="stylesheet" href="css/register.css" type="text/css">
    </head>
    <body>
        <span id="target">Ouvrire la boite</span>
        <aside id="modal1" class="modal mode" aria-hidden="true" role="dialog" style="display: none" > 
    <div class="modal-wrapper mod" >
    <form method="post" action="#" id="enrollForm">
        <h2>Full up the formular please!</h2> <img src="icones/cancel_48px.png" id="close">
        <input id="firstname" type="text" name="FName" placeholder=" firstname"><br><br>
        <input id="lastname" type="text" name="LName" placeholder=" lastname"><br><br>
        <input id="birthday" type="date" name="Date"  ><br><br>
        <input id="Email" type="email" name="Email" placeholder=" Email"><br><br>
        <input id="tel" type="tel" name="Tel" placeholder="Phone number"><br><br>
        <input id="profession" type="text" name="Profession" placeholder="Your Occupation"><br><br>
        <select id="country" name="Country">
            <option value="Choose your country">Choose your country</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="Angola">Angola</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Benin">Benin</option>
            <option value="Belize">Belize</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Benin">Benin</option>
            <option value="Benin">Benin</option>
            <option value="Benin">Benin</option>
            <option value="Benin">Benin</option>
            <option value="Togo">Togo</option>
            <option value="Ivory Cost">Ivory Cost</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burkina Faso">Burkina Faso</option>
        </select><br><br>
        <label>
            Sexe: <input type="checkbox" name="checkbox" checked>Male
            <input type="checkbox" name="checkbox">Female
        </label><br><br>
        <input id="reset1" type="reset" name="reset" value="reset"><br><br>
        <input id="submit1" type="submit" name="submit" value="Send">
    </form>
</div>
             
            
        </aside>
        <script src="js/jquery-3.4.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" >
            var open= document.getElementById('target');
             var gett=document.getElementById('modal1');
            var close = $('#close');
            open.addEventListener('click',function(){
                gett.style.display=null;
                $('.modal').removeClass('mode');
                gett.removeAttribute('aria-hidden');
                gett.setAttribute('aria-modal','true');
               
            });
            close.on('click',function(){
                gett.style.display='none';
                gett.setAttributeAttribute('aria-hidden');
                gett.removeAttribute('aria-modal','true');
    
            })
              $('.modal-wrapper').fadeTo();
          
        </script>
    </body>

</html>