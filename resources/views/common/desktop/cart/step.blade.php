<div class="step-process">
  <ul>
    <li>@if($step === 1) <span>Shopping Cart</span> @else Shopping Cart @endif</li>
    <li>@if($step === 2) <span>Shipping / Payment</span> @else Shipping / Payment @endif</li>
    <li>@if($step === 3) <span>Complete Order</span> @else Complete Order @endif</li>
  </ul>
  <img src="images/step-1.jpg" alt="Shopping Cart" class="hidden-sp">
  <img src="images/step-1-sp.png" alt="Shopping Cart" class="hidden-pc">
</div>
<div class="clear"></div>