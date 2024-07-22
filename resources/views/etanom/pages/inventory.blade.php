@extends('etanom.layouts.dashboard')
@section('content')
<section class="h-full flex-grow flex flex-col py-8 pl-72 pr-8 mt-20">
  <h1 class="text-3xl font-semibold text-normal pb-4 border-b mb-8">Trees</h1>
  <div class="w-full bg-white py-4">
    <div class="flex items-center text-lg gap-4 mx-10">
      <p>Show</p>
      <select class="rounded-md w-20 border-0 bg-light">
        <?php
        for ($i = 1; $i <= 100; $i++) {
          $selected = ($i == 5) ? 'selected' : '';
        ?>
          <option value="<?php echo $i; ?>" <?php echo $selected; ?>><?php echo $i; ?></option>
        <?php
        }
        ?>
      </select>
      <p>entries</p>
      <div class="flex items-center w-full justify-center">
        <input type="text" name="search" id="search" placeholder="Search" class="text-input w-full text-lg font-poppins h-12">
        <img src="{{ asset('img/Search_Icon.png') }}" alt="" class="h-6 w-6 absolute r-10">
      </div>
      <button onclick="showAddModal()" class="text-xl rounded-lg px-6 py-3 justify-center bg-dark_active text-white flex items-center gap-4 w-96 font-semibold">+ Add Available Trees</button>
    </div>
  </div>
  <table class="inv__content__table">
    <thead>
      <tr>
        <th>SKU</th>
        <th>TYPE</th>
        <th>PRICE</th>
        <th>STOCK</th>
        <th>DATE ADDDED</th>
        <th>SUPPLIER</th>
        <th>LAST UPDATED</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>WTLW12781</td>
        <td>
          <div class="flex gap-4 items-center">
            <img src="{{ asset('img/w-lawaan.png') }}" alt="" class="w-auto h-28">
            <p>White Lawaan</p>
          </div>
        </td>
        <td>₱159</td>
        <td>1,023</td>
        <td>2022-12-12</td>
        <td>Bayola Lumber Ind.</td>
        <td>2024-10-24</td>
        <td>
          <div class="flex justify-around">
            <a href="">
              <img src="{{ asset('img/edit-tree.png') }}" alt="">
            </a>
            <a href="">
              <img src="{{ asset('img/trash-tree.png') }}" alt="">
            </a>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>
</section>

<div id="addModal" class="fixed top-0 left-0 bg-black bg-opacity-40 w-screen h-screen justify-center items-center font-poppins hidden opacity-0">
  <div class="m-0 flex flex-col items-center bg-white rounded-2xl h-[630px] w-[730px]">
    <div class="flex justify-between items-center w-full border-b px-8 pt-6 py-4">
      <h1 class="text-3xl font-semibold text-normal">Add Available Tree</h1>
      <button onclick="hideAddModal()" class="h-10 w-10 rounded-full bg-neutral-200"><i class="fa-solid fa-x"></i></button>
    </div>
    <div class="w-full px-8 py-4 flex flex-col items-center">
      <div class="flex flex-col justify-self-start w-full">
        <label for="tree" class="font-poppins font-semibold my-1 text-lg">TYPE</label>
        <select name="cars" id="cars" class="styled-input text-input h-12 w-full text-lg font-poppins mb-4 border-[#EDF6EC]">
          <option disabled selected value class="text-neutral-500">Choose a tree </option>
          <option value="White Lawaan">White Lawaan</option>
          <option value="Birch Tree">Birch Tree</option>
          <option value="Bear Brand">Bear Brand</option>
          <option value="Roel Bayola">Roel Bayola</option>
        </select>
        <div class="font-poppins font-semibold my-1 text-lg">DESCRIPTION</div>
        <input class="styled-input text-input h-12 w-full text-lg font-poppins mb-4 border-[#EDF6EC]" placeholder="Bayola" type="text" required>
        <div class="font-poppins font-semibold my-1 text-lg">LOCATION</div>
        <input class="styled-input text-input h-12 w-full text-lg font-poppins mb-4 border-[#EDF6EC]" placeholder="is" type="text" required>
        <div class="flex justify-between gap-8 mb-4">
          <div class="w-full">
            <div class="font-poppins font-semibold my-2 text-lg">PRICE</div>
            <input class="styled-input text-input h-12 w-full text-lg font-poppins border-[#EDF6EC]" placeholder="James Ocao" type="text" required>
          </div>
          <div class="w-full">
            <div class="font-poppins font-semibold my-2 text-lg">STOCK</div>
            <select class="styled-input text-input h-12 w-full text-lg font-poppins border-[#EDF6EC]">
              <option disabled selected value="" class="text-neutral-200">Stock number</option>
              <?php
              for ($i = 1; $i <= 100; $i++) {
              ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php
              }
              ?>
            </select>

          </div>
        </div>
      </div>
    </div>
    <div class="flex w-full h-full items-center border-t px-8">
      <button onclick="hideAddModal()" class="w-full bg-accept text-xl font-montserrat h-12 font-semibold text-white rounded-lg hover:bg-accept_hover">CONFIRM</button>
    </div>
  </div>

  <script>
    function showAddModal() {
      let dialog = document.getElementById("addModal");
      dialog.classList.remove("hidden");
      dialog.classList.add("opacity-100");
      dialog.classList.add("flex");
    };

    function hideAddModal() {
      let dialog = document.getElementById("addModal");
      dialog.classList.remove("opacity-100");
      dialog.classList.add("opacity-0");
      dialog.classList.remove("flex");
      dialog.classList.add("hidden");;
    };
  </script>
  @endsection