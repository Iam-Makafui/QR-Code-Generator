<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>

      .credit-card {
        max-width: 420px;
        margin-top: 3rem;
      }

      @media only screen and (max-width: 420px)  {
        .credit-card .front {
          font-size: 100%;
          padding: 0 2rem;
          bottom: 2rem !important;
        }
      }
    </style>
  </head>
  <body class="bg-blue-50">
    <div class="m-4">
      <div class="credit-card w-full sm:w-auto shadow-lg mx-auto rounded-xl bg-white">
        <header class="flex flex-col justify-center items-center">
          <div
            class="relative"
          >
          <?php
              if(isset($_SESSION['QR_IMAGE'])){?>
                <img src="assets/img/<?php echo $_SESSION['QR_IMAGE']; ?>" class="w-full h-56" alt="QrImage">
            <?php  }else{

              }
           ?>
          </div>
        </header>
      <form method="post" class="" action="">
        <main class="mt-4 p-4">
          <h1 class="text-xl font-semibold text-gray-700 text-center">Generate QR Code</h1>
            <!------ Data Type Begins Here ----->
            <div class="my-3">
                <label class="pl-1 uppercase font-bold text-xs">Data Type</label>
                <select
                  type="text"
                  class="data_type block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                  name="data_type"
                  id="data_type"
                >
                <option disabled selected>Choose DataType</option>
                <option value="URL">URL</option>
                <option value="EMAIL">EMAIL</option>
                <option value="PHONE">PHONE</option>
                <option value="SMS">SMS</option>
                <option value="TEXT">TEXT</option>
                <option value="CONTACT">CONTACT</option>
              </select>
            </div>
            <!------ Data Type Ends Here ----->
            <!------ Name Begins Here ----->
            <div class="hidden my-3" id="name">
              <label class="pl-1 uppercase font-bold text-xs">Name</label>
              <input
                type="text"
                class="name block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                placeholder="please enter name"
                name="name"
              />
            </div>
            <!------ Name Ends Here ----->
            <!------ URL Begins Here ----->
            <div class="hidden my-3" id="url">
              <label class="pl-1 uppercase font-bold text-xs">URL</label>
              <input
                type="text"
                class="url block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                placeholder="please enter url"
                name="url"
              />
            </div>
            <!------ URL Ends Here ----->
            <!------ Phone Begins Here ----->
            <div class="hidden my-3" id="phone">
              <label class="pl-1 uppercase font-bold text-xs">Phone</label>
              <input
                type="text"
                class="phone block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                placeholder="+233 xx xxx xxxx"
                name="phone"
              />
            </div>
            <!------ Phone Ends Here ----->
            <!------ Email Begins Here ----->
            <div class="hidden my-3" id="email">
              <label class="pl-1 uppercase font-bold text-xs">Email</label>
              <input
                type="email"
                class="email block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                placeholder="example@gmail.com"
                name="email"
              />
            </div>
            <!------ Email Ends Here ----->
            <!------ Address Begins Here ----->
            <div class="hidden my-3" id="address">
              <label class="pl-1 uppercase font-bold text-xs">Address</label>
              <input
                type="text"
                class="address block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                placeholder="please enter address"
                name="address"
              />
            </div>
            <!------ Address Ends Here ----->
            <!------ Email Subject Begins Here ----->
            <div class="hidden my-3" id="email-subject">
              <label class="pl-1 uppercase font-bold text-xs">Email Subject</label>
              <input
                type="text"
                class="email_subject block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                placeholder="please enter subject"
                name="email_subject"
              />
            </div>
            <!------ Email Subject Ends Here ----->
            <!------ Email Message Begins Here ----->
            <div class="hidden my-3" id="email-message">
              <label class="pl-1 uppercase font-bold text-xs">Email Message</label>
              <textarea rows="5" cols="80"
                type="text"
                class="email_message block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                placeholder="write your text here"
                name="email_message"
              />
            </textarea>
            </div>
            <!------ Email Message Ends Here ----->
            <!------ Text Begins Here ----->
            <div class="hidden my-3" id="text">
              <label class="pl-1 uppercase font-bold text-xs">Text</label>
              <textarea name="text" rows="5" cols="80"
                type="text"
                class="text-msg block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                placeholder="write your text here"
              />
            </textarea>
            </div>
            <!------ Text Ends Here ----->
            <!------ Text Begins Here ----->
            <div class="hidden my-3" id="sms-text">
              <label class="pl-1 uppercase font-bold text-xs">SMS Text</label>
              <textarea name="text" rows="5" cols="80"
                type="sms_text"
                class="sms_text block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                placeholder="write your text here"
              />
            </textarea>
            </div>
        </main>
        <div class="mt-6 p-4">
          <button
              type="submit"
              class="button px-4 py-3 bg-blue-500 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-x-75 transition-transform mx-5 flex hover:bg-blue-600"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
            </svg>

              <span class="ml-2">Generate</span>
          </button>
            <button
                type="submit"
                class="hidden loader px-4 py-3 bg-blue-500 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-x-75 transition-transform mx-5 flex hover:bg-blue-600"
            >
              <span class="ml-2">Generating QRCODE</span>
              <img src="assets/gif/loader.gif" class="ml-4 h-8 w-10" alt="loader"/></span>
          </button>
        </div>
    </form>
      </div>
    </div>


    <!---======================== Script For Checking data type & displaying ofrm fields ========================----->
    <script>

        //this for displaying results based on id in the input fields for edit
        $(document).ready(function(){
          //############################  #######################//
              $('#data_type').change(function() {

                  //getting value of the select field
                  var data_type =  $(this).val();

                  switch (data_type) {

                       case 'URL':

                           //showing url input
                           $('#url').show();
                           $('#phone').hide();
                           $('#sms-hide').show();
                           $('#text').hide();
                           $('#address').hide();
                           $('#name').hide();
                           $('#email').hide();
                           $('#email-subject').hide();
                           $('#email-message').hide();
                       break;

                       case 'EMAIL':

                          //showing email input fields
                          $('#url').hide();
                          $('#sms-text').hide();
                          $('#text').hide();
                          $('#address').hide();
                          $('#name').hide();
                          $('#phone').hide();
                          $('#email').show();
                          $('#email-subject').show();
                          $('#email-message').show();

                        break;

                        case 'PHONE':

                           //showing phone input fields
                           $('#phone').show();
                           $('#sms-text').hide();
                           $('#text').hide();
                           $('#address').hide();
                           $('#name').hide();
                           $('#url').hide();
                           $('#email').hide();
                           $('#email-subject').hide();
                           $('#email-message').hide();

                         break;

                         case 'SMS':

                            //showing sms input fields
                            $('#phone').show();
                            $('#sms-text').show();
                            $('#text').hide();
                            $('#address').hide();
                            $('#name').hide();
                            $('#url').hide();
                            $('#email').hide();
                            $('#email-subject').hide();
                            $('#email-message').hide();

                          break;

                          case 'TEXT':

                             //showing text input fields
                             $('#text').show();
                             $('#phone').hide();
                             $('#address').hide();
                             $('#name').hide();
                             $('#sms-text').hide();
                             $('#url').hide();
                             $('#email').hide();
                             $('#email-subject').hide();
                             $('#email-message').hide();
                           break;
                           case 'CONTACT':
                              //showing contact input fields
                              $('#address').show();
                              $('#name').show();
                              $('#phone').show();
                              $('#email').show();
                              $('#text').hide();
                              $('#sms-text').hide();
                              $('#url').hide();
                              $('#email-subject').hide();
                              $('#email-message').hide();
                            break;

                    default:
                      return false;
                  }
                  //alert(data_type);
              });
          });
     </script>
    <!---======================== Script For Checking data type & displaying ofrm fields ========================----->

    <?php include_once 'includes/ajax_queries/post_form_data.php'; ?>
  </body>
</html>
