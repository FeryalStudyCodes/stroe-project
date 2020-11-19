<?PHP
 session_start();
include "app/views/header.php"; 

?>

<main class="mt-5 pt-4 ">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body float-right">


              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="firstName" class="form-control">
                    <label for="firstName" class="float-right">الاسم الاول</label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="text" id="lastName" class="form-control">
                    <label for="lastName" class="float-right">الاسم الاخير</label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Username-->
              <div class="md-form input-group pl-0 mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1" class="float-right">@</span>
                </div>
                <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
              </div>

              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" placeholder="youremail@example.com">
                <label for="email" class="float-right">البريد الالكتروني</label>
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="1234 Main St">
                <label for="address" class="float-right">العنوان</label>
              </div>

              

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                  <label for="country" class="float-right">Country</label>
                  <select class="custom-select d-block w-100" id="country" required>
                    <option value="" class="float-right">اختر...</option>
                    <option class="float-right">اليمن</option>
                  </select>
                  <div class="invalid-feedback" class="float-right">
                  الرجاء تحديد بلد صالح.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="state" class="float-right">المحافظة</label>
                  <select class="custom-select d-block w-100" id="state" required>
                    <option value="" class="float-right">اختر...</option>
                    <option class="float-right">صنعاء</option>
                  </select>
                  <div class="invalid-feedback" class="float-right">
                  الرجاء تحديد بلد صالح.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="zip" class="float-right">الرمز البريدي
                  </label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback" class="float-right">
                    Zip code required.
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

              <div class="custom-control custom-checkbox ">
                <input type="checkbox" class="custom-control-input" id="same-address" class="float-right">
                <label class="custom-control-label" for="same-address"  class="float-right">Shipping address is the same as my billing address</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info"  class="float-right">Save this information for next time</label>
              </div>

              <hr>

              <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit"  class="float-right">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit"  class="float-right">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="paypal"  class="float-right">Paypal</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name"  class="float-right">الاسم على البطاقة</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted" class="float-right">الاسم الكامل كما هو معروض على البطاقة</small>
                  <div class="invalid-feedback" class="float-right">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number" class="float-right">رقم بطاقه </label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback" class="float-right">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration" class="float-right">انتهاء الصلاحية</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback" class="float-right">
                    Expiration date required
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration" class="float-right">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback" class="float-right">
                    Security code required
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit" class="float-right">Continue to checkout</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted"class="float-right">السلة</span>
            <span class="badge badge-secondary badge-pill" class="float-right">3</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0" class="float-right">المنتج</h6>
                <small class="text-muted" class="float-right">الوصف</small>
              </div>
              <span class="text-muted" class="float-right">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0" class="float-right">المنتج2</h6>
                <small class="text-muted" class="float-right">الوصف</small>
              </div>
              <span class="text-muted" class="float-right">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0" class="float-right">المنتج الثالث</h6>
                <small class="text-muted" class="text-right">الوصف</small>
              </div>
              <span class="text-muted" class="float-right">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0"class="float-right">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success" class="float-right">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span class="float-right">إجمالي المستحق
               </span>
              <strong class="float-right">$20</strong>
            </li>
          </ul>
          <!-- Cart -->

          <br><br><br><br><br><br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br><br><br><br><br><br>





<?PHP
include "app/views/footer.php"; 
?>