<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Include any additional CSS or JavaScript libraries you need -->
</head>
<body>
   <div style="background:red; display:inline-block">
    <h1>Payment Form</h1>
    <form action="/payment/process" method="POST" id="payment-form">
        @csrf
        <input type="hidden" name="payment_intent_id" value="{{ $paymentIntent->id }}">

        <!-- Add card input fields here -->
        <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>

        <button type="submit">Submit Payment</button>
    </form>
   </div>

    <script>
        var stripe = Stripe("{{ config('services.stripe.public') }}");
        var elements = stripe.elements();

        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');
        var cardErrors = document.getElementById('card-errors');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            stripe.confirmCardPayment("{{ $paymentIntent->client_secret }}", {
                payment_method: {
                    card: card,
                },
            }).then(function (result) {
                if (result.error) {
                    // Display error to your user
                    cardErrors.textContent = result.error.message;
                } else {
                    // Payment succeeded, process the payment on the server
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
