@extends('layouts.main')
@section('content')
<style>
  #book {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
</style>
    @php
        $transactions = DB::table('payments')->get();
    @endphp
    @if (1 !== 'paid')
        <div class="py-12" id="checker">
            <h2 class="text-2xl font-bold">Let Us Get You Started</h2>
            <div class="mt-8 max-w-md">
                <form method="post" action="" >
                    <div class="grid grid-cols-1 gap-6">
                        <label class="block">
                            <span class="text-gray-700">Phone Number</span>
                            <input type="text" id="phone"
                                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                                placeholder="" />
                        </label>
                    </div>
                    <div class="grid-cols-1 gap-6 hidden" id="amount-grip">
                        <small>One Time Payment To Support Our Work</small>
                        <label class="block">
                            <span class="text-gray-700">Amount(20KES)</span>
                            <input type="text" id="amount" value="20" readonly
                                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                                placeholder="" />
                        </label>
                    </div>


                    <button type="button" id="usercontrol" onclick="storeUser()"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">
                        start reading
                    </button>

                   
                <button data-modal-target="defaultModal" id="makepayment" data-modal-toggle="defaultModal" 
                class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" 
                type="button">
                    Make Payments
                  </button>
                </form>
            </div>
        </div>
    @endif
    <section class="backdrop-blur-xl bg-sky-100 px-6">

        <div id="book" class="blur-2xl" >
            {!! nl2br($data->content) !!}
        </div>
    </section>
    <script>
        function storeUser() {



            var input = document.getElementById("phone");
            var phone = input.value;

            if (checkUser(phone)) {

                //check if paid

                var res = checkPayments(phone);

                ///console.log(res);

              

            }
            if (checkUser(phone) == null) {

                console.log(localStorage);
                alert(storeData(phone));
            }


        }

        function checkUser(phone) {

            // Get saved data from localStorage

            return (localStorage.phone);

        }

        function storeData(phone) {
            // Save data to localStorage
            var s = localStorage.setItem('phone', JSON.stringify(phone));
            return s;
        }

        function checkPayments(phone) {

            $.ajax({
                url: "/api/checkpayment",
                type: "POST",
                data: {
                    phone: phone,
                },
                success: function(response) {
                    //console.log(response);
                    if (response) {
                        console.log(response);

                        takeAction(response);


                    }
                },
            });

        }
        // take action using api response
        function takeAction(res) {

            switch (res) {
                case "paid":
                      // Remove the oldClass and add newClass to open the book
                          $('#book').removeClass('blur-2xl').addClass('newClass');
                          $('#checker').hide();
                    break;

                case "notpaid":
                       //show payment card 
                        $('#amount-grip').show();
                        //show btn
                        $('#makepayment').show();
                       //hide other btn
                        $('#usercontrol').hide();
                        
                    break;
                case "error":
                      //show payment card
                       $('#amount-grip').show();
                       //show btn
                       $('#makepayment').show();
                       //hide other btn
                       $('#usercontrol').hide();
                     
                    break;

                default:
                    break;
            }

        }
    </script>
@endsection
