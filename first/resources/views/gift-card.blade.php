
    <div class="breadcumb-wrapper" data-bg-src=" {{ asset('img/gift/gift.jpg') }}"
        style="background-image:url({{ asset('img/gift/gift.jpg') }});">
        <div class="container-fluid z-index-common p-0">
            <div class="breadcumb-content">
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu m-0">
                        <li><a href="index.php">Home</a></li>
                        <li>Gift Cards</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-0 space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">BUY & SEND GIFT CARDS</h2>
            </div>
            <div class="container border p-lg-5">
                <div class="row text-center">
                    <h5>Select One of the Following Option</h5>
                    <ul class="nav product-tab1 mt-4" id="productTab" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" id="description-tab"
                                data-bs-toggle="tab" href="#description" role="tab" aria-controls="description"
                                aria-selected="true">Gift an Amount</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="reviews-tab"
                                data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                aria-selected="false">Gift a Service</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="hair-care-tab"
                                data-bs-toggle="tab" href="#hair-care" role="tab" aria-controls="reviews"
                                aria-selected="false">Gift a Product</a></li>
                    </ul>
                    <div class="tab-content mt-4 mb-0" id="productTabContent">
                        <div class="tab-pane fade active show" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Sender’s First Name"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Sender’s Last Name"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Sender’s Email"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Enter Amount"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Recipient’s Name"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Recipient’s Email"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group"><textarea name="" id="" cols="30" rows="10"
                                                placeholder="Sender's Message"></textarea></div>
                                    </div>
                                    <div><button type="submit" class="vs-btn">Confirm & Place Order</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group"><select name="subject" id="subject">
                                                <option value="" selected="selected" disabled="disabled" hidden="">
                                                    Select Service Type</option>
                                                <option value="Skin Care">Skin Care</option>
                                                <option value="Beauty Makeup">Beauty Makeup</option>
                                                <option value="Body Massage">Body Massage</option>
                                                <option value="Skin Checkup">Skin Checkup</option>
                                                <option value="Others">Others</option>
                                            </select></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"><select name="subject" id="subject">
                                                <option value="" selected="selected" disabled="disabled" hidden="">
                                                    Subject*</option>
                                                <option value="Skin Care">Select Location</option>
                                                <option value="Beauty Makeup">Beauty Makeup</option>
                                                <option value="Body Massage">Body Massage</option>
                                                <option value="Skin Checkup">Skin Checkup</option>
                                                <option value="Others">Others</option>
                                            </select></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"><select name="subject" id="subject">
                                                <option value="" selected="selected" disabled="disabled" hidden="">
                                                    Select Category</option>
                                                <option value="Skin Care">Skin Care</option>
                                                <option value="Beauty Makeup">Beauty Makeup</option>
                                                <option value="Body Massage">Body Massage</option>
                                                <option value="Skin Checkup">Skin Checkup</option>
                                                <option value="Others">Others</option>
                                            </select></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"><select name="subject" id="subject">
                                                <option value="" selected="selected" disabled="disabled" hidden="">
                                                    Select Service</option>
                                                <option value="Skin Care">Skin Care</option>
                                                <option value="Beauty Makeup">Beauty Makeup</option>
                                                <option value="Body Massage">Body Massage</option>
                                                <option value="Skin Checkup">Skin Checkup</option>
                                                <option value="Others">Others</option>
                                            </select></div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="d-lg-flex align-items-center justify-content-between">
                                        <div class="form-check p-0">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label m-0" for="defaultCheck1">
                                                120 mins - ₹ 6100
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                            <label class="form-check-label m-0" for="defaultCheck2">
                                                90 mins - ₹ 3890
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                            <label class="form-check-label m-0" for="defaultCheck3">
                                                120 mins - ₹ 4990
                                            </label>
                                          </div>
                                          <div><button type="submit" class="vs-btn">Total : ₹ 9990</button></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Sender’s First Name"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Sender’s Last Name"></div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Sender’s Email"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Recipient’s Name"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" name="name" id="name"
                                                placeholder="Recipient’s Email"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group"><textarea name="" id="" cols="30" rows="10"
                                                placeholder="Sender's Message"></textarea></div>
                                    </div>
                                    <div><button type="submit" class="vs-btn">Confirm & Place Order</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="hair-care" role="tabpanel" aria-labelledby="hair-care-tab">
                            <p>To gift one of our products, simply access the online shop and choose the item you wish to gift. During the checkout process, you will have the option to designate it as a gift. At this stage you can enter the details for the recipient and leave a personalised message.</p>
                            <div><button type="submit" class="vs-btn">Shop Now</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space pb-0">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="title-area mb-0">
                        <h2 class="h2 mt-n1">FREQUENTLY ASKED QUESTIONS</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-60 align-items-center mt-4">
                <div class="col-xl-12">
                    <div class="accordion accordion-style1" id="faqVersion3">
                        <div class="accordion-item active">
                            <div class="accordion-header" id="headingOne"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">How long is my Myrah Gift Card
                                    valid for?</button></div>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#faqVersion3">
                                <div class="accordion-body">
                                    <p>When gifting an amount, a Myrah Gift Card can be used to purchase any products or
                                        services. When gifting a service, a Myrah Gift Card can only be used to purchase
                                        services. Myrah Gift Cards cannot be used to purchase Myrah Memberships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">What can I use my Myrah Gift Card
                                    to purchase?</button></div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqVersion3">
                                <div class="accordion-body">
                                    <p>When gifting an amount, a Myrah Gift Card can be used to purchase any products or
                                        services. When gifting a service, a Myrah Gift Card can only be used to purchase
                                        services. Myrah Gift Cards cannot be used to purchase Myrah Memberships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">Where Can I use my Myrah Gift
                                    Card?</button></div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqVersion3">
                                <div class="accordion-body">
                                    <p>When gifting an amount, a Myrah Gift Card can be used to purchase any products or
                                        services. When gifting a service, a Myrah Gift Card can only be used to purchase
                                        services. Myrah Gift Cards cannot be used to purchase Myrah Memberships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">When can I use my Myrah Gift
                                    Card?</button></div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqVersion3">
                                <div class="accordion-body">
                                    <p>When gifting an amount, a Myrah Gift Card can be used to purchase any products or
                                        services. When gifting a service, a Myrah Gift Card can only be used to purchase
                                        services. Myrah Gift Cards cannot be used to purchase Myrah Memberships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFive"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">How do I book an appointment once
                                    I have purchased a Myrah Gift Card?</button></div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faqVersion3">
                                <div class="accordion-body">
                                    <p>When gifting an amount, a Myrah Gift Card can be used to purchase any products or
                                        services. When gifting a service, a Myrah Gift Card can only be used to purchase
                                        services. Myrah Gift Cards cannot be used to purchase Myrah Memberships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingSix"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">What is the cancellation policy
                                    for services booked with a Myrah Gift Card?</button></div>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#faqVersion3">
                                <div class="accordion-body">
                                    <p>When gifting an amount, a Myrah Gift Card can be used to purchase any products or
                                        services. When gifting a service, a Myrah Gift Card can only be used to purchase
                                        services. Myrah Gift Cards cannot be used to purchase Myrah Memberships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingSeven"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">How long will it take to receive
                                    my Myrah Gift Card once I have purchased it?</button></div>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#faqVersion3">
                                <div class="accordion-body">
                                    <p>When gifting an amount, a Myrah Gift Card can be used to purchase any products or
                                        services. When gifting a service, a Myrah Gift Card can only be used to purchase
                                        services. Myrah Gift Cards cannot be used to purchase Myrah Memberships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingEight"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">Do I have to use the entire
                                    value
                                    of my Myrah Gift Card at once?</button></div>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#faqVersion3">
                                <div class="accordion-body">
                                    <p>When gifting an amount, a Myrah Gift Card can be used to purchase any products or
                                        services. When gifting a service, a Myrah Gift Card can only be used to purchase
                                        services. Myrah Gift Cards cannot be used to purchase Myrah Memberships.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p>Terms & Conditions : All Myrah Gift Cards are non-refundable and cannot be redeemed for cash. All
                        customers must adhere to Myrah’s Spa
                        Etiquette. The purchase of a Myrah Gift Card constitutes acceptance of these terms and
                        conditions.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h4>NOT SURE WHICH MEMBERSHIP IS RIGHT FOR YOU?</h4>
                    <p>Our team is here to assist you! Don’t hesitate to contact us for assistance or for any more
                        questions that you may have.</p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <button type="submit" class="vs-btn">Enquire Now</button>
                </div>
            </div>
        </div>
    </section>