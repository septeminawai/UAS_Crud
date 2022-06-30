<div class="contact__container grid">
    <div class="contact__box">
        <h2 class="section__title">
            Reach out to us today <br> via any of the given <br> information
        </h2>

        <div class="contact__data">
            <div class="contact__information">
                <h3 class="contact__subtitle">Call us for instant support</h3>
                <span class="contact__description">
                        <i class="ri-phone-line contact__icon"></i>
                        +999 888 777
                    </span>
            </div>

            <div class="contact__information">
                <h3 class="contact__subtitle">Write us by mail</h3>
                <span class="contact__description">
                        <i class="ri-mail-line contact__icon"></i>
                        user@email.com
                    </span>
            </div>
        </div>
    </div>

    <form action="{{route('feedback.store')}}" method="POST" class="contact__form">
        @csrf
        <div class="contact__inputs">
            <div class="contact__content">
                <input type="email" name="email" value="{{old('email')}}" required autocomplete="email" placeholder=" "
                class="contact__input @error('email') is-invalid @enderror">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
                <label for="" class="contact__label">Email</label>
            </div>

            <div class="contact__content">
                <input type="text" name="subject" value="{{old('subject')}}" required autocomplete="subject" placeholder=" " class="contact__input @error('subject') is-invalid @enderror">
                @error('subject')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
                <label for="" class="contact__label">Subject</label>
            </div>

            <div class="contact__content contact__area">
                <textarea name="message" placeholder=" " required autocomplete="message" class="contact__input @error('message') is-invalid @enderror">{{old('message')}}</textarea>
                <label for="" class="contact__label">Message</label>

                @error('message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
            </div>
        </div>

        <button class="button button--flex" type="submit">
             Send Message <i class="ri-arrow-right-up-line button__icon"></i>
        </button>
    </form>
</div>
