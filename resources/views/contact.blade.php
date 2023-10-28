<x-app-layout>

    <section class="header-contact">
        <h1>Contact Us</h1>
    </section>

    <section class="contact">
        <div class="contact-header">
            <h1>Contact Us</h1>
            <div>
                <h2>0798832182</h2>
            </div>
            <div>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </section>

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('contact_store') }}" method="POST"  class="massage">
        @csrf
        <div>
            <input type="text" name="name" placeholder="name" >
            <input type="text" name="subject" placeholder="subject" >

        </div>

        <div>
            <input type="text" name="email" placeholder="Your Email">
            <input type="text" name="phone" placeholder="Your Phone">

        </div>

        <textarea name="" id="" cols="30" rows="10" name="message" placeholder="Message"></textarea>

        <input type="submit" value="confirm" class="confirm">
    </form>


</x-app-layout>
