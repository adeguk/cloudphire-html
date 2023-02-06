<?php
$extraCss = [
  '<link href="https://cdn.rankon.co.uk/css/filter.css" rel="stylesheet">'
];
include_once('inc/_header.php');
?>
<!-- ***** BANNER ***** -->
<div class="top-header item7 overlay scrollme">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="wrapper animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="1" data-translatey="-50">
          <h1 class="heading">Cart</h1>
          <h3 class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** KNOWLEDGEBASE ***** -->
<section class="config cd-main-content pb-80 blog sec-bg2 motpath notoppadding bg-seccolorstyle">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8 pt-80">
        <div id="sidebar_content" class="wrap-blog">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="wrapper targetDiv sec-grad-white-to-green noshadow bg-colorstyle">
                <h1 class="mergecolor">Review & Checkout</h1>
                <p class="mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <div class="row">
                  <div class="col-md-12 pt-4">
                    <div class="table-responsive-lg">
                      <table class="table compare">
                        <thead>
                          <tr class="seccolor">
                            <td>Product/Options</td>
                            <td>Qty</td>
                            <td>Price/Cycle</td>
                            <td>Edit</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="seccolor">
                            <td>
                              <div class="badge bg-pink">Save 15%</div> Business VPS Linux
                            </td>
                            <td><input type="number" value="1" class="form-control"></td>
                            <td><span class="ltgh">$12.30</span> <b class="c-green">$9.99</b></td>
                            <td>
                              <a href="configurator.php" class="me-2 c-pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit your product"><i class="fas fa-cog"></i></a>
                              <a href="" data-bs-toggle="modal" data-bs-target="#myModal"><i class="far fa-trash-alt c-grey seccolor"></i></a>
                            </td>
                          </tr>
                          <tr class="seccolor">
                            <td>yourperfectdomain.com</td>
                            <td><input type="number" value="1" class="form-control"></td>
                            <td><span class="">$16.00</span></td>
                            <td>
                              <a href="configurator.php" class="me-2 c-pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit your product"><i class="fas fa-cog"></i></a>
                              <a href="" data-bs-toggle="modal" data-bs-target="#myModal"><i class="far fa-trash-alt c-grey seccolor"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-12 pt-4">
                    <div class="cd-filter-block">
                      <h4 class="seccolor">Payment Method</h4>
                      <div class="radio-group radios-filter cd-filter-content list">
                        <div class="table-responsive-sm">
                          <table class="table compare min">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="badge bg-pink me-1">Select</div><span class="seccolor"> Payments Methods</span>
                                </td>
                                <td>
                                  <div class="cd-select">
                                    <select class="select-filter seccolor">
                                      <option value="all">Select Payment Method</option>
                                      <option value=".data1">Pay by Bank Transfer</option>
                                      <option value=".data2">Pay with Paypal</option>
                                      <option value=".data3">Pay by Check</option>
                                    </select>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="badge bg-grey me-1">Promo</div> <span class="seccolor">Promocode</span>
                                </td>
                                <td>
                                  <input type="text" name="promocode" placeholder="Put your promocode here" required="">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="badge bg-grey me-1">Legal</div>
                                  <a class="golink " href="legal.php" target="_blank">Terms (GDPR)</a>
                                </td>
                                <td>
                                  <label class="label-form float-end mb-0"></label>
                                  <div class="my-3">
                                    <input class="filter" value="" type="checkbox" id="checkbox1">
                                    <label class="checkbox-label seccolor" for="checkbox1">Agree with terms and conditions?</label>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar -->
      <div class="col-md-12 col-lg-4">
        <aside id="sidebar" class="mt-80 sidebar sec-bg1 bg-colorstyle noshadow">
          <div class="ordersummary mt-0 mb-5">
            <h4 class="mergecolor">Order Summary</h4>
            <div class="table-responsive-lg">
              <table class="table">
                <tbody>
                  <tr class="seccolor">
                    <td>
                      <div class="title-table">Subtotal</div>
                    </td>
                    <td>$25.99 USD</td>
                  </tr>
                  <tr class="seccolor">
                    <td>
                      <div class="title-table">Cycle</div>
                    </td>
                    <td>$9.99 USD Montly <br> $16.00 USD Annually</td>
                  </tr>
                  <tr class="seccolor">
                    <td>
                      <div class="title-table">Total Amount</div>
                    </td>
                    <td>
                      <h6><b>$25.99 USD</b></h6>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <a href="checkout.php" class="btn btn-default-yellow-fill mb-3">Checkout <i class="fas fa-arrow-alt-circle-right"></i></a>
          <a href="index.php" class="btn btn-default-fill mb-3">Continue Shopping</a>
        </aside>
      </div>
    </div>
  </div>
</section>
<!-- ***** HELP ***** -->
<section class="services help pt-4 pb-80 bg-seccolorstyle">
  <div class="container">
    <div class="service-wrap">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-colorstyle noshadow">
            <a href="javascript:void(Tawk_API.toggle())" class="help-item">
              <div class="img">
                <img class="svg ico" src="assets/fonts/svg/livechat.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Live Chat</div>
                <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-colorstyle noshadow">
            <a href="contact.php" class="help-item">
              <div class="img">
                <img class="svg ico" src="assets/fonts/svg/emailopen.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Send Ticket</div>
                <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-colorstyle noshadow">
            <a href="knowledgebase-list.php" class="help-item">
              <div class="img">
                <img class="svg ico" src="assets/fonts/svg/book.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Knowledge base</div>
                <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** SMALL MODAL ***** -->
<div class="modal fade" id="myModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Remove Item!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="mb-0">Are you sure you want to <b class="text-danger">remove</b> this item from your cart?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default-fill me-1" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-sm btn-default-purple-fill" data-bs-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>
<?php
$extraJs = [];
include_once('inc/_footer.php');
?>