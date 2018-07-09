<section class="section section-border-1 col-12 col-md-8 mx-auto pt-0">
    <div class="container pb-4 pt-4" id="contact">
        <div class="section_title">
            <h1 class="bg-app">CONTÁCTAME</h1>
        </div>
        <div class="relative">
            <p class="text-center mb-2">¿Interesado en trabajar conmingo o solo quieres decir 'Hola'?<br>Utilice el siguien formulario de contacto y me pondre en contacto con usted lo antes posible.</p>
        </div>
        <form action="" class="row">
            <div class="col-12 mx-auto">
                <div class="form-group">
                    {{-- <label for="name">Nombre</label> --}}
                    <input type="name" class="form-control b-app" id="name" aria-describedby="nameHelp" placeholder="Nombre" autocomplete="off" required>
                </div>
            </div>

            <div class="col-12 mx-auto">
              <div class="form-group">
                {{-- <label for="email">Correo Eléctronico</label> --}}
                <input type="email" class="form-control b-app" id="email" aria-describedby="emailHelp" placeholder="Correo eléctronico" autocomplete="off" required>
              </div>
            </div>

            <div class="col-12 mx-auto">
                <div class="form-group">
                    {{-- <label for="message">Mensaje</label> --}}
                    <textarea type="text" id="messageLabel" for="message" class="form-control b-app" rows="4"  placeholder="Escribeme algo..." autocomplete="off" required></textarea>
                </div>
            </div>

            <div class="col-12 mx-auto text-center mt-2">
                <button type="submit" class='btn animated-button animated-h p-3'>ENVIAR</button>
            </div>
        </form>
    </div>
</section>
