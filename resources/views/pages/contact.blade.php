





    <h1>Contact</h1>
    <p class="lead">This is the contact form of the laravel site prepared for the major test.</p>


    <form action="/contact" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>


        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Go</button>
    </form>

