<x-app-layout>

    @section('title', 'Contact Us')

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
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
    @endif
    {{-- <form action="{{ route('contact_store') }}" method="POST"  class="massage">
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
    </form> --}}


    <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm" class="massage">

        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6 col-sm-12 form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                    value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="col-md-6 col-sm-12 form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email"
                    value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone"
                    value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
            </div>
            <div class="col-md-6 col-sm-12 form-group">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject"
                    value="{{ old('subject') }}">
                @if ($errors->has('subject'))
                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" rows="5" class="form-control" id="message">{{ old('message') }}</textarea>
            @if ($errors->has('message'))
                <span class="text-danger">{{ $errors->first('message') }}</span>
            @endif
        </div>

        <div class="form-group text-center">
            <button class="confirm">Confirm</button>
        </div>
    </form>

</x-app-layout>
