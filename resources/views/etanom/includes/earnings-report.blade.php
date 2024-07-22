<div class="bg-white w-full h-full shadow-md rounded-xl p-8">
  <div class="flex justify-between">
    <h1 class="text-2xl font-semibold text-dark_active">Earnings Report</h1>
    <div class="rounded-md bg-white border flex items-center px-2">
      <input type="text" name="search" id="search" placeholder="Filter by month" class="border-0 text-lg focus:outline-none focus:ring-0 w-64">
      <img src="{{ asset('img/Filter.png') }}" alt="" class="h-6 w-6">
    </div>
  </div>
  <div class="grid grid-cols-3 mt-4 text-lg pr-6">
    <div class="pr-6 pl-2">
      <div class="pb-4 mb-4 border-b border-neutral-300">
        <h1 class="text-4xl font-bold mb-4">₱60,230</h1>
        <div class="flex items-center gap-2">
          <img src="{{ asset('img/earning-sm.png') }}" alt="" class="w-auto h-7">
          <p class="text-xl">Recent Earnings</p>
        </div>
        <p class="text-neutral-500 tracking-tighter">for the month of June</p>
      </div>
      <div>
        <div class="p-4 rounded-lg border border-light_active mb-4">
          <div class="flex gap-4">
            <img src="{{ asset('img/wallet-sm.png') }}" alt="" class="w-auto h-6">
            <p class="text-xl">Total Earnings</p>
          </div>
          <p class="text-4xl font-semibold mt-2">₱17,347</p>
        </div>
        <div class="p-4 rounded-lg border border-light_active mb-4">
          <div class="flex gap-4">
            <img src="{{ asset('img/balance-sm.png') }}" alt="" class="w-auto h-6">
            <p class="text-xl">Balance</p>
          </div>
          <p class="text-4xl font-semibold mt-2">₱69,347</p>
        </div>
        <button class="text-xl rounded-lg px-6 py-3 w-full justify-center bg-dark_active text-white flex items-center gap-4">
          <img src="{{ asset('img/withdraw-sm.png') }}" alt="" class="w-auto h-5">Withdraw</button>
      </div>
    </div>
    <div class="col-span-2 h-full">
      <canvas id="myChart" class="h-full"></canvas>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  // Create a gradient for the bars
  const gradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 400);
  gradient.addColorStop(0, '#2E6229');
  gradient.addColorStop(0.75, '#183315');
  gradient.addColorStop(1, '#183939');

  // Custom plugin to draw background color
  const backgroundColorPlugin = {
    id: 'customCanvasBackgroundColor',
    beforeDraw: (chart) => {
      const ctx = chart.ctx;
      const chartArea = chart.chartArea;
      ctx.save();
      ctx.fillStyle = '#F9F9F9';
      ctx.fillRect(chartArea.left, chartArea.top, chartArea.right - chartArea.left, chartArea.bottom - chartArea.top);
      ctx.restore();
    }
  };

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June'],
      datasets: [{
        data: [1756, 600, 920, 1622, 200, 2022],
        borderWidth: 1,
        backgroundColor: gradient // Gradient color for bars
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false, // Remove legend
        },
        tooltip: {
          enabled: true,
          backgroundColor: 'rgba(0,0,0,0.8)', // Background color of the tooltip
          titleFont: {
            size: 18 // Larger font size for the title
          },
          bodyFont: {
            size: 16 // Larger font size for the body
          },
          padding: 10 // Padding around the tooltip content
        },
        customCanvasBackgroundColor: true // Enable custom background plugin
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            display: false, // Remove grid lines
          },
          ticks: {
            color: 'black', // Font color for y-axis labels
            font: {
              size: 18 // Increase font size
            }
          },
          border: {
            display: false // Remove y-axis border
          }
        },
        x: {
          grid: {
            display: false, // Remove grid lines
          },
          ticks: {
            color: 'black', // Font color for x-axis labels
            font: {
              size: 16 // Increase font size
            }
          },
          border: {
            display: true,
            color: '#4DA444', // Border color
            width: 2,
            drawOnChartArea: true,
            drawTicks: false,
            drawBorder: true,
            drawBorderOnTop: false
          }
        }
      },
      layout: {
        padding: {
          bottom: 10, // Space to see the border
        }
      }
    },
    plugins: [backgroundColorPlugin]
  });
</script>