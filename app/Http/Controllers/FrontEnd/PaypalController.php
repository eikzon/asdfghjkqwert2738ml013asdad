<?php
namespace App\Http\Controllers\FrontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Paypalpayment;

class PaypalController extends Controller {

    /**
     * object to authenticate the call.
     * @param object $_apiContext
     */
    private $_apiContext;

    /**
     * Set the ClientId and the ClientSecret.
     * @param
     *string $_ClientId
     *string $_ClientSecret
     */
    public $_ClientId = "Af593TPjxuuUPWxzV7uBLI8A7DoXLtTu-LPu8Xa5KDb1XapgSMHzC90CxzXP2OEsYXBAMT0sX1lIzLp0";
    public $_ClientSecret = "EK0GL2yRJhmxy0exIgcattXnxCintshppVptTqg1gDac21-npzDnDdpf09PfcVUTJP50eccmYu0__79l";

    /*
     *   These construct set the SDK configuration dynamiclly,
     *   If you want to pick your configuration from the sdk_config.ini file
     *   make sure to update you configuration there then grape the credentials using this code :
     *   $this->_cred= Paypalpayment::OAuthTokenCredential();
    */
    public function __construct()
    {

      // ### Api Context
      // Pass in a `ApiContext` object to authenticate
      // the call. You can also send a unique request id
      // (that ensures idempotency). The SDK generates
      // a request id if you do not pass one explicitly.
      $this->_apiContext = Paypalpayment::ApiContext($this->_ClientId, $this->_ClientSecret);

    }

    public function store()
    {
      $inv = uniqid();
      // ### Payer
      // A resource representing a Payer that funds a payment
      // For paypal account payments, set payment method
      // to 'paypal'.
      $payer = Paypalpayment::payer();
      $payer->setPaymentMethod("paypal");

      // ### Itemized information
      // (Optional) Lets you specify item wise
      // information
      $item1 = Paypalpayment::item();
      $item1->setName('Ground Coffee 40 oz')
              ->setDescription('Ground Coffee 40 oz')
              ->setCurrency('THB')
              ->setQuantity(1)
              ->setTax(0.3)
              ->setPrice(7.50);

      $item2 = Paypalpayment::item();
      $item2->setName('Granola bars')
              ->setDescription('Granola Bars with Peanuts')
              ->setCurrency('THB')
              ->setQuantity(5)
              ->setTax(0.2)
              ->setPrice(2);

      $itemList = Paypalpayment::itemList();
      $itemList->setItems([$item1, $item2]);

      $details = Paypalpayment::details();
      $details->setShipping('1.2')
              ->setTax('1.3')
              ->setSubtotal('17.5');

      // ### Additional payment details
      // Use this optional field to set additional
      // payment information such as tax, shipping
      // charges etc.
      $details = Paypalpayment::details();
      $details->setShipping(1.2)
          ->setTax(1.3)
          ->setSubtotal(17.50);

      // ### Amount
      // Lets you specify a payment amount.
      // You can also specify additional details
      // such as shipping, tax.
      $amount = Paypalpayment::amount();
      $amount->setCurrency("THB")
          ->setTotal(20)
          ->setDetails($details);

      // ### Transaction
      // A transaction defines the contract of a
      // payment - what is the payment for and who
      // is fulfilling it.
      $transaction = Paypalpayment::transaction();
      $transaction->setAmount($amount)
          ->setItemList($itemList)
          ->setDescription("Payment description")
          ->setInvoiceNumber($inv);

      // ### Redirect urls
      // Set the urls that the buyer must be redirected to after
      // payment approval/ cancellation.
      $redirectUrls = Paypalpayment::redirectUrls();
      $redirectUrls->setReturnUrl(route('cart_complete', $inv))
                   ->setCancelUrl(route('cart_error'));

      // ### Payment
      // A Payment Resource; create one using
      // the above types and intent set to 'sale'
      $payment = Paypalpayment::payment();
      $payment->setIntent("sale")
          ->setPayer($payer)
          ->setRedirectUrls($redirectUrls)
          ->setTransactions(array($transaction));

      // ### Create Payment
      // Create a payment by calling the 'create' method
      // passing it a valid apiContext.
      // (See bootstrap.php for more on `ApiContext`)
      // The return object contains the state and the
      // url to which the buyer must be redirected to
      // for payment approval
      try {
          $payment->create($this->_apiContext);
      } catch (\PayPal\Exception\PayPalConnectionException $ex) {
          echo $ex->getData();
      }

      // ### Get redirect url
      // The API response provides the url that you must redirect
      // the buyer to. Retrieve the url from the $payment->getApprovalLink()
      // method
      if(!empty($payment->getApprovalLink()))
        return redirect($payment->getApprovalLink());
      else
        return redirect()->route('cart_error');
    }


public function index()
    {
        $payments = Paypalpayment::getAll(array('count' => 10, 'start_index' => 0), $this->_apiContext);
        // dd($payments);
        return view('welcome', ['payment' => $payments]);
    }
}
