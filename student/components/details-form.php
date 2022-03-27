<div class="container mx-auto">
   <div class="w-11/12 lg:w-4/6 mx-auto py-10">
      <div class="bg-gray-200 h-1 flex items-center justify-between">
         <div class="w-1/3 bg-green-600 h-1 flex items-center">
            <div
               class="bg-green-600 h-6 w-6 rounded-full shadow flex items-center justify-center"
            >
               <img
                  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/thin_with_steps-svg1.svg"
                  alt="check"
                  required
               />
            </div>
         </div>

         <div class="w-1/3 flex justify-start h-1 items-center relative">
            <div class="absolute left-0 -mr-2">
               <div class="inherit bg-white shadow-lg px-3 py-2 rounded mt-16">
                  <svg
                     class="absolute top-0 -mt-1 w-full right-0 left-0"
                     width="30px"
                     height="10px"
                     viewBox="0 0 16 8"
                     version="1.1"
                     xmlns="http://www.w3.org/2000/svg"
                  ></svg>
                  <p
                     tabindex="0"
                     class="focus:outline-none text-green-700 text-xs font-bold"
                  >
                     Step 2: Personal Info
                  </p>
               </div>
            </div>
            <!-- THREE -->
            <div
               class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative"
            >
               <div class="h-3 w-3 bg-green-600 rounded-full"></div>
            </div>
         </div>

         <div class="w-1/6 flex justify-between">
            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
         </div>

         <div class="w-1/5 flex justify-end">
            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
         </div>
      </div>
   </div>

   <div class="mx-auto mt-16 shadow p-16 bg-gray-50 rounded w-3/4">
      <div
         class="uppercase mb-16 text-2xl font-semibold text-gray-700 text-center"
      >
         Personal Details
      </div>

      <?php

  $sql = mysqli_query($con, "Select * from user_details where user_id = $user_id limit 1;");

  while($row = mysqli_fetch_assoc($sql)){  
  
?>

      <form action="../server/insert-details.php" method="POST">
         <div
            class="grid xl:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1"
         >
            <div class="mb-10 grid-col xl:mr-16 md:mr-6">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >First name</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="first_name"
                  value="<?php echo $row['first_name']; ?>"
                  disabled
               />
            </div>
            <div class="mb-10 grid-col">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Last Name</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="last_name"
                  value="<?php echo $row['last_name']; ?>"
                  disabled
               />
            </div>
         </div>

         <div class="grid xl:grid-cols-2">
            <div class="col-span-1 xl:mr-10 md:mr-0 mb-10">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Date of birth</label
               >
               <input
                  type="date"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="birthdate"
                  required
               />
            </div>

            <div class="cols-span-2">
               <div class="grid grid-cols-2">
                  <div class="col-span-1">
                     <div class="xl:mr-5 md:mr-6 lg:mr-6">
                        <label
                           class="block mb-2 text-sm font-medium text-gray-700"
                           >Gender</label
                        >
                        <select
                           class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           required
                           name="gender"
                        >
                           <option>Please select</option>
                           <option>Male</option>
                           <option>Female</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-span-1">
                     <div class="col-span-1">
                        <label
                           class="block mb-2 text-sm font-medium text-gray-700"
                           >Civil Status</label
                        >
                        <select
                           class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           required
                           name="civil"
                        >
                           <option>Please select</option>
                           <option>Single</option>
                           <option>Married</option>
                           <option>Widowed</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Contact -->

         <div class="grid xl:grid-cols-2">
            <div class="col-span-1 xl:mr-10 md:mr-0 mb-10">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Alternative Email (or main email)</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="email"
                  placeholder="johndoe@gmail.com"
                  required
                 
               />
            </div>

            <div class="cols-span-2">
               <div class="grid grid-cols-2">
                  <div class="col-span-1">
                     <div class="xl:mr-5 md:mr-6 lg:mr-6">
                        <label
                           class="block mb-2 text-sm font-medium text-gray-700"
                           >Mobile number</label
                        >
                        <input
                           type="tel"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           pattern="{11}[0-9]"
                           placeholder="+639"
                           name="mobile"
                           required
                        />
                     </div>
                  </div>

                  <div class="col-span-1">
                     <div class="col-span-1">
                        <label
                           class="block mb-2 text-sm font-medium text-gray-700"
                           >Telephone (Optional)</label
                        >
                        <input
                           type="text"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           placeholder="+639"
                           name="tel"
                        
                        />
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Address -->

         <div class="font-semibold uppercase text-gray-700 text-sm mb-10">
            Address
         </div>

         <div
            class="grid xl:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 sm:grid-cols-1"
         >
            <div class="mb-10 cols-span-1 xl:mr-10 md:mr-6">
               <label class="block mb-2 text-sm font-medium text-gray-600"
                  >Barangay</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  placeholder="Barangay 1"
                  name="barangay"
                  required
               />
            </div>
            <div class="mb-10 cols-span-1 xl:mr-10 md:mr-6">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >City</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  placeholder="Zamboanga City"
                  name="city"
                  required
               />
            </div>

            <div class="mb-10 cols-span-1">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Country</label
               >
               <input
                  type="text"
                  name="country"
                  list="country"
                  placeholder="Select country"
                  class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  required
               />
               <datalist name="country" id="country">
                  <?php include './components/country-list.php'; ;?>
               </datalist>
            </div>
         </div>

         <!-- School -->
         <div class="font-semibold uppercase text-gray-700 text-sm mb-10">
            School attended
         </div>

         <div
            class="grid xl:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1"
         >
            <div class="mb-10 cols-span-1 xl:mr-10 md:mr-6">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >College / University</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  placeholder="Western Mindanao State University"
                  name="university"
                  required
               />
            </div>

            <div class="mb-10 cols-span-1">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Degree
               </label>
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  placeholder="Bachelor of Science "
                  name="degree"
                  required
               />
               <datalist name="country">
                  <?php include './components/country-list.php'; ?>
               </datalist>
            </div>
         </div>

         <div class="mt-8 mb-10">
            <input
               type="submit"
               value="PROCEED TO APPLICATION >"
               class="float-right bg-blue-600 px-10 py-3 text-white rounded-full hover:cursor-pointer hover:px-16 hover:bg-blue-800 mb-16"
               name="details"
               required
            />
         </div>
      </form>
   </div>

   <?php
  }

  ?>
</div>
