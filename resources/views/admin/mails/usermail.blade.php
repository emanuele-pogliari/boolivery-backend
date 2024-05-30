<div>
      <div class="bg_confirmation_order mb-5">
        <div class="container">
          <div class="d-flex flex-column py-5">
            {{-- <img class="pb-3" src="/img/logo/Logo.png" alt="" /> --}}
            <div class="customer_content">
              <h1>Hey, your order has been confirmed, enjoy!</h1>
              <p>Find below the recipt from "restaurant name"</p>
            </div>
          </div>
    
          <div></div>
        </div>
      </div>
    
      <div class="invoice container mb-5">
        <h2>Products</h2>
        <ul>
          <li>
            <p>Product name</p>
            <p>Product price</p>
          </li>
        </ul>
        <h2>total</h2>
      </div>
    </div>
    
    <style lang="scss" scoped>
    .bg_confirmation_order {
      /* background-color: $secondary_color; */
      border-bottom-right-radius: 10rem;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.4);
    
      img {
        width: 100px;
        display: block;
      }
    
      h1 {
        font-size: 2rem;
        font-weight: 700;
      }
    
      .customer_content {
        max-width: 600px;
      }
    }
    
    .invoice {
      /* color: $background_color_dark;
      background-color: $primary_color; */
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
        /* border-bottom: 1px solid $background_color_dark; */
      }
    
      h2 {
        padding: 1rem 0;
      }
    }
    </style>