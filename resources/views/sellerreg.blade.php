@extends('layout.layouts')
@section('title', 'Seller Registration')
@section('content')
    <div class="row justify-content-center" style="width:101.1%">
        <div class="col-md-8">
            <form action="" method="post" style="border: 1px solid transparent;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 2px 0px 6px gray;
            margin-top: 15px;
            margin-bottom: 15px;">
                @csrf
                <div class="form-group">
                    <label for="full_name" style="font-weight: bold"> Full Name:</label>
                    <input type="text" id="full_name" name="full_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="father_name" style="font-weight: bold"> Father's Name:</label>
                    <input type="text" id="father_name" name="father_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mother_name" style="font-weight: bold"> Mother's Name:</label>
                    <input type="text" id="mother_name" name="mother_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email" style="font-weight: bold"> Email:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mobile" style="font-weight: bold"> Mobile:</label>
                    <input type="text" id="mobile" name="mobile" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alt_mobile" style="font-weight: bold"> Alternative Mobile:</label>
                    <input type="text" id="alt_mobile" name="alt_mobile" class="form-control">
                </div>
                <div class="form-group">
                    <label for="present_address" style="font-weight: bold"> Present Address:</label>
                    <input type="text" id="present_address" name="present_address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="permanent_address" style="font-weight: bold"> Permanent Address:</label>
                    <input type="text" id="permanent_address" name="permanent_address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bank_name" style="font-weight: bold"> Bank Name:</label>
                    <input type="text" id="bank_name" name="bank_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="account_number" style="font-weight: bold"> Account Number:</label>
                    <input type="text" id="account_number" name="account_number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="branch" style="font-weight: bold"> Branch:</label>
                    <input type="text" id="branch" name="branch" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bank_address" style="font-weight: bold"> Bank Address:</label>
                    <input type="text" id="bank_address" name="bank_address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="swift_code" style="font-weight: bold"> Swift Code:</label>
                    <input type="text" id="swift_code" name="swift_code" class="form-control">
                </div>
                <div class="form-group">
                    <label for="website_address" style="font-weight: bold"> Website Address:</label>
                    <input type="text" id="webste_address" name="website_address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bkash" style="font-weight: bold"> Bkash:</label>
                    <input type="text" id="bkash" name="bkash" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nagad" style="font-weight: bold"> Nagad:</label>
                    <input type="text" id="nagad" name="nagad" class="form-control">
                </div>
                <div class="form-group">
                    <label for="rocket" style="font-weight: bold"> Rocket:</label>
                    <input type="text" id="rocket" name="rocket" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sure_cash" style="font-weight: bold"> Sure Cash:</label>
                    <input type="text" id="sure_cash" name="sure_cash" class="form-control">
                </div>
                <div class="form-group">
                    <label for="whatsapp" style="font-weight: bold"> Whatsapp Number:</label>
                    <input type="text" id="whatsapp" name="whatsapp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="telegram" style="font-weight: bold"> Telegram Number:</label>
                    <input type="text" id="telegram" name="telegram" class="form-control">
                </div>
                <div class="form-group">
                    <label for="viber" style="font-weight: bold"> Viber Number:</label>
                    <input type="text" id="viber" name="viber" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nid" style="font-weight: bold"> NID:</label>
                    <input type="text" id="nid" name="nid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="passport" style="font-weight: bold"> Passport Number:</label>
                    <input type="text" id="passport" name="passport" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook" style="font-weight: bold"> Facebook ID:</label>
                    <input type="text" id="facebook" name="facebook" class="form-control">
                </div>
                <div class="form-group">
                    <label for="linkedin" style="font-weight: bold"> Linkedin:</label>
                    <input type="text" id="linkedin" name="linkedin" class="form-control">
                </div>
                <div class="form-group">
                    <label for="skype" style="font-weight: bold"> Skype ID:</label>
                    <input type="text" id="skype" name="skype" class="form-control">
                </div>
            </form>
            <div class="info">
                <h4 style="color:red">*To become a seller Please Contct With US Through Email/Phone</h4>
                <h5> <strong>Email:</strong> xyz@x.com</h5>
                <h5> <strong>Phone:</strong> 01xxxxxxxxx</h5>
            </div>
        </div>
    </div>
@endsection