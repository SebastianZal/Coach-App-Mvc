      <div id="regcontainer" class="container">
         <div class="col-md-10 incontent center-block">
            <header>Rejestracja</header>
                <?php 
                    echo validation_errors();
                    echo form_open('Pages/rejestruj');
                    $ema=array(
                      'name'=>'email',
                        'id'=>'pierwszy',
                        'class'=>'form-control',
                        'placeholder'=>'E-mail'
                    );
                    echo form_fieldset('Email');
                    echo form_input($ema);
                    echo form_fieldset_close();
                    echo '<br><br>';
                    $imie=array(
                      'name'=>'firstname',
                        'class'=>'form-control',
                        'placeholder'=>'First name'
                    );
                    echo form_fieldset('Imię');
                    echo form_input($imie);
                    echo form_fieldset_close();
                    echo '<br><br>';
                    $naz=array(
                      'name'=>'lastname',
                       'class'=>'form-control',
                        'placeholder'=>'Last name'
                    );
                    echo form_fieldset('Nazwisko');
                    echo form_input($naz);
                    echo form_fieldset_close();
                    echo '<br><br>';
                    $haslo=array(
                      'name'=>'password1',
                       'class'=>'form-control',
                        'placeholder'=>'Hasło'
                    );
                    echo form_fieldset('Hasło');
                    echo form_password($haslo);
                    echo form_fieldset_close();
                    echo '<br><br>';
                    $haslo2=array(
                      'name'=>'password2',
                        'class'=>'form-control',
                        'placeholder'=>'Powtórz hasło'
                    );
                    echo form_fieldset('Powtórz hasło');
                    echo form_password($haslo2);
                    echo form_fieldset_close();
                    echo '<br><br>';?>
                    <div id=submitbutton>
                <button type="submit" class="btn btn-red">Zarejestruj</button>
                    </div>
                    <?php
                    //echo form_submit('mysubmit', 'Rejestruj!');
                    echo form_close();
                ?>
        </div>
    </div>  
    </body>
</html>


