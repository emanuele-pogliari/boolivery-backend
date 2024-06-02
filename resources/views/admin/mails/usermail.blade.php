<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    
    <div class="bg_confirmation_order mb-5">
        <div class="container">
          <div class="d-flex flex-column py-5">
            <img class="pb-3" src="/img/logo/Logo.png" alt="" />
            <div class="customer_content">
              <h1>Hey {{$lead->customer_name}}, your order has been confirmed, enjoy!</h1>
              <p>Find below the recipt from "restaurant name"</p>
            </div>
          </div>
    
          <div></div>
        </div>
      </div>
    
      <div class="invoice container mb-5">
        <h2>Your Order</h2>
        <ul>
            @foreach ($lead->dishes as $dish)
          <li>
            <p>{{$dish->name}}</p>
            <p>Product price: € {{$dish->price}}</p>
          </li>
            @endforeach
        </ul>
        <h2>Total: € {{$lead->total_price}}</h2>
      </div>

</body>
</html>

<style lang="scss">

.bg_confirmation_order {
    background-color: #f2ca39;
    border-bottom-right-radius: 10rem;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.4);
    padding-left: 1em;
    padding-bottom: 1em;
    margin-bottom: 1em;

    img {
        width: 100px;
        display: block;
    }

    h1 {
        font-size: 2rem;
        font-weight: 700;
        font-family: sans-serif;
    }

    .customer_content {
        max-width: 600px;
    }
}

.invoice {
    color: #f8f8f6;
    background-color: #37373b;
    border-radius: 24px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    padding: 1rem;

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        display: flex;
        justify-content: space-between;
        padding: 1rem 0;
    }

    h2 {
        padding: 1rem 0;
    }
}

</style>