<div class="bg-white w-full h-full shadow-md rounded-xl p-8">
  <h1 class="text-2xl font-semibold text-dark_active mb-4">Earnings Breakdown</h1>
  <div class="tabs">
    <input type="radio" class="tabs__radio" name="tabs" id="tab1" checked>
    <label for="tab1" class="tabs__label text-xl rounded-full py-2 w-60 bg-light text-normal text-center"> Trees Planted
    </label>
    <div class="tabs__content">
      <div class="flex items-center text-lg gap-4">
        <p>Show</p>
        <select class="rounded-md w-16 border-0 bg-light">
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
        <div class="rounded-md bg-white border flex items-center px-2">
          <input type="text" name="search" id="search" placeholder="Search" class="border-0 text-lg focus:outline-none focus:ring-0">
          <img src="{{ asset('img/Search_Icon.png') }}" alt="" class="h-6 w-6">
        </div>
      </div>
      <table class="content__table">
        <thead>
          <tr>
            <th>Type of Tree</th>
            <th>Price</th>
            <th>Trees Planted</th>
            <th>Earnings Generated</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>White Laawan</td>
            <td>₱159</td>
            <td>25</td>
            <td>₱3,964</td>
          </tr>
          <tr>
            <td>Birch Tree</td>
            <td>₱189</td>
            <td>22</td>
            <td>₱8,232</td>
          </tr>
        </tbody>
      </table>
    </div>
    <input type="radio" class="tabs__radio" name="tabs" id="tab2">
    <label for="tab2" class="tabs__label text-xl rounded-full py-2 w-60 bg-light text-normal text-center">Earnings Over Time
    </label>
    <div class="tabs__content">
      <div class="flex items-center text-lg gap-4">
        <p>Show</p>
        <select class="rounded-md w-16 border-0 bg-light">
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
        <div class="rounded-md bg-white border flex items-center px-2">
          <input type="text" name="search" id="search" placeholder="Search" class="border-0 text-lg focus:outline-none focus:ring-0">
          <img src="{{ asset('img/Search_Icon.png') }}" alt="" class="h-6 w-6">
        </div>
      </div>
      <table class="content__table">
        <thead>
          <tr>
            <th>Year</th>
            <th>Earnings Generated</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2024</td>
            <td>₱700,231,323</td>
          </tr>
          <tr>
            <td>2025</td>
            <td>-₱5,304,123,665</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>