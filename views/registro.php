<?php ?>


    <div class="container">
        <div class="row">
            <form class="col s12" id="reg-form">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate" required>
                  <label for="first_name">Nombre</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate" required>
                  <label for="last_name">Apellidos</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" required>
                  <label for="email">Correo</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate" minlength="6" required>
                  <label for="password">Contraseña</label>
                </div>
              </div>
              <div class="row">
                
        
                <div class="input-field col s6">
                  <button class="btn btn-large btn-register waves-effect waves-light indigo" type="submit" name="action">Registrar
                    
                  </button>
                </div>
              </div>
            </form>
          </div>
          
        </div>
        
    <script>
        $(document).ready(function() {
        $('select').material_select();
        });
    </script>
