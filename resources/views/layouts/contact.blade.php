  <link rel="stylesheet" href="{{  asset('css/contact.css') }}">
  <!---  Contact  -->
  <div class="contact1">
    
    <div class="container-contact1 shadow-lg gradient-border">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="{{ asset('images/img-contact.png') }}" alt="IMG">
        </div>

        <form method="POST" action="" class="contact1-form validate-form" id="contact-form">
            <span class="contact1-form-title">
                contactez nous !
            </span>
            @csrf
            <div class="wrap-input1 validate-input" data-validate = "Name is required">
                <input class="input1" type="text" name="name" placeholder="Nom">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input1" type="text" name="email" placeholder="Email">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "Subject is required">
                <input class="input1" type="text" name="subject" placeholder="objet">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "Message is required">
                <textarea class="input1" name="message" placeholder="Message"></textarea>
                <span class="shadow-input1"></span>
            </div>

            <div class="container-contact1-form-btn">
                <button type="submit" class="contact1-form-btn">
                    <span>
                        Envoyez
                        <i class="far fa-paper-plane"></i></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
</div>