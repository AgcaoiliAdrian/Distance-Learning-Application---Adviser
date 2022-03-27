<?php include './components/sidebar.php'; ?>

<div class="main">
   <div class="">
      <div class="w-11/12 lg:w-4/6 mx-auto py-10">
         <div class="bg-gray-200 h-1 flex items-center justify-between">
            <div class="w-1/3 bg-green-600 h-1 flex items-center">
               <div
                  class="bg-green-600 h-6 w-6 rounded-full shadow flex items-center justify-center"
               >
                  <img
                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/thin_with_steps-svg1.svg"
                     alt="check"
                  />
               </div>
            </div>
            <div
               class="w-1/3 flex justify-between bg-green-600 h-1 items-center relative"
            >
               <div class="absolute right-0 -mr-2">
                  <div
                     class="relative bg-white shadow-lg px-2 py-1 rounded mt-16 -mr-12"
                  >
                     <svg
                        class="absolute top-0 -mt-1 w-full right-0 left-0"
                        width="16px"
                        height="8px"
                        viewBox="0 0 16 8"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                     ></svg>
                     <p
                        tabindex="0"
                        class="focus:outline-none text-green-700 text-xs font-bold"
                     >
                        Step 3: Application
                     </p>
                  </div>
               </div>

               <!-- FIRST -->
               <div
                  class="bg-green-600 h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2"
               >
                  <img
                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/thin_with_steps-svg1.svg"
                     alt="check"
                  />
               </div>

               <!-- THREE -->
               <div
                  class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative"
               >
                  <div class="h-3 w-3 bg-green-600 rounded-full"></div>
               </div>
            </div>
            <div class="w-1/3 flex justify-end">
               <div class="bg-white h-6 w-6 rounded-full shadow"></div>
            </div>
         </div>
      </div>

      <div class="mx-auto mt-16 shadow p-16 bg-gray-50 rounded">
         <div
            class="uppercase mb-16 text-2xl font-semibold text-gray-700 text-center"
         >
            Application Form
         </div>
         <div class="">
            <form action="../server/insert_answers.php" method="POST">
               <ol style="list-style-type: number">
                  <li class="mb-10">
                     Why do you want to apply for a master's program for
                     Distance Learning at this university? <br />

                     <textarea
                        name="answer1"
                        id="text-area"
                        cols="115"
                        rows="3"
                        class="rounded border border-gray-200 p-4 bg-gray-200"
                        placeholder="Answer here"
                        required
                     ></textarea>
                  </li>

                  <li class="mb-10">
                     Are you satisfied with the Technology and Software you are
                     going to use for Remote Learning? and why? <br />

                     <textarea
                        name="answer2"
                        id="text-area"
                        cols="115"
                        rows="3"
                        class="rounded border border-gray-200 p-4 bg-gray-200"
                        placeholder="Answer here"
                        required
                     ></textarea>
                  </li>

                  <li class="mb-10">
                     Is online education as effective as face-to-face
                     instruction? and why?
                     <br />

                     <textarea
                        name="answer3"
                        id="text-area"
                        cols="115"
                        rows="3"
                        class="rounded border border-gray-200 p-4 bg-gray-200"
                        placeholder="Answer here"
                        required
                     ></textarea>
                  </li>

                  <li class="mb-10">
                     How well could you manage your time while learning
                     remotely?
                     <br />

                     <textarea
                        name="answer4"
                        id="text-area"
                        cols="115"
                        rows="3"
                        class="rounded border border-gray-200 p-4 bg-gray-200"
                        placeholder="Answer here"
                        required
                     ></textarea>
                  </li>

                  <li class="mb-10">
                     How difficult or easy for you to connect to the internet to
                     access your schoolwork? <br />

                     <textarea
                        name="answer5"
                        id="text-area"
                        cols="115"
                        rows="3"
                        class="rounded border border-gray-200 p-4 bg-gray-200"
                        placeholder="Answer here"
                        required
                     ></textarea>
                  </li>
               </ol>

               <label class="block mb-2 text-md font-medium text-gray-700"
                  >PROGRAM YOU WANT TO APPLY:</label
               >
               <select
                  class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-3"
            
                  name="program"
                  required
               >
                  <option value="">Please select</option>
                  <option value="Nursing">Nursing</option>
                  <option value="Education">Education</option>
               </select>

               <input
                  type="submit"
                  value="SUBMIT"
                  class="float-right bg-green-600 text-white px-10 py-2 mb-16 rounded-full hover:bg-green-700 hover:px-16 hover:cursor-pointer"
               />
            </form>
         </div>
      </div>
   </div>
</div>
